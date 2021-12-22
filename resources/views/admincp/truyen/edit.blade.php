@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header ">UPDATE</div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{route('truyen.update',[$truyen->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Tên truyện</label>
                                <input type="text" name="tentruyen" id="slug" onkeyup="ChangeToSlug();"
                                       value="{{$truyen->tentruyen}}" class="form-control"  placeholder="Tên truyện...">
                            </div>
                            <div class="form-group">
                                <label for="">Tác giả</label>
                                <input type="text" name="tacgia" value="{{$truyen->tacgia}}"
                                       class="form-control"  placeholder="Tên tác giả">
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug_truyen" id="convert_slug"
                                       value="{{$truyen->slug_truyen}}" class="form-control"  placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="mota">Tóm tắt truyện</label>
                                <textarea name="tomtat" id="noidung_chapter" cols="30" rows="10" class="form-control">
                                    {{$truyen->tomtat}}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label class="mt-1" >Thể loại</label>
                                <select class="custom-select" name="danhmuc">
                                    @foreach($danhmuc as $key => $theloai )
                                        <option {{$theloai->id == $truyen->danhmuc_id ? 'selected': ''}} value="{{$theloai->id}}">
                                            {{$theloai->tendanhmuc}}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh minh hoạ</label>
                                <input type="file" name="hinhanh" class="form-control-file"><br>
                                <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="200" width="120">
                            </div>
                            <div class="form-group">
                                <label class="mt-1" >Kích hoạt</label>
                                <select class="custom-select" name="kichhoat">
                                    @if($truyen->kichhoat==0)
                                        <option selected value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    @else
                                        <option value="0">Active</option>
                                        <option selected value="1">Inactive</option>
                                    @endif
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2" name="themtruyen">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
