@include('user.header')

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('user/assets/img/hero/contact_hero.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Blog Detail</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- slider Area End-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{asset('upload/post/'.$result->photo)}}" alt="{{$result->title}}">
                    </div>
                    <div class="blog_details">
                        <h2>
                            {{$result->title}}
                        </h2>
                        {{--<ul class="blog-info-link mt-3 mb-4">--}}
                            {{--<li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>--}}
                        {{--</ul>--}}
                        {!! $result->contents !!}

                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->
@include('user.footer')
