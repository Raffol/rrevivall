<style>
    img{
        height: 30px;
        cursor: pointer;
        position: relative;
    }

    ul{
        display: flex;
        gap: 15px;
        list-style-type: none;
    }
    footer{
        border-radius: 30px;
    }
</style>

<footer style="display: flex; gap: 550px; background-color: black; padding: 40px; color: white">
    <div >
    <p >&copy; 2024 ИРОО Возрождение. Все права защищены.</p>
        <div style="display: flex; margin-left: 40px;">
            <img style="width: 30px;" src="{{asset('img/icons8-design-64.png')}}" alt="">
    <p style="margin-left: 10px">Дизайн: И.Р.</p>
    </div>
        <div style="display: flex; margin-left: 40px">
            <img style="width: 30px;" src="{{asset('img/icons8-pc-100.png')}}" alt="">
    <p style="margin-left: 10px" >Разработка: Д.Е.</p>
    </div>
    </div>
    <ul style="display: flex; gap: 30px">
    <li>
        <a href="https://vk.com/vozrozhdenie_38" target="_blank">
        <img src="{{asset('img/png-clipart-computer-icons-social-media-youtube-hashtag-font-awesome-social-media-logo-monochrome.png')}}" alt="vk">
        </a>
    </li>
    <li>
        <a href="https://t.me/vozrozhdenie_38" target="_blank">
        <img src="{{asset('img/1461053-middle.png')}}" alt="tg">
        </a>
    </li>
    <li><img src="{{asset('img/6254309-middle.png')}}" alt="viber"></li>
    <li><img src="{{asset('img/scale_1200.png')}}" alt="dzen" about=""></li>
    </ul>
</footer>
