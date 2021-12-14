<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Truyen247</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
</head>
<body>
<div class="container">
    <!--Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: #0a53be">
                        Trang chủ <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-expanded="false">
                        Thể loại
                    </a>
                </li>
            </ul>
            <form class="form-inline ml-auto my-2 my-lg-0 d-flex ">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm tên truyện..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- SLIDE -->
    <h3 style="color: #a52834">Truyện hay</h3>
    <div class="owl-carousel owl-theme" style="padding-bottom: 56px">
        <div class="item">
            <img src="{{asset('public/uploads/truyen/3003.jpg')}}" style="width: 200px;height: 300px"><br>
            <h4>Nhất kiếm độc tôn</h4>
            <div class="btn-group">
                <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                <a type="button" class="btn btn-sm btn-danger"><i class="fas fa-eye"></i> 4069</a>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('public/uploads/truyen/3003.jpg')}}" style="width: 200px;height: 300px"><br>
            <h4>Nhất kiếm độc tôn</h4>
            <div class="btn-group">
                <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                <a type="button" class="btn btn-sm btn-danger"><i class="fas fa-eye"></i> 4069</a>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('public/uploads/truyen/3003.jpg')}}" style="width: 200px;height: 300px"><br>
            <h4>Nhất kiếm độc tôn</h4>
            <div class="btn-group">
                <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                <a type="button" class="btn btn-sm btn-danger"><i class="fas fa-eye"></i> 4069</a>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('public/uploads/truyen/3003.jpg')}}" style="width: 200px;height: 300px"><br>
            <h4>Nhất kiếm độc tôn</h4>
            <div class="btn-group">
                <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                <a type="button" class="btn btn-sm btn-danger"><i class="fas fa-eye"></i> 4069</a>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('public/uploads/truyen/3003.jpg')}}" style="width: 200px;height: 300px"><br>
            <h4>Nhất kiếm độc tôn</h4>
            <div class="btn-group">
                <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                <a type="button" class="btn btn-sm btn-danger"><i class="fas fa-eye"></i> 4069</a>
            </div>
        </div>
    </div>

    <!--Truyện mới cập nhật -->
    <h3 style="color:#a52834;">Truyện mới cập nhật</h3>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row ">
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img src="{{asset('public/uploads/truyen/3003.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>This is a wider card with supporting text</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                    <a type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 4069</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img src="{{asset('public/uploads/truyen/3003.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>This is a wider card with supporting text</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                    <a type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 4069</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img src="{{asset('public/uploads/truyen/3003.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>This is a wider card with supporting text</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                    <a type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 4069</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img src="{{asset('public/uploads/truyen/3003.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>This is a wider card with supporting text</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                    <a type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 4069</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Đọc nhiều-->
    <h3 style="color:#a52834;">Truyện được đọc nhiều</h3>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row ">
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img src="{{asset('public/uploads/truyen/3003.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>This is a wider card with supporting text</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                    <a type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 4069</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img src="{{asset('public/uploads/truyen/3003.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>This is a wider card with supporting text</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                    <a type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 4069</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img src="{{asset('public/uploads/truyen/3003.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>This is a wider card with supporting text</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                    <a type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 4069</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img src="{{asset('public/uploads/truyen/3003.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>This is a wider card with supporting text</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                    <a type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 4069</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
</body>
</html>
