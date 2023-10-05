@include('user.common.header')
<style>
    #page_body {
        margin-top: 105px;
    }
    #page_body img {
        width: 100%;
        height: auto;
    }
</style>
{{--<header class="masthead bg-primary text-white text-center">--}}
<div class="container">
    <section id="page_body" class="container-fluid">
        <div class="col-md-12 col-lg-12 mb-5">

            <div class="portfolio-item mx-auto">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i
                            class="fas fa-plus fa-3x"></i></div>
                </div>
                <img class="img-fluid" src="{{asset('uploads/post/'.$result->photo)}}" width="100%" height="400px"
                     alt="<?=isset($result->title) ? $result->title : ''?>" />
                <h2 style="background-color: #4a5568;color: white;text-align:center;">
                    <?=isset($result->title) ? $result->title : ''?>

                </h2>
            </div>
        </div>
        <section >
            <h2 ><?=isset($result->title) ? $result->title : ''?></h2>
        </section>
        <section >
            <div >{!!  $result->contents !!}</div>
        </section>
    </section>
</div>


{{--</header>--}}


<!-- Footer-->
@include('user.common.footer')
