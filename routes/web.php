<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Route;
//Route FrontEnd
Route::get('/home', 'FrontEnd\Controller@goToHomepage')->name('home');

//////
Route::get('/studentinfo', 'FrontEnd\Controller@StudentInfo')->name('studentinfo');
Route::post('/studentinfo', 'FrontEnd\Controller@getStudentInfo')->name('getstudentinfo');

Route::get('/xemdiem', 'FrontEnd\Controller@Xemdiem')->name('xemdiem');
Route::post('/xemdiem', 'FrontEnd\Controller@getXemdiem')->name('getxemdiem');

//Chương trình học
Route::match(['get','post'],'/chuongtrinh10', 'FrontEnd\Controller@Chuongtrinh10');
Route::match(['get','post'],'/chuongtrinh11', 'FrontEnd\Controller@Chuongtrinh11');
Route::match(['get','post'],'/chuongtrinh12', 'FrontEnd\Controller@Chuongtrinh12');

Route::match(['get','post'],'/lienhesky', 'FrontEnd\Controller@Lienhesky')->name('lienhesky');


//Chương trình lớp 11
Route::match(['get','post'],'/toan11', 'FrontEnd\Controller@Toan11')->name('toan11');
Route::match(['get','post'],'/nguvan11', 'FrontEnd\Controller@Nguvan11')->name('nguvan11');
Route::match(['get','post'],'/tienganh11', 'FrontEnd\Controller@Tienganh11')->name('tienganh11');
Route::match(['get','post'],'/vatly11', 'FrontEnd\Controller@Vatly11')->name('vatly11');
Route::match(['get','post'],'/hoahoc11', 'FrontEnd\Controller@Hoahoc11')->name('hoahoc11');
Route::match(['get','post'],'/sinhhoc11', 'FrontEnd\Controller@Sinhhoc11')->name('sinhhoc11');
Route::match(['get','post'],'/dialy11', 'FrontEnd\Controller@Dialy11')->name('dialy11');
Route::match(['get','post'],'/lichsu11', 'FrontEnd\Controller@Lichsu11')->name('lichsu11');
Route::match(['get','post'],'/gdcd11', 'FrontEnd\Controller@Gdcd11')->name('gdcd11');
Route::match(['get','post'],'/tinhoc11', 'FrontEnd\Controller@Tinhoc11')->name('tinhoc11');
Route::match(['get','post'],'/congnghe11', 'FrontEnd\Controller@Congnghe11')->name('congnghe11');



//Chương trình lớp 10
Route::match(['get','post'],'/toan10', 'FrontEnd\Controller@Toan10')->name('toan10');
Route::match(['get','post'],'/nguvan10', 'FrontEnd\Controller@Nguvan10')->name('nguvan10');
Route::match(['get','post'],'/tienganh10', 'FrontEnd\Controller@Tienganh10')->name('tienganh10');
Route::match(['get','post'],'/vatly10', 'FrontEnd\Controller@Vatly10')->name('vatly10');
Route::match(['get','post'],'/hoahoc10', 'FrontEnd\Controller@Hoahoc10')->name('hoahoc10');
Route::match(['get','post'],'/sinhhoc10', 'FrontEnd\Controller@Sinhhoc10')->name('sinhhoc10');
Route::match(['get','post'],'/dialy10', 'FrontEnd\Controller@Dialy10')->name('dialy10');
Route::match(['get','post'],'/lichsu10', 'FrontEnd\Controller@Lichsu10')->name('lichsu10');
Route::match(['get','post'],'/gdcd10', 'FrontEnd\Controller@Gdcd10')->name('gdcd10');
Route::match(['get','post'],'/tinhoc10', 'FrontEnd\Controller@Tinhoc10')->name('tinhoc10');
Route::match(['get','post'],'/congnghe10', 'FrontEnd\Controller@Congnghe10')->name('congnghe10');


