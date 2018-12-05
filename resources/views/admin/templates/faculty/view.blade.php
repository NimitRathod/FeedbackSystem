@extends('admin.layouts.app')

@section('title')
{{-- Set The Title Like subject  --}}
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
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/selects/select2.min.css">
<!-- END TABLE CSS-->
@endsection

@section('style')
{{-- style code --}}
@endsection
@section('content')

@include('admin.templates.widgets.breadcrumbs')
<div class="content-body">
    @include('admin.templates.widgets.error') 
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-2 col-sm-2 col-4 "> 
                            <h5 class="card-title">
                                <button class="btn btn-xs btn-block btn-outline-cyan mb-1 onblock-callback" data-toggle="modal" data-backdrop="false" data-target="#addmodel">
                                    <i class="ft-plus"></i>
                                    Add    
                                </button>
                            </h5>
                        </div>                        
                        {{-- 
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a data-action="collapse">
                                        <i class="ft-minus"></i>
                                    </a>
                                </li>
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
                                <li>
                                    <a data-action="close">
                                        <i class="ft-x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body  card-dashboard">
                            <table class="table table-striped table-bordered dynamic-table">
                                <thead>
                                    <tr>
                                        <th>Faculty Name</th>
                                        <th>Email</th>
                                        <th width="100px;">Edit</th>
                                        <th width="100px;">Delete</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade text-left" id="addmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-cyan">
                <div class="modal-header bg-cyan white">
                    <h4 class="modal-title white" id="myModalLabel8">Add Faculty</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="/admin/faculty" id="formAdd" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Faculty First Name: </label>
                            <div class="form-group position-relative has-icon-left">
                                <input type="text" name="faculty_fn" placeholder="Faculty First Name" class="form-control" value="" autofocus="false">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Faculty Last Name: </label>
                            <div class="form-group position-relative has-icon-left">
                                <input type="text" name="faculty_ln" placeholder="Faculty Last Name" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Faculty Email: </label>
                            <div class="form-group position-relative has-icon-left">
                                <input type="email" name="email" placeholder="Faculty Email" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone: </label>
                            <div class="form-group position-relative has-icon-left">
                                <input type="text" name="phone" placeholder="Faculty Phone" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Post: </label>
                            <div class="form-group position-relative has-icon-left">
                                <input type="text" name="post" placeholder="Faculty Post" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn grey btn-outline-warning" data-dismiss="modal" value="Close">
                        <input type="submit" class="btn btn-outline-success" value="Add">
                    </div>
                </form>

            </div>
        </div>
    </div>  

    <div class="modal fade text-left" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-primary">
                <div class="modal-header bg-primary white">
                    <h4 class="modal-title white" id="myModalLabel8">Update Subject Name</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="" id="editform">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Faculty First Name: </label>
                            <div class="form-group position-relative has-icon-left">
                                <input type="text" id="faculty_fn" name="faculty_fn" placeholder="Faculty First Name" class="form-control" value="" autofocus="false">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Faculty Last Name: </label>
                            <div class="form-group position-relative has-icon-left">
                                <input type="text" id="faculty_ln" name="faculty_ln" placeholder="Faculty Last Name" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                           <label>Faculty Email: </label>
                           <div class="form-group position-relative has-icon-left">
                            <input type="email" id="email" name="email" placeholder="Faculty Email" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Phone: </label>
                        <div class="form-group position-relative has-icon-left">
                            <input type="text" id="phone" name="phone" placeholder="Faculty Phone" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Post: </label>
                        <div class="form-group position-relative has-icon-left">
                            <input type="text" id="post" name="post" placeholder="Faculty Post" class="form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary" data-dismiss="modal" value="Close">
                    <input type="submit" class="btn btn-outline-primary" value="Update">
                </div>
            </form>

        </div>
    </div>
</div>
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
<script src="{{ asset('app-assets/js/scripts/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL JS-->
@endsection

@section('footerScript')
<script type="text/javascript">

    var mytable;
    /* DELETE Record using AJAX Requres */
    $(document).on('click', '.delete', function () {
        var id = $(this).data("delete-id");
        var token = $(this).data("token");
        swal({
            title: "Are you sure?",
            text: "It will Delete Perminatly !",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "No, cancel it!",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Yes, delete it!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        })
        .then((isConfirm) => {
            if (isConfirm) {
                $.ajax(
                {
                    url: "/admin/faculty/" + id,
                    type: 'POST',
                    data: {
                        "id": id,
                        "_method": 'DELETE',
                        "_token": token
                    },
                    success: function (result) {
                        swal("Deleted!", "Your Record is deleted.", "success");
                        mytable.draw();
                    },
                    error: function (request, status, error) {
                        var val = request.responseText;
                        alert("error" + val);
                    }
                });
            } else {
                swal("Cancelled", "Your record is safe", "error");
            }
        });
    });

    /* RETRIVE DATA For Editing Purpose */
    $(document).on('click', '.edit', function () {

        var id = $(this).data("id");
        var faculty_fn = $(this).data("faculty-name");

        $('#editform #faculty_fn').val(faculty_fn);
        $('#editform #faculty_ln').val($(this).data("faculty-ln"));
        $('#editform #email').val($(this).data("email"));
        $('#editform #phone').val($(this).data("phone"));
        $('#editform #post').val($(this).data("post"));
        $('#editform').attr('action', '/admin/faculty/' + id);
        $('#editmodel').modal('show');
    });

    $(document).ready(function (e) {
        mytable = $('.dynamic-table').DataTable({
            "processing": true,
            "serverSide": true,
            "responsive": true,
            "ajax": "{{ url('admin/faculty/getDataTable') }}",
            columns: [
            {data: "faculty_fn"},
            {data: "email"},
            {data: "edit"},
            {data: "delete"}
            ]
        });

        /* ADD Record using AJAX Requres */
        var addformValidator = $("#formAdd").validate({
            ignore: ":hidden",
            errorElement: "span",
            errorClass: "text-danger",
            validClass: "text-success",
            highlight: function (element, errorClass, validClass) {
                $(element).addClass(errorClass);
                $(element.form).find("span[id=" + element.id + "-error]").addClass(errorClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass(errorClass);
                $(element.form).find("span[id=" + element.id + "-error]").removeClass(errorClass);
            },
            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: $(form).attr('action'),
                    method: $(form).attr('method'),
                    data: $(form).serialize(),
                    success: function (data) {
                        // alert($(form).serialize());
                        $('#addmodel').modal('hide');
                        swal("Good job!", "Your Record Inserted Successfully", "success");
                        $(form).trigger('reset');
                        mytable.draw();
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        var response = JSON.parse(XMLHttpRequest.responseText);
                        addformValidator.showErrors(response.errors);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }
        });

        /* Edit Record using AJAX Requres */
        var addformValidator = $("#editform").validate({
            ignore: ":hidden",
            errorElement: "span",
            errorClass: "text-danger",
            validClass: "text-success",
            highlight: function (element, errorClass, validClass) {
                $(element).addClass(errorClass);
                $(element.form).find("span[id=" + element.id + "-error]").addClass(errorClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass(errorClass);
                $(element.form).find("span[id=" + element.id + "-error]").removeClass(errorClass);
            },
            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: $(form).attr('action'),
                    method: $(form).attr('method'),
                    data: $(form).serialize(),
                    success: function (data) {
                        // alert($(form).attr('action'));
                        $('#editmodel').modal('hide');
                        swal("Good job!", "Your Record Update Successfully", "success");
                        $(form).trigger('reset');
                        mytable.draw();
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        var response = JSON.parse(XMLHttpRequest.responseText);
                        addformValidator.showErrors(response.errors);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }
        });
    });
</script>
@endsection

