<style>
    .slider-item {
        position: relative;
    }

    .slider-image img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .slider-content {
        position: absolute;
        top: 50%;
        left: 8%;
        transform: translateY(-50%);
        max-width: 500px;
        color: #fff;
        z-index: 2;
    }

    .slider-content h3,
    .slider-content h4,
    .slider-content p {
        color: #fff;
    }
    .slider-two-pagination{
        text-align:center;
    }
</style>
<div class="slider-pagination-2 p-relative">
    <div class="swiper-containers slidertwo-active">
        <div class="swiper-wrapper">

            @foreach($sliders as $slider)
                <div class="swiper-slide slider-item p-relative">

                    <!-- Full Width Image -->
                    <div class="slider-image">
                        @include(Theme::getThemeNamespace('partials.shortcodes.simple-slider.includes.image', compact('slider')))
                    </div>

                    <!-- Overlap Text -->
                    <div class="slider-content">
                        <div class="tpslidertwo__content">

                            @if($subtitle = $slider->getMetaData('subtitle', true))
                                <h4 class="tpslidertwo__sub-title">
                                    {!! BaseHelper::clean($subtitle) !!}
                                </h4>
                            @endif

                            @if($slider->title)
                                <h3 class="tpslidertwo__title mb-10">
                                    {!! BaseHelper::clean($slider->title) !!}
                                </h3>
                            @endif

                            @if($description = $slider->description)
                                <div>{!! BaseHelper::clean($description) !!}</div>
                            @endif

                            @if(($actionLabel = $slider->getMetaData('action_label', true)) && $slider->link)
                                <div class="tpslidertwo__slide-btn mt-20">
                                    <a class="tp-btn banner-animation" href="{{ $slider->link }}">
                                        {{ $actionLabel }}
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

    <div class="slider-two-pagination">
        <div class="slidertwo_pagination"></div>
    </div>
</div>
