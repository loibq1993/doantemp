<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Post;
use Image;

class AdminPostsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {		
		if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())) {
			if ($request->isMethod('post')) {
				 $this->validate($request, [

					'posts_content' => 'required',
					'posts_title' => 'required'

				]);

				$content = $request->input("posts_content");
				$posts = new Post();
				$posts->type = $request->input("type");				
				$posts->posts_title = $request->input("posts_title");
				$image = 'default.jpg';
				
				// >>> file image
				//Kiểm tra file
				//dd($request->all());
				if ($request->hasFile('image_title')) {
					$file = $request->image_title;
					$path = public_path() . '/assets/img/posts/';

					if (!file_exists( $path. $file->getClientOriginalName()))
					{
						$file->move($path, $file->getClientOriginalName());	
					}
					$image = $file->getClientOriginalName();
				}
				
				$posts->image_title = $image;
				/// <<< end file image
				
				$posts->posts_content = $content;
				$posts->posts_status = Config::get('constant.post_status.show');
				$posts->author = $request->post("author");				
				
				// save to DB
				if ($posts->save()) {
					$message = Config::get('constant.update_success_mesg');
					return redirect()->back()->with('message', $message);
			  }
			}
			else{
				return view('admin.post.create_post');
			}       
		} else {
            return Redirect::to("/admin/login");
        }		
    }    





	public function listPost(Request $request)
    {				
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())) {
			
			$codition = [];			
			$status = ['posts_status', '=', Config::get('constant.post_status.show')];
			array_push($codition, $status);
			
			$posts = DB::table('posts')
					->select('*')->where($codition)->orderBy('id', 'desc')
					->paginate(Config::get('constant.rows_per_page'));							
					
			$page = $request->get("page");
			
			if ($request->isMethod('post')) {
				
				$id = $request->post('id_search');
				$title = $request->post('title_search');
				
				if (($id == null) && ($title == null))
				{
					return view('admin.posts.admin_list_posts', ['posts' => $posts]);
				}
				
				$codition = [];
				
				if ($id){
					$codition_id = ['id', '=', $id];
					array_push($codition, $codition_id);
				}
				if ($title){
					$codition_title = ['name', 'like', '%' . $title . '%'];
					array_push($codition, $codition_title);
				}
							
				$posts = DB::table('posts')
						->select('*')->where($codition)->orderBy('id', 'desc')
						->paginate(Config::get('constant.rows_per_page'));	
					
				return view('admin.post.post_list', ['posts' => $posts, 'id' => $id, 'title' => $title, 'page' => $page]);		
						
			}
			else {							
				return view('admin.post.post_list', ['posts' => $posts, 'page' => $page]);
			}
            
        } else {
            return Redirect::to("/admin/login");
        }
    }
	
	public function editPost(Request $request)
    {				
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())) {           			
					
			if ($request->isMethod('post')) {
				
				$id = $request->post("post_id");							
				$post = Post::where('id', "=", $id)->first();
				$message = Config::get('constant.update_fail_mesg');
						
				if ($post != null){					
					$image = $post->image_title;
				
					// >>> file image
					//Kiểm tra file
					if ($request->hasFile('image_title')) {
						$file = $request->image_title;
						$path = public_path() . '/assets/img/posts/';

						if (!file_exists( $path. $file->getClientOriginalName()))
						{
							$file->move($path, $file->getClientOriginalName());	
						}
						$image = $file->getClientOriginalName();
					}
					
					$post->image_title = $image;
					/// <<< end file image	
					$post->type = $request->post("type");
					$post->posts_title = $request->post("posts_title");
					$post->posts_content = $request->post("posts_content");							    
					$post->author = $request->post("author");
					$post->posts_status = $request->post("posts_status");
					
					// save posts's infos into DB
					$post->save();
					$post->push();				
					
					$message = Config::get('constant.update_success_mesg');				
				}
				
				return redirect()->back()->with('message', $message);
			}
			else {
				$postId = $request->get('id');
						
				$post = DB::table('posts')
					->select('*')	
					->where('id', '=', $postId)->first();	
					
				return view('admin.post.admin_edit_posts',['data' => $post]);
			}			
				
        } else {
            return Redirect::to("/admin/login");
        }
    }
}
