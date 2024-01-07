@extends('dashboard.layout.master')

@section('custom-style')

@endsection

@section('content')

<h3 class="page-title"> الدول  </h3>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">اضافة دولة</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('countries.store')}}" method="post" class="form-horizontal"
                    novalidate="novalidate">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-1 control-label">الدولة
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" class="form-control" placeholder="اخل اسم الدولة">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label">العملة
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="currency_id" class="form-control" placeholder="ادخل عملة الدولة">
                                @error('currency_id')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-10">
                                <button type="submit" class="btn green">اضافه</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-script')
@endsection
