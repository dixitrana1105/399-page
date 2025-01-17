<div _ngcontent-mro-c11="" class="container">
    <div _ngcontent-mro-c11="" class="row display-none-sm">

        @php
            $imagePaths = json_decode($get_data_section_9->branch_image, true) ?? [];
            $employeeNames = json_decode($get_data_section_9->branch_name, true) ?? [];
            $employeeSpecialists = json_decode($get_data_section_9->branch_address, true) ?? [];
        @endphp


        <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
            <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20">
                    <img _ngcontent-mro-c11=""
                        src="{{ $link_project->site_value . $data[9]->image_details->{1}->file_path }}"
                        class="w-100 mb-4"
                        style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                    <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                        <h4 _ngcontent-mro-c11="" class="dv_branch_name">
                            {{ $data[9]->image_details->{1}->title ?? 'N/A' }} </h4>
                        <p _ngcontent-mro-c11="" class="dv_branch_address">
                            {{ $data[9]->image_details->{1}->description ?? 'N/A' }} </p>
                        <a _ngcontent-mro-c11="" href="tel:97142691449" target="_blank"
                            class="dv_branch_number">{{ $data[9]->button_details->{1}->title }}</a>
                        <a _ngcontent-mro-c11="" href="tel:971565373911" target="_blank" class="dv_branch_number">+971
                            56 537 3911</a>
                        <a _ngcontent-mro-c11="" href="https://wa.me/971565373911" target="_blank"
                            class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a>
                        <a _ngcontent-mro-c11="" href="{{ $data[9]->button_details->{1}->redirect_url }}"
                            target="_blank" class="dv_branch_book">book now</a>
                    </div>
                </div>
            </div>
        </div>

        <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
            <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20">
                    <img _ngcontent-mro-c11=""
                        src="{{ $link_project->site_value . $data[9]->image_details->{2}->file_path }}"
                        class="w-100 mb-4"
                        style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                    <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                        <h4 _ngcontent-mro-c11="" class="dv_branch_name">
                            {{ $data[9]->image_details->{2}->title ?? 'N/A' }} </h4>
                        <p _ngcontent-mro-c11="" class="dv_branch_address">
                            {{ $data[9]->image_details->{2}->description ?? 'N/A' }} </p>
                        <a _ngcontent-mro-c11="" href="tel:97142691449" target="_blank"
                            class="dv_branch_number">{{ $data[9]->button_details->{2}->title }}</a>
                        <a _ngcontent-mro-c11="" href="tel:971565373911" target="_blank" class="dv_branch_number">+971
                            56 537 3911</a>
                        <a _ngcontent-mro-c11="" href="https://wa.me/971565373911" target="_blank"
                            class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a>
                        <a _ngcontent-mro-c11="" href="{{ $data[9]->button_details->{2}->redirect_url }}"
                            target="_blank" class="dv_branch_book">book now</a>
                    </div>
                </div>
            </div>
        </div>

        <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
            <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20">
                    <img _ngcontent-mro-c11=""
                        src="{{ $link_project->site_value . $data[9]->image_details->{3}->file_path }}"
                        class="w-100 mb-4"
                        style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                    <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                        <h4 _ngcontent-mro-c11="" class="dv_branch_name">
                            {{ $data[9]->image_details->{3}->title ?? 'N/A' }} </h4>
                        <p _ngcontent-mro-c11="" class="dv_branch_address">
                            {{ $data[9]->image_details->{3}->description ?? 'N/A' }} </p>
                        <a _ngcontent-mro-c11="" href="tel:97142691449" target="_blank"
                            class="dv_branch_number">{{ $data[9]->button_details->{3}->title }}</a>
                        <a _ngcontent-mro-c11="" href="tel:971565373911" target="_blank" class="dv_branch_number">+971
                            56 537 3911</a>
                        <a _ngcontent-mro-c11="" href="https://wa.me/971565373911" target="_blank"
                            class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a>
                        <a _ngcontent-mro-c11="" href="{{ $data[9]->button_details->{3}->redirect_url }}"
                            target="_blank" class="dv_branch_book">book now</a>
                    </div>
                </div>
            </div>
        </div>

        <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
            <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20">
                    <img _ngcontent-mro-c11=""
                        src="{{ $link_project->site_value . $data[9]->image_details->{4}->file_path }}"
                        class="w-100 mb-4"
                        style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                    <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                        <h4 _ngcontent-mro-c11="" class="dv_branch_name">
                            {{ $data[9]->image_details->{4}->title ?? 'N/A' }} </h4>
                        <p _ngcontent-mro-c11="" class="dv_branch_address">
                            {{ $data[9]->image_details->{4}->description ?? 'N/A' }} </p>
                        <a _ngcontent-mro-c11="" href="tel:{{ $data[9]->button_details->{4}->title }}"
                            target="_blank" class="dv_branch_number">{{ $data[9]->button_details->{4}->title }}</a>
                        <a _ngcontent-mro-c11="" href="tel:{{ $data[9]->button_details->{4}->description }}"
                            target="_blank"
                            class="dv_branch_number">{{ $data[9]->button_details->{4}->description }}</a>
                        <a _ngcontent-mro-c11="" href="https://wa.me/971565373911" target="_blank"
                            class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a>
                        <a _ngcontent-mro-c11="" href="{{ $data[9]->button_details->{4}->redirect_url }}"
                            target="_blank" class="dv_branch_book">book now</a>
                    </div>
                </div>
            </div>
        </div>

        <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
            <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20">
                    <img _ngcontent-mro-c11=""
                        src="{{ $link_project->site_value . $data[9]->image_details->{5}->file_path }}"
                        class="w-100 mb-4"
                        style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                    <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                        <h4 _ngcontent-mro-c11="" class="dv_branch_name">
                            {{ $data[9]->image_details->{5}->title ?? 'N/A' }} </h4>
                        <p _ngcontent-mro-c11="" class="dv_branch_address">
                            {{ $data[9]->image_details->{5}->description ?? 'N/A' }} </p>
                        <a _ngcontent-mro-c11="" href="tel:{{ $data[9]->button_details->{5}->title }}"
                            target="_blank" class="dv_branch_number">{{ $data[9]->button_details->{5}->title }}</a>
                        <a _ngcontent-mro-c11="" href="tel:{{ $data[9]->button_details->{5}->description }}"
                            target="_blank"
                            class="dv_branch_number">{{ $data[9]->button_details->{5}->description }}</a>
                        <a _ngcontent-mro-c11="" href="https://wa.me/971565373911" target="_blank"
                            class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a>
                        <a _ngcontent-mro-c11="" href="{{ $data[9]->button_details->{5}->redirect_url }}"
                            target="_blank" class="dv_branch_book">book now</a>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div _ngcontent-mro-c11="" class="display-block-sm">
        <div _ngcontent-mro-c11="" class="swiper branchmobileslider">
            <swiper _ngcontent-mro-c11=""
                class="swiper-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                <!----><!----><!---->
                <div class="swiper-wrapper" style="transition-duration: 0ms;"><!----><!---->
                    <div data-swiper-slide-index="0" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                    _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/1.jpg"
                                    class="w-100 mb-4"
                                    style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                <div _ngcontent-mro-c11="" class="p-0">
                                    <h4 _ngcontent-mro-c11="" class="dv_branch_name">Al
                                        Muraqabat </h4>
                                    <p _ngcontent-mro-c11="" class="dv_branch_address">M03 -
                                        Buhaleeba Plaza &nbsp;Muraqabat Road - Dubai. </p><a _ngcontent-mro-c11=""
                                        href="tel:97142691449" target="_blank" class="dv_branch_number">+971 4 269
                                        1449</a><a _ngcontent-mro-c11="" href="tel:971565373911" target="_blank"
                                        class="dv_branch_number">+971 56 537 3911</a><a _ngcontent-mro-c11=""
                                        href="https://wa.me/971565373911" target="_blank"
                                        class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                            class="d-block ml-auto mr-auto"></a><a _ngcontent-mro-c11=""
                                        href="{{ $data[9]->button_details->{5}->description }}" target="_blank"
                                        class="dv_branch_book">book now</a>
                                </div>
                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="1" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                    _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/4.jpg"
                                    class="w-100 mb-4"
                                    style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                <div _ngcontent-mro-c11="" class="p-0">
                                    <h4 _ngcontent-mro-c11="" class="dv_branch_name">IBN
                                        Battuta </h4>
                                    <p _ngcontent-mro-c11="" class="dv_branch_address">Ibn
                                        battuta Mall, Metro link area - Sheikh Zayed Rd - Dubai
                                    </p><a _ngcontent-mro-c11="" href="tel:97145766288" target="_blank"
                                        class="dv_branch_number">+971 4 576
                                        6288</a><a _ngcontent-mro-c11="" href="tel:971543210758" target="_blank"
                                        class="dv_branch_number">+971 54 321 0758</a><a _ngcontent-mro-c11=""
                                        href="https://wa.me/971543210758" target="_blank"
                                        class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                            class="d-block ml-auto mr-auto"></a><a _ngcontent-mro-c11=""
                                        href="{{ $data[9]->button_details->{5}->description }}" target="_blank"
                                        class="dv_branch_book">book now</a>
                                </div>
                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="2" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                    _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/6.jpg"
                                    class="w-100 mb-4"
                                    style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                <div _ngcontent-mro-c11="" class="p-0">
                                    <h4 _ngcontent-mro-c11="" class="dv_branch_name">Tecom
                                    </h4>
                                    <p _ngcontent-mro-c11="" class="dv_branch_address">API
                                        Building,Al Barsha Heights,Tecom-dubai </p><a _ngcontent-mro-c11=""
                                        href="tel:97145686219" target="_blank" class="dv_branch_number">+971 4 568
                                        6219</a><a _ngcontent-mro-c11="" href="tel:971502247058" target="_blank"
                                        class="dv_branch_number">+971 50 224 7058</a><a _ngcontent-mro-c11=""
                                        href="https://wa.me/971502247058" target="_blank"
                                        class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                            class="d-block ml-auto mr-auto"></a><a _ngcontent-mro-c11=""
                                        href="{{ $data[9]->button_details->{5}->description }}" target="_blank"
                                        class="dv_branch_book">book now</a>
                                </div>
                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="3" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                    _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/8.JPG"
                                    class="w-100 mb-4"
                                    style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                <div _ngcontent-mro-c11="" class="p-0">
                                    <h4 _ngcontent-mro-c11="" class="dv_branch_name">Al
                                        Bustan </h4>
                                    <p _ngcontent-mro-c11="" class="dv_branch_address">Al
                                        Bustan center,Al Qusais First-dubai. </p><a _ngcontent-mro-c11=""
                                        href="tel:97143797872" target="_blank" class="dv_branch_number">+971 4 379
                                        7872</a><a _ngcontent-mro-c11="" href="tel:971505458263" target="_blank"
                                        class="dv_branch_number">+971 50 545 8263</a><a _ngcontent-mro-c11=""
                                        href="https://wa.me/971505458263" target="_blank"
                                        class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                            class="d-block ml-auto mr-auto"></a><a _ngcontent-mro-c11=""
                                        href="{{ $data[9]->button_details->{5}->description }}" target="_blank"
                                        class="dv_branch_book">book now</a>
                                </div>
                            </div>
                        </div><!----><!----><!---->
                    </div>
                    <div data-swiper-slide-index="4" class="dv_per_staff_col swiper-slide">
                        <!---->
                        <div _ngcontent-mro-c11="" class="swiper-slide">
                            <div _ngcontent-mro-c11="" class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                    _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/9.jpg"
                                    class="w-100 mb-4"
                                    style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                <div _ngcontent-mro-c11="" class="p-0">
                                    <h4 _ngcontent-mro-c11="" class="dv_branch_name">Marina
                                    </h4>
                                    <p _ngcontent-mro-c11="" class="dv_branch_address">
                                        Jannah Hotel Apratment,Marina,Dubai. </p><a _ngcontent-mro-c11=""
                                        href="tel:97144107691" target="_blank" class="dv_branch_number">+971 4 410
                                        7691</a><a _ngcontent-mro-c11="" href="tel:971563005629" target="_blank"
                                        class="dv_branch_number">+971 56 300 5629</a><a _ngcontent-mro-c11=""
                                        href="https://wa.me/971563005629" target="_blank"
                                        class="dv_branch_whatsapp"><img _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                            class="d-block ml-auto mr-auto"></a><a _ngcontent-mro-c11=""
                                        href="{{ $data[9]->button_details->{5}->description }}" target="_blank"
                                        class="dv_branch_book">book now</a>
                                </div>
                            </div>
                        </div><!----><!----><!---->
                    </div><!----><!----><!----><!---->
                </div><!---->
            </swiper>
            <div _ngcontent-mro-c11="" class="swiper-button-prev branchmobileslider-p"><img _ngcontent-mro-c11=""
                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/left-icon.png">
            </div>
            <div _ngcontent-mro-c11="" class="swiper-button-next branchmobileslider-n"><img _ngcontent-mro-c11=""
                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/right-icon.png">
            </div>
        </div>
    </div>
</div>
