@extends('../layout')
@section('content')
    <nav aria-label="breadcrumb"  >
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Truyện Huyền Huyễn</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nhất kiếm độc tôn</li>
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
               Sinh tử coi nhẹ, không phục liền làm.

               Chư thiên thần phật tiên, không qua đến nhất kiếm !

               Cảnh giới:
               - Kiếm phân chia: Tục kiếm, linh kiếm, minh kiếm, chân kiếm, thiên kiếm, đạo kiếm, bất hủ chi kiếm...
               - Tu luyện phân chia: Thối Thể cảnh, luyện lực cảnh, Nội Tráng cảnh, Kiêm Tu cảnh, Bất Tức cảnh, Khí Biến cảnh, Kim Thân cảnh, Ngự Khí cảnh, Lăng Không cảnh, Thông U cảnh, Thần Hợp cảnh, Vạn Pháp cảnh, chân Vạn Pháp cảnh, Ngự Pháp cảnh, chân Ngự Pháp cảnh, Phá Không cảnh, Nguyên Cảnh, Âm cảnh, Vô Thượng Chi Cảnh, Thánh cảnh, Tạo Hóa cảnh, Đạo cảnh, Thủy Đạo cảnh, Tri Đạo cảnh, Chứng Đạo cảnh, Chưởng Đạo cảnh, Thiên Đạo cảnh, Phong Đế, Thần cảnh, Chí cảnh, đỉnh phong Chí cảnh, nửa bước Đăng Phong cảnh, Đăng Phong cảnh, nữa bước Vị Tri cảnh, Vị Tri cảnh, Tạo Cực cảnh, Địa Tiên cảnh, Mệnh cảnh, Phá Mệnh cảnh, Cầu Đạo cảnh, Nhập Đạo cảnh, Phá Đạo cảnh...

               - Năm Chiều: Thủy Nguyên cảnh, lập Càn Khôn, khải Âm Dương, hiểu sinh tử, phá Thiên Cơ, Minh Nhân Quả, nhập Luân Hồi...
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
            <div class="col-md-3">

                <div class="card mb-3 shadow-sm ">
                    <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" >
                    <div class="card-body">
                        <h5>{{$value->tentruyen}}</h5>
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
            <div class="">
                <div class="card mb-3 shadow-sm ">
                    <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" >
                    <div class="card-body">
                        <h5>{{$value->tentruyen}}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
