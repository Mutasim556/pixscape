@extends('backend.shared.layouts.admin')
@push('title')
    {{ __('admin_local.Career') }}
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset(env('ASSET_DIRECTORY') . '/' . 'admin/assets/css/custom.css') }}">
@endpush
@push('page_css')
    <style>
        .loader-box {
            height: auto;
            padding: 10px 0px;
        }

        .loader-box .loader-35:after {
            height: 20px;
            width: 10px;
        }

        .loader-box .loader-35:before {
            width: 20px;
            height: 10px;
        }

        .cke_contents {
            border: 2px dashed #5c61f2 !important;
            border-radius: 0px 0px 10px 10px
        }

        .cke_top {
            border: 2px dashed #5c61f2 !important;
            border-bottom: 0px !important;
            border-radius: 10px 10px 0px 0px
        }

        .invalid-selec2 {
            border-color: red !important;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header py-3" style="border-bottom: 2px dashed gray">
                        <h3 class="card-title mb-0 text-center">{{ __('admin_local.Contact Informatins') }}</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.pages.career.update',1) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-3 py-2">
                                    <label for="">{{ __('admin_local.Title') }}</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="title" id="title" class="form-control" cols="30" rows="10">{{ $career->title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3 py-2">
                                    <label for="">{{ __('admin_local.Details') }}</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="details" id="details" class="form-control" cols="30" rows="10">{{ $career->details }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3 py-2">
                                    <label for="">{{ __('admin_local.Image') }}</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" name="image" id="image" class="form-control" onchange="document.getElementById('eprev_service_image').src = window.URL.createObjectURL(this.files[0])">

                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3 py-2">
                                    <label for="">{{ __('admin_local.Preview Image') }}</label>
                                </div>
                                <div class="col-md-9">
                                    <img src="{{ asset($career->image) }}" id="eprev_service_image" alt="" width="100%">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3 py-2">
                                </div>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-primary">{{ __('admin_local.Update') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- Row -->
    </div>
@endsection
@push('js')
    <script src="{{ asset(env('ASSET_DIRECTORY') . '/' . 'admin/assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script
        src="{{ asset(env('ASSET_DIRECTORY') . '/' . 'admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}">
    </script>
    <script src="{{ asset(env('ASSET_DIRECTORY') . '/' . 'admin/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset(env('ASSET_DIRECTORY') . '/' . 'admin/assets/js/select2/select2.full.min.js') }}"></script>
    {{-- <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'inventory/assets/js/select2/select2-custom.js') }}"></script> --}}
    <script src="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/assets/js/editor/ckeditor/ckeditor.js') }}">
    </script>
    <script
        src="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/assets/js/editor/ckeditor/adapters/jquery.js') }}">
    </script>
    <script src="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/assets/js/editor/ckeditor/styles.js') }}">
    </script>
    <script
        src="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/assets/js/editor/ckeditor/ckeditor.custom.js') }}">
    </script>
    <script>
        CKEDITOR.replace('details', {
            on: {
                contentDom: function(evt) {
                    // Allow custom context menu only with table elemnts.
                    evt.editor.editable().on('contextmenu', function(contextEvent) {
                        var path = evt.editor.elementPath();

                        if (!path.contains('table')) {
                            contextEvent.cancel();
                        }
                    }, null, null, 5);
                }
            }
        });
        $('[data-toggle="switchery"]').each(function(idx, obj) {
            new Switchery($(this)[0], $(this).data());
        });
        $('.js-example-basic-single').select2({
            dropdownParent: $('#add-slider-modal')
        });
        $('.js-example-basic-single1').select2({
            dropdownParent: $('#edit-slider-modal')
        });
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });
        var oTable = $("#basic-1").DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "{{ __('admin_local.No size available in table') }}",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "Showing 0 to 0 of 0 entries",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Show _MENU_ entries",
                "loadingRecords": "Loading...",
                "processing": "",
                "search": "Search:",
                "zeroRecords": "No matching records found",
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "Next",
                    "previous": "Previous"
                },
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                }
            }
        });
        var submit_btn_after = `{{ __('admin_local.Submitting') }}`;
        var submit_btn_before = `{{ __('admin_local.Submit') }}`;
        var no_permission_mgs = `{{ __('admin_local.No Permission') }}`;
        var base_url = '{{ URL::to('/') }}';
        var asset_url = '{{ URL::to('/') . '/' . env('ASSET_DIRECTORY') . '/' }}';


        var delete_swal_title = `{{ __('admin_local.Are you sure?') }}`;
        var delete_swal_text =
            `{{ __('admin_local.Once deleted, you will not be able to recover this size data') }}`;
        var delete_swal_cancel_text = `{{ __('admin_local.Delete request canceld successfully') }}`;
        var no_file = `{{ __('admin_local.No file') }}`;
    </script>
    <script src="{{ asset(env('ASSET_DIRECTORY') . '/' . 'admin/custom/settings/slider.js') }}"></script>
    {{-- <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'inventory/custom/user/user_list.js') }}"></script> --}}
@endpush
