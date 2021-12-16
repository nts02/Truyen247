@extends('../layout')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Truyện Tiên Hiệp</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nhất kiếm độc tôn</li>
        </ol>
    </nav>
<div class="row">
    <div class="col-md-12">
        <h4>{{$chapter->truyen->tentruyen}}</h4>
        <p>{{$chapter->tieude}}</p>
        <div class="col-md-5">
            <div class="form-group">
                <label for="exampleInputEmail">Chọn chượng</label>
                <select name="kichhoat" class="custom-select select-chapter" >
                    @foreach($all_chapter as $key=> $chap)
                     <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="noidung">
            {!! $chapter->noidung !!}<br><hr>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="exampleInputEmail">Chọn chượng</label>
                    <select name="kichhoat" class="custom-select select-chapter" >
                        @foreach($all_chapter as $key=> $chap)
                            <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
