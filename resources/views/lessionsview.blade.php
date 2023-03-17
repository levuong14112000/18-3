@extends('layout.main')
@section("content")
<div class="container set-mar">
    <div class="row">
        <div class="col-lg-6">
            <div>
            @foreach($vd as $v)
            <h1 class="text-center">{{$v->subject_name}}</h1>
            <br>
            <h4 class="text-center content-detail">{{($v->content)}} </h4>
            <br>
            <h4 style="text-align: center; color: blue;"> Chỉ : {{number_format($v->price)}} VNĐ</h4>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6 set-lessions">
            <div>
                @foreach($vd as $v)
                <img class="img-thumbnail" style="width: 300px;" src="{{asset('img/sub/'.$v->picture)}}" alt="">
                @endforeach
            </div>
            @foreach($ls as $l)
            <h4 style="text-align: center;">{{$l->lession_name}}</h4>
            @endforeach
        </div>
    </div>
</div>

</div>


@endsection