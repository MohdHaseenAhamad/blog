@include('admin.common.header')
@include('admin.common.side-bar')


<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Region</h4>

</div>


<div class="br-pagebody mg-t-5 pd-x-30">

    <div class="bd bd-gray-300 rounded table-responsive">
        <table class="table mg-b-0">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
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
                <th scope="row"><?=$value->reg_id?></th>
                <td><?=$value->reg_name?></td>
                <td>
                    <a href="{{url('/admin/region/edit/'.$value->reg_id.'/'.$value->reg_name)}}"
                       class="btn btn-primary"><i class="fa fa-edit mg-r-10"></i> Edit</a>
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