// Chương trình 12
Route::match(['get','post'],'/toan12', 'FrontEnd\Controller@Toan12')->name('toan12');
Route::match(['get','post'],'/nguvan12', 'FrontEnd\Controller@Nguvan12')->name('nguvan12');
Route::match(['get','post'],'/tienganh12', 'FrontEnd\Controller@Tienganh12')->name('tienganh12');
Route::match(['get','post'],'/vatly12', 'FrontEnd\Controller@Vatly12')->name('vatly12');
Route::match(['get','post'],'/hoahoc12', 'FrontEnd\Controller@Hoahoc12')->name('hoahoc12');
Route::match(['get','post'],'/sinhhoc12', 'FrontEnd\Controller@Sinhhoc12')->name('sinhhoc12');
Route::match(['get','post'],'/dialy12', 'FrontEnd\Controller@Dialy12')->name('dialy12');
Route::match(['get','post'],'/lichsu12', 'FrontEnd\Controller@Lichsu12')->name('lichsu12');
Route::match(['get','post'],'/gdcd12', 'FrontEnd\Controller@Gdcd12')->name('gdcd12');
Route::match(['get','post'],'/tinhoc12', 'FrontEnd\Controller@Tinhoc12')->name('tinhoc12');
Route::match(['get','post'],'/congnghe12', 'FrontEnd\Controller@Congnghe12')->name('congnghe12');

////////////////////////////////BACKEND//////////////////////////
// Route admin
Route::get('/admin', 'Admin\AdminController@goToHomePageAdmin')->name('admin_home');
Route::match(['get', 'post'], '/admin/login', 'Admin\AdminController@loginAdmin')->name('admin_login');
Route::get('/admin/logout', 'Admin\AdminController@logoutAdmin');

Route::match(['get', 'post'], '/admin/forget_password', 'Admin\AdminController@forgetPasswordAdmin')->name('admin_forget_password');
//đăng ký admin
Route::match(['get', 'post'], '/admin/register', 'Admin\AdminController@registerAdmin')->name('admin_register');
// đăng ký leader
Route::match(['get', 'post'], '/admin/manager_register', 'Admin\AdminController@registerManager')->name('admin_manager_register');
Route::match(['get', 'post'], '/admin/list_manager', 'Admin\AdminController@listAdminManager')->name('admin_list_manager');

Route::match(['get','post'], '/admin/edit_manager', 'Admin\AdminController@EditManager')->name('admin_edit_manager');

Route::get( '/admin/manager_register/verify_account', 'Admin\AdminController@registerVerifyAdmin')->name('manager_verify_account');

Route::match(['get', 'post'], '/admin/mail_message', function(){
    return view('admin.mail_message_admin');
})->name('admin_mail_message');


Route::get('/admin/user_admin_detail', 'Admin\AdminDetail@createAdminDetail')->name('admin_detail');

Route::get( '/admin/register/verify_account', 'Admin\AdminController@registerVerifyAdmin')->name('admin_verify_account');

//Route Account Student
Route::match(['get', 'post'],'/admin/addstudentaccount', 'Admin\StudentController@Student_account')->name('student_account');
Route::match(['get', 'post'],'/admin/addaccount', 'Admin\StudentController@Addaccount')->name('add_account');
Route::match(['get', 'post'],'/admin/edit_studentaccount','Admin\StudentController@editStudentaccount')->name('edit_studentaccount');
Route::match(['get', 'post'], '/admin/list_student_account', 'Admin\StudentController@listStudentAccount')->name('listStudentAccount');
Route::get('/admin/delete_studentaccount/{id}','Admin\StudentController@deleteStudentAccount')->name('delete_studentaccount')->middleware('auth.admin');

