@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header ">Thêm danh mục</div>
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
                            <form method="post" action="{{route('danhmuc.store')}}" >
                                @csrf
                                <div class="form-group">
                                    <label for="tendanhmuc">Tên danh mục</label>
                                    <input type="text" name="tendanhmuc" id="slug" onkeyup="ChangeToSlug();"
                                           value="{{old('tendanhmuc')}}" class="form-control"  placeholder="Thêm danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug_danhmuc" id="convert_slug"
                                           value="{{old('slug_danhmuc')}}" class="form-control"  placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label class="mt-1" for="mota">Mô tả</label>
                                    <input type="text" id="mota" class="form-control" value="{{old('mota')}}"
                                           name="mota"  placeholder="Mô tả">
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
