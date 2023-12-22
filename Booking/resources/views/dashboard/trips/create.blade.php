@extends('dashboard.layout.master')

@section('custom-style')

@endsection

@section('content')

<h3 class="page-title"> الرحلات </h3>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">اضافة رحلة</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('countries.store')}}" method="post" class="form-horizontal"
                    novalidate="novalidate">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-1 control-label"> التكلفة للشخص البالغ
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="price_adult" class="form-control"
                                    placeholder="ادخل التكلفة للشخص البالغ">
                                @error('price_adult')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label"> التكلفة للطفل
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="child_price" class="form-control"
                                    placeholder="اخل التكلفة للطفل">
                                @error('child_price')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label"> دولة الاقلاع
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <select class=" form-control " aria-label="Default  example" name="from_country" id="from_country">
                                    <option selected>Open this select menu</option>
                                    @foreach ($countries as $country )
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                @error('from')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label"> دولة الاقلاع
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <select class=" form-control " aria-label="Default  example" name="from">
                                    <option selected>Open this select menu</option>
                                    @foreach ($countries as $country )
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                @error('from')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label"> دولة الوصول
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" aria-label="Default  example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($countries as $country )
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                @error('to')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label"> مدينة الوصول
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" aria-label="Default  example" name="to" id="city_to">
                                    <option selected>Open this select menu</option>
                                </select>
                                @error('to')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label"> الحد الاقصي للركاب
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="child_price" class="form-control"
                                    placeholder="الحد الاقصي للركاب">
                                @error('child_price')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label"> موعد الاقلاع
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="time" name="tack_off_time" class="form-control">
                            </div>
                            @error('tack_off_time')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label"> موعد الوصول
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="time" name="arriving_time" class="form-control">
                            </div>
                            @error('arriving_time')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
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
