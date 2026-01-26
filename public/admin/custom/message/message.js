$(document).on('change', '#status_change', function () {
    var status = $(this).data('status');
    var update_id = $(this).closest('tr').data('id');
    var cat_td = $(this).parent();
    cat_td.empty().append(`<i class="fa fa-refresh fa-spin"></i>`);
    $.ajax({
        type: "get",
        url: 'messages/update/status/' + update_id + "/" + status,
        success: function (data) {
            cat_td.empty().append(`<span class="mx-2">${data.reply_status == 0 ? 'Not-replied' : 'Replied'}</span><input data-status="${data.reply_status == 1 ? 0 : 1}" id="status_change" type="checkbox" data-toggle="switchery" data-color="green"  data-secondary-color="red" data-size="small" ${data.reply_status == 1 ? 'checked' : ''} />`);
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

$(document).on('click', '#delete_button', function () {
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
                url: 'messages/delete/' + delete_id,
                data: {
                    _token: $("input[name=_token]").val(),
                },
                success: function (data) {
                    swal({
                        icon: "success",
                        title: data.title,
                        text: data.text,
                        confirmButtonText: data.confirmButtonText,
                    }).then(function () {
                        $('#trid-' + delete_id).hide();
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
