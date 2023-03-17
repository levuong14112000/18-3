<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\subject;
use App\Models\users;
use App\Models\usersroloes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use Dompdf\Dompdf;

class myController extends Controller
{
    public function main()
    {
        $query = DB::table('courses') //Sử dụng class DB
            ->select("course_id", "course_name", "description", "price", "picture")
            //
            ->orderBy('course_name', 'ASC')
            ->get();

        $query1 = DB::table('users')
            ->join('subject', 'users.user_id', '=', 'subject.user_id')
            ->join('courses', 'subject.course_id', '=', 'courses.course_id')
            ->select('users.full_name', 'users.address', 'courses.course_name', 'users.decription', 'users.picture')
            ->distinct()
            ->get();

        $xuat = DB::table('courses')
            ->join('subject', 'subject.course_id', '=', 'courses.course_id')
            ->join('lessions', 'lessions.subject_id', '=', 'subject.subject_id')
            ->select('courses.course_name', 'subject.subject_name', 'lessions.lession_name', 'courses.price', 'subject.subject_id', 'subject.subject_name')
            ->orderBy('courses.course_id', 'ASC')
            ->get();

        $search = DB::table('subject')
            ->select('*')
            ->orderBy('subject_id')
            ->get();

        $khoahochot = DB::table('courses') //Sử dụng class DB
            ->select("course_id", "course_name", "description", "price", "picture", 'hot')
            ->where('hot', '=', 1)
            ->orderBy('course_name', 'ASC')
            ->limit(3)
            ->get();


        return view('homepage')->with('mn', $query)->with('ds1', $query1)->with('xuat', $xuat)->with('search', $search)->with('khhot', $khoahochot);
    }
    // public function khoahoc(){
    //     $query =DB::table('courses') //Sử dụng class DB
    //     ->select("course_id","course_name","description","price","picture")
    //         //
    //         ->orderBy('course_name','ASC')
    //         ->get();
    //         $query1 = DB::table('users')
    //         ->join('subject', 'users.user_id', '=', 'subject.user_id')
    //         ->join('courses', 'subject.course_id', '=', 'courses.course_id')
    //         ->select('users.full_name','users.address','courses.course_name','users.decription')
    //         ->distinct()
    //         ->get();
    //     return view('khoahoc')->with('ds',$query)->with('ds1',$query1);
    // }
    public function detail($id)
    {
        $query = DB::table('subject') //Sử dụng class DB
            ->select("course_id", "subject_name", "content", "picture", "subject_id")
            ->where('course_id', '=', $id)
            ->orderBy('subject_name', 'ASC')
            ->get();

        $qr = DB::table('lessions') //Sử dụng class DB
            ->select("lession_name")

            ->orderBy('lession_name', 'ASC')
            ->get();

        $menu = DB::table('courses') //Sử dụng class DB
            ->select("course_id", "course_name", "description", "price", "picture")
            //
            ->orderBy('course_name', 'ASC')
            ->get();




        return view('detailkhoahoc')->with('dt', $query)->with('ls', $qr)->with('mn', $menu);
    }


    //Gủi mail Contact Us
    public function contact()
    {
        return view('contact');
    }
    public function admin()
    {
        return view('admin.admin');
    }
    public function corkie()
    {
        return view('inputapi');
    }
    public function postcontact(Request $request)
    {
        $fl = ['name' => $request->name];
        Mail::send(
            'email.emailcontact',
            $fl,
            function ($mail) use ($request) {
                $mail->to('infocheck0808@gmail.com', $request->name);
                $mail->from($request->email);
                $mail->subject('Contact Us Request!');
            }
        );
        return view('email.emailcontact')->with($fl);
    }
    public function lessionview()
    {
        return view('slider');
    }

