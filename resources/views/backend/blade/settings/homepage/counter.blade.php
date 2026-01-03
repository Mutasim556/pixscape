 @extends('backend.shared.layouts.admin')
 @push('title')
     {{ __('admin_local.Counters') }}
 @endpush
 @push('css')
     <link rel="stylesheet" href="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/assets/css/custom.css') }}">
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
     {{-- Add User Modal Start --}}

     <div class="modal fade" id="add-counter-modal" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header d-flex align-items-center" style="border-bottom:1px dashed gray">
                     <h4 class="modal-title" id="myLargeModalLabel">
                         {{ __('admin_local.Add Counter') }}
                     </h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>

                 <p class="px-3 text-danger">
                     <i>{{ __('admin_local.The field labels marked with * are required input fields.') }}</i>
                 </p>
                 <div class="modal-body" style="margin-top: -20px">
                     <form method="POSt" action="" id="add_counter_form" enctype="multipart/form-data">
                         @csrf
                         <div class="row">
                             <div class="col-sm-12 col-xl-12">
                                 <ul class="nav nav-pills nav-primary my-0" id="pills-successtab" role="tablist">
                                     @php
                                         $lang = \App\Models\Admin\Language::where([
                                             ['status', 1],
                                             ['delete', 0],
                                             ['default', 1],
                                         ])->first();
                                     @endphp
                                     <li class="nav-item"><a class="nav-link active" id="pills-defaultLang-tab"
                                             data-bs-toggle="pill" href="#pills-defaultLang" role="tab"
                                             aria-controls="pills-defaultLang" aria-selected="true">{{ $lang->name }}
                                             ( {{ __('admin_local.Default') }} )</a></li>
                                     @foreach (getLangs() as $lang)
                                         <li class="nav-item"><a class="nav-link" id="pills-{{ $lang->name }}-tab"
                                                 data-bs-toggle="pill" href="#pills-{{ $lang->name }}" role="tab"
                                                 aria-controls="pills-{{ $lang->name }}"
                                                 aria-selected="true">{{ $lang->name }}</a></li>
                                     @endforeach
                                 </ul>
                                 <div class="tab-content mt-3" id="pills-successtabContent">
                                     <div class="tab-pane fade show active" id="pills-defaultLang" role="tabpanel"
                                         aria-labelledby="pills-defaultLang-tab">
                                         <div class="form-group">
                                             <label for="">{{ __('admin_local.Title') }} (
                                                 {{ __('admin_local.Default') }} ) *</label>
                                             <input type="text" class="form-control" name="title" id="title">
                                             <span class="text-danger err-mgs" id="title_err"></span>
                                         </div>
                                     </div>
                                     <script>
                                         var langCode = [];
                                     </script>
                                     @foreach (getLangs() as $lang)
                                         <script>
                                             langCode.push("{{ $lang->lang }}");
                                         </script>
                                         <div class="tab-pane fade" id="pills-{{ $lang->name }}" role="tabpanel"
                                             aria-labelledby="pills-{{ $lang->name }}-tab">
                                             <div class="form-group">
                                                 <label for="">{{ __('admin_local.Title') }} (
                                                     {{ $lang->name }} )</label>
                                                 <input type="text" class="form-control"
                                                     name="title_{{ $lang->lang }}" id="title_{{ $lang->lang }}">
                                             </div>

                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                 <div class="row">
                                     <div class="form-group col-md-12">
                                         <label for="">{{ __('admin_local.Counter') }}
                                             *</label>
                                         <input type="number" min="1" value="1" class="form-control" name="counter" id="counter" >
                                         <span class="text-danger err-mgs" id="counter_err"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                 <div class="row">
                                     <div class="form-group col-md-12">
                                         <label for="">{{ __('admin_local.Icon') }}
                                             *</label>
                                         <input type="file" class="form-control" name="icon" id="icon"
                                             accept="image/*"
                                             onchange="document.getElementById('prev_image').src = window.URL.createObjectURL(this.files[0])">
                                         <span class="text-danger err-mgs" id="icon_err"></span>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                 <div class="row">
                                     <div class="form-group col-md-12">
                                         <label for="">{{ __('admin_local.Preview Image') }}
                                             *</label><br>
                                         <img src="" id="prev_image" alt="" width="100%" >
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">

                         </div>
                         <div class="row mt-4 mb-2">
                             <div class="form-group col-lg-12">
                                 <button class="btn btn-danger text-white font-weight-medium waves-effect text-start"
                                     data-bs-dismiss="modal" style="float: right"
                                     type="button">{{ __('admin_local.Close') }}</button>
                                 <button class="btn btn-primary mx-2" style="float: right" type="submit"><strong><i
                                             class="fa fa-paper-plane"></i> &nbsp;
                                         {{ __('admin_local.Submit') }}</strong></button>
                             </div>

                         </div>
                     </form>
                 </div>

             </div>
             <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
     </div>

     {{-- Add User Modal End --}}

     {{-- Add User Modal Start --}}

     <div class="modal fade" id="edit-counter-modal" tabindex="-1" aria-labelledby="bs-example-modal-lg"
         aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header d-flex align-items-center" style="border-bottom:1px dashed gray">
                     <h4 class="modal-title" id="myLargeModalLabel">
                         {{ __('admin_local.Edit  counter') }}
                     </h4>
                     <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <p class="px-3 text-danger">
                     <i>{{ __('admin_local.The field labels marked with * are required input fields.') }}</i>
                 </p>
                 <div class="modal-body" style="margin-top: -20px">
                     <form id="edit_counter_form" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         <input type="hidden" id="counter_id" name="counter_id" value="">
                         <div class="row">
                             <div class="col-sm-12 col-xl-12">
                                 <ul class="nav nav-pills nav-primary my-0" id="pills-successtab" role="tablist">
                                     @php
                                         $lang = \App\Models\Admin\Language::where([
                                             ['status', 1],
                                             ['delete', 0],
                                             ['default', 1],
                                         ])->first();
                                     @endphp
                                     <li class="nav-item"><a class="nav-link active" id="epills-defaultLang-tab"
                                             data-bs-toggle="pill" href="#epills-defaultLang" role="tab"
                                             aria-controls="epills-defaultLang" aria-selected="true">{{ $lang->name }}
                                             ( {{ __('admin_local.Default') }} )</a></li>
                                     @foreach (getLangs() as $lang)
                                         <li class="nav-item"><a class="nav-link" id="epills-{{ $lang->name }}-tab"
                                                 data-bs-toggle="pill" href="#epills-{{ $lang->name }}" role="tab"
                                                 aria-controls="epills-{{ $lang->name }}"
                                                 aria-selected="true">{{ $lang->name }}</a></li>
                                     @endforeach
                                 </ul>
                                 <div class="tab-content mt-3" id="epills-successtabContent">
                                     <div class="tab-pane fade show active" id="epills-defaultLang" role="tabpanel"
                                         aria-labelledby="epills-defaultLang-tab">
                                         <div class="form-group">
                                             <label for="">{{ __('admin_local.Title') }} (
                                                 {{ __('admin_local.Default') }} ) *</label>
                                             <input type="text" class="form-control" name="title" id="title">
                                             <span class="text-danger err-mgs" id="title_err"></span>
                                         </div>

                                     </div>
                                     <script>
                                         var langCode = [];
                                     </script>
                                     @foreach (getLangs() as $lang)
                                         <script>
                                             langCode.push("{{ $lang->lang }}");
                                         </script>
                                         <div class="tab-pane fade" id="epills-{{ $lang->name }}" role="tabpanel"
                                             aria-labelledby="epills-{{ $lang->name }}-tab">
                                             <div class="form-group">
                                                 <label for="">{{ __('admin_local.Title') }} (
                                                     {{ $lang->name }} )</label>
                                                 <input type="text" class="form-control"
                                                     name="title_{{ $lang->lang }}" id="title_{{ $lang->lang }}">
                                             </div>

                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                          <div class="row">
                             <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                 <div class="row">
                                     <div class="form-group col-md-12">
                                         <label for="">{{ __('admin_local.Counter') }}
                                             *</label>
                                         <input type="number" min="1" value="1" class="form-control" name="counter" id="counter" >
                                         <span class="text-danger err-mgs" id="counter_err"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-12 col-xl-6">
                                 <div class="row">
                                     <div class="form-group col-md-12">
                                         <label for="">{{ __('admin_local.Icon') }}
                                             *</label>
                                         <input type="file" class="form-control" name="image" id="image"
                                             accept="image/*"
                                             onchange="document.getElementById('eprev_image').src = window.URL.createObjectURL(this.files[0])">
                                         <span class="text-danger err-mgs" id="image_err"></span>
                                     </div>

                                 </div>
                             </div>
                             </div>
                                 <div class="row">
                                     <div class="col-sm-12 col-xl-6">
                                         <div class="row">
                                             <div class="form-group col-md-12">
                                                 <label for="">{{ __('admin_local.Preview Image') }}
                                                     *</label><br>
                                                 <img src="" id="eprev_image" alt="" width="100%">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row mt-4 mb-2">
                                     <div class="form-group col-lg-12">
                                         <button
                                             class="btn btn-danger text-white font-weight-medium waves-effect text-start"
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

     {{-- Add User Modal End --}}



     <div class="container-fluid">
         <div class="row">
             <!-- Column -->
             <div class="col-lg-12 mx-auto">
                 <div class="card">
                     <div class="card-header py-3" style="border-bottom: 2px dashed gray">
                         <h3 class="card-title mb-0 text-center">{{ __('admin_local.counter') }}</h3>
                     </div>

                     <div class="card-body">
                         @if (hasPermission(['counter-store']))
                             <div class="row mb-3">
                                 <div class="col-md-3">
                                     <button class="btn btn-success" type="btn" data-bs-toggle="modal"
                                         data-bs-target="#add-counter-modal">+
                                         {{ __('admin_local.Add counter') }}</button>
                                 </div>
                             </div>
                         @endif

                         <div class="table-responsive theme-scrollbar">
                             <table id="basic-1" class="display table-bordered">
                                 <thead>
                                     <tr>
                                         <th>{{ __('admin_local.Icon') }}</th>
                                         <th>{{ __('admin_local.Title') }}</th>
                                         <th>{{ __('admin_local.Counter') }}</th>
                                         <th>{{ __('admin_local.Status') }}</th>
                                         <th>{{ __('admin_local.Action') }}</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($counters as $counter)
                                         <tr id="trid-{{ $counter->id }}" data-id="{{ $counter->id }}">
                                             <td>
                                                 @if ($counter->image)
                                                     <img height="50px" src="{{ asset($counter->image) }}"
                                                         alt="">
                                                 @else
                                                     {{ __('admin_local.No File') }}
                                                 @endif
                                             </td>
                                             <td>{{ $counter->title }}</td>
                                             <td>{!! $counter->counter !!}</td>
                                             <td class="text-center">
                                                 @if (hasPermission(['counter-update']))
                                                     <span
                                                         class="mx-2">{{ $counter->status == 0 ? 'Inactive' : 'Active' }}</span><input
                                                         data-status="{{ $counter->status == 0 ? 1 : 0 }}"
                                                         id="status_change" type="checkbox" data-toggle="switchery"
                                                         data-color="green" data-secondary-color="red" data-size="small"
                                                         {{ $counter->status == 1 ? 'checked' : '' }} />
                                                 @else
                                                     <span
                                                         class="badge badge-danger">{{ __('admin_local.No Permission') }}</span>
                                                 @endif
                                             </td>
                                             <td>
                                                 @if (hasPermission(['counter-update', 'counter-delete']))
                                                     <div class="dropdown">
                                                         <button
                                                             class="btn btn-info text-white px-2 py-1 dropbtn">{{ __('admin_local.Action') }}
                                                             <i class="fa fa-angle-down"></i></button>
                                                         <div class="dropdown-content">
                                                             @if (hasPermission(['counter-update']))
                                                                 <a data-bs-toggle="modal" style="cursor: pointer;"
                                                                     data-bs-target="#edit-counter-modal"
                                                                     class="text-primary" id="edit_button"><i
                                                                         class=" fa fa-edit mx-1"></i>{{ __('admin_local.Edit') }}</a>
                                                             @endif
                                                             @if (hasPermission(['counter-delete']))
                                                                 <a class="text-danger" id="delete_button"
                                                                     style="cursor: pointer;"><i
                                                                         class="fa fa-trash mx-1"></i>
                                                                     {{ __('admin_local.Delete') }}</a>
                                                             @endif
                                                         </div>
                                                     </div>
                                                 @else
                                                     <span
                                                         class="badge badge-danger">{{ __('admin_local.No Permission') }}</span>
                                                 @endif
                                             </td>
                                         </tr>
                                     @endforeach
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
     <script src="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/assets/js/sweet-alert/sweetalert.min.js') }}">
     </script>
     <script
         src="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}">
     </script>
     <script src="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/plugins/switchery/switchery.min.js') }}">
     </script>
     <script src="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/assets/js/select2/select2.full.min.js') }}">
     </script>
     {{-- <script src="{{ asset(env('ASSET_DIRECTORY','public').'/'.'inventory/assets/js/select2/select2-custom.js') }}"></script> --}}
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
         $('[data-toggle="switchery"]').each(function(idx, obj) {
             new Switchery($(this)[0], $(this).data());
         });
         $('.js-example-basic-single').select2({
             dropdownParent: $('#add-brand-modal')
         });
         $('.js-example-basic-single1').select2({
             dropdownParent: $('#edit-brand-modal')
         });
         $(document).on('select2:open', () => {
             document.querySelector('.select2-search__field').focus();
         });
         var oTable = $("#basic-1").DataTable({
             "language": {
                 "decimal": "",
                 "emptyTable": "{{ __('admin_local.No data available in table') }}",
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

         var form_url = "{{ route('admin.pages.homepage.counter.store') }}";
         var submit_btn_after =
             `<strong>{{ __('admin_local.Saving ') }} &nbsp; <i class="fa fa-rotate-right fa-spin"></i></strong>`;
         var submit_btn_before =
             `<strong><i class="fa fa-paper-plane"></i> &nbsp; {{ __('admin_local.Submit') }}</strong>`;
         var no_permission_mgs = `{{ __('admin_local.No Permission') }}`;
         var comfirm_btn = `{{ __('admin_local.Ok') }}`;


         var delete_swal_title = `{{ __('admin_local.Are you sure?') }}`;
         var delete_swal_text =
             `{{ __('admin_local.Once deleted, you will not be able to recover this data') }}`;
         var delete_swal_cancel_text = `{{ __('admin_local.Delete request canceld successfully') }}`;
         var no_file = `{{ __('admin_local.No file') }}`;
         var base_url = `{{ baseUrl() }}`;
         var translate_url = `{{ route('admin.translateString') }}`;
     </script>
     <script>
         var projPoint = `{{ __('admin_local.counter Points') }}`;
         var defa = `{{ __('admin_local.Default') }}`;
     </script>
     <script src="{{ asset(env('ASSET_DIRECTORY', 'public') . '/' . 'admin/custom/counter/counter.js') }}"></script>
     {{-- <script src="{{ asset(env('ASSET_DIRECTORY','public').'/'.'inventory/custom/user/user_list.js') }}"></script> --}}
 @endpush
