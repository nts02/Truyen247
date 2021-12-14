@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Danh sách chương</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên chương</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Kích hoạt</th>
                                    <th scope="col">Quản lý</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($chapter as $key => $ct)
                                <tr>
                                    <th scope="row">{{$key}}</th>
                                    <td>{{$ct->tieude}}</td>
                                    <td>{{$ct->slug_chapter}}</td>

                                    <td>
                                        @if($ct->kichhoat == 0)
                                            <span class="text text-success">Active</span>
                                        @else
                                            <span class="text text-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('chapter.edit',[$ct->id])}}" class="btn btn-primary">Edit</a>
                                        <form action="{{route('chapter.destroy',[ $ct->id])}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="return confirm('Are you sure to delete this item?')"
                                                    class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
