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
                <form action="{{ route('trips.store')}}" method="post" class="form-horizontal"
                    novalidate="novalidate">
                    @csrf
                    <div class="form-body">
                        <div class="row mb-2">
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> التكلفة للشخص البالغ
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="price_adult" class="form-control"
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
                                    <input type="text" name="price_child" class="form-control"
                                        placeholder="اخل التكلفة للطفل">
                                    @error('price_child')
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
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> مدينة الاقلاع
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <select class=" form-control " aria-label="Default  example" name="from"
                                        id="from_cities">
                                        <option selected>Open this select menu</option>
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
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> مدينة الوصول
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <select class="form-control" aria-label="Default  example" name="to"
                                        id="arriving_cities">
                                        <option selected>Open this select menu</option>
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
                                <label class="col-md-4 control-label"> موعد الاقلاع
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="datetime-local" name="leaving_date" class="form-control">
                                </div>
                                @error('leaving_date')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col col-md-6">
                                <label class="col-md-4 control-label"> موعد الوصول
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="datetime-local" name="arriving_date" class="form-control">
                                </div>
                                @error('arriving_date')
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
                                        placeholder="الحد الاقصي للركاب">
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
