@foreach($ds1 as $n)

<div class="col-lg-4  col-md-4 col-sm-4" data-aos="fade-bottom" style="transition: 1s linear">
    <div class="faculty-div ">
        <div >
             <img  src="{{asset('img/teacher/'.$n->picture)}}" style="width:300px ;height:400px;object-fit: cover ;" class="img-rounded" />
        </div>

        <h3 style="text-align: center">{{$n->full_name}}</h3>
        <hr />
        <p style="text-align: center">
            {{$n->decription}}
        </p>
    </div>
</div>

@endforeach
