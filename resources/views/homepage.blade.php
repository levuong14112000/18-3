@extends('layout.main')
@section("content")
    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">
                    <div class="col-lg-12 container1  col-md-12 col-sm-12">
                        <h1 class="h-animation" style="margin-top: 300px ; text-align: center; align-items: center">
                            <span style="font-size: 100px">UAB</span>
                            <span>UNIVERSITY HALL</span>
                            <span>College of arts and sciences</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--HOME SECTION END-->
    <div class="tag-line">
        <div class="container-fluid">
            <div class="row  text-center">
                <div class="col-lg-12  col-md-12 col-sm-12">
                    <h2 data-scroll-reveal="enter from the bottom after 0.1s"> WELCOME TO UAB
                    </h2>
{{--                    <p class="text-info" style="font-style: italic">--}}
{{--                        Trường Cao đẳng Nghệ thuật và Khoa học</p>--}}
                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION TAG LINE END-->
    <div id="features-sec" class="container set-pad" >
{{--        <div class="row text-center">--}}
{{--            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">--}}
{{--                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">--}}
{{--                    DANH SÁCH TÍNH NĂNG</h1>--}}
{{--            </div>--}}

{{--        </div>--}}
        <!--/.HEADER LINE END-->

        <!-- FEATURE LIST -->
        <div class="row" data-aos="fade-left" style="transition: 1s linear all">
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <i class="fa fa-paper-plane-o fa-4x icon-round-border"></i>
                    <h3 style="text-align: center;">
                        Quality Education
                    </h3>
                    <p>Quality education is the foundation for personal development and contribution to society. It helps students and students develop skills, knowledge and creative thinking. In addition, good education also creates career opportunities and success in life. Therefore, investing in good education is investing in the future of yourself and the country.</p>

                    <br>
                    <a href="#contact-sec" class="btn btn-info btn-set">
                        ASK A PROFESSIONAL</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="about-div">
                    <i class="fa fa-bolt fa-4x icon-round-border"></i>
                    <h3 style="text-align: center;">
                        SYSTEM</h3>
                    <p>
                        A systematic approach is often used in projects at work. The goal of this method is to identify the most effective means of producing consistent and optimal results. Many companies need this approach so that they equip their employees with enough knowledge and resources to achieve the company's goals.
                    </p>
                    <br>
                    <a href="#contact-sec" class="btn btn-info btn-set">ASK A PROFESSIONAL</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="about-div">
                    <i class="fa fa-magic fa-4x icon-round-border"></i>
                    <h3 style="text-align: center;">ONE TO ONE</h3>
                    <p>

                        “One to One” – The learning method is no longer strange in the world.
                        This is an effective method to increase concentration, confidence and motivation to learn. Students will be guided by a team of experienced teachers and provide specific feedback and assessment to help improve skills and knowledge.

                    </p>
                    <br>
                    <a href="#contact-sec" class="btn btn-info btn-set">ASK A PROFESSIONAL</a>
                </div>
            </div>
        </div>
    </div>
    <div id="course-sec" class="container" >
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">
                    COURSE </h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->
        <div class="row" data-aos="fade-right" style="transition: 1s linear all">
            @include('khoahoc')
        </div>
    </div>
    <!-- FEATURES SECTION END-->
    <div id="faculty-sec" >
        <div class="container">
            <div class="row text-center" >
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" >
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
                        LECTURERS</h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        Typical successful teachers
                    </p>
                </div>
            </div>
            <!--/.HEADER LINE END-->
            <div class="row">
                @include('teacher')
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- FACULTY SECTION END-->
    <div id="" class="container set-pad" >
        <div class="row text-center" >
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" >
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
                    JOURNEY TO CONQUER THE HIGH TOP </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Success-oriented learning environment!
                </p>
            </div>
        </div>
        <!--/.HEADER LINE END-->
        <div class="row set-row-pad" data-aos="fade-right" style="transition: 1s linear all">
            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="{{asset('img/building.jpg')}}" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                    <strong> 50+</strong>
                                    PROVINCE NATIONWIDE
                                </a>
                            </h4>
                        </div>

                    </div>
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                    <strong> 400+</strong>
                                    COOPERATION ENTERPRISE                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                    <strong> 15300+</strong>
                                    STUDENTS REGISTER
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s" style="text-align: center;">
                <span style="font-size:40px;">
                    <strong> 1000 + </strong>
                    <hr />
Center
                </span>
                </div>
            </div>
        </div>
    </div>
    <!-- COURSES SECTION END-->
    <div id="contact-sec">
        <div class="overlay">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">

                            CONTACT US </h1>
                        <p data-scroll-reveal="enter from the bottom after 0.3s">
                            If you have any questions feel free to contact us
                        </p>
                    </div>
                </div>
                <!--/.HEADER LINE END-->
                <div class="row set-row-pad" data-aos="fade-left" style="transition: 1s linear all">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        @include('contact')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row set-row-pad" data-aos="fade-right" style="transition: 1s linear all">
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">
                <h2><strong>

                        Our location </strong></h2>
                <hr />
                <div>
                    <h4>234/80 -UFG , New Street,</h4>
                    <h4>Switzerland.</h4>
                    <h4><strong>Call:</strong> + 67-098-907-1269 / 70 / 71 </h4>
                    <h4><strong>Email: </strong>uab@edu.com</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">
                <div>
                    <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.795637402692!2d103.77571015019967!3d1.297301299049157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a57a5e7f137%3A0xa44380ea7e9fa450!2sUniversity%20Hall!5e0!3m2!1svi!2s!4v1677500736473!5m2!1svi!2s" width="450" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
