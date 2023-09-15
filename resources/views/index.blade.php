<x-layout>

    <section aria-label="Newest Photos">

        <div class="carousel" data-carousel>
            <div class="carousel-heading">
                <h1>Welcome to United Limited</h1>
            </div>
            <button class="carousel-button prev" data-carousel-button="prev">
                <i class="fa-solid fa-angle-left"></i>
            </button>
            <button class="carousel-button next" data-carousel-button="next">
                <i class="fa-solid fa-angle-right"></i>
            </button>
            <ul data-slides>
                @foreach ($carousel as $carousel)
                    <li class="slide" data-active>
                        <img src="{{ $carousel->imageSource }}" alt="">
                    </li>
                @endforeach
            </ul>

        </div>
        <div class="imageSelector">
            <ol>
                <li> <input type="radio" id="radio1" checked><span></span></li>
                <li> <input type="radio" id="radio2"><span></span></li>
                <li> <input type="radio" id="radio3"><span></span></li>
            </ol>
        </div>
    </section>

    <div style="height: 50vh; padding-top:100px;">
        <h1 style="text-align:center"></h1>
    </div>

</x-layout>
