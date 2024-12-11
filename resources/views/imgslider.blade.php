<link rel="stylesheet" href="{{asset('/css/imgslider.css')}}">

<div class="imgslider-container">
    <div class="imgslider" style="padding: 40px">
        <div class="imgslide">
            <img src="{{asset('img/3I2A0557.jpg')}}" alt="" style="height: 500px; width: 700px;">
        </div>
        <div class="imgslide">
            <img src="{{asset('img/3I2A0758.jpg')}}" alt="" style="height: 500px; width: 700px;">
        </div>
        <div class="imgslide">
            <img src="{{asset('img/3I2A1587.jpg')}}" alt="" style="height: 500px; width: 700px;">
        </div>
    </div>
    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <button class="next" onclick="nextSlide()">&#10095;</button>
</div>

<script src="{{asset('/js/slider.js')}}" defer></script>
