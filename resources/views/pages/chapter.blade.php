@extends('../layout')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('danh-muc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc)}}">
                    Tiên hiệp
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{$chapter->truyen->tentruyen}}
            </li>
        </ol>
    </nav>
<div class="row">
    <div class="col-md-12">
        <h4 style="text-align: center">{{$chapter->truyen->tentruyen}}</h4>
        <p style="text-align: center">{{$chapter->tieude}}</p>
        <div class="col-md-6 offset-md-3">
            <style>
                .isDisabled{
                    color: currentColor;
                    pointer-events: none;
                    opacity: 0.8;
                    text-decoration: none;
                }
            </style>
            <div class="form-group" style="text-align: center">
                <nav aria-label="Page navigation example" >
                    <ul class="pagination justify-content-center" >
                        <li class="page-item ">
                            <a class="page-link {{$chapter->id == $min_id->id ? 'isDisabled' :''}}" href="{{url('xem-chapter/'.$previous_chapter)}}" tabindex="-1">Previous</a>
                        </li>
                        <select name="kichhoat" class="custom-select select-chapter" >
                            @foreach($all_chapter as $key=> $chap)
                                <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                            @endforeach
                        </select>
                        <li class="page-item">
                            <a class="page-link  {{$chapter->id == $max_id->id ? 'isDisabled' :''}}" href="{{url('xem-chapter/'.$next_chapter)}}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        <div class="noidung">
            {!! $chapter->noidung !!}<br>
            <div class="col-md-6 offset-md-3">
                <style>
                    .isDisabled{
                        color: currentColor;
                        pointer-events: none;
                        opacity: 0.8;
                        text-decoration: none;
                    }
                </style>
                <div class="form-group" style="text-align: center">
                    <nav aria-label="Page navigation example" >
                        <ul class="pagination justify-content-center" >
                            <li class="page-item ">
                                <a class="page-link {{$chapter->id == $min_id->id ? 'isDisabled' :''}}" href="{{url('xem-chapter/'.$previous_chapter)}}" tabindex="-1">Previous</a>
                            </li>
                            <select name="kichhoat" class="custom-select select-chapter" >
                                @foreach($all_chapter as $key=> $chap)
                                    <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                                @endforeach
                            </select>
                            <li class="page-item">
                                <a class="page-link  {{$chapter->id == $max_id->id ? 'isDisabled' :''}}" href="{{url('xem-chapter/'.$next_chapter)}}">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
