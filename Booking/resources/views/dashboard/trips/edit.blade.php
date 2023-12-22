@extends('dashboard.layout.master')

@section('custom-style')

@endsection

@section('content')
<h3 class="page-title"> الرحلات

</h3>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">تعديل الدول</span>
                </div>

            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('countries.update',$counrty->id) }}" method="post" id="form_sample_3" class="form-horizontal"
                    novalidate="novalidate">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <input type="hidden" name="id" value="{{$country->id}}">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check
                            below.
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful!
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الاسم
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control"
                                    value="{{ old('name')? old('first_name'):$country->name }}">
                            </div>
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">otp
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="last_name" data-required="1" class="form-control"
                                    value="">
                            </div>
                            @error('otp_number')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> نفاد
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="nafed_otp" data-required="1" class="form-control"
                                    value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">تعديل </button>

                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>
@endsection

@section('custom-script')
@endsection
