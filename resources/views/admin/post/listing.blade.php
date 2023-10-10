@include('admin.common.header')
@include('admin.common.side-bar')


<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Category</h4>

</div>
<div class="pd-30">

    <a href="{{url('/admin/post/add-post/')}}" class="btn btn-primary redirect_btn"><i class="fa fa-save mg-r-10"></i> Add Category</a>
</div>

<div class="br-pagebody mg-t-5 pd-x-30">

    <div class="bd bd-gray-300 rounded table-responsive">
        <table class="table mg-b-0">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Create Date</th>
                <th>Update Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($results))
            {
            foreach ($results as $value)
            {
            ?>
            <tr>
                <th scope="row"><?=$value->id?></th>
                <td><?=$value->title?></td>
                <td><?=$value->slug?></td>
                <td><?=$value->created_at?></td>
                <td><?=$value->updated_at?></td>
                <td>
                    <a href="{{url('/admin/post/edit-post/'.$value->id)}}" class="btn btn-primary"><i class="fa fa-edit mg-r-10"></i> Edit</a>
                </td>

            </tr>
            <?php
            }
            }?>


            </tbody>
        </table>
    </div>

</div><!-- br-pagebody -->


@include('admin.common.footer')
