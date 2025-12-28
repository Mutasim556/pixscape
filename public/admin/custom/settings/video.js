$(document).on('click', '#view_button', function () {
    
    let cat = $(this).closest('tr').data('id');
    $.ajax({
        type: "get",
        url: 'video/' + cat + "/edit",
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#iframe_id').attr('src',data.video_link)
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
                    $('button[type=button]', '#edit_video_form').click();
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

$(document).on('click', '#edit_button', function () {
    $('#edit_video_form').trigger('reset');
    $('#edit_video_form .err-mgs').each(function(id,val){
        $(this).prev('input').removeClass('border-danger is-invalid')
        $(this).prev('textarea').removeClass('border-danger is-invalid')
        $(this).empty();
    })
    let cat = $(this).closest('tr').data('id');
    $.ajax({
        type: "get",
        url: 'video/' + cat + "/edit",
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#edit_video_form #video_id').val(data.id);
            $('#edit_video_form #video_title').val(data.description);
            $('#edit_video_form #video_link').val(data.video_link);
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
                    $('button[type=button]', '#edit_video_form').click();
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


//update data
$('#edit_video_form').submit(function (e) {
    e.preventDefault();
    $('button[type=submit]', this).html(submit_btn_after+'....');
    $('button[type=submit]', this).addClass('disabled');
    var trid = '#trid-'+$('#video_id', this).val();
    var formData = new FormData(this);
    formData.append("_method","PUT");
    $.ajax({
        type: "post",
        url: 'video/' + $('#video_id','#edit_video_form').val(),
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
            console.log(data);
            $('button[type=submit]', '#edit_video_form').html(submit_btn_before);
            $('button[type=submit]', '#edit_video_form').removeClass('disabled');
            $('td:nth-child(1)',trid).html(data.video.video_link?`<button data-bs-toggle="modal" style="cursor: pointer;"
                                                        data-bs-target="#view-video-modal" id="view_button"
                                                        class="btn btn-primary py-1 px-2">View</button>`:no_file);

            $('td:nth-child(2)',trid).html(data.video.description);
            swal({
                icon: "success",
                title: data.title,
                text: data.text,
                confirmButtonText: data.confirmButtonText,
            }).then(function () {
                $('#edit_video_form .err-mgs').each(function(id,val){
                    $(this).prev('input').removeClass('border-danger is-invalid')
                    $(this).prev('textarea').removeClass('border-danger is-invalid')
                    $(this).empty();
                })
                $('#edit_video_form').trigger('reset');
                $('button[type=button]', '#edit_video_form').click();
            });
        },
        error: function (err) {
            $('button[type=submit]', '#edit_video_form').html('Submit');
            $('button[type=submit]', '#edit_video_form').removeClass('disabled');
            $('#edit_video_form .err-mgs').each(function(id,val){
                $(this).prev('input').removeClass('border-danger is-invalid')
                $(this).prev('textarea').removeClass('border-danger is-invalid')
                $(this).empty();
            })
            $.each(err.responseJSON.errors,function(idx,val){
                $('#edit_video_form #'+idx).next('.err-mgs').empty().append(val);
                $('#edit_video_form #'+idx).addClass('border-danger is-invalid')
            });
        }
    });
});