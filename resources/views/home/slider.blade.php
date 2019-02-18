<section class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($sliders as $slider)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$slider->id}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner relative">
        @foreach ($sliders as $slider)
            <div class="carousel-item active">
                <img class="d-block slider-imgs w-100" src="{{$slider->img}}" alt="First slide"/>
                <div class="slider-img-name">{{$slider->title}}</div>
            </div>
        @endforeach
    </div>
</section>