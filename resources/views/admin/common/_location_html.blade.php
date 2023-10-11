<div class="col-md-3">
    <select class="form-control select2" data-placeholder="Select Region" id="region_id"
            name="reg_id" onchange="getCountry(this.value)">
        <option label="Select Region"></option>
        <?php foreach ($region as $reg_key => $reg_val)
        {
        ?>
        <option value="<?=$reg_val->con_id?>" <?=isset($result->con_id) ? ($result->con_id == $reg_val->con_id ? 'selected="selected"':''):''?>><?=$reg_val->con_name?></option>
        <?php
        }?>
    </select>
    <input type="hidden" id="reg_id_hidden" value="<?=isset($result->con_id) ? $result->con_id:''?>">
</div>
<div class="col-md-3">
    <select class="form-control select2" data-placeholder="Select Country"
            name="cnt_id" id="country_id">
        <option label="Select Country"></option>

    </select>
    <input type="hidden" id="cnt_id_hidden" value="<?=isset($result->cnt_id) ? $result->cnt_id:''?>">
</div>
<div class="col-md-3">
    <select class="form-control select2" data-placeholder="Select State"
            name="sts_id" id="state_id">
        <option label="Select Country"></option>

    </select>
    <input type="hidden" id="sts_id_hidden" value="<?=isset($result->sts_id) ? $result->sts_id:''?>">
</div>
<div class="col-md-3">
    <select class="form-control select2" data-placeholder="Select City"
            name="dis_id" id="districts_id">
        <option label="Select Country"></option>
    </select>
    <input type="hidden" id="dis_id_hidden" value="<?=isset($result->dis_id) ? $result->dis_id:''?>">
</div>