// Route Student
Route::match(['get', 'post'],'/admin/create_student', 'Admin\StudentController@createStudent')->name('create_student')->middleware('auth.admin');
Route::match(['get', 'post'],'/admin/create_student_save', 'Admin\StudentController@createStudentSave');
Route::match(['get', 'post'],'/admin/list_student', 'Admin\StudentController@listStudent')->name('list_student')->middleware('auth.admin');
Route::match(['get', 'post'],'admin/edit_student','Admin\StudentController@editStudent')->name('edit_student')->middleware('auth.admin');
Route::get('/admin/delete_student/{id}','Admin\StudentController@deleteStudent')->name('delete_student')->middleware('auth.admin');
Route::get('/admin/delete_studentclass/{id}','Admin\StudentController@deleteStudentClass')->name('delete_studentclass')->middleware('auth.admin');
Route::get('/admin/delete_studentpoint/{id}','Admin\PointController@deleteStudentPoint')->name('delete_studentpoint')->middleware('auth.admin');
//Route Teacher
Route::match(['get', 'post'],'/admin/create_teacher', 'Admin\TeacherController@createTeacher')->name('create_teacher')->middleware('auth.admin');
Route::match(['get', 'post'],'/admin/create_teacher_save', 'Admin\TeacherController@createTeacherSave');
Route::match(['get', 'post'],'/admin/list_teacher', 'Admin\TeacherController@listTeacher')->name('list_teacher');
Route::match(['get', 'post'],'/admin/edit_teacher', 'Admin\TeacherController@editTeacher')->name('edit_teacher');
Route::get('/admin/delete_teacher/{id}','Admin\TeacherController@deleteTeacher')->name('delete_teacher')->middleware('auth.admin');
//Specialize
Route::match(['get'],'/admin/create_specialize', 'Admin\TeacherController@createSpecialize')->name('create_specialize')->middleware('auth.admin');
Route::match(['get', 'post'],'/admin/create_specialize_save', 'Admin\TeacherController@createSpecializeSave');
Route::match(['get','post'],'/admin/edit_specialize', 'Admin\TeacherController@editSpecialize')->name('edit_specialize')->middleware('auth.admin');
Route::get('/admin/delete_specialize/{id}','Admin\TeacherController@deleteSpecialize')->name('delete_specialize')->middleware('auth.admin');

//Route Subject

Route::match(['get', 'post'],'/admin/create_subject', 'Admin\SubjectController@createSubject')->name('admin_create_subject');
Route::match(['get', 'post'],'/admin/subject_list', 'Admin\SubjectController@listSubject')->name('admin_list_subject');
Route::match(['get', 'post'],'/admin/edit_subject', 'Admin\SubjectController@editSubject')->name('admin_edit_subject')->middleware('auth.admin');;
Route::match(['get', 'post'],'/admin/addsubject', 'Admin\SubjectController@Addsubjectclass')->name('add_subject_class');
Route::get('/admin/list_subjectclass', 'Admin\SubjectController@getsubclass')->name('getsubclass');


// // Route Image
// Route::prefix('admin')->group(function () {
//     Route::get('image-upload','Admin\ImageController@create')->name('get_image_upload');
//     Route::post('image-upload','Admin\ImageController@store')->name('post_image_upload');
//     Route::get('image-delete/{id}','Admin\ImageController@delete')->name('post_image_delete');
// });


//Show posts
Route::get('/news', 'FrontEnd\PostsController@ListPosts')->name('news');
Route::get('/news/detail', 'FrontEnd\PostsController@DetailPosts')->name('posts_detail_view');

//Bài viết
Route::match(['get', 'post'], '/admin/posts/create', 'Admin\AdminPostsController@create')->name('createpost');
Route::match(['get', 'post'], '/admin/posts/list', 'Admin\AdminPostsController@listPost')->name('admin_list_posts');
Route::match(['get', 'post'], '/admin/posts/edit', 'Admin\AdminPostsController@editPost')->name('admin_edit_posts');


//*************Chứng chỉ***********

Route::match(['get', 'post'],'/admin/create_certificate', 'Admin\AdminDetail@createCertificate')->name('createCertificate');
//Danh sách chứng chỉ
Route::match(['get', 'post'],'/admin/list_certificate', 'Admin\AdminDetail@listCertificate')->name('listCertificate');
//Quản lý chứng chỉ học sinh
Route::match(['get', 'post'],'/admin/manage_certificate', 'Admin\AdminDetail@Manage_certificate')->name('Manage_certificate');
//Thêm chứng chỉ
Route::match(['get', 'post'],'/admin/addsct', 'Admin\AdminDetail@Sct')->name('addsct');
//Lưu chứng chỉ
Route::match(['get', 'post'],'/admin/sctemp', 'Admin\AdminDetail@Savecerschooltemp')->name('sctemp');



