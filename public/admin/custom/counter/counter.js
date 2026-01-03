$(document).on('submit', '#add_counter_form', function (e) {
    e.preventDefault();
    $('button[type=submit]', this).html(submit_btn_after + '....');
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
            $('button[type=submit]', '#add_counter_form').html(submit_btn_before);
            $('button[type=submit]', '#add_counter_form').removeClass('disabled');
            swal({
                icon: "success",
                title: rdata.title,
                text: rdata.text,
                confirmButtonText: rdata.confirmButtonText,
            }).then(function () {
                let data = rdata.counter;
                let update_status_btn = `<span class="badge badge-danger">${no_permission_mgs}</span>`;
                if (rdata.hasEditPermission) {
                    update_status_btn = `<span class="mx-2">${data.status == 0 ? 'Inactive' : 'Active'}</span><input
                    data-status="${data.status == 0 ? 1 : 0}"
                    id="status_change" type="checkbox" data-toggle="switchery"
                    data-color="green" data-secondary-color="red" data-size="small" checked />`;
                }
                let action_option = `<span class="badge badge-danger">${no_permission_mgs}</span>`;
                if (rdata.hasAnyPermission) {
                    action_option = `<div class="dropdown"><button class="btn btn-info text-white px-2 py-1 dropbtn">Action <i class="fa fa-angle-down"></i></button> <div class="dropdown-content">`;
                    if (rdata.hasEditPermission) {
                        action_option = action_option + `<a data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#edit-member-modal" class="text-primary" id="edit_button"><i class=" fa fa-edit mx-1"></i>Edit</a>`;
                    }
                    if (rdata.hasDeletePermission) {
                        action_option = action_option + `<a class="text-danger" id="delete_button" style="cursor: pointer;"><i class="fa fa-trash mx-1"></i> Delete</a>`;
                    }

                    action_option = action_option + `</div></div>`;
                }

                let counterM_image = data.image ? '<img style="height: 50px;width:50px;" src="' + base_url + '/' + data.image + '">' : no_file;


                $('#basic-1 tbody').append(`<tr id="trid-${data.id}" data-id="${data.id}"><td>${counterM_image}</td><td>${data.title}</td><td>${data.counter}</td>
                <td class="text-center">${update_status_btn}</td>
                <td>${action_option}</td></tr>`);

                new Switchery($('#trid-' + data.id).find('input')[0], $('#trid-' + data.id).find('input').data());

                $('#add_counter_form .err-mgs').each(function (id, val) {
                    $(this).prev('input').removeClass('border-danger is-invalid')
                    $(this).prev('textarea').removeClass('border-danger is-invalid')
                    $(this).empty();
                })
                $('#add_counter_form').trigger('reset');
                $('button[type=button]', '#add_counter_form').click();
            })
        },
        error: function (err) {
            $('button[type=submit]', '#add_counter_form').html(submit_btn_before);
            $('button[type=submit]', '#add_counter_form').removeClass('disabled');
            if (err.status === 403) {
                var err_message = err.responseJSON.message.split("(");
                swal({
                    icon: "warning",
                    title: "Warning !",
                    text: err_message[0],
                    confirmButtonText: "Ok",
                }).then(function () {
                    $('button[type=button]', '#add_counter_form').click();
                });

            }

            $('#add_counter_form .err-mgs').each(function (id, val) {
                $(this).prev('input').removeClass('border-danger is-invalid')
                $(this).prev('textarea').removeClass('border-danger is-invalid')
                $(this).prev('span').find('.select2-selection--single').attr('id', '')
                $(this).empty();
            })
            $.each(err.responseJSON.errors, function (idx, val) {
                // console.log('#add_course_form #'+idx);
                var exp = idx.replace('.', '_');
                var exp2 = exp.replace('_0', '');

                $('#add_counter_form #' + exp).addClass('border-danger is-invalid')
                $('#add_counter_form #' + exp2).addClass('border-danger is-invalid')
                $('#add_counter_form #' + exp).next('span').find('.select2-selection--single').attr('id', 'invalid-selec2')
                $('#add_counter_form #' + exp).next('.err-mgs').empty().append(val);

                $('#add_counter_form #' + exp + "_err").empty().append(val);
            })
        },
    })
});

