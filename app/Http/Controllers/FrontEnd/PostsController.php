<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Post;
use Illuminate\Support\Facades\Crypt;

class PostsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function ListPosts(Request $request){
		$type  = $request->get("type");
		if ($type == 'notify')
		{
			$type = Config::get('constant.post_type.notify');
		}
		else
		{
			$type = Config::get('constant.post_type.post');
		}
		
		$codition = [];			
		$status = ['posts_status', '=', Config::get('constant.post_status.show')];
		$typeCond = ['type', '=', $type]; // post
		array_push($codition, $status);
		array_push($codition, $typeCond);
		
		$posts = Post::select('*')
					->where($codition)->orderBy('id', 'desc')->take(9)->get();
		
		return view('posts.posts_list', ["posts" => $posts, "type" => $type]);
	}
	
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function DetailPosts(Request $request)
    {	
		if ($request->isMethod('get')) {	
			$id  = Crypt::decryptString($request->get("id"));
			//dd($id);
			if ($id)
			{
				$codition = [];			
				$status = ['posts_status', '=', Config::get('constant.post_status.show')];				
				$condId = ['id', '=', $id];
				
				array_push($codition, $status);
				array_push($codition, $condId);
				
				$posts = Post::select('*')
							->where($codition)->first();
				$type = Config::get('constant.post_type.post'); // post				
				if ($posts)
				{
					$type = $posts->type;
				}

				$conditionReleated = [];
				$condId = ['id', '<>', $id];
				$condType = ['type', '=', $type];
				
				array_push($conditionReleated, $status);
				array_push($conditionReleated, $condType);
				array_push($conditionReleated, $condId);
				$postReleated = Post::select('*')->where($conditionReleated)
								->orderBy('id', 'desc')->take(3)->get();
							
				return view('posts.posts_detail_view', ["posts" => $posts, "postReleated" => $postReleated]);
			}
		}		
    }    
}
