<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
        return View::make('hello');
	}

	public function admin() {
		$userInfo = Auth::user();
		// SELECT * FROM comments INNER JOIN users ON comment.user_id = users.id
		$comments = DB::table('comments')->join('users','users.id','=','comments.user_id')->get();

		// echo "<pre>";
		// print_r($comments);

		// echo "<pre>";
		// foreach ($comments as $comment) {
		// 	var_dump($comment);
		// }

		// die();

		return View::make('admin.admin')->with('userInfo', $userInfo)->with('comments',$comments);
	}

}