//update status
$(document).on('change', '#status_change', function () {
    var status = $(this).data('status');
    var update_id = $(this).closest('tr').data('id');
    var cat_td = $(this).parent();
    cat_td.empty().append(`<i class="fa fa-refresh fa-spin"></i>`);
    $.ajax({
        type: "get",
        url: 'counter/update/status/' + update_id + "/" + status,
        success: function (data) {
            cat_td.empty().append(`<span class="mx-2">${data.status == 0 ? 'Inactive' : 'Active'}</span><input data-status="${data.status == 1 ? 0 : 1}" id="status_change" type="checkbox" data-toggle="switchery" data-color="green"  data-secondary-color="red" data-size="small" ${data.status == 1 ? 'checked' : ''} />`);
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

$(document).on('click', '#edit_button', function () {
    $('#edit_counter_form').trigger('reset');
    $('#edit_counter_form .err-mgs').each(function (id, val) {
        $(this).prev('input').removeClass('border-danger is-invalid')
        $(this).prev('textarea').removeClass('border-danger is-invalid')
        $(this).empty();
    })
    let cat = $(this).closest('tr').data('id');
    $("#edit_counter_form")[0].reset();
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].setData('');
    }
    $.ajax({
        type: "get",
        url: 'counter/' + cat + "/edit",
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#edit_counter_form #counter_id').val(data.id);
            $('#edit_counter_form #title').val(data.title);
            $('#edit_counter_form #counter').val(data.counter);

            $('#edit_counter_form #eprev_image').prop('src', base_url + "/" + data.image);
        },
        error: function (err) {
            if (err.status === 403) {
                let err_message = err.responseJSON.message.split("(");
                swal({
                    icon: "warning",
                    title: "Warning !",
                    text: err_message[0],
                    confirmButtonText: "Ok",
                }).then(function () {
                    $('button[type=button]', '#edit_counter_form').click();
                });

            } else {
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

$('#edit_counter_form').submit(function (e) {
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
    e.preventDefault();
    $('button[type=submit]', this).html(submit_btn_after + '....');
    $('button[type=submit]', this).addClass('disabled');
    var trid = '#trid-' + $('#counter_id', this).val();

    var formData = new FormData(this);
    formData.append("_method", "PUT");

    $.ajax({
        type: "post",
        url: 'counter/' + $('#counter_id', '#edit_counter_form').val(),
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
            $('button[type=submit]', '#edit_counter_form').html(submit_btn_before);
            $('button[type=submit]', '#edit_counter_form').removeClass('disabled');

            $('td:nth-child(1)', trid).html(data.counter.image ? `<img style="height: 50px;" src="${base_url + '/' + data.counter.image}">` : no_file);
            $('td:nth-child(2)', trid).html(data.counter.title);
            $('td:nth-child(3)', trid).html(`${data.counter.counter}`);
            swal({
                icon: "success",
                title: data.title,
                text: data.text,
                confirmButtonText: data.confirmButtonText,
            }).then(function () {
                $('button[type=button]', '#edit_counter_form').click();
            });
        },
        error: function (err) {
            $('button[type=submit]', '#edit_counter_form').html(submit_btn_before);
            $('button[type=submit]', '#edit_counter_form').removeClass('disabled');
            if (err.status === 403) {
                var err_message = err.responseJSON.message.split("(");
                swal({
                    icon: "warning",
                    title: "Warning !",
                    text: err_message[0],
                    confirmButtonText: "Ok",
                }).then(function () {
                    $('button[type=button]', '#edit_counter_form').click();
                });

            }

            $('#edit_counter_form .err-mgs').each(function (id, val) {
                $(this).prev('input').removeClass('border-danger is-invalid')
                $(this).prev('textarea').removeClass('border-danger is-invalid')
                $(this).empty();
            })

            $.each(err.responseJSON.errors, function (idx, val) {

                $('#edit_counter_form #' + idx).addClass('border-danger is-invalid')
                $('#edit_counter_form #' + idx).next('.err-mgs').empty().append(val);
            })
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
                url: 'counter/' + delete_id,
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
