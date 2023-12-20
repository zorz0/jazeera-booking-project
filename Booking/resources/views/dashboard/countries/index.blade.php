@extends('dashboard.layout.master')

@section('custom-style')

@endsection

@section('content')
<h3 class="page-title"> الدول
</h3>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">الدول</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> الدولة </th>
                                <th> العملة </th>
                                <th>حدث</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($countries as $country )
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $country->name }} </td>
                                <td> {{ $country->currency}} </td>
                                <td>
                                    <form method="post" action="{{route('countries.destroy' , $country->id) }}"
                                        style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline btn-circle dark btn-sm black"> حذف
                                        </button>
                                    </form>
                                    <form method="get" action="{{route('countries.edit' , $country->id) }}"
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
                {{ $countries->links() }}
            </div>
        </div>
    </div>

</div>

@endsection

@section('custom-script')
@endsection
