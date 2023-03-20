

@foreach($khhot as $h)
    <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="about-div">
            <div class="d-flex flex-column align-items-center col-3 form-group" style="
            display: flex;
    flex-direction: column;
    align-items: center;">
                <div class="hand" >
                    <a class="a-img" href="{{route('kh',[$h->course_id])}}">
                    <img  class="img-thumbnail" style="height: 208.96px;" src="{{asset('img/khoahoc/'.$h->picture)}}" alt="">
                    </a>
                </div>
                <div class="text-center">{{$h->course_name}}</div>
                <div class="pb-1 btn btn-button ">{{number_format($h->price)}} VNĐ</div>
                <div>
                    <a class="btn btn-primary" href="{{route('kh',[$h->course_id])}}">Detail</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
