<style>
    .staffmobileslider-p, .staffmobileslider-n {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10; /* Ensure buttons are above other elements */
        width: 40px; /* Adjust button size if needed */
        height: 40px;
        cursor: pointer;
    }

    .staffmobileslider-p {
        left: 10px;
    }

    .staffmobileslider-n {
        right: 10px;
    }

    .swiper-slide img {
        max-width: 100%;
        height: auto;
    }
</style>
<div _ngcontent-mro-c11="" class="container">
    @php
        // dd($data[8]);
        $imagePaths = json_decode($get_data_section_8->employee_image, true) ?? [];
        $employeeNames = json_decode($get_data_section_8->employee_name, true) ?? [];

        $employeeSpecialists = json_decode($get_data_section_8->employee_specialist, true) ?? [];
    @endphp

    <div class="row display-none-sm">
        <div class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
            <div class="d-block w-80 ml-auto mr-auto pb-5">
                <img src="{{ $link_project->site_value . $data[8]->image_details->{1}->file_path }}" class="w-100"
                    alt="Employee Image">
                <h4 class="d-block text-center">
                    {{ $data[8]->image_details->{1}->title ?? 'Name Not Available' }}</h4>
                <p class="d-block text-center">
                    {{ $data[8]->image_details->{1}->description ?? 'Specialist Not Available' }}
                </p>

            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
            <div class="d-block w-80 ml-auto mr-auto pb-5">
                <img src="{{ $link_project->site_value . $data[8]->image_details->{2}->file_path }}" class="w-100"
                    alt="Employee Image">
                <h4 class="d-block text-center">
                    {{ $data[8]->image_details->{2}->title ?? 'Name Not Available' }}</h4>
                <p class="d-block text-center">
                    {{ $data[8]->image_details->{2}->description ?? 'Specialist Not Available' }}
                </p>

            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
            <div class="d-block w-80 ml-auto mr-auto pb-5">
                <img src="{{ $link_project->site_value . $data[8]->image_details->{3}->file_path }}" class="w-100"
                    alt="Employee Image">
                <h4 class="d-block text-center">
                    {{ $data[8]->image_details->{3}->title ?? 'Name Not Available' }}</h4>
                <p class="d-block text-center">
                    {{ $data[8]->image_details->{3}->description ?? 'Specialist Not Available' }}
                </p>

            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
            <div class="d-block w-80 ml-auto mr-auto pb-5">
                <img src="{{ $link_project->site_value . $data[8]->image_details->{4}->file_path }}" class="w-100"
                    alt="Employee Image">
                <h4 class="d-block text-center">
                    {{ $data[8]->image_details->{4}->title ?? 'Name Not Available' }}</h4>
                <p class="d-block text-center">
                    {{ $data[8]->image_details->{4}->description ?? 'Specialist Not Available' }}
                </p>

            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
            <div class="d-block w-80 ml-auto mr-auto pb-5">
                <img src="{{ $link_project->site_value . $data[8]->image_details->{5}->file_path }}" class="w-100"
                    alt="Employee Image">
                <h4 class="d-block text-center">
                    {{ $data[8]->image_details->{5}->title ?? 'Name Not Available' }}</h4>
                <p class="d-block text-center">
                    {{ $data[8]->image_details->{5}->description ?? 'Specialist Not Available' }}
                </p>

            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
            <div class="d-block w-80 ml-auto mr-auto pb-5">
                <img src="{{ $link_project->site_value . $data[8]->image_details->{6}->file_path }}" class="w-100"
                    alt="Employee Image">
                <h4 class="d-block text-center">
                    {{ $data[8]->image_details->{6}->title ?? 'Name Not Available' }}</h4>
                <p class="d-block text-center">
                    {{ $data[8]->image_details->{6}->description ?? 'Specialist Not Available' }}
                </p>

            </div>
        </div>

    </div>


    <div _ngcontent-mro-c11="" class="display-block-sm">
        <div _ngcontent-mro-c11="" class="swiper staffmobileslider">

                <div class="swiper-wrapper staffmobileslider" style="transition-duration: 0ms;"><!----><!---->
                    <div data-swiper-slide-index="0" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $data[8]->image_details->{1}->file_path }}"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{1}->title ?? 'Name Not Available' }}
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{1}->description ?? 'Specialist Not Available' }} </p>

                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="1" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $data[8]->image_details->{2}->file_path }}"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{2}->title ?? 'Name Not Available' }}
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{2}->description ?? 'Specialist Not Available' }} </p>

                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="2" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $data[8]->image_details->{3}->file_path }}"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{3}->title ?? 'Name Not Available' }}
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{3}->description ?? 'Specialist Not Available' }}
                                </p>

                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="3" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $data[8]->image_details->{4}->file_path }}"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{4}->title ?? 'Name Not Available' }}
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{4}->description ?? 'Specialist Not Available' }} </p>

                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="4" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $data[8]->image_details->{5}->file_path }}"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{5}->title ?? 'Name Not Available' }}
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{5}->description ?? 'Specialist Not Available' }} </p>

                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="5" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $data[8]->image_details->{6}->file_path }}"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{6}->title ?? 'Name Not Available' }}
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">
                                    {{ $data[8]->image_details->{6}->description ?? 'Specialist Not Available' }} </p>

                            </div>
                        </div><!----><!----><!---->
                    </div><!----><!----><!----><!---->
                </div><!---->
            <div _ngcontent-mro-c11="" class="swiper-button-prev staffmobileslider-p"><img _ngcontent-mro-c11=""
                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/left-icon.png">
            </div>
            <div _ngcontent-mro-c11="" class="swiper-button-next staffmobileslider-n"><img _ngcontent-mro-c11=""
                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/right-icon.png">
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper('.staffmobileslider', {
            loop: true,
            navigation: {
                nextEl: '.staffmobileslider-n',
                prevEl: '.staffmobileslider-p',
            }
        });
    });
</script>
