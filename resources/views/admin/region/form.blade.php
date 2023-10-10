@include('admin.common.header')
@include('admin.common.side-bar')

<style>


    .form-control {
        /*font-family: system-ui, sans-serif;*/
        /*font-size: 2rem;*/
        /*font-weight: bold;*/
        line-height: 1.1;
        display: grid;
        grid-template-columns: 1em auto;
        gap: 0.5em;
    }

    .form-control + .form-control {
        margin-top: 1em;
    }

    .form-control--disabled {
        color: var(--form-control-disabled);
        cursor: not-allowed;
    }

    input[type="checkbox"] {
        /* Add if not using autoprefixer */
        -webkit-appearance: none;
        /* Remove most all native input styles */
        appearance: none;
        /* For iOS < 15 */
        background-color: var(--form-background);
        /* Not removed via appearance */
        margin: 0;

        font: inherit;
        color: currentColor;
        width: 1.15em;
        height: 1.15em;
        border: 0.15em solid currentColor;
        border-radius: 0.15em;
        transform: translateY(-0.075em);

        display: grid;
        place-content: center;
    }

    input[type="checkbox"]::before {
        content: "";
        width: 0.65em;
        height: 0.65em;
        clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%);
        transform: scale(0);
        transform-origin: bottom left;
        transition: 120ms transform ease-in-out;
        box-shadow: inset 1em 1em var(--form-control-color);
        /* Windows High Contrast Mode */
        background-color: CanvasText;
    }

    input[type="checkbox"]:checked::before {
        transform: scale(1);
    }

    input[type="checkbox"]:focus {
        outline: max(2px, 0.15em) solid currentColor;
        outline-offset: max(2px, 0.15em);
    }

    input[type="checkbox"]:disabled {
        --form-control-color: var(--form-control-disabled);

        color: var(--form-control-disabled);
        cursor: not-allowed;
    }
</style>


<!-- ########## START: MAIN PANEL ########## -->
<div class="pd-15">
    <h4 class="tx-gray-800 mg-b-5"><?=$title?></h4>
</div>

<?php
//    dd($data);
?>
<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper">


        <form action="{{url('admin/region/save/'.$reg_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="row p-4">
                        <?php foreach ($results as $key => $value)
                        {
                        ?>
                        <div class="col-md-3">
                            <label class="form-control">
                                <input type="checkbox" name="region_map[<?=$value->cnt_id?>]" <?=in_array($value->cnt_id,$data) ?'checked':''?>/>
                                <?=$value->cnt_name?>
                            </label>
                        </div>
                        <?php
                        }?>

                    </div>
                </div>
            </div>


            <div class="mg-l-10 mg-t-25 pd-t-4">
                <a href="{{url('admin/region')}}" class="btn btn-warning tx-11 pd-y-12 tx-uppercase tx-spacing-2">Back</a>
                <button type="submit" class="btn btn-info tx-11 pd-y-12 tx-uppercase tx-spacing-2">Save</button>
            </div>
        </form>
    </div><!-- br-section-wrapper -->
</div>


@include('admin.common.footer')


<script>


    function sanitizeStringForURL(string, to_show) {
        var v = $.trim(string);
        v = v.toLowerCase();
        var v = v.replace(/[^a-z0-9]/gi, '-');
        var v = v.replace(/-+/gi, '-');
        $('#' + to_show).val(v);
    }

</script>
