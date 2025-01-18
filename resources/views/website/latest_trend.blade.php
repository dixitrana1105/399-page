<div _ngcontent-cvn-c11="" class="dv_latest_trends">
    <div _ngcontent-cvn-c11="" class="container">
        {{-- {{dd($data[11]);}} --}}
        <h3 _ngcontent-cvn-c11="" class="dv_latest_trends_head">{{ $data[11]->text_details[0]->header }} </h3>
        <div _ngcontent-cvn-c11="" class="swiper latesttrends">
            <div class="swiper-wrapper">
                @foreach($data[11]->image_details as $index => $image)
                    <div data-swiper-slide-index="{{ $index }}" class="dv_per_staff_col swiper-slide" style="width: 1240px;">
                        <div _ngcontent-cvn-c11="" class="swiper-slide">
                            <div _ngcontent-cvn-c11="" class="slider-image">
                                <img _ngcontent-cvn-c11=""
                                     src="{{ $link_project->site_value . $image->file_path }}" class="w-100 display-none-sm">
                                <img _ngcontent-cvn-c11=""
                                     src="{{ $link_project->site_value . $image->file_path }}" class="w-100 display-block-sm">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div _ngcontent-cvn-c11="" class="latesttrends-controller pb-5">
                <div _ngcontent-cvn-c11="" class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"></div>
                <div _ngcontent-cvn-c11="" class="swiper-button-prev latesttrends-p">
                    <svg _ngcontent-cvn-c11="" width="50" height="50" viewBox="0 0 175 175" fill="none" xmlns="http://www.w3.org/2000/svg" class="z-index-1 rounded-0">
                        <rect _ngcontent-cvn-c11="" width="175" height="175" fill="#666666"></rect>
                        <path _ngcontent-cvn-c11="" d="M25.2322 86.2322C24.2559 87.2085 24.2559 88.7915 25.2322 89.7678L41.1421 105.678C42.1184 106.654 43.7014 106.654 44.6777 105.678C45.654 104.701 45.654 103.118 44.6777 102.142L30.5355 88L44.6777 73.8579C45.654 72.8816 45.654 71.2986 44.6777 70.3223C43.7014 69.346 42.1184 69.346 41.1421 70.3223L25.2322 86.2322ZM149 85.5L27 85.5V90.5L149 90.5V85.5Z" fill="white"></path>
                    </svg>
                </div>
                <div _ngcontent-cvn-c11="" class="swiper-button-next latesttrends-n">
                    <svg _ngcontent-cvn-c11="" width="50" height="50" viewBox="0 0 175 175" fill="none" xmlns="http://www.w3.org/2000/svg" class="z-index-1 rounded-0">
                        <rect _ngcontent-cvn-c11="" width="175" height="175" transform="matrix(-1 0 0 1 175 0)" fill="#666666"></rect>
                        <path _ngcontent-cvn-c11="" d="M149.768 86.2322C150.744 87.2085 150.744 88.7915 149.768 89.7678L133.858 105.678C132.882 106.654 131.299 106.654 130.322 105.678C129.346 104.701 129.346 103.118 130.322 102.142L144.464 88L130.322 73.8579C129.346 72.8816 129.346 71.2986 130.322 70.3223C131.299 69.346 132.882 69.346 133.858 70.3223L149.768 86.2322ZM26 85.5L148 85.5V90.5L26 90.5V85.5Z" fill="white"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.latesttrends', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>

