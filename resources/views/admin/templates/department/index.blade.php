@extends('admin.layouts.app')

@section('title')
{{-- Set The Title Like Department  --}}
- <?php echo ucfirst(explode(".",Request::route()->getName())[0]); ?>
@endsection

@section('styleFile')
<!-- BEGIN TABLE CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css') }}">
<!-- END TABLE CSS-->
@endsection

@section('style')
{{-- style code --}}
@endsection
@section('content')

@include('admin.templates.widgets.breadcrumbs')
<div class="content-body">

    @include('admin.templates.widgets.error')
    {{-- @include('admin.templates.widgets.success') --}}
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h4 class="card-title">Configuration option</h4> --}}
                        <div class="col-md-2 col-sm-2 col-4 "> 
                            <h5 class="card-title">
                                <button class="btn btn-xs btn-block btn-outline-cyan mb-1 onblock-callback" data-toggle="modal" data-backdrop="false" data-target="#departmentAdd">
                                    <i class="ft-plus"></i>
                                    Add    
                                </button>
                            </h5>
                        </div>                        
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                {{-- <li>
                                <a data-action="collapse">
                                    <i class="ft-minus"></i>
                                </a>
                            </li> --}}
                            <li>
                                <a data-action="reload">
                                    <i class="ft-rotate-cw"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="expand">
                                    <i class="ft-maximize"></i>
                                </a>
                            </li>
                            {{-- <li>
                            <a data-action="close">
                                <i class="ft-x"></i>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered dataex-res-configuration">
                        <thead>
                            <tr>
                                <th>Department Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $key => $department)
                            <tr>
                                <td>{{ $department->department_name }}</td>
                                <td>
                                    <a href="{{ route('department.edit',[$department->id]) }}" class="btn btn-md btn-outline-primary">
                                        <i class="ft-edit-3"></i>
                                        Edit
                                    </a>
                                    <a href="{{ route('department.destroy',[$department->id]) }}" class="btn btn-md btn-outline-warning">
                                        <i class="la la-exclamation-circle"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section id="modal-themes">
    <div class="modal fade text-left" id="departmentAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-cyan">
                <div class="modal-header bg-cyan white">
                    <h4 class="modal-title white" id="myModalLabel8">Add Department</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('department.store') }}">
                    @csrf
                    <div class="modal-body">
                        <label>Department Name: </label>
                        <div class="form-group position-relative has-icon-left">
                            <input type="text" name="department_name" placeholder="Department Name" class="form-control">
                            {{-- <div class="form-control-position">
                            <i class="la la-envelope font-medium-5 line-height-1 text-muted icon-align"></i>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-warning" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-cyan">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>   
</section>
</div>
@endsection

@section('scriptFile')
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/buttons.colVis.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.colReorder.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.fixedHeader.min.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->

<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('app-assets/js/scripts/tables/datatables-extensions/datatable-responsive.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
@endsection

@section('footerScript')
<script type="text/javascript">

</script>
@endsection