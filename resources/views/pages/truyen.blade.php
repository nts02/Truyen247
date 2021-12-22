@extends('../layout')
@section('content')
    <nav aria-label="breadcrumb"  >
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">
                    {{$truyen->danhmuctruyen->tendanhmuc}}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{url('xem-truyen/'.$truyen->slug_truyen)}}">{{$truyen->tentruyen}}</a>
            </li>
        </ol>
    </nav>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}"><br>
            </div>
            <div class="col-md-9">
                <style>
                    .infotruyen {
                        list-style: none;
                    }
                </style>
                <ul class="infotruyen">
                    <li>Tên truyện: {{$truyen->tentruyen}}</li>
                    <li>Tác giả: {{$truyen->tacgia}} </li>
                    <li>Thể loại: <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">
                            {{$truyen->danhmuctruyen->tendanhmuc}}
                        </a></li>
                    <li>Số chương: 2021</li>
                    <li>Lượt xem: 4069</li>
                    @if($chapter_dau)
                        <li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary">Đọc ngay</a></li>
                    @else
                        <li><a href="" class="btn btn-danger">Chưa có nội dung</a></li>
                    @endif

                </ul>
            </div>
        </div>
        <hr>
        <h4>Giới thiệu</h4>
        <div class="col-md-12">
              {!! $truyen->tomtat !!}
        </div>
        <hr>
        <h4>Danh sách chương</h4>
        <ul>
            @php
                $mucluc = count($chapter);
            @endphp
            @if($mucluc>0)
                @foreach($chapter as $key => $chap)
                <li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a></li>
                @endforeach
            @else
                <p>Truyện đang cập nhật...</p>
            @endif
        </ul>
        <h4>Truyện tương tự</h4>
        <div class="row">
            @foreach($cungdanhmuc as $key => $value)
            <div class="col-md-4">
                <div class="card mb-3 shadow-sm ">
                    <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" >
                    <div class="card-body">
                        <h6>{{$value->tentruyen}}</h6>
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
        </div>
    </div>
    <div class="col-md-3">
        <h3>Truyện đọc nhiều</h3>
        @foreach($cungdanhmuc as $key => $value)
                <div class=" mb-3 ">
                    <ul style="list-style:none">
                        <li>
                            <a href="{{url('xem-truyen/'.$value->slug_truyen)}}">
                                <h4>{{$value->tentruyen}}</h4>
                            </a>
                            <p> Tác giả: {{$value->tacgia}} </p>
                            <hr>
                        </li>
                    </ul>
                </div>

        @endforeach
    </div>
</div>
@endsection
