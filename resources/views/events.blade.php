<style>
    table{
        border-collapse: collapse
    }
    tr, td{
        padding: 3px;
        border: 1px solid black;
    }
    img{
        height: 500px;
        width: 700px;
    }
</style>
<header>
    @include('header')
</header>

<section>
    <h2 id="ourmero" style="text-align: center; font-size: 50px;">Наши мероприятия</h2>
    <p style="text-align: center; font-size: 30px">Которые проходили за всё время</p>

    @include('imgslider')

    {{--<div style="display: flex; gap: 20px; ">
        <img src="{{asset('img/3I2A0557.jpg')}}" alt="">

        <img src="{{asset('img/3I2A0758.jpg')}}" alt="">

        <img src="{{asset('img/3I2A1587.jpg')}}" alt="">
    </div>--}}
    <br>
    <br>
    <table style="margin: 30px; padding: 20px; font-size: 24px;">
        <tr style="margin-right: 15px">
            <td>Межрегиональный открытый этнофест "III Yбэлэй буряад арадай наадан" ("III Зимние народные бурятские игры")</td>
            <td>Межрегиональный молодёжный этнофест "I Хабарай буряад арадай наадан" ("I Весенние народные бурятские игры")</td>
            <td>Областной культурно-спортивный праздник "Сур-Харбан"</td>
        <tr style="margin-right: 15px">
            <td>Межрегиональный отрытый этнофест "I Летние народные бурятские игры"</td>
            <td>Межрегиональный молодежный этнофест «І Намарай буряад арадай наадан» (І Осенние народные бурятские игры)</td>
            <td>Креативная лаборатория «Прожектор» - Иркутская область</td>
        </tr>
        <tr style="margin-right: 15px">
            <td>Турнир по народной бурятской игре "Шагай Наадан"</td>
            <td>Юбилейный концерт бурятского фольклорного ансамбля "АЯНГА"</td>
            <td>Межрегиональный открытый этнофест «IV Убэлэй буряад арадай наадан» («IV Зимние народные бурятские игры»)</td>
        </tr>
        <tr style="margin-right: 15px">
            <td>Межрегиональный молодёжный этнофест «II Хабарай буряад арадай наадан» (II Весенние народные бурятские игры).</td>
            <td>Организация выставки ИРОО "Возрождение" на Форуме "Сообщество"</td>
            <td>Межрегиональный открытый этнофест «II Нажарай буряад арадай наадан» («II Летние народные бурятские игры»)</td>
        </tr>
    </table>
</section>

    @include('footer')

