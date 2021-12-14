@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header ">Cập nhật danh mục</div>
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
                        <form method="post" action="{{route('danhmuc.update',[$danhmuc->id])}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" name="tendanhmuc" value="{{$danhmuc->tendanhmuc}}"
                                       id="slug" onkeyup="ChangeToSlug();"
                                       class="form-control"  placeholder="Thêm danh mục">
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug_danhmuc" id="convert_slug"
                                       value="{{$danhmuc->slug_danhmuc}}" class="form-control"  placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="exampleInputEmail1">Mô tả</label>
                                <input type="text" class="form-control" value="{{$danhmuc->mota}}" name="mota" placeholder="Mô tả">
                            </div>
                            <div class="form-group">
                                <label class="mt-1" >Kích hoạt</label>
                                <select class="custom-select" name="kichhoat">
                                    @if($danhmuc->kichhoat==0)
                                        <option selected value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    @else
                                        <option value="0">Active</option>
                                        <option selected value="1">Inactive</option>
                                    @endif
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
