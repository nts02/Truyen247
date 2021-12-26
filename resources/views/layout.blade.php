<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TS.Truyện</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <!--Menu -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #14425d">
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">
                        <i class="fas fa-home" style="font-size: 26px;color:#c5d7f2;"> TS.Truyện</i> <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-tags" style="font-size: 26px ;color:#fff">
                            Thể loại
                        </i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($danhmuc as $key => $danh)
                         <a class="dropdown-item" href="{{url('danh-muc/'.$danh->slug_danhmuc)}}">{{$danh->tendanhmuc}}</a>
                        @endforeach
                    </div>
                </li>
            </ul>
            <form class="form-inline ml-auto my-2 my-lg-0 d-flex " action="{{url('tim-kiem')}}" method="GET" autocomplete="off">
                <input class="form-control mr-sm-2" type="search" name="tukhoa"
                       placeholder="Tìm tên tác giả,truyện..." aria-label="Search">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- SLIDE -->
    @yield('slide')
    <!--Truyện mới cập nhật -->

    <!--Đọc nhiều-->
    @yield('content')


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
        >
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://www.facebook.com/thais0n" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="https://www.instagram.com/n_thaison16/" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://github.com/nts02" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Thái Sơn
                        </h6>
                        <p>
                            Website đọc truyện trực tuyến
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">HTML/CSS</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Bootstrap4</a>
                        </p>
                        <p>
                             <a href="" class="text-reset">Javascript</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Thái Bình, VIETNAM</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            sonthai.ptit@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 84 983 991 820</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>


<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
{{--<script>--}}
{{--    $('#keywords').keyup(function(){--}}
{{--       var query = $(this).val();--}}
{{--       if(query != '') {--}}
{{--           var _token = $('input[name="_token"]').val();--}}
{{--           $.ajax({--}}
{{--               url:"{{url('/timkiem-ajax')}}",--}}
{{--               method:"POST",--}}
{{--               data:{keywords:keywords,_token:_token},--}}
{{--               success:function(data){--}}
{{--                   $('#search_ajax').fadeIn();--}}
{{--                   $('#search_ajax').html(data);--}}
{{--               }--}}
{{--           })--}}
{{--       }--}}
{{--       else{--}}
{{--           $('#search_ajax').fadeOut();--}}
{{--       }--}}
{{--    });--}}

{{--    $(document).on('click','.li_search_ajax',function(){--}}
{{--        $('#keywords').val($(this).text());--}}
{{--        $('#search_ajax').fadeOut();--}}
{{--    })--}}

{{--</script>--}}
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script>
    $('.select-chapter').on('change',function (){
        var url = $(this).val();
        if(url){
            window.location = url;
        }
        return false;
    });
    current_chapter();
    function  current_chapter() {
        var url = window.location.href;
        $('.select-chapter').find('option[value="'+url +'"]').attr("selected",true);
    }
</script>
</body>
</html>