//***********Lớp**************
//Thêm năm học
Route::match(['get', 'post'], '/admin/addschoolyear', 'Admin\AdminDetail@Addschoolyear')->name('addschoolyear')->middleware('auth.admin');
//Sửa năm học
Route::match(['get', 'post'], '/admin/edit_academic', 'Admin\AdminDetail@editSchoolYear')->name('edit_academic')->middleware('auth.admin');
//Thêm học kỳ
Route::match(['get', 'post'],'/admin/addterm', 'Admin\AdminDetail@addTerm')->name('addterm');
//Sửa học kỳ
Route::match(['get', 'post'], '/admin/edit_term', 'Admin\AdminDetail@editTerm')->name('edit_term');
// Thêm lớp học
Route::match(['get', 'post'], '/admin/addclasses', 'Admin\AdminDetail@createClasses')->name('createclasses');
//Danh sách lớp học
Route::match(['get', 'post'],'/admin/list_classes', 'Admin\AdminDetail@listClasses')->name('listClasses');
//Sửa lớp
Route::match(['get', 'post'],'/admin/edit_classes', 'Admin\AdminDetail@editClasses')->name('edit_classes');
//Phân lớp học sinh
Route::match(['get', 'post'],'/admin/addstudentclass', 'Admin\AdminDetail@Addstudentclass')->name('addstudentclass');
//Lấy học sinh theo lớp
Route::get('/admin/list_studentclass', 'Admin\AdminDetail@getHocSinhLop')->name('getHocSinhLop');
//Xét lên lớp học sinh
Route::match(['get', 'post'],'/admin/xetlenlop', 'Admin\AdminDetail@Xetlenlop')->name('xetlenlop');
//Lưu học sinh
Route::match(['get', 'post'],'/admin/addstudentsave', 'Admin\AdminDetail@student_classsave')->name('student_classsave');



//Route điểm
Route::match(['get', 'post'], '/admin/lockpoint', 'Admin\PointController@lockPoint')->name('lockPoint');
Route::match(['get', 'post'], '/admin/typingpoint', 'Admin\PointController@TypingPoint')->name('typingPoint');
Route::match(['get', 'post'], '/admin/point_year', 'Admin\PointController@yearPoint')->name('yearPoint');
Route::get('/admin/getData', 'Admin\PointController@getData')->name('point_getData');

Route::match(['get', 'post'],'/admin/typingpoint/importExcel', 'Admin\PointController@importExcel')->name('importExcel');
Route::match(['get', 'post'],'/admin/typingpoint/updateExcel', 'Admin\PointController@updateExcel')->name('updateExcel');
//Route::match(['get', 'post'],'/admin/typingpoint/exportExcel', 'Admin\PointController@exportExcel')->name('exportExcel');

Route::match(['get','post'],'/admin/ajax/class/{idgrade}', 'Admin\PointController@ajaxclass')->name('ajaxclass');
Route::match(['get','post'],'/admin/ajax/subject/{idclass}', 'Admin\PointController@ajaxsubject')->name('ajaxsubject');


