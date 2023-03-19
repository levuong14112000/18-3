<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Lessions;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Subset;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }
    public function admin_courses()
    {
        $data_course = Courses::where('deleted',0)->get();
        $values = [
            'data_course' => $data_course
        ];

        return view('admin.courses', $values);
    }
    public function admin_subjects()
    {   
        $data_course = Courses::all();

        $data = Subject::where('Subject.deleted',0)
        ->join('Courses as c','c.course_id','=','Subject.course_id')
        ->join('Users as u','u.user_id','=','Subject.user_id')
        ->get();
        $data_user = User::where('role_id',2)->get();
        $values = [
            'data' => $data,
            'data_user' => $data_user,
            'data_course' => $data_course
        ];
        return view('admin.subjects', $values);
    }
    public function admin_lessions()
    {
        $data1 = Subject::all();
        $data_lessions = Lessions::where('Lessions.deleted',0)
            ->join('Subject as s','s.subject_id','=','Lessions.subject_id')
            ->get();
        $values = [
            'data1' => $data1,
            'data_lessions' => $data_lessions
        ];
        
        return view('admin.lessions', $values);
    }

    public function add_courses(Request $request){ 
        $isExists = Courses::where('course_name', $request->course_name)->exists();
        if($isExists){
            return redirect()->back()->with('msg', 'exists');
        }else{
        $img = $request->file('txtpicture');
        $img_extension = $request->file('txtpicture')->extension();

        $img_name = time().'-course.'. $img_extension;
        $img->move(public_path('img/khoahoc'),$img_name);

        $item = new Courses;
        $item->course_name=$request->txtcoursename;
        $item->description=$request->txtdescription;
        $item->price=$request->txtprice;
        $item->course_time=$request->txtcourstime;
        $item->duration=$request->txtduration;
        $item->picture=$img_name;
        $item->hot=$request->txthot;
        $item->save();
        return redirect()->back();
        }
    }

    public function add_subjects(Request $request){
        $isExists = Subject::where('subject_name', $request->lession_name)->exists();
        if($isExists){
            return redirect()->back()->with('msg', 'exists');
        }else{
        $img = $request->file('sub_picture');
        // $img_extension = $request->file('txtpicture')->extension();
        $img_extension = 'jpg';

        $img_name = time().'-sub.'. $img_extension;
        $img->move(public_path('img/sub'),$img_name);

        $item = new Subject;
        $item->subject_name=$request->sub_name;
        $item->content=$request->sub_content;
        $item->picture=$img_name;
        $item->course_id=$request->course_id;
        $item->user_id=$request->user_id;
        $item->hot=$request->hot;
        $item->save();
        return redirect()->back();
        }
    }
    public function add_lessions(Request $request){
        $isExists = Lessions::where('lession_name', $request->lession_name)->exists();
        if($isExists){
            return redirect()->back()->with('msg', 'exists');
        }else{
            $item = new Lessions;
            $item->lession_name=$request->lession_name;
            $item->description=$request->description;
            $item->subject_id=$request->subject_id;
            $item->save();
            return redirect()->back()->with('msg', 'success');
        }
    }

    public function edit_courses(Request $request){

        $item = Courses::find($request->id);
        $item->course_name=$request->txtcoursename;
        $item->description=$request->txtdescription;
        $item->price=$request->txtprice;
        $item->course_time=$request->txtcourstime;
        $item->duration=$request->txtduration;
        // $item->picture=$img_name;
        $item->hot=$request->txthot;
        $item->update();
        return redirect('admin/courses');
        }

        public function delete_courses($id){
            $item = Courses::find($id);
            
            $item->deleted= Auth::id();
            $item->update();
            return redirect('admin/courses');
        }
    public function edit_subjects(Request $request){

        $item = Subject::find($request->id);
        $item->subject_name=$request->sub_name;
        $item->course_id=$request->course_id;
        $item->user_id=$request->user_id;
        $item->hot=$request->hot;
        $item->update();
        return redirect('admin/subjects');
        }

        public function delete_subject($id){
            $item = Subject::find($id);
            
            $item->deleted= Auth::id();
            $item->update();
            return redirect('admin/subjects');
        }
    public function edit_lessions(Request $request){

        $item = Lessions::find($request->id);
        $item->lession_name=$request->lession_name;
        $item->description=$request->description;
        $item->subject_id=$request->subject_id;
        $item->update();
        return redirect('admin/lessions');
        }

        public function delete_lessions($id){
            $item = Lessions::find($id);
            
            $item->deleted= Auth::id();
            $item->update();
            return redirect('admin/lessions');
        }
}
