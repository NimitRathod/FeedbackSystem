@extends('admin.layouts.app')

@section('title')
{{-- Set The Title Like Department  --}}
@endsection

@section('styleFile')
{{-- style Files --}}
@endsection

@section('style')
{{-- style code --}}
@endsection
@section('content')

@include('admin.templates.widgets.breadcrumbs')
<div class="content-body">
    <!-- Revenue, Hit Rate & Deals -->
    <div class="row">
        <div class="col-xl-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Revenue</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a data-action="reload">
                                    <i class="ft-rotate-cw"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0">
                        <div class="row mb-1">
                            <div class="col-6 col-md-4">
                                <h5>Current week</h5>
                                <h2 class="danger">$82,124</h2>
                            </div>
                            <div class="col-6 col-md-4">
                                <h5>Previous week</h5>
                                <h2 class="text-muted">$52,502</h2>
                            </div>
                        </div>
                        <div class="chartjs">
                            <canvas id="thisYearRevenue" width="400" style="position: absolute;"></canvas>
                            <canvas id="lastYearRevenue" width="400"></canvas>
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
<script src="{{ asset('app-assets/js/scripts/pages/dashboard-sales.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
@endsection

@section('footerScript')
<script type="text/javascript">

</script>
@endsection