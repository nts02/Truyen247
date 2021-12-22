@extends('../layout')
@section('content')

<!--Truyện mới cập nhật -->
<h3 style="text-align: center; margin-top: 10px">Danh sách truyện</h3>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row ">
            @foreach($truyen as $key => $value)
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                        <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
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
</div>
@endsection
