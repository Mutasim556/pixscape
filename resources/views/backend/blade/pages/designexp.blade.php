@extends('backend.shared.layouts.admin')
@push('title')
    {{ __('admin_local.Design and Expertise') }}
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/assets/css/custom.css') }}">
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
        <div class="row">
            <!-- Column -->
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header py-3" style="border-bottom: 2px dashed gray">
                        <h3 class="card-title mb-0 text-center">{{ __('admin_local.Design and Expertise') }}</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.pages.designexp.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 py-2 text-end">
                                    <label for="">{{ __('admin_local.Title') }}</label>
                                </div>
                                <div class="col-md-5">
                                    <textarea class="form-control" name="title" id="title" >{{ $designexp?$designexp->title:'' }}</textarea>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3 py-2 text-end">
                                    <label for="">{{ __('admin_local.Short Description') }}</label>
                                </div>
                                <div class="col-md-5">
                                    <textarea class="form-control" name="short_description" id="short_description" >{{ $designexp?$designexp->short_description:'' }}</textarea>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3 py-2 text-end">
                                    <label for="">{{ __('admin_local.Button Text') }}</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="button_text" id="button_text" value="{{ $designexp?$designexp->button_text:'' }}" />
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3 py-2 text-end">
                                    <label for="">{{ __('admin_local.Image') }}</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="file" class="form-control" name="image" id="image" onchange="document.getElementById('prev_image').src = window.URL.createObjectURL(this.files[0])" accept="image/*"/>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3 py-2 text-end">
                                    <label for="">{{ __('admin_local.Preview Image') }}</label>
                                </div>
                                <div class="col-md-5">
                                     <img src="{{ asset($designexp?$designexp->image:'') }}" id="prev_image" alt=""  width="100%">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 py-2">

                                </div>
                                <div class="col-md-2">
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
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/assets/js/select2/select2.full.min.js') }}"></script>
    {{-- <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'inventory/assets/js/select2/select2-custom.js') }}"></script> --}}
    <script>
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
        var base_url = '{{ URL::to("/") }}';
        var asset_url = '{{ URL::to("/")."/".env("ASSET_DIRECTORY")."/" }}';


        var delete_swal_title = `{{ __('admin_local.Are you sure?') }}`;
        var delete_swal_text =
            `{{ __('admin_local.Once deleted, you will not be able to recover this size data') }}`;
        var delete_swal_cancel_text = `{{ __('admin_local.Delete request canceld successfully') }}`;
        var no_file = `{{ __('admin_local.No file') }}`;
    </script>
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/custom/settings/slider.js') }}"></script>
    {{-- <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'inventory/custom/user/user_list.js') }}"></script> --}}
@endpush
