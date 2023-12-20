 <!-- BEGIN CONTAINER -->
 <div class="page-container">
     <!-- BEGIN SIDEBAR -->
     <div class="page-sidebar-wrapper">
         <div class="page-sidebar navbar-collapse collapse">
             <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
                 data-slide-speed="200" style="padding-top: 20px">
                 <li class="sidebar-toggler-wrapper hide">
                     <div class="sidebar-toggler">
                         <span></span>
                     </div>
                 </li>
                 <li class="sidebar-search-wrapper">
                     <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html"
                         method="POST">
                         <a href="javascript:;" class="remove">
                             <i class="icon-close"></i>
                         </a>
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Search...">
                             <span class="input-group-btn">
                                 <a href="javascript:;" class="btn submit">
                                     <i class="icon-magnifier"></i>
                                 </a>
                             </span>
                         </div>
                     </form>
                 </li>
                 <li class="nav-item start ">
                     <a href="{{ route('dashboard') }}" class="nav-link nav-toggle">
                         <i class="icon-home"></i>
                         <span class="title">Dashboard</span>
                     </a>
                 </li>
                 {{-- services start--}}
                 <li class="heading">
                     <h3 class="uppercase">رحلاتنا</h3>
                 </li>
                 <li class="nav-item  ">
                     <a href="javascript:;" class="nav-link nav-toggle">
                         <i class="icon-service"></i>
                         <span class="title">رحلاتنا</span>
                         <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">
                         <li class="nav-item  ">
                             <a href="{{ route('trips.index') }}" class="nav-link ">
                                 <span class="title">الرحلات</span>
                             </a>
                         </li>

                         <li class="nav-item  ">
                             <a href="{{ route('trips.create') }}" class="nav-link ">
                                 <span class="title">اضافة رحلة</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 {{--services end  --}}



                 {{-- features start--}}
                 <li class="heading">
                     <h3 class="uppercase">الدول و المدن</h3>
                 </li>
                 <li class="nav-item  ">
                     <a href="javascript:;" class="nav-link nav-toggle">
                         <i class="icon-service"></i>
                         <span class="title">الدول و المدن</span>
                         <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">
                         <li class="nav-item  ">
                             <a href="{{ route('countries.index') }}" class="nav-link ">
                                 <span class="title">الدول</span>
                             </a>
                         </li>

                         <li class="nav-item  ">
                             <a href="{{ route('countries.create') }}" class="nav-link ">
                                 <span class="title">اضافة دولة</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 {{--features end  --}}



                 {{-- clients start--}}
                 <li class="heading">
                     <h3 class="uppercase">عملائنا</h3>
                 </li>
                 <li class="nav-item  ">
                     <a href="javascript:;" class="nav-link nav-toggle">
                         <i class="icon-users"></i>
                         <span class="title">عملائنا</span>
                         <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">
                         <li class="nav-item  ">
                             <a href="{{route('clients.index')}}" class="nav-link ">
                                 <span class="title">العملاء</span>
                             </a>
                         </li>


                     </ul>
                 </li>
                 {{--clients end  --}}
                 {{-- setting start--}}
                 <li class="heading">
                     <h3 class="uppercase">العملات</h3>
                 </li>
                 <li class="nav-item  ">
                     <a href="javascript:;" class="nav-link nav-toggle">
                         <i class="icon-service"></i>
                         <span class="title">العملات</span>
                         <span class="arrow"></span>
                     </a>
                     <ul class="sub-menu">
                         <li class="nav-item  ">
                             <a href="{{ route('currencies.index') }}" class="nav-link ">
                                 <span class="title">العملات</span>
                             </a>
                         </li>
                         <li class="nav-item  ">
                             <a href="{{ route('currencies.create') }}" class="nav-link ">
                                 <span class="title">اضافة عملة</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 {{--setting end  --}}


             </ul>
             <!-- END SIDEBAR MENU -->
             <!-- END SIDEBAR MENU -->
         </div>
         <!-- END SIDEBAR -->
     </div>
     <!-- END SIDEBAR -->
     <!-- BEGIN CONTENT -->
     <div class="page-content-wrapper">
         <!-- BEGIN CONTENT BODY -->
         <div class="page-content">
             <!-- BEGIN PAGE HEADER-->

             <!-- BEGIN PAGE BAR -->
             <div class="page-bar">
                 <ul class="page-breadcrumb">
                     <li>
                         <a href="index.html">Home</a>
                         <i class="fa fa-circle"></i>
                     </li>

                 </ul>

             </div>
             <!-- END PAGE BAR -->
