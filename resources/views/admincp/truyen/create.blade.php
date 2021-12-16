@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header ">Thêm truyện</div>
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
                        <form method="post" action="{{route('truyen.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Tên truyện</label>
                                <input type="text" name="tentruyen" id="slug" onkeyup="ChangeToSlug();"
                                       value="{{old('tentruyen')}}" class="form-control"  placeholder="Tên truyện...">
                            </div>
                            <div class="form-group">
                                <label for="">Tác giả</label>
                                <input type="text" name="tacgia" value="{{old('tacgia')}}"
                                       class="form-control"  placeholder="Tên tác giả">
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug_truyen" id="convert_slug"
                                       value="{{old('slug_truyen')}}" class="form-control"  placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="mota">Tóm tắt truyện</label>
                                <textarea name="tomtat" id="" cols="30" rows="10" class="form-control">

                                </textarea>
                            </div>

                            <div class="form-group">
                                <label class="mt-1" >Thể loại</label>
                                <select class="custom-select" name="danhmuc">
                                    @foreach($danhmuc as $key => $theloai )
                                        <option value="{{$theloai->id}}">{{$theloai->tendanhmuc}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh minh hoạ</label>
                                <input type="file" name="hinhanh" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label class="mt-1" >Kích hoạt</label>
                                <select class="custom-select" name="kichhoat">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2" name="themtruyen">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
