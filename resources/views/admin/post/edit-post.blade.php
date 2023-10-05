@include('admin.common.header')
@include('admin.common.side-bar')





<!-- ########## START: MAIN PANEL ########## -->
<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Post edit</h4>
</div>


<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper">


        <form action="{{url('admin/post/update-post/'.$result->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-control select2" data-placeholder="Select Category" name="cat_id">
                                <option label="Select Category"></option>
                                <?php foreach ($category as $key => $val)
                                {
                                ?>
                                <option
                                    value="<?=$val->id?>" <?=$result->cat_id == $val->id ? 'selected="selected"' : ''?>><?=$val->name?></option>
                                <?php
                                }?>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <input class="form-control" name="title" id="title" placeholder="Blog Title"
                                   onkeyup="sanitizeStringForURL(this.value, 'slug')" value="<?=$result->title?>"
                                   onkeydown="sanitizeStringForURL(this.value, 'slug')" type="text">
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" placeholder="Blog Slug" name="slug" id="slug" readonly
                                   type="text" value="<?=$result->slug?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <label class="custom-file">
                        <input type="file" id="file" name="photo">

                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <fieldset style="margin: 15px; border: 2px solid #c0c0c0;">
                        <legend style="width: auto; padding: 0 10px 0 10px;">Content
                        </legend>

                        <div class="col-md-12">
                        <textarea rows="10" type="text" name="contents" id="contents"
                                  class="ckeditor form-control"><?=$result->contents?></textarea>
                        </div>

                    </fieldset>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <fieldset style="margin: 15px; border: 2px solid #c0c0c0;">
                        <legend style="width: auto; padding: 0 10px 0 10px;">Meta Content
                        </legend>
                        <div class="row">
                            <div class="col-md-6 p-3">
                                <input class="form-control" placeholder="Meta title" name="meta_title" id="meta_title"
                                       type="text" value="<?=$result->meta_title?>">
                            </div>
                            <div class="col-md-6 p-3">
                                <input class="form-control" placeholder="Meta Desc" name="meta_description"
                                       id="meta_description"
                                       type="text" value="<?=$result->meta_description?>">
                            </div>
                            <div class="col-md-12 p-3">
                                <input class="form-control" placeholder="Meta Keyword" name="meta_keywords"
                                       id="meta_keywords"
                                       type="text" value="<?=$result->meta_keywords?>">
                            </div>
                        </div>

                    </fieldset>
                </div>

            </div>


            <div class="mg-l-10 mg-t-25 pd-t-4">
                <button type="submit" class="btn btn-info tx-11 pd-y-12 tx-uppercase tx-spacing-2">Post Now</button>
            </div>
        </form>
    </div><!-- br-section-wrapper -->
</div>


@include('admin.common.footer')

<script>
    // $(document).ready(function() {
    //     CKEDITOR.replaceClass = 'ckeditor';
    // });
    function sanitizeStringForURL(string, to_show) {
        var v = $.trim(string);
        v = v.toLowerCase();
        var v = v.replace(/[^a-z0-9]/gi, '-');
        var v = v.replace(/-+/gi, '-');
        $('#' + to_show).val(v);
    }
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':
                $('meta[name ="csrf-token"]').attr('content')
        }
    });
</script>
