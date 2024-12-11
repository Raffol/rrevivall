<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        // Получаем все записи из таблицы news
        $news = News::all();
        return view('newsindex', compact('news'));
    }

    public function create()
    {
        return view('createnews');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            /*'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100000', // Валидация медиафайла*/
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = auth()->user()->name;


        // Сохранение изображения, если оно есть
        if ($request->hasFile('mediafile')) {
            return "Hello world!";
            $newName = time() . '.' . $request->mediafile->getClientOriginalExtension();

            $new = $request->file('mediafile');

            $new->move(public_path('img'), $newName);
            //$imagePath = $request->file('media_file')->store('public', 'img');
            $news->media_file = $newName;
            $news->media_path = $newName;
        }
        //$news = News::create($validatedData);
        $news->save();

        return redirect()->route('news.show', $news->id)->with('success', 'Новость успешно добавлена!');
    }
    public function show($id)
    {
        // Получаем новость по её ID
        $newsItem = News::findOrFail($id);
        return view('newsslider', compact('newsItem'));
    }
}
