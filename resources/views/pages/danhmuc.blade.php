@extends('../layout')
@section('content')
    <nav aria-label="breadcrumb"  >
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="">{{$tendanhmuc}}</a>
            </li>
        </ol>
    </nav>
    <h3 style="color:#a52834;"></h3>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row ">
                @php
                    $count = count($truyen);
                @endphp
                @if($count == 0)
                    <div class="py-5 text-center">
                        <h3>Hiện chưa có nội dung</h3>
                    </div>
                @else
                    @foreach($truyen as $key => $value)
                        <div class="col-md-3">
                            <div class="card mb-3 shadow-sm">
                                <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" >
                                <div class="card-body">
                                    <h5>{{$value->tentruyen}}</h5>
                                    <p class="card-text">{{$value->danhmuc_id}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" type="button" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                            <a type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 4069</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
