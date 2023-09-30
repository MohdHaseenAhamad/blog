@include('admin.common.header')
@include('admin.common.side-bar')


<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Post List</h4>
</div>

<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="row row-sm">
        <?php foreach ($results as $key => $value){
        ?>
        <div class="col-sm-6 col-xl-3">
            <a href="{{url('admin/post/listing/'.$value->id)}}">
                <div class="bg-teal rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10"></p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?=$value->name?></p>
                            <span class="tx-11 tx-roboto tx-white-6"></span>
                        </div>
                    </div>
                </div>
            </a>
        </div><!-- col-3 -->
        <?php
        } ?>


    </div><!-- row -->

    <div class="row row-sm mg-t-20">

    </div><!-- row -->

</div><!-- br-pagebody -->


@include('admin.common.footer')
