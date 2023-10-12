@include('admin.common.header')
@include('admin.common.side-bar')


<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
</div>

<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
            <div class=" rounded overflow-hidden" style="background: #<?php echo mt_rand(100000, 999999) ?>">
                <div class="pd-25 d-flex align-items-center">
                    <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Post</p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$post_count}}</p>
                        {{--<span class="tx-11 tx-roboto tx-white-6">POST</span>--}}
                    </div>
                </div>
            </div>
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="rounded overflow-hidden" style="background: #<?php echo mt_rand(100000, 999999) ?>">
                <div class="pd-25 d-flex align-items-center">
                    <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total
                            Visitors</p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$visitor_count}}</p>
                        {{--<span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="rounded overflow-hidden" style="background: #<?php echo mt_rand(100000, 999999) ?>">
                <div class="pd-25 d-flex align-items-center">
                    <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Home Page
                            Visitor</p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$home_count}}</p>
                        {{--<span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class=" rounded overflow-hidden" style="background: #<?php echo mt_rand(100000, 999999) ?>">
                <div class="pd-25 d-flex align-items-center">
                    <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Blog Page
                            Visitor</p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$blog_count}}</p>
                        {{--<span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>--}}
                    </div>
                </div>
            </div>
        </div>


    </div><!-- row -->

    <div class="row row-sm mg-t-20">
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="rounded overflow-hidden" style="background: #<?php echo mt_rand(100000, 999999) ?>">
                <div class="pd-25 d-flex align-items-center">
                    <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Blog
                            Detail Page Visitor</p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$blog_detail_count}}</p>
                        {{--<span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>--}}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- row -->

</div><!-- br-pagebody -->


@include('admin.common.footer')
