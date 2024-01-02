@extends('dashboard.layout.master')

@section('content')
<h3 class="page-title"> عملائنا

</h3>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">تعديل العملاء</span>
                </div>

            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('clients.update',$client->id) }}" method="post" id="form_sample_3"
                    class="form-horizontal" novalidate="novalidate">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <input type="hidden" name="id" value="{{$client->id}}">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check
                            below.
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful!
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الاسم الاول
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control"
                                    value="{{ old('name')? old('name'):$client->name }}">
                            </div>
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="email" name="email" data-required="1" class="form-control"
                                    value="{{ old('email')? old('email'):$client->email }}">
                            </div>
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">رقم الهاتف
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="phone" data-required="1" class="form-control"
                                    value="{{ old('phone')? old('phone'):$client->phone }}">
                            </div>
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الرقم القومى
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="id" data-required="1" class="form-control"
                                    value="{{ old('id')? old('id'):$client->id }}">
                            </div>
                            @error('id')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> الدولة
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <select class=" form-control " aria-label="Default  example"name="country_id">
                                    @foreach ($countries as $country )
                                    <option @if ($client->country_id == $country->id) selected="selected" @endif
                                        value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
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
