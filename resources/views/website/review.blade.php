<div _ngcontent-mro-c11="" class="dv_thousand_review">
    {{-- {{ dd($data[5]) }} --}}
    <div _ngcontent-mro-c11="" class="container">
        <h4 _ngcontent-mro-c11="" class="dv_thousand_review_head">{{ $data[5]->text_details[0]->header }} </h4>
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
                <swiper _ngcontent-mro-c11=""
                    class="swiper-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                    <!----><!----><!---->
                    <div class="swiper-wrapper" style="transition-duration: 0ms;"><!----><!---->
                        <div data-swiper-slide-index="0" class="dv_per_staff_col swiper-slide">
                            <!---->
                            <div _ngcontent-mro-c11="" class="swiper-slide"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $data[5]->image_details->{1}->file_path }}"
                                    class="w-80 d-block ml-auto mr-auto"></div>
                            <!----><!----><!---->
                        </div>
                        <div data-swiper-slide-index="1" class="dv_per_staff_col swiper-slide">
                            <!---->
                            <div _ngcontent-mro-c11="" class="swiper-slide"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $data[5]->image_details->{2}->file_path }}"
                                    class="w-80 d-block ml-auto mr-auto"></div>
                            <!----><!----><!---->
                        </div>
                        <div data-swiper-slide-index="2" class="dv_per_staff_col swiper-slide">
                            <!---->
                            <div _ngcontent-mro-c11="" class="swiper-slide"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $data[5]->image_details->{3}->file_path }}"
                                    class="w-80 d-block ml-auto mr-auto"></div>
                            <!----><!----><!---->
                        </div><!----><!----><!----><!---->
                    </div><!---->
                </swiper>
                <div _ngcontent-mro-c11="" class="swiper-button-prev reviewmobileslider-p"><img _ngcontent-mro-c11=""
                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/left-icon.png">
                </div>
                <div _ngcontent-mro-c11="" class="swiper-button-next reviewmobileslider-n"><img _ngcontent-mro-c11=""
                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/right-icon.png">
                </div>
            </div>
        </div>
    </div>
</div>
