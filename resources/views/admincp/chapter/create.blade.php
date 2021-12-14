@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header ">Thêm chapter</div>
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
                        <form method="post" action="{{route('chapter.store')}}" >
                            @csrf
                            <div class="form-group">
                                <label for="tendanhmuc">Tiêu đề</label>
                                <input type="text" name="tieude" id="slug" onkeyup="ChangeToSlug();"
                                       value="{{old('tieude')}}" class="form-control"  placeholder="Tên chapter">
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug_chapter" id="convert_slug"
                                       value="{{old('slug_chapter')}}" class="form-control"  placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="mota">Tên truyện</label>
                                <select class="custom-select" name="truyen_id">
                                    @foreach($truyen as $key => $value)
                                     <option value="{{$value->id}}">{{$value->tentruyen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="mota">Tóm tắt chương</label>
                                <input type="text" id="tomtat" class="form-control" value="{{old('tomtat')}}"
                                       name="tomtat"  placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="mota">Nội dung</label>
                                <textarea name="noidung" id="" cols="30" rows="10" class="form-control">

                                </textarea>
                            </div>
                            <div class="form-group">
                                <label class="mt-1" >Kích hoạt</label>
                                <select class="custom-select" name="kichhoat">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
