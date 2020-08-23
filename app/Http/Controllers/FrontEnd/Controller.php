<?php

namespace App\Http\Controllers\FrontEnd;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Symfony\Component\HttpFoundation\Response;

use App\Studentaccount;
use App\Student;
use App\Classes;
use App\Subject;
use App\Term;
use App\Point;
use App\Course;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function goToHomepage()
    { 
        return view('frontend.home');
    }

    public function StudentInfo()
    {
    	return view('student.studentinfo');
    }
    public function getStudentInfo(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatorEmpty = Validator::make($request->post(), [
                'user_id'=>'required',
                'password'=>'required|min:3|max:30'
            ],
            [
                'user_id.required' => 'Nhập mã học sinh',
                'password.required'=> 'Nhập mật khẩu',
                'password.min'=>'Mật khẩu không được nhỏ hơn 3 ký tự',
                'password.max'=>'Mật khẩu không được lớn hơn 30 ký tự'
            ]);
 
            if ($validatorEmpty->fails()) {
                 return Redirect::to("/studentinfo")->withErrors($validatorEmpty->getMessageBag())->withInput();;
            } 
            else 
            {   
                $sta = Studentaccount::select('id','user_id', 'is_active')->where([['user_id', '=', $request->post('user_id')], ['is_active', '=','1']])->first();
                if ($sta != null) {
                if (Auth::attempt(['user_id' => $request->post('user_id'), 'password' => $request->post('password')])) 
                     {
                         
                        $student = Student::join('student_account as sa','users.id','sa.user_id')
                        ->select('users.*')
                        ->where('users.id','=',$request->post('user_id'))
                        ->first();
                        //dd($student);
                        return view('student.studentinfo', ['student' => $student]);
                    
                     } 
                     else
                     {
                        return redirect()->back()->with('message','Sai tài khoản hoặc mật khẩu.');
                     }
                }
                else
                {
                    return redirect()->back()->with('message','Tài khoản không tồn tại.');
                }
            }
         } 
         else{
            return Redirect::to("/studentinfo");
         }
     }
        

    
    public function Xemdiem()
    {
    	return view('student.xemdiem');
    }

    public function getXemdiem(Request $request)
    {
        if ($request->isMethod('post')) {
        $validatorEmpty = Validator::make($request->post(), [
            'user_id'=>'required',
            'password'=>'required|min:3|max:30'
        ],
        [
            'user_id.required' => 'Nhập mã học sinh',
            'password.required'=> 'Nhập mật khẩu',
            'password.min'=>'Mật khẩu không được nhỏ hơn 3 ký tự',
            'password.max'=>'Mật khẩu không được lớn hơn 30 ký tự'
        ]);

        if ($validatorEmpty->fails()) {
             return Redirect::to("/xemdiem")->withErrors($validatorEmpty->getMessageBag())->withInput();;
        } 
        else 
        {   
            $sta = Studentaccount::select('id','user_id', 'is_active')->where([['user_id', '=', $request->post('user_id')], ['is_active', '=','1']])->first();
            if ($sta != null) {
            if (Auth::attempt(['user_id' => $request->post('user_id'), 'password' => $request->post('password')])) 
                 { 
                    $point = Point::join('users as u','u.id','=','point.user_id')
                        ->join('classes as c','point.class_id', 'c.id')
                        ->join('subjects as s','point.subject_id','s.id')
                        ->join('terms as t','point.term_id','t.id')
                        ->select('point.id','u.name','u.status','point.user_id','point.class_id','point.term_id','c.name_class','s.name_subject','t.name_term','t.status',
                        'point.subject_id','point.dm','point.d15','point.d45','point.dhk','point.dtbhk')
                        ->where([['t.status','=',0],['u.status','=',0],['point.user_id','=',$request->post('user_id')]])
                        ->get();
                    $academic = Course::join('terms','academic_years.id','terms.academic_id')
                    ->select('academic_years.id','name_of_school_year')->first();
                    
                    $student = Student::join('student_class as sc','users.id','sc.user_id')
                    ->join('classes as c','sc.class_id','c.id')->select('users.name','c.name_class')->where('users.id', $request->post('user_id'))->first();
                    
                        return view('student.xemdiem',['point'=>$point,'academic'=>$academic,'student'=>$student]);
                 } 
                 else
                 {
                    return redirect()->back()->with('message','Sai tài khoản hoặc mật khẩu.');
                 }
            }
            else
            {
                return redirect()->back()->with('message','Tài khoản không tồn tại.');
            }
        }
    }
     else
     {
        return Redirect::to("/xemdiem");
     }
 }
    



    ///// Liên hệ
    public function Lienhesky(Request $request)
    {
        return view('student.lienhesky');
    }

    /////
    public function Chuongtrinh10(Request $request)
    {
        return view('student.chuongtrinh10');
    }
    public function Chuongtrinh11(Request $request)
    {
        return view('student.chuongtrinh11');
    }
    public function Chuongtrinh12(Request $request)
    {
        return view('student.chuongtrinh12');
    }


    ///Chương trình 11
    public function Toan11(Request $request)
    {
        return view('student.toan11');
    }
    public function Nguvan11(Request $request)
    {
        return view('subject.nguvan11');
    }
    public function Tienganh11(Request $request)
    {
        return view('subject.tienganh11');
    }
    public function Vatly11(Request $request)
    {
        return view('subject.vatly11');
    }
    public function Hoahoc11(Request $request)
    {
        return view('subject.hoahoc11');
    }
    public function Sinhhoc11(Request $request)
    {
        return view('subject.sinhhoc11');
    }
    public function Dialy11(Request $request)
    {
        return view('subject.dialy11');
    }
    public function Lichsu11(Request $request)
    {
        return view('subject.lichsu11');
    }
    public function Gdcd11(Request $request)
    {
        return view('subject.gdcd11');
    }
    public function Congnghe11(Request $request)
    {
        return view('subject.congnghe11');
    }
    public function Tinhoc11(Request $request)
    {
        return view('subject.tinhoc11');
    }
    // Chương trình 10
    public function Toan10(Request $request)
    {
        return view('subject.toan10');
    }
    public function Nguvan10(Request $request)
    {
        return view('subject.nguvan10');
    }
    public function Tienganh10(Request $request)
    {
        return view('subject.tienganh10');
    }
    public function Vatly10(Request $request)
    {
        return view('subject.vatly10');
    }
    public function Hoahoc10(Request $request)
    {
        return view('subject.hoahoc10');
    }
    public function Sinhhoc10(Request $request)
    {
        return view('subject.sinhhoc10');
    }
    public function Dialy10(Request $request)
    {
        return view('subject.dialy10');
    }
    public function Lichsu10(Request $request)
    {
        return view('subject.lichsu10');
    }
    public function Gdcd10(Request $request)
    {
        return view('subject.gdcd10');
    }
    public function Tinhoc10(Request $request)
    {
        return view('subject.tinhoc10');
    }
    public function Congnghe10(Request $request)
    {
        return view('subject.congnghe10');
    }
// Chương trình 12
    public function Toan12(Request $request)
    {
        return view('subject.toan12');
    }
    public function Nguvan12(Request $request)
    {
        return view('subject.nguvan12');
    }
    public function Tienganh12(Request $request)
    {
        return view('subject.tienganh12');
    }
    public function Vatly12(Request $request)
    {
        return view('subject.vatly12');
    }
    public function Hoahoc12(Request $request)
    {
        return view('subject.hoahoc12');
    }
    public function Sinhhoc12(Request $request)
    {
        return view('subject.sinhhoc12');
    }
    public function Dialy12(Request $request)
    {
        return view('subject.dialy12');
    }
    public function Lichsu12(Request $request)
    {
        return view('subject.lichsu12');
    }
    public function Gdcd12(Request $request)
    {
        return view('subject.gdcd12');
    }
    public function Tinhoc12(Request $request)
    {
        return view('subject.tinhoc12');
    }
    public function Congnghe12(Request $request)
    {
        return view('subject.congnghe12');
    }
}