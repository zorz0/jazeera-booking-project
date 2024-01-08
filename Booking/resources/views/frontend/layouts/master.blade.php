<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>طيران الجزيرة</title>
    <!-- Fontawesome Free version 6.3.0 -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/all.min.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font dosiss -->
    <!-- sliber css -->
    <link href="
          https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
          " rel="stylesheet">
    <!-- CSS File -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}" />
    <!-- Bootstrap Version-5.0.2 -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css')}}" />
</head>

<body>
    @include('sweetalert::alert')
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">

            <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav   mb-2 mb-lg-0">
                    <div class="d-flex">
                        <select class="form-select mx-2" aria-label=" select ">
                            <option selected>AR</option>
                            <option value="1">EN</option>
                            <option value="2">RU</option>

                        </select>
                        <div class="dropdown">
                            <a class="btn border dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular mx-2 fa-user"></i>تسجيل الدخول
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">مسافر </a></li>
                                <li><a class="dropdown-item" href="#">وكلاء السفر</a></li>

                            </ul>
                        </div>
                    </div>
                </ul>

            </div>
            <div class=" d-flex nav-img">
                <a class="navbar-brand w-55 " href="#"><img src="{{asset('frontend/assets/images/jazeera-logo.svg')}}"
                        alt="" srcset=""></a>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="main-footer">
        <div class="container">
            <div class="row d-flex justify-content-between text-center">
                <div class="col-lg-3"><img src="{{asset('frontend/assets/images/jazeera-logo.svg')}}" class="w-70"
                        alt="" srcset=""></div>
                <div class="col-lg-4 mt-3 d-flex justify-content-between">
                    <a href="http://">
                        <h6> الأحكام والشروط</h6>
                    </a>
                    <a href="http://">
                        <h6>سياسة الخصوصية</h6>
                    </a>

                    <a href="http://">
                        <h6>خريطة الموقع</h6>
                    </a>
                </div>
                <div class="col-lg-3 mt-3">
                    <a href="">
                        <p>© 2023 الحقوق محفوظة لجزيرة.</p>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Bootsrap Version-5.0.2 -->
    
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Main JavaScript File -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    @yield('custom-script')
</body>

</html>