    //Hiển thị danh dách Lessions
    public function lessionsshow($id, $key)
    {
        $query = DB::table('subject') //Sử dụng class DB
            ->select("course_id", "subject_name", "content", "picture", "subject_id")
            ->where('course_id', '=', $id)
            ->orderBy('subject_name', 'ASC')
            ->get();

        $qr = DB::table('lessions') //Sử dụng class DB
            ->select("lession_name", "lession_id")
            ->where('subject_id', '=', $key)
            ->orderBy('lession_name', 'ASC')
            ->get();

        $vd = DB::table('subject')
            ->join('lessions', 'subject.subject_id', '=', 'lessions.subject_id')
            ->join('courses', 'courses.course_id', '=', 'subject.course_id')
            ->select("subject.course_id", "subject.subject_name", "subject.content", "subject.picture", "subject.subject_id", "subject.picture", "lessions.lession_name", "lessions.lession_id", 'courses.price')
            ->where([['subject.course_id', '=', $id], ['subject.subject_id', '=', $key]])
            ->orderBy('lessions.lession_name', 'ASC')
            ->limit(1)
            ->get();

        $query = DB::table('courses') //Sử dụng class DB
            ->select("course_id", "course_name", "description", "price", "picture")
            //
            ->orderBy('course_name', 'ASC')
            ->get();

        return view('lessionsview')->with('vd', $vd)->with('ds', $query)->with('ls', $qr)->with('mn', $query);

        // return view('lessionsview')->with('ds', $query)->with('ls', $qr);
    }

    //Ảnh khoá học
    public function showpiccourse($id)
    {
        // $query = DB::table('subject') //Sử dụng class DB
        //     ->select("course_id", "subject_name", "content", "picture", "subject_id")
        //     ->where('course_id', '=', $id)
        //     ->orderBy('subject_name', 'ASC')
        //     ->get();

        $piccourse = DB::table('courses')
            ->select('course_id', 'picture')
            ->where('course_id', '=', $id)
            ->get();

        return view('piccourse')->with('pc', $piccourse);
    }

    //XUẤT PDF
    // public function xuatpdf()
    // {
    //     $xuat = DB::table('courses')
    //         ->join('subject', 'subject.course_id', '=', 'courses.course_id')
    //         ->join('lessions', 'lessions.subject_id', '=', 'subject.subject_id')
    //         ->select('courses.course_name', 'subject.subject_name', 'lessions.lession_name', 'courses.price')
    //         ->orderBy('courses.course_id', 'ASC')
    //         ->get();

    //     return view('downloadpdf')->with('xuat', $xuat);
    // }

    public function printpdf()
    {
        $xuat = DB::table('courses')
            ->join('subject', 'subject.course_id', '=', 'courses.course_id')
            ->join('lessions', 'lessions.subject_id', '=', 'subject.subject_id')
            ->select('courses.course_name', 'subject.subject_name', 'lessions.lession_name', 'courses.price')
            ->orderBy('courses.course_id', 'ASC')
            ->get();

        $pdf = new Dompdf();
        $pdf->loadHtml(view('downloadpdf', ['xuat' => $xuat])->render());
        $pdf->render();
        return $pdf->stream('download.pdf');
    }

    public function outputmenu()
    {
        $query = DB::table('courses') //Sử dụng class DB
            ->select("course_id", "course_name", "description", "price", "picture")
            //
            ->orderBy('course_name', 'ASC')
            ->get();

        return view('layout.main')->with('mn', $query);
    }

    public function search()
    {
        $query = DB::table('courses') //Sử dụng class DB
            ->select("course_id", "course_name", "description", "price", "picture")
            //
            ->orderBy('course_name', 'ASC')
            ->get();

        $query1 = DB::table('users')
            ->join('subject', 'users.user_id', '=', 'subject.user_id')
            ->join('courses', 'subject.course_id', '=', 'courses.course_id')
            ->select('users.full_name', 'users.address', 'courses.course_name', 'users.decription', 'users.picture')
            ->distinct()
            ->get();

        $xuat = DB::table('courses')
            ->join('subject', 'subject.course_id', '=', 'courses.course_id')
            ->join('lessions', 'lessions.subject_id', '=', 'subject.subject_id')
            ->select('courses.course_name', 'subject.subject_name', 'lessions.lession_name', 'courses.price', 'subject.subject_id', 'subject.subject_name')
            ->orderBy('courses.course_id', 'ASC')
            ->get();

        if ($_GET['k'] == 0) {
            $search = DB::table('subject')
                ->select('*')
                ->orderBy('subject_id')
                ->get();
        }else{
            $search = DB::table('subject')
            ->select('*')
            ->where('course_id', '=', $_GET['k'])
            ->orderBy('subject_id')
            ->get();
        };


        return view('search')->with('mn', $query)->with('ds1', $query1)->with('xuat', $xuat)->with('search', $search);
    }
}
