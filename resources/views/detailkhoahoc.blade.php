@extends('layout.main')
@section("content")
<div class="container" style="margin-top: 50px;">
    <div class="row">
        @foreach($dt as $n)
        <div class="col-lg-4">
            <div class="about-div">
                <a href="{{route('lsshow',[$n->course_id,$n->subject_id])}}">
                    <h3 class="text-center">{{$n->subject_name}}</h3>
                </a>
                <p class="text-center content-detail">{{($n->content)}} </p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="set-lessions">
        <a href="{{route('printpdf')}}" class="btn btn-primary">
            Download</a>
    </div>
</div>

@endsection
