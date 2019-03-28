
<section class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner relative">
            @foreach ($sliders as $slider)
            <div class="carousel-item">
                <img class="d-block slider-imgs w-100" src="{{$slider->img}}" alt="First slide"/>
                <div class="slider-img-name">{{$slider->title}}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>