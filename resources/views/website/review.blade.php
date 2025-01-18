<style>
    .reviewmobileslider-p, .reviewmobileslider-n {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10; /* Ensure buttons are above other elements */
        width: 40px; /* Adjust button size if needed */
        height: 40px;
        cursor: pointer;
    }

    .reviewmobileslider-p {
        left: 10px;
    }

    .reviewmobileslider-n {
        right: 10px;
    }

    .swiper-slide img {
        max-width: 100%;
        height: auto;
    }
</style>

<div _ngcontent-mro-c11="" class="dv_thousand_review">
    <div _ngcontent-mro-c11="" class="container">
        <h4 _ngcontent-mro-c11="" class="dv_thousand_review_head">
            {!! $data[5]->text_details[0]->header !!}
        </h4>
        <div _ngcontent-mro-c11="" class="row pt-5 pb-5 display-none-sm">
            <div _ngcontent-mro-c11="" class="col-md-12">
                <div class="row pt-5 pb-5 display-none-sm">
                    <div _ngcontent-mro-c11="" class="col-md-4">
                        <img _ngcontent-mro-c11=""
                            src="{{ $link_project->site_value . $data[5]->image_details->{1}->file_path }}"
                            class="w-80 d-block ml-auto mr-auto">
                    </div>
                    <div _ngcontent-mro-c11="" class="col-md-4">
                        <img _ngcontent-mro-c11=""
                            src="{{ $link_project->site_value . $data[5]->image_details->{2}->file_path }}"
                            class="w-80 d-block ml-auto mr-auto">
                    </div>
                    <div _ngcontent-mro-c11="" class="col-md-4">
                        <img _ngcontent-mro-c11=""
                            src="{{ $link_project->site_value . $data[5]->image_details->{3}->file_path }}"
                            class="w-80 d-block ml-auto mr-auto">
                    </div>
                </div>
            </div>
        </div>
        <div _ngcontent-mro-c11="" class="row display-block-sm">
            <div _ngcontent-mro-c11="" class="pb-5 swiper reviewmobileslider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img _ngcontent-mro-c11=""
                            src="{{ $link_project->site_value . $data[5]->image_details->{1}->file_path }}"
                            class="w-80 d-block ml-auto mr-auto">
                    </div>
                    <div class="swiper-slide">
                        <img _ngcontent-mro-c11=""
                            src="{{ $link_project->site_value . $data[5]->image_details->{2}->file_path }}"
                            class="w-80 d-block ml-auto mr-auto">
                    </div>
                    <div class="swiper-slide">
                        <img _ngcontent-mro-c11=""
                            src="{{ $link_project->site_value . $data[5]->image_details->{3}->file_path }}"
                            class="w-80 d-block ml-auto mr-auto">
                    </div>
                </div>
                <div class="swiper-button-prev reviewmobileslider-p">
                    <img _ngcontent-mro-c11=""
                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/left-icon.png">
                </div>
                <div class="swiper-button-next reviewmobileslider-n">
                    <img _ngcontent-mro-c11=""
                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/right-icon.png">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper('.reviewmobileslider', {
            loop: true,
            navigation: {
                nextEl: '.reviewmobileslider-n',
                prevEl: '.reviewmobileslider-p',
            },
        });
    });
</script>
