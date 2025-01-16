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
                <ul class="dv_staff_social">
                    <li><a href="https://www.facebook.com/mirrorbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a></li>
                    <li><a href="https://www.instagram.com/mirrorsbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                </path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a></li>
                </ul>
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
                <ul class="dv_staff_social">
                    <li><a href="https://www.facebook.com/mirrorbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a></li>
                    <li><a href="https://www.instagram.com/mirrorsbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                </path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a></li>
                </ul>
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
                <ul class="dv_staff_social">
                    <li><a href="https://www.facebook.com/mirrorbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a></li>
                    <li><a href="https://www.instagram.com/mirrorsbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                </path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a></li>
                </ul>
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
                <ul class="dv_staff_social">
                    <li><a href="https://www.facebook.com/mirrorbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a></li>
                    <li><a href="https://www.instagram.com/mirrorsbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                </path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a></li>
                </ul>
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
                <ul class="dv_staff_social">
                    <li><a href="https://www.facebook.com/mirrorbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a></li>
                    <li><a href="https://www.instagram.com/mirrorsbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                </path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a></li>
                </ul>
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
                <ul class="dv_staff_social">
                    <li><a href="https://www.facebook.com/mirrorbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a></li>
                    <li><a href="https://www.instagram.com/mirrorsbeautylounge" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                </path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a></li>
                </ul>
            </div>
        </div>

    </div>


    <div _ngcontent-mro-c11="" class="display-block-sm">
        <div _ngcontent-mro-c11="" class="swiper staffmobileslider">
            <swiper _ngcontent-mro-c11=""
                class="swiper-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                <!----><!----><!---->
                <div class="swiper-wrapper" style="transition-duration: 0ms;"><!----><!---->
                    <div data-swiper-slide-index="0" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-01.png"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">Zalikha
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                    Specilist </p>
                                <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.facebook.com/mirrorbeautylounge" target="_blank"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-facebook">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                </path>
                                            </svg></a></li>
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-instagram">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                </path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                </path>
                                                <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                            </svg></a></li>
                                </ul>
                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="1" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-02.png"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">Passang
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                    Specilist </p>
                                <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.facebook.com/mirrorbeautylounge" target="_blank"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-facebook">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                </path>
                                            </svg></a></li>
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-instagram">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                </path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                </path>
                                                <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                            </svg></a></li>
                                </ul>
                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="2" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-03.png"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">Elian
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                    Specilist </p>
                                <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.facebook.com/mirrorbeautylounge" target="_blank"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-facebook">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                </path>
                                            </svg></a></li>
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-instagram">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                </path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                </path>
                                                <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                            </svg></a></li>
                                </ul>
                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="3" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-04.png"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">Cristina
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                    Specilist </p>
                                <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.facebook.com/mirrorbeautylounge" target="_blank"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-facebook">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                </path>
                                            </svg></a></li>
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-instagram">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                </path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                </path>
                                                <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                            </svg></a></li>
                                </ul>
                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="4" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-05.png"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">Manisha
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                    Specilist </p>
                                <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.facebook.com/mirrorbeautylounge" target="_blank"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-facebook">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                </path>
                                            </svg></a></li>
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-instagram">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                </path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                </path>
                                                <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                            </svg></a></li>
                                </ul>
                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="5" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-06.png"
                                    class="w-100">
                                <h4 _ngcontent-mro-c11="" class="d-block text-center">May
                                </h4>
                                <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                    Specilist </p>
                                <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.facebook.com/mirrorbeautylounge" target="_blank"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-facebook">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                </path>
                                            </svg></a></li>
                                    <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                            href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icon-tabler-brand-instagram">
                                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                    fill="none"></path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                </path>
                                                <path _ngcontent-mro-c11=""
                                                    d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                </path>
                                                <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                            </svg></a></li>
                                </ul>
                            </div>
                        </div><!----><!----><!---->
                    </div><!----><!----><!----><!---->
                </div><!---->
            </swiper>
            <div _ngcontent-mro-c11="" class="swiper-button-prev staffmobileslider-p"><img _ngcontent-mro-c11=""
                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/left-icon.png">
            </div>
            <div _ngcontent-mro-c11="" class="swiper-button-next staffmobileslider-n"><img _ngcontent-mro-c11=""
                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/right-icon.png">
            </div>
        </div>
    </div>

</div>
