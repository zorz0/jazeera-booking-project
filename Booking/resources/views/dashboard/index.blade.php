@extends('dashboard.layout.master')

@section('content')

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title">
    <small></small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
 <!-- BEGIN DASHBOARD STATS 1-->

 <div class="row ">


    <div class="col-lg-5 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-blue-sharp">
                        <span data-counter="counterup" data-value="567">0</span>
                    </h3>
                    <small>عدد الرحلات</small>
                </div>
                <div class="icon">
                    <i class="icon-basket"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: %;" class="progress-bar progress-bar-success blue-sharp">
                        <span class="sr-only">45% grow</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> grow </div>
                    <div class="status-number">// </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-purple-soft">
                        <span data-counter="counterup" data-value="{{ $clients*100/100 }}">{{ $clients }}</span>
                    </h3>
                    <small>عدد العملاء</small>
                </div>
                <div class="icon">
                    <i class="icon-user"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: {{ $clients }}%;" class="progress-bar progress-bar-success purple-soft">
                        <span class="sr-only">56% change</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> change </div>
                    <div class="status-number"> {{ $clients/100 }}%</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END DASHBOARD STATS 1-->


@endsection
