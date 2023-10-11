@include('admin.common.header')
@include('admin.common.side-bar')





<!-- ########## START: MAIN PANEL ########## -->
<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Post Add</h4>
</div>


<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper">


        <form action="{{url('admin/post/save-post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="row p-4">
                @include('admin.common._location_html')
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="row p-4">
                        <div class="col-md-8">
                            <div class="row ">

                                <div class="col-md-4">
                                    <input class="form-control" name="title" id="title" placeholder="Blog Title"
                                           onkeyup="sanitizeStringForURL(this.value, 'slug')"
                                           onkeydown="sanitizeStringForURL(this.value, 'slug')" type="text">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" placeholder="Blog Slug" name="slug" id="slug" readonly
                                           type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="custom-file">
                                <input type="file" id="file" name="photo">

                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <fieldset style="margin: 15px;">
                        <legend style="width: auto; padding: 0 10px 0 10px;">Content
                        </legend>

                        <div class="col-md-12">
                        <textarea rows="10" type="text" name="contents" id="contents"
                                  class="ckeditor form-control"></textarea>
                        </div>

                    </fieldset>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <fieldset style="margin: 15px;">
                        <legend style="width: auto; padding: 0 10px 0 10px;">Meta Content
                        </legend>
                        <div class="row">
                            <div class="col-md-6 p-3">
                                <input class="form-control" placeholder="Meta title" name="meta_title" id="meta_title"
                                       type="text">
                            </div>
                            <div class="col-md-6 p-3">
                                <input class="form-control" placeholder="Meta Desc" name="meta_description"
                                       id="meta_description"
                                       type="text">
                            </div>
                            <div class="col-md-12 p-3">
                                <input class="form-control" placeholder="Meta Keyword" name="meta_keywords"
                                       id="meta_keywords"
                                       type="text">
                            </div>
                        </div>

                    </fieldset>
                </div>

            </div>


            <div class="mg-l-10 mg-t-25 pd-t-4">
                <a href="{{url('admin/post')}}" class="btn btn-warning tx-11 pd-y-12 tx-uppercase tx-spacing-2">Back</a>
                <button type="submit" class="btn btn-info tx-11 pd-y-12 tx-uppercase tx-spacing-2">Post Now</button>
            </div>
        </form>
    </div><!-- br-section-wrapper -->
</div>


@include('admin.common.footer')
@include('admin.common._location_script')

<script>

    $(document).ready(function () {
        CKEDITOR.replaceClass = 'ckeditor';
    });


    function sanitizeStringForURL(string, to_show) {
        var v = $.trim(string);
        v = v.toLowerCase();
        var v = v.replace(/[^a-z0-9]/gi, '-');
        var v = v.replace(/-+/gi, '-');
        $('#' + to_show).val(v);
    }

</script>
