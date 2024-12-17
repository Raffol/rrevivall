<style>
    body{
        text-align: center;
    }
    section{
        padding-top: 90px;
        padding-bottom: 90px;
        margin-left: 70px;
    }
    table{
        text-align: center;
        margin-left: 100px;
    }
    img{
        height: 150px;
    }
    tr, td {
        padding: 3px;
        border: 1px solid black;
        font-size: 25px;
    }
    h2{
        font-size: 30px;
    }
    .hbold{
        font-weight: bold;
    }
</style>
<header>
    @include('header')
</header>

<section>
    <table>
        <thead>
        <h2>Наши организаторы</h2>
        </thead>
        <tr>
            <td><img src="{{asset('img/1731310451.png')}}" alt=""></td>
            <td class="hbold">Хангуева Варвара Кирилловна</td>
            <td>заместитель Председателя организационного комитета</td>
        </tr>

        <tr>
            <td><img src="{{asset('img/1731310451.png')}}" alt=""></td>
            <td class="hbold">Шатаева Олеся Олеговна</td>
            <td>Главный менеджер игровых площадок</td>
        </tr>

        <tr>
            <td><img src="{{asset('img/1731310451.png')}}" alt=""></td>
            <td class="hbold">Ертогаев Логин Эдуардович</td>
            <td>Руководитель ВК Зимних игр</td>
        </tr>

        <tr>
            <td><img src="{{asset('img/1731310451.png')}}" alt=""></td>
            <td class="hbold">Рудаков Игорь Вячеславович</td>
            <td>Руководитель блока информационной работы Зимних игр</td>
        </tr>

        <tr>
            <td><img src="{{asset('img/1731310451.png')}}" alt=""></td>
            <td class="hbold">Иннокеткина Анна Константиновна</td>
            <td>Руководитель культурного блока</td>
        </tr>
    </table>
</section>
<br>
<footer>
    @include('footer')
</footer>
