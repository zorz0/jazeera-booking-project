@extends('dashboard.layout.master')

@section('content')

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> العملاء

</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">العملاء</span>
                </div>

            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>اسم العميل </th>
                                <th> رقم الهاتف</th>
                                <th> الرقم القومى </th>
                                <th> معاد التسجيل </th>
                                <th>حدث</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client )
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $client->name }} </td>
                                <td> {{ $client->phone }} </td>
                                <td> {{ $client->id}} </td>
                                <td>{{$client->created_at}}</td>
                                <td>
                                    <form method="post" action="{{route('clients.destroy' , $client->id) }}"
                                        style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline btn-circle dark btn-sm black"> حذف
                                        </button>
                                    </form>
                                    <form method="get" action="{{route('clients.edit' , $client->id) }}"
                                        style="display: inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-outline btn-circle btn-sm purple">
                                            تعديل</button>
                                    </form>
                                    <!-- <form method="get" action="{{route('clients.event' , $client->id) }}" style="display: inline-block">
                                @csrf
                            <button type="submit" class="btn btn-outline btn-circle btn-sm purple"> اجراء</button>
                            </form> -->
                                </td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>

                </div>
                {{ $clients->links() }}
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>

</div>

@endsection
