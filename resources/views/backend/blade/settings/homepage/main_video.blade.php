@extends('backend.shared.layouts.admin')
@push('title')
    {{ __('admin_local.Homepage Video') }}
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
    </style>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{ __('admin_local.Homepage Video') }}</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">{{ __('admin_local.Settings ') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('admin_local.Homepage Video') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- Add video Modal Start --}}
    <div class="modal fade" id="view-video-modal" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center" style="border-bottom:1px dashed gray">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        {{ __('admin_local.View Homepage Video') }}
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="margin-top: -20px">
                    <div class="row">
                        <div class="col-md-12 py-2" style="height: 400px">
                            <iframe id="iframe_id" src="" frameborder="0"
                                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen webkitallowfullscreen
                                mozallowfullscreen style="width:100%; height:100%;">
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    {{-- Edit video Modal Start --}}

    <div class="modal fade" id="edit-video-modal" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center" style="border-bottom:1px dashed gray">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        {{ __('admin_local.Edit Homepage Video') }}
                    </h4>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <p class="px-3 text-danger">
                    <i>{{ __('admin_local.The field labels marked with * are required input fields.') }}</i>
                </p>
                <div class="modal-body" style="margin-top: -20px">
                    <form id="edit_video_form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="video_id" name="video_id" value="">
                        <div class="row">
                            <div class="col-lg-12 mt-2">
                                <label for="video_name"><strong>{{ __('admin_local.Title') }} *</strong></label>
                                <input type="text" class="form-control" name="video_title" id="video_title">
                                <span class="text-danger err-mgs"></span>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label for="video_name"><strong>{{ __('admin_local.Video Link') }}
                                        *</strong></label>
                                <input type="text" class="form-control" name="video_link" id="video_link">
                                <span class="text-danger err-mgs"></span>
                            </div>
                        </div>

                        <div class="row mt-4 mb-2">
                            <div class="form-group col-lg-12">
                                <button class="btn btn-danger text-white font-weight-medium waves-effect text-start"
                                    data-bs-dismiss="modal" style="float: right"
                                    type="button">{{ __('admin_local.Close') }}</button>
                                <button class="btn btn-primary mx-2" style="float: right"
                                    type="submit">{{ __('admin_local.Submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    {{-- Edit video Modal End --}}



    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header py-3" style="border-bottom: 2px dashed gray">
                        <h3 class="card-title mb-0 text-center">{{ __('admin_local.Homepage Video') }}</h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar">
                            <table id="basic-1" class="display table-bordered">
                                <thead>
                                    <tr>
                                        <th>{{ __('admin_local.Video') }}</th>
                                        <th>{{ __('admin_local.Title') }}</th>
                                        <th>{{ __('admin_local.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($video)


                                        <tr id="trid-{{ $video->id }}" data-id="{{ $video->id }}">
                                            <td>
                                                @if ($video->video_link)
                                                    <button data-bs-toggle="modal" style="cursor: pointer;"
                                                        data-bs-target="#view-video-modal" id="view_button"
                                                        class="btn btn-primary py-1 px-2">{{ __('admin_local.View') }}</button>
                                                @else
                                                    {{ __('admin_local.No File') }}
                                                @endif
                                            </td>
                                            <td style="width: 60% !important;">{{ $video->description }}</td>
                                            <td>
                                                @if (hasPermission(['homepage-video-update', 'homepage-video-delete']))
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-info text-white px-2 py-1 dropbtn">{{ __('admin_local.Action') }}
                                                            <i class="fa fa-angle-down"></i></button>
                                                        <div class="dropdown-content">
                                                            @if (hasPermission(['homepage-video-update']))
                                                                <a data-bs-toggle="modal" style="cursor: pointer;"
                                                                    data-bs-target="#edit-video-modal"
                                                                    class="text-primary" id="edit_button"><i
                                                                        class=" fa fa-edit mx-1"></i>{{ __('admin_local.Edit') }}</a>
                                                            @endif
                                                            {{-- @if (hasPermission(['homepage-video-delete']))
                                                                <a class="text-danger" id="delete_button"
                                                                    style="cursor: pointer;"><i
                                                                        class="fa fa-trash mx-1"></i>
                                                                    {{ __('admin_local.Delete') }}</a>
                                                            @endif --}}
                                                        </div>
                                                    </div>
                                                @else
                                                    <span
                                                        class="badge badge-danger">{{ __('admin_local.No Permission') }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            @csrf
                        </div>
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
    <script>
        $('[data-toggle="switchery"]').each(function(idx, obj) {
            new Switchery($(this)[0], $(this).data());
        });
        $('.js-example-basic-single').select2({
            dropdownParent: $('#add-video-modal')
        });
        $('.js-example-basic-single1').select2({
            dropdownParent: $('#edit-video-modal')
        });
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });
        var oTable = $("#basic-1").DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "{{ __('admin_local.No video available in table') }}",
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

        var form_url = "{{ route('admin.pages.homepage.main_video_store') }}";
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
    <script src="{{ asset(env('ASSET_DIRECTORY') . '/' . 'admin/custom/settings/video.js') }}"></script>
    {{-- <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'inventory/custom/user/user_list.js') }}"></script> --}}
@endpush
