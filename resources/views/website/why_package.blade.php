<div _ngcontent-cki-c11="" class="container">
    <div _ngcontent-cki-c11="" class="row">
        <div _ngcontent-cki-c11="" class="col-md-5 p-0 pl-sm-4 display-none-sm"><img _ngcontent-cki-c11=""
            src="{{ $link_project->site_value . $data[1]->image_details->{1}->file_path }}" class="w-100"></div>
        <div _ngcontent-cki-c11="" class="col-md-1 p-0 display-none-sm"></div>
        <div _ngcontent-cki-c11="" class="col-md-6">
            <div _ngcontent-cki-c11="" class="dv_why_package_heading"> {{ $data[1]->text_details[0]->header }} <span _ngcontent-cki-c11="">399
                {{ $data[1]->text_details[0]->title }}</span></div>
            <p _ngcontent-cki-c11="" class="dv_why_package_heading_p">{{ $data[1]->text_details[0]->description }}</p>
            <ul _ngcontent-cki-c11="" class="dv_why_pack_ul">
                <li _ngcontent-mro-c11="">
                    <span _ngcontent-mro-c11="">{{ $data[1]->key_value_pair[0]->key }}</span>
                    {{ $data[1]->key_value_pair[0]->value }}
                </li>
                <li _ngcontent-mro-c11="">
                    <span _ngcontent-mro-c11="">{{ $data[1]->key_value_pair[1]->key }}</span>
                    {{ $data[1]->key_value_pair[1]->value }}
                </li>
                <li _ngcontent-mro-c11="">
                    <span _ngcontent-mro-c11="">{{ $data[1]->key_value_pair[2]->key }}</span>
                    {{ $data[1]->key_value_pair[2]->value }}
                </li>
                <li _ngcontent-mro-c11="">
                    <span _ngcontent-mro-c11="">{{ $data[1]->key_value_pair[3]->key }}</span>
                    {{ $data[1]->key_value_pair[3]->value }}
                </li>
            </ul><a _ngcontent-cki-c11=""
            href="{{ $data[1]->button_details->{1}->redirect_url }}" target="_blank"
                class="dv_why_book_now">{{ $data[1]->button_details->{1}->title }}  <span _ngcontent-cki-c11="">{!! $data[1]->button_details->{1}->description !!}</span></a>
            <div _ngcontent-cki-c11="" class="dv_dmof_txt">{{ $data[1]->text_details[0]->extrafield }} </div>
        </div>
    </div>
    <div _ngcontent-cki-c11="" class="row display-block-sm">
        <div _ngcontent-cki-c11="" class="col-md-12 mt-3"><img _ngcontent-cki-c11=""
                src="https://ik.imagekit.io/mirrorskit/assets/hair/img/aed-399-499/why-package.png" class="w-100">
        </div>
    </div>
</div>
