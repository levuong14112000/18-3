<style>
    .icon-footer:hover{
       opacity: 0.6;
    }
    .list-footer{
        margin: 0px 7px 0px 7px;
    }
</style>
<div id="footer container" style="    background-color: rgba(28, 43, 75, 1) ; color: #fff">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8" style="text-align: center" >
              <div>  2023 Viblo | All Rights Reserved | <a href="" style="color: #fff" target="_blank">Design by : classes-team | Member : Thai Bao , Le Vuong</a></div>
            <span>@include('slider')</span>
            <ul class="" style="display: flex ; justify-content: center ;list-style-type: none ;padding: 0;">
                <li class="list-footer" ><a href="#home">TRANG CHỦ</a></li>
                <li class="list-footer"><a href="#features-sec">ĐẶC TRƯNG</a></li>
                <li class="list-footer"><a href="#course-sec">KHOÁ HỌC</a></li>
                <li class="list-footer"><a href="#faculty-sec">GIẢNG VIÊN</a></li>
                <li class="list-footer"><a href="#contact-sec">LIÊN HỆ</a></li>
{{--                @if(Auth::check())--}}
{{--                    <li><a href="#">Hello {{Auth::user()->username}}</a></li>--}}
{{--                @else--}}
                    <li><a href="/login">ĐĂNG NHẬP</a></li>
{{--                @endif--}}
            </ul>
        </div>
        <div class="text-center col-lg-4 col-sm-4 col-md-4">
            <span>© UAB University Press & Assessment 2023</span>
            <br>
            <a class="icon-footer" href="#"> <img style="width: 30px;" src="{{asset('img/Social/facebook.png')}}" alt="" /> </a>
            <a  class="icon-footer" href="#"> <img style="width: 30px;" src="{{asset('img/Social/google-plus.png')}}" alt="" /></a>
            <a class="icon-footer" href="#"> <img style="width: 30px;" src="{{asset('img/Social/twitter.png')}}" alt="" /></a><br>
            <span>@include('inputapi')  </span>
        </div>
</div>
</div>
