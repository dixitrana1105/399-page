<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiper Integration</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        .swiper-button-prev img, .swiper-button-next img {
            width: 43px;
            height: auto;
        }
        .dv_per_staff_col img {
            display: block;
            width: 100%;
            height: auto;
        }

        .swiper.pricetable {
            padding: 0 0px !important;

        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="dv_hair_packages_heading">
            {{ $data[2]->text_details[0]->header }}
        </h3>
        <div class="pb-5 swiper pricetable">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="dv_per_staff_col swiper-slide">
                    <a href="{{ $link_project->site_value . $data[2]->image_details->{1}->redirect_url }}" target="_blank" class="position-relative d-block">
                        <img src="{{ $link_project->site_value . $data[2]->image_details->{1}->file_path }}" alt="499 Hair Package">
                        <img src="{{ $link_project->site_value . $data[2]->button_details->{1}->image_path }}" class="dv_price_table_animated_img">
                    </a>
                </div>
                <!-- Slide 2 -->
                <div class="dv_per_staff_col swiper-slide">
                    <a href="#!" class="position-relative d-block">
                        <img src="{{ $link_project->site_value . $data[2]->image_details->{2}->file_path }}" alt="299 Hair Package">
                        <img src="{{ $link_project->site_value . $data[2]->button_details->{2}->image_path }}" class="dv_price_table_animated_img">
                    </a>
                </div>
                <!-- Slide 3 -->
                <div class="dv_per_staff_col swiper-slide">
                    <a href="{{ $link_project->site_value . $data[2]->image_details->{3}->redirect_url }}" target="_blank" class="position-relative d-block">
                        <img src="{{ $link_project->site_value . $data[2]->image_details->{3}->file_path }}" alt="399 Keratin Hair Treatment Package">
                        <img src="{{ $link_project->site_value . $data[2]->button_details->{3}->image_path }}" class="dv_price_table_animated_img">
                    </a>
                </div>
                <!-- Slide 4 -->
                  <div class="dv_per_staff_col swiper-slide">
                    <a href="{{ $link_project->site_value . $data[2]->image_details->{4}->redirect_url }}" target="_blank" class="position-relative d-block">
                        <img src="{{ $link_project->site_value . $data[2]->image_details->{4}->file_path }}" alt="399 Protein Hair Treatment Package">
                        <img src="{{ $link_project->site_value . $data[2]->button_details->{4}->image_path }}" class="dv_price_table_animated_img">
                    </a>
                </div>
            </div>
            <!-- Navigation buttons -->
            <div class="swiper-button-prev pricetable-p ml-0">
                <img src="https://ik.imagekit.io/mirrorskit/assets/hair/img/aed-399-499/left-icon.png">
            </div>
            <div class="swiper-button-next pricetable-n mr-0">
                <img src="https://ik.imagekit.io/mirrorskit/assets/hair/img/aed-399-499/right-icon.png">
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.pricetable', {
                slidesPerView: 1, // Default for mobile view
                spaceBetween: 20, // Space between slides
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    768: { // Tablet and above
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1024: { // Desktop
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                },
                loop: false, // No infinite loop
            });
        });
    </script>
</body>
</html>