//Route Khen thưởng kỷ luật
Route::match(['get', 'post'],'/admin/create_bonus', 'Admin\AdminDetail@createBonus')->name('createBonus');
Route::match(['get', 'post'],'/admin/list_bonus', 'Admin\AdminDetail@listBonus')->name('listBonus');
Route::match(['get', 'post'],'/admin/list_add_bodis', 'Admin\AdminDetail@Listaddbodis')->name('Listaddbodis');
Route::match(['get', 'post'],'/admin/formktkl', 'Admin\AdminDetail@FormKTKL')->name('FormKTKL');
Route::match(['get', 'post'],'/admin/list_student_bodis', 'Admin\AdminDetail@listStudentbodis')->name('list_transform');
Route::match(['get', 'post'],'/admin/detail_studentbodis', 'Admin\AdminDetail@Detailbodisstudent')->name("Detailbodisstudent");
//======= Route học bạ=============================================
Route::match(['get', 'post'],'/admin/create_conduct', 'Admin\AdminDetail@Updateconduct')->name("Updateconduct");
Route::match(['get', 'post'],'/admin/edit_conduct','Admin\AdminDetail@editConduct')->name("editConduct");
Route::match(['get', 'post'],'/admin/create_rank', 'Admin\AdminDetail@Updaterank');
//Danh sách tạo học bạ
Route::match(['get', 'post'],'/admin/list_add_student_report', 'Admin\AdminDetail@CreateStudentReport')->name('CreateStudentReport');
Route::match(['get', 'post'],'/admin/student_report', 'Admin\AdminDetail@StudentReport')->name('student_report');
Route::get('/admin/student_report_list', 'Admin\AdminDetail@Getlophs')->name('getlophs');
Route::match(['get', 'post'],'/admin/nhanxetgv', 'Admin\AdminDetail@Comment_teacher');
Route::match(['get', 'post'],'/admin/add_student_report', 'Admin\AdminDetail@Addschoolreport');
Route::match(['get', 'post'],'/admin/list_school_record', 'Admin\AdminDetail@listSchoolrecord')->name('listSchoolrecord');
Route::match(['get', 'post'],'/admin/detailschoolreport', 'Admin\AdminDetail@Detailschoolreport')->name("Detailschoolreport");
Route::match(['get', 'post'],'/admin/list_update_student_report', 'Admin\AdminDetail@listupdateSchoolrecord')->name("listupdateSchoolrecord");
Route::match(['get', 'post'],'/admin/watchsc', 'Admin\AdminDetail@Wactchreportschool')->name("Wactchreportschool");

//Route điều chuyển học sinh

Route::match(['get', 'post'],'/admin/dieuchuyenlop', 'Admin\AdminDetail@Dieuchuyenhocsinh')->name('dieuchuyenlop');
Route::match(['get', 'post'],'/admin/tiepnhanhs', 'Admin\AdminDetail@Receivestudent')->name('receive_student');
Route::match(['get', 'post'],'/admin/addtransferstudent', 'Admin\AdminDetail@Transfer_student')->name('addtransfer');
Route::match(['get', 'post'],'/admin/formdc', 'Admin\AdminDetail@Formdc')->name('formdc');
Route::match(['get', 'post'],'/admin/list_transform_student', 'Admin\AdminDetail@listTransferform')->name('list_transform');
Route::match(['get', 'post'],'/admin/detailtransform', 'Admin\AdminDetail@detailTransferform')->name('detail_transform');
Route::match(['get', 'post'],'/admin/transfer_student_school', 'Admin\AdminDetail@Transfer_student_school')->name('transfer_school');
Route::match(['get', 'post'],'/admin/formdctrtuong', 'Admin\AdminDetail@Formdctruong')->name('form_transfer_school');
Route::match(['get', 'post'],'/admin/list_transform_school', 'Admin\AdminDetail@listTransferformschool')->name('list_transform_school');
Route::match(['get', 'post'],'/admin/detailtransformschool', 'Admin\AdminDetail@detailTransferformschool')->name('detail_transform_school');
Route::match(['get', 'post'],'/admin/dieuchuyentruong', 'Admin\AdminDetail@Chuyentruonghocsinh')->name('dieuchuyentruong');
Route::get('/admin/downloadpdf','Admin\AdminDetail@DownloadPDF')->name('DownloadPDF');


//Chứng chỉ tốt nghiệp tạm thời
Route::match(['get', 'post'],'/admin/sctemp', 'Admin\AdminDetail@Savecerschooltemp');
Route::match(['get', 'post'], '/admin/list_certificate_temp', 'Admin\AdminDetail@listCertificatetemp')->name('listCertificatetemp');
Route::match(['get', 'post'],'/admin/detailcertemp', 'Admin\AdminDetail@detailCertificatetemp');
Route::get('/admin/delete_school_report_temp/{id}','Admin\AdminDetail@deleteSchoolreporttemp')->name('deleteSchoolreporttemp')->middleware('auth.admin');
//PDF
Route::get('/admin/downloadpdfcertemp','Admin\AdminDetail@getPdf')->name('getPdf')->middleware('auth.admin');

Route::match(['get', 'post'],'/admin/updatesr', 'Admin\AdminDetail@UpdateSR');

