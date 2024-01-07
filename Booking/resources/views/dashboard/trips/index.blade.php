@extends('dashboard.layout.master')

@section('custom-style')

@endsection

@section('content')
<h3 class="page-title"> الرحلات
</h3>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">الرحلات</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> مدينة الاقلاع </th>
                                <th> مدينة الوصول </th>
                                <th>معاد الاقلاع</th>
                                <th>معاد الوصول</th>
                                <th>السعر للفرد البالغ</th>
                                <th>السعر للطفل </th>
                                <th>عدد الركاب</th>
                                <th>حدث</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trips as $trip )
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $trip->fromCity->name }} </td>
                                <td> {{ $trip->toCity->name }} </td>
                                <td> {{ $trip->leaving_date }} </td>
                                <td> {{ $trip->arriving_date }} </td>
                                <td> {{ $trip->price_adult }} </td>
                                <td> {{ $trip->price_child }}</td>
                                <td>{{ $trip->passengers}}</td>
                                <td>
                                    <form method="post" action="{{route('trips.destroy' , $trip->id) }}"
                                        style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline btn-circle dark btn-sm black"> حذف
                                        </button>
                                    </form>
                                    <form method="get" action="{{route('trips.edit' , $trip->id) }}"
                                        style="display: inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-outline btn-circle btn-sm purple">
                                            تعديل</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                {{ $trips->links() }}
            </div>
        </div>
    </div>

</div>

@endsection

@section('custom-script')
@endsection
