@include('admin.common.header')
@include('admin.common.side-bar')





<!-- ########## START: MAIN PANEL ########## -->
<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Category Add</h4>
</div>



    <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="br-section-wrapper">


            <form action="{{url('admin/category/save')}}" method="POST">
                @csrf
                <div class="d-flex wd-300">
                    <div class="form-group mg-b-0">
                        <label>Category Name: <span class="tx-danger">*</span></label>
                        <input type="text" name="category_name" class="form-control wd-150 wd-xs-250" placeholder="Enter Category Name" >
                        <ul class="parsley-errors-list filled" id="parsley-id-11"><li class="parsley-required">{{$errors->first('category_name')}}</li></ul>

                    </div>

                    <div class="mg-l-10 mg-t-25 pd-t-4">
                        <button type="submit" class="btn btn-info tx-11 pd-y-12 tx-uppercase tx-spacing-2">Save</button>
                    </div>
                </div>
            </form>
        </div><!-- br-section-wrapper -->
    </div>


@include('admin.common.footer')
