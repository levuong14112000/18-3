<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container header-z">
        <div class="navbar-header">


            <a class="navbar-brand" href="{{route('main')}}"><img class="logo-custom" src="{{asset('picture/logo1.png')}}" alt="" /></a>
            <div class="respon-navbar">
                <ul class="nav navbar-nav navbar-right .nav">
                    <li><a><i style="font-size: 4em" class="fa fa-solid fa-bars menu top_menu"></i>
                        </a>
                        <ul class="show-menu">
                            <li><a href="#home">HOME PAGE
                                </a></li>
                            <li><a href="#features-sec">FEATURED
                                </a></li>
                            <li><a href="#course-sec">KHOÁ HỌC</a></li>
                            <li><a href="#faculty-sec">LECTURERS</a></li>
                            <li><a href="#contact-sec">CONTACT</a></li>
                            <li><a><i style="font-size: 1.2em" class="fa fa-solid fa-bars menu top_menu"></i>
                                </a>
                                <ul class="show-menu">
                                    @foreach($mn as $m)
                                        <li><a href="{{route('kh',[$m->course_id])}}">{{$m->course_name}}</a> </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-right .nav">
                <li style="margin-top: 15px; margin-right: 70px;">
                        <form action="{{route('search')}}" method="get" id="form_search" >
                            <Label>Filter</Label>
                            <select value="" name="k" style="color: black; padding: 4px; margin: 0px 5px 0px 5px; border-radius: 6px" >
                                <option value="0" style="text-align: center;" >-----All-----
                                </option>
                                @foreach($mn as $m)
                                <option value="{{$m->course_id}}" style="color: black;text-align: center;" >{{$m->course_name}}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Search" class="btn btn-primary">
                        </form>
                </li>
                <li style=""><a><i style="font-size: 1.2em" class="fa fa-solid fa-bars menu top_menu"></i>
                    </a>
                    <ul class="show-menu" >
                        @foreach($mn as $m)
                            <li><a href="{{route('kh',[$m->course_id])}}">{{$m->course_name}}</a> </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#home">HOME PAGE</a></li>

                <li><a href="#features-sec">FEATURED</a></li>
                <li><a href="#course-sec">COURSE</a></li>
                <li><a href="#faculty-sec">LECTURERS</a></li>
                <li><a href="#contact-sec">CONTACT</a></li>
                @if(Auth::check())
                    <li><a href="/admin">HELLO {{Auth::user()->username}}</a></li>
                @else
                    <li><a href="/login">LOGIN</a></li>
                @endif


            </ul>
        </div>

    </div>
</div>
