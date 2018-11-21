@extends('student.layouts.app')

@section('title')
{{-- Set The Title Like Department  --}}
@endsection

@section('styleFile')
{{-- style Files --}}
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/cryptocoins/cryptocoins.css') }}">
@endsection

@section('style')
{{-- style code --}}
@endsection
@section('content')

@include('student.templates.widgets.breadcrumbs')
<div class="content-body">
    <!-- Revenue, Hit Rate & Deals -->
    <div class="row">
        <div class="col-xl-12 col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <img class="img-fluid" src="{{ asset('images/fb-images/feedback-7.jpg') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9 col-md-9 col-sm-4">
                            
                            </div>
                            <div class="col-3 col-md-3 col-sm-4">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Revenue, Hit Rate & Deals -->
</div>
@endsection

@section('scriptFile')
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('app-assets/js/scripts/pages/dashboard-crypto.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
@endsection

@section('footerScript')
<script type="text/javascript">

</script>
@endsection