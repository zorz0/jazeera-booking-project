@extends('dashboard.layout.master')

@section('custom-style')

@endsection

@section('content')
<h3 class="page-title"> العملات
</h3>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">العملات</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>العملة </th>
                                <th> قيمة مقابل الدولار </th>
                                <th>حدث</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currencies as $currency )
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $currency->name }} </td>
                                <td> {{ $currency->value }} </td>
                                <td>
                                    <form method="post" action="{{route('currencies.destroy' , $currency->id) }}"
                                        style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline btn-circle dark btn-sm black"> حذف
                                        </button>
                                    </form>
                                    <form method="get" action="{{route('currencies.edit' , $currency->id) }}"
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
                {{ $currencies->links() }}
            </div>
        </div>
    </div>

</div>

@endsection

@section('custom-script')
@endsection
