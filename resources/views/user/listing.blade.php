@include('user.common.header')
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Post</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
    </div>
</header>
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        {{--<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Post</h2>--}}
        <!-- Icon Divider-->
        {{--<div class="divider-custom">--}}
            {{--<div class="divider-custom-line"></div>--}}
            {{--<div class="divider-custom-icon"><i class="fas fa-star"></i></div>--}}
            {{--<div class="divider-custom-line"></div>--}}
        {{--</div>--}}
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <?php if (isset($results)) {

                foreach ($results as $key => $value) {
                    ?>
            <div class="col-md-4 col-lg-4 mb-5">
                <a href="{{route('detail',[$slug,$value->slug])}}">
                <div class="portfolio-item mx-auto" >
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{asset('uploads/post/'.$value->photo )}}" alt="<?=isset($value->title) ? $value->title :''?>"/>
                    <h2 style="background-color: #4a5568;color: white;text-align:center;">
<?=isset($value->title) ? $value->title :''?>

                    </h2>
                </div>
                </a>
            </div>
<?php
                }
            }?>

        </div>
    </div>
</section>

<!-- Footer-->
@include('user.common.footer')
