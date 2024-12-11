@include('header')
<style>
    h1{
        text-align: center;
    }
    .form-group{
        margin: 50px 450px;
    }
    label{
        font-size: 25px;
    }
   input{
       width: 500px;
       height: 30px;
       border-radius: 20px;
   }
   textarea{
       width: 500px;
       height: 100px;
       border-radius: 20px;
   }
   button{
       margin: 0 auto;
       display: block;
       border-radius: 15px;
       width: 300px;
       height: 50px;

   }
</style>
<div class="container">
    <h2 style="text-align: center">Создать новость</h2>
    <form action="{{ route('createnews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Контент</label>
            <textarea name="content" id="content" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="media">Загрузить фото/видео</label>
            <!-- Одно поле для загрузки как фото, так и видео -->
{{--
            <input type="file" name="media" id="media" class="form-control" accept="image/*,video/*">
--}}
            <input type="file" id="media" class="form-control" name="mediafile">
        </div>
        <button type="submit" class="btn btn-primary">Создать новость</button>
    </form>
</div>
@include('footer')
