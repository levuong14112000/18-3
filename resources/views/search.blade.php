@extends('layout.main')
@section("content")
<div class="container" style="margin-top: 50px;">
    @foreach($search as $s)
    <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="about-div">
            <div class="d-flex flex-column align-items-center col-3 form-group" style="display: flex;flex-direction: column;align-items: center;">
                <div class="hand">
                        <a href="{{route('lsshow',[$s->course_id,$s->subject_id])}}}">
                            <img class="img-thumbnail item-search" style="height: 208.96px;" src="{{asset('img/sub/'.$s->picture)}}" alt="">
                        </a>
                   </div>
                <h4 class="text-center">{{$s->subject_name}}</h4>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection