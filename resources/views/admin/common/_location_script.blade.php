<script>
    // $(function() {
        function getCountry(reg_id, selected = null) {
            $.ajax({
                url: '<?=route("get-country")?>',
                method: 'POST',
                data: {'reg_id': reg_id},
                success: function (res) {
                    $("#country_id").empty();
                    var html = '<option value=""></option>';
                    const obj = JSON.parse(res);
                    $.each(obj.country, function (key, value) {
                        html += '<option value="' + value.cnt_id + '" '+(selected == value.cnt_id ? 'selected="selected"':'') +'>' + value.cnt_name + '</option>';
                    });
                    $("#country_id").html(html);
                    // ('#attribute').select2().on('change', function() {
                        $('#country_id').select2({data:data[selected]});
                    // }).trigger('change');
                    // ("#country_id").val(selected);
                    $(".select2").select2({
                        // dropdownAutoWidth: true,

                    });

                }
            });
        }

        function getState(cnt_id, selected = null) {
            $.ajax({
                url: '<?=route("get-state")?>',
                method: 'POST',
                data: {'cnt_id': cnt_id},
                success: function (res) {
                    $("#state_id").empty();
                    var html = '<option value=""></option>';
                    const obj = JSON.parse(res);
                    $.each(obj.state, function (key, value) {
                        html += '<option value="' + value.sts_id + '" '+(selected == value.sts_id ? 'selected="selected"':'') +'>' + value.sts_name + '</option>';
                    });
                    $("#state_id").html(html);
                    $(".select2").select2({
                        dropdownAutoWidth: true,

                    });

                }
            });
        }

        function getCity(sts_id, selected = null) {
            $.ajax({
                url: '<?=route("get-city")?>',
                method: 'POST',
                data: {'sts_id': sts_id},
                success: function (res) {
                    $("#districts_id").empty();
                    var html = '<option value=""></option>';
                    const obj = JSON.parse(res);
                    $.each(obj.city, function (key, value) {
                        html += '<option value="' + value.dis_id + '"  '+(selected == value.dis_id ? 'selected="selected"':'') +'>' + value.dis_name + '</option>';
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


        var reg_id = $("#region_id").find(":selected").val();
        var cnt_id = $("#cnt_id_hidden").val();
        var sts_id = $("#sts_id_hidden").val();
        var dis_id = $("#dis_id_hidden").val();

        if(reg_id != '')
        {
            getCountry(reg_id, cnt_id);
        }
        if(cnt_id != '')
        {
            getState(cnt_id, sts_id);
        }

        if(sts_id != '')
        {
            getCity(sts_id, dis_id);
        }

    // });
</script>
