$(document).on('submit','#add_value_form',function(e){
    e.preventDefault();
    $('button[type=submit]', this).html('Submitting'+'....');
    $('button[type=submit]', this).addClass('disabled');
    var formData = new FormData(this);
    $.ajax({
        type: "POST",
        url: form_url,
        data: formData,
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (rdata) {
            $('button[type=submit]', '#add_value_form').html('Submit');
            $('button[type=submit]', '#add_value_form').removeClass('disabled');
            swal({
                icon: "success",
                title: rdata.title,
                text: rdata.text,
                confirmButtonText: rdata.confirmButtonText,
            }).then(function(){
                window.location.reload();
            })
        },
        error: function (err) {
            $('button[type=submit]', '#add_value_form').html('Submit');
            $('button[type=submit]', '#add_value_form').removeClass('disabled');
            if(err.status===403){
                var err_message = err.responseJSON.message.split("(");
                swal({
                    icon: "warning",
                    title: "Warning !",
                    text: err_message[0],
                    confirmButtonText: "Ok",
                }).then(function(){
                    $('button[type=button]', '#add_value_form').click();
                });

            }

            $('#add_value_form .err-mgs').each(function(id,val){
                $(this).prev('input').removeClass('border-danger is-invalid')
                $(this).prev('textarea').removeClass('border-danger is-invalid')
                $(this).prev('span').find('.select2-selection--single').attr('id','')
                $(this).empty();
            })
            $.each(err.responseJSON.errors,function(idx,val){
                // console.log('#add_course_form #'+idx);
                var exp = idx.replace('.','_');
                var exp2 = exp.replace('_0','');

                $('#add_value_form #'+exp).addClass('border-danger is-invalid')
                $('#add_value_form #'+exp2).addClass('border-danger is-invalid')
                $('#add_value_form #'+exp).next('span').find('.select2-selection--single').attr('id','invalid-selec2')
                $('#add_value_form #'+exp).next('.err-mgs').empty().append(val);

                $('#add_value_form #'+exp+"_err").empty().append(val);
            })
        },
    })
});

//update status
$(document).on('change','#status_change',function(){
    var status = $(this).data('status');
    var update_id = $(this).closest('tr').data('id');
    var cat_td = $(this).parent();
    cat_td.empty().append(`<i class="fa fa-refresh fa-spin"></i>`);
    $.ajax({
        type: "get",
        url: 'values/update/status/'+update_id+"/"+status,
        success: function (data) {
            cat_td.empty().append(`<span class="mx-2">${data.status==0?'Inactive':'Active'}</span><input data-status="${data.status==1?0:1}" id="status_change" type="checkbox" data-toggle="switchery" data-color="green"  data-secondary-color="red" data-size="small" ${data.status==1?'checked':''} />`);
            // parent_td.children('input').each(function (idx, obj) {
            //     new Switchery($(this)[0], $(this).data());
            // });
            new Switchery(cat_td.find('input')[0], cat_td.find('input').data());
        },
        error: function (err) {
            var err_message = err.responseJSON.message.split("(");
            swal({
                icon: "warning",
                title: "Warning !",
                text: err_message[0],
                confirmButtonText: "Ok",
            });
        }
    });
});

// Show data on edit modal
$(document).on('click', '#edit_button', function () {
    $('#edit_value_form').trigger('reset');
    $('#edit_value_form .err-mgs').each(function(id,val){
        $(this).prev('input').removeClass('border-danger is-invalid')
        $(this).prev('textarea').removeClass('border-danger is-invalid')
        $(this).empty();
    })
    let cat = $(this).closest('tr').data('id');
    $.ajax({
        type: "get",
        url: 'values/' + cat + "/edit",
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#edit_value_form #value_id').val(data.id);
            $('#edit_value_form #title').val(data.title);
            CKEDITOR.instances['details2'].setData(data.details);
            $.each(data.translations,function(key,val){
                if(val.locale=='en'){
                    return true;
                    // $('#edit_value_form #value_name').val(data.title);
                    // $('#edit_value_form #value_short_details').val(data.value_short_details);
                    // CKEDITOR.instances['value_details2'].setData(data.value_details);
                }else{
                    if(val.key=='title'){
                        $('#edit_value_form #title_'+val.locale).val(val.value);
                    }
                    if(val.key=='details'){
                        CKEDITOR.instances['details2_'+val.locale].setData(val.value);
                    }
                }
            })

        },
        error: function (err) {
            if(err.status===403){
                let err_message = err.responseJSON.message.split("(");
                swal({
                    icon: "warning",
                    title: "Warning !",
                    text: err_message[0],
                    confirmButtonText: "Ok",
                }).then(function(){
                    $('button[type=button]', '#edit_value_form').click();
                });

            }else{
                let err_message = err.responseJSON.message.split("(");
                swal({
                    icon: "warning",
                    title: "Warning !",
                    text: err_message[0],
                    confirmButtonText: "Ok",
                });
            }
        }
    });

});

$('#edit_value_form').submit(function (e) {
    e.preventDefault();
    $('button[type=submit]', this).html(submit_btn_after+'....');
    $('button[type=submit]', this).addClass('disabled');
    var trid = '#trid-'+$('#value_id', this).val();
    var formData = new FormData(this);
    formData.append("_method","PUT");
    $.ajax({
        type: "post",
        url: 'values/' + $('#value_id','#edit_value_form').val(),
        data: formData,
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $('button[type=submit]', '#edit_value_form').html(submit_btn_before);
            $('button[type=submit]', '#edit_value_form').removeClass('disabled');
            swal({
                icon: "success",
                title: data.title,
                text: data.text,
                confirmButtonText: data.confirmButtonText,
            }).then(function () {
                window.location.reload();
            });
        },
        error: function (err) {
            $('button[type=submit]', '#edit_value_form').html(submit_btn_before);
            $('button[type=submit]', '#edit_value_form').removeClass('disabled');
            if(err.status===403){
                var err_message = err.responseJSON.message.split("(");
                swal({
                    icon: "warning",
                    title: "Warning !",
                    text: err_message[0],
                    confirmButtonText: "Ok",
                }).then(function(){
                    $('button[type=button]', '#edit_value_form').click();
                });

            }

            $('#edit_value_form .err-mgs').each(function(id,val){
                $(this).prev('input').removeClass('border-danger is-invalid')
                $(this).prev('textarea').removeClass('border-danger is-invalid')
                $(this).empty();
            })

            $.each(err.responseJSON.errors,function(idx,val){

                $('#edit_value_form #'+idx).addClass('border-danger is-invalid')
                $('#edit_value_form #'+idx).next('.err-mgs').empty().append(val);
            })
        }
    });
});

//delete data
$(document).on('click','#delete_button',function(){
    var delete_id = $(this).closest('tr').data('id');
    swal({
        title: delete_swal_title,
        text: delete_swal_text,
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: "delete",
                url: 'values/'+delete_id,
                data: {
                    _token : $("input[name=_token]").val(),
                },
                success: function (data) {
                    swal({
                        icon: "success",
                        title: data.title,
                        text: data.text,
                        confirmButtonText: data.confirmButtonText,
                    }).then(function () {
                        $('#trid-'+delete_id).hide();
                    });
                },
                error: function (err) {
                    var err_message = err.responseJSON.message.split("(");
                    swal({
                        icon: "warning",
                        title: "Warning !",
                        text: err_message[0],
                        confirmButtonText: "Ok",
                    });
                }
            });

        } else {
            swal(delete_swal_cancel_text);
        }
    })
});
