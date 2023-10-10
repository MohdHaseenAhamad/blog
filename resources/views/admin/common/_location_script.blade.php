<script>
    function getCountry(reg_id)
    {
        $.ajax({
            url: '<?=route("get-country")?>',
            method: 'POST',
            data: {'reg_id': reg_id},
            success: function (res) {
                $("#country_id").empty();
                var html = '<option value=""></option>';
                const obj = JSON.parse(res);
                $.each(obj.country, function (key, value) {
                    html += '<option value="' + value.cnt_id + '">' + value.cnt_name + '</option>';
                });
                $("#country_id").html(html);
                $(".select2").select2({
                    dropdownAutoWidth: true,

                });

            }
        });
    }

    function getState(cnt_id)
    {
        $.ajax({
            url: '<?=route("get-state")?>',
            method: 'POST',
            data: {'cnt_id': cnt_id},
            success: function (res) {
                $("#state_id").empty();
                var html = '<option value=""></option>';
                const obj = JSON.parse(res);
                $.each(obj.state, function (key, value) {
                    html += '<option value="' + value.sts_id + '">' + value.sts_name + '</option>';
                });
                $("#state_id").html(html);
                $(".select2").select2({
                    dropdownAutoWidth: true,

                });

            }
        });
    }

    function getCity(sts_id)
    {
        $.ajax({
            url: '<?=route("get-city")?>',
            method: 'POST',
            data: {'sts_id': sts_id},
            success: function (res) {
                $("#districts_id").empty();
                var html = '<option value=""></option>';
                const obj = JSON.parse(res);
                $.each(obj.city, function (key, value) {
                    html += '<option value="' + value.dis_id + '">' + value.dis_name + '</option>';
                });
                $("#districts_id").html(html);

                $(".select2").select2({
                    dropdownAutoWidth: true,

                });

            }
        });
    }

    $.ajaxSetup
    ({
        headers: {
            'X-CSRF-TOKEN':
                $('meta[name ="csrf-token"]').attr('content')
        }
    });

    $(document).on('change', '#region_id', function () {

        var reg_id = $(this).val();
        getCountry(reg_id);

    });
    $(document).on('change', '#country_id', function () {

        var cnt_id = $(this).val();
        getState(cnt_id);

    });
    $(document).on('change', '#state_id', function () {

        var sts_id = $(this).val();
        getCity(sts_id);

    });

    $(document).ready(function ()
    {
        var reg_id = $("#reg_id_hidden").val();
        getCountry(reg_id);
        // $("#region_id").val(reg_id).trigger('change');
        $("#region_id option[value="+reg_id+"]").trigger('change');

        var cnt_id = $("#cnt_id_hidden").val();
        getState(cnt_id);
        // $("#country_id").val(cnt_id).trigger('change');
        $("#country_id option[value="+cnt_id+"]").attr('selected', 'selected');

        var sts_id = $("#sts_id_hidden").val();
        // $("#state_id").val(sts_id).trigger('change');
        getCity(sts_id);
        $("#state_id option[value="+sts_id+"]").attr('selected', 'selected');


        var dis_id = $("#dis_id_hidden").val();
        // $("#districts_id").val(dis_id).trigger('change');
        $("#dis_id option[value="+dis_id+"]").attr('selected', 'selected');
    });




</script>
