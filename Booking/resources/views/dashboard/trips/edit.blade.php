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
                    <span class="caption-subject font-dark sbold uppercase">تعديل رحلة</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('trips.update' , $trip->id)}}" method="post" class="form-horizontal"
                    novalidate="novalidate">
                    @csrf
                    <div class="form-body">
                        <div class="row mb-2">
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> التكلفة للشخص البالغ
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="price_adult" class="form-control" value="{{$trip->price_adult}}"
                                        placeholder="ادخل التكلفة للشخص البالغ">
                                    @error('price_adult')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> التكلفة للطفل
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="child_price" class="form-control" value="{{$trip->child_price}}"
                                        placeholder="اخل التكلفة للطفل">
                                    @error('child_price')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-2">
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> دولة الاقلاع
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <select class=" form-control " aria-label="Default  example"
                                        id="from_country">
                                        @foreach ($countries as $country )
                                        <option @if ($trip->fromCity->country_id == $country->id) selected="selected" @endif
                                            value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('from')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> مدينة الاقلاع
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <select class=" form-control " aria-label="Default  example" name="from"
                                        id="from_cities">
                                        @foreach ($from_cities as $city)

                                        <option @if($city->id == $trip->from) selected="selected" @endif value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('from')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-2">
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> دولة الوصول
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <select class="form-control" aria-label="Default example"
                                        onchange="fillCities(this)">
                                        @foreach ($countries as $country )
                                            <option @if($country->id == $trip->toCity->country_id)selected="selected"  @endif value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('to')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> مدينة الوصول
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <select class="form-control" aria-label="Default  example" name="to"
                                        id="arriving_cities">
                                        @foreach ($to_cities as $city)

                                        <option @if ($trip->to == $city->id) selected="selected"
                                        @endif value="{{$city->id}}">{{ $city->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('to')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-2">
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> موعد الوصول
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="time" name="arriving_time" class="form-control" value="{{$trip->arriving_time}}">
                                </div>
                                @error('arriving_time')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> موعد الاقلاع
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="time" name="tack_off_time" class="form-control" value="{{$trip->tack_off_time}}">
                                </div>
                                @error('tack_off_time')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-2">
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> الحد الاقصي للركاب
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="passengers" class="form-control"
                                        placeholder="الحد الاقصي للركاب" value="{{$trip->passengers}}">
                                    <small class="text-danger"> برجاء ترك هذا الحقل فارغ اذا كنت تريد عدد ركاب غير نهائى</small>
                                    @error('child_price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col col-md-6"></div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-10">
                                <button type="submit" class="btn green">تعديل</button>
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
<script>
$('#from_country').change(function() {
    $.ajax({
        method: "POST",
        url: "{{route('cities.getCitiesByCountryAjax')}}",
        data: {
            "_token": "{{ csrf_token() }}",
            "country_id": $(this).val()
        },
        success: function(response) {
            if (response.status == 1) {
                $('#from_cities').html(response.data)
            }
        }
    })
})

function fillCities(element) {
    $.ajax({
        method: "POST",
        url: "{{route('cities.getCitiesByCountryAjax')}}",
        data: {
            "_token": "{{ csrf_token() }}",
            "country_id": $(element).val()
        },
        success: function(response) {
            console.log(response)
            if (response.status == 1) {
                $('#arriving_cities').html(response.data)
            }
        }
    })
}
</script>
@endsection
