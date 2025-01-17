<div _ngcontent-cki-c11="" class="dv_slider">
       @php
        // dd($data[10]);
        $index = 0;
    @endphp
    <div _ngcontent-cki-c11="" class="display-block-sm position-relative"><img _ngcontent-cki-c11=""
            src="https://ik.imagekit.io/mirrorskit/assets/hair/img/aed-399-499/mobile-slider.png" class="w-100"><a
            _ngcontent-cki-c11="" href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=2452|499"
            target="_blank"><img _ngcontent-cki-c11=""
                src="https://ik.imagekit.io/mirrorskit/assets/hair/img/aed-399-499/btn-mobile-399.png"
                style="width: 70%; position: absolute; left: 0; margin: 0 auto; display: block; right: 0; bottom: 80px; -webkit-animation: mirroreffects 1.5s ease-in-out infinite both; animation: mirroreffects 1.5s ease-in-out infinite both;"></a>
    </div>
    <div _ngcontent-cki-c11="" class="container-fluid display-none-sm">
        <div _ngcontent-cki-c11="" class="row">
            <div _ngcontent-cki-c11="" class="col-lg-7 col-md-7 dv_slider_img"
                style="align-items: flex-end; display: flex;"><img _ngcontent-cki-c11=""
                    src="{{ $link_project->site_value . $data[0]->image_details->{1}->file_path }}" class="w-100">
            </div>
            <div _ngcontent-cki-c11="" class="col-lg-4 col-md-5 dv_slider_text">
                <div _ngcontent-cki-c11="" class="dv_slider_content">
                    <h1 _ngcontent-cki-c11="">{{ $data[0]->text_details[0]->title }} <span _ngcontent-cki-c11="">{{ $data[0]->text_details[0]->extrafield }}</span>
                        <div _ngcontent-cki-c11="">{{ $data[0]->text_details[0]->header }} <b _ngcontent-cki-c11="" class="dv_any_legnth_txt">{{ $data[0]->text_details[0]->description }}</b></div>
                    </h1>
                    <h5 _ngcontent-cki-c11="" class="dv_whatsa_include"> <?= htmlspecialchars($data[0]->key_value_pair[0]->key) ?></h5>
                    <p _ngcontent-cki-c11=""><?= nl2br(htmlspecialchars($data[0]->key_value_pair[0]->value)) ?></p>
                    <ul _ngcontent-cki-c11="">
                        <li _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[1]->key }}<span
                                _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[1]->value }}</span></li>
                        <li _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[2]->key }} <span _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[2]->value }}</span></li>
                        <li _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[3]->key }} <span _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[3]->value }}</span></li>
                                </span></li>
                        <li _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[4]->key }} <span _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[4]->value }}</span></li>
                        <li _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[5]->key }} <span _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[5]->value }}</span></li>
                        <li _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[6]->key }} <span _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[6]->value }}</span></li>
                        <li _ngcontent-cki-c11=""><span _ngcontent-cki-c11=""> <b _ngcontent-cki-c11="">{{ $data[0]->key_value_pair[7]->value }}
                                    </b></span></li>
                    </ul><a _ngcontent-cki-c11=""
                        href="{!! $data[0]->button_details->{1}->redirect_url !!}"
                        target="_blank" class="dv_now_499_aed"> {{ $data[0]->button_details->{1}->title }} <span _ngcontent-cki-c11="">399
                            AED</span></a><span _ngcontent-cki-c11="">{!! $data[0]->button_details->{1}->description !!}</span>
                </div>
            </div>
            <div _ngcontent-cki-c11="" class="col-md-1 col-md-0 col"></div>
        </div>
    </div>
</div>
