@extends('detailkhoahoc')
@section("piccourseshow")
@foreach($pc as $p)
<div class="hand"><img class="img-thumbnail" style="height: 208.96px;" src="{{asset('img/khoahoc/'.$p->picture)}}" alt=""></div>
@endforeach
@endsection
