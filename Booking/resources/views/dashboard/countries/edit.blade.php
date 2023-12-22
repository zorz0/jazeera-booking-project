@extends('dashboard.layout.master')

@section('custom-style')

@endsection

@section('content')
<h3 class="page-title"> الدول و المدن </h3>
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
                <form action="{{ route('countries.update',$country->id) }}" method="post" id="form_sample_3"
                    class="form-horizontal" novalidate="novalidate">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <input type="hidden" name="id" value="{{$country->id}}">
                        <div class="form-group">
                            <label class="control-label col-md-3">الاسم
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control"
                                    value="{{ old('name')? old('name'):$country->name }}">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">العملة
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <select class=" form-control " aria-label="Default  example" name="currency">
                                    <option selected>Open this select menu</option>
                                    @foreach ($currencies as $currency )
                                        <option value="{{$currency->name}}">{{$currency->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('currency')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
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
