<div _ngcontent-cki-c11="" class="container">
    <div _ngcontent-cki-c11="" class="row">
        <div _ngcontent-cki-c11="" class="col-md-6">
            {{-- {{ dd($data[7]) }} --}}
            <div _ngcontent-cki-c11="" class="dv_mirrors_know_heading"> {!! $data[7]->text_details[0]->header !!} <span _ngcontent-cki-c11="">{{ $data[7]->text_details[0]->title }}
                </span></div>
            <ul _ngcontent-cki-c11="" class="dv_mirrors_know_ul">
                <li>
                    <span>{{ 1 }}</span>
                    <h3>{{ $data[7]->key_value_pair[0]->key }}</h3>
                    {{ $data[7]->key_value_pair[0]->value }}
                </li>
                <li>
                    <span>{{ 2 }}</span>
                    <h3>{{ $data[7]->key_value_pair[1]->key }}</h3>
                    {{ $data[7]->key_value_pair[1]->value }}
                </li>
                <li>
                    <span>{{ 3 }}</span>
                    <h3>{{ $data[7]->key_value_pair[2]->key }}</h3>
                    {{ $data[7]->key_value_pair[2]->value }}
                </li>
            </ul><a _ngcontent-cki-c11=""
            href="{{ $data[7]->button_details->{1}->redirect_url }}"  target="_blank"
                class="dv_why_book_now mt-0">{{ $data[7]->button_details->{1}->title }} <span _ngcontent-cki-c11="">{{ $data[7]->button_details->{1}->description }}</span></a>
            <div _ngcontent-cki-c11="" class="dv_dmof_txt">{!! $data[7]->text_details[0]->extrafield !!} </div>
        </div>
        <div _ngcontent-cki-c11="" class="col-md-2 display-none-sm"></div>
        <div _ngcontent-cki-c11="" class="col-md-4 display-none-sm"><img _ngcontent-cki-c11=""
                src="{{ $link_project->site_value . $data[7]->image_details->{1}->file_path }}"
                class="w-100"></div>
    </div>
</div>
