<?php

class CommentsController extends \BaseController {
	public function create() {
		// This will create my comment

		$validation = Validator::make(Input::all(), ['comment' => 'required']);

		if ($validation->fails()) {
			// return "Validation failed.";
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		DB::table('comments')->insert(
			array(
				'comment' => Input::get('comment'),
				'user_id' => Auth::user()->id
			)
		);

		return Redirect::to('admin');
	}

	public function edit($commentId) {

		$comment = DB::table('comments')->where('comment_id',$commentId)->first();

		return View::make('admin.edit_comment')->with('comment',$comment);
	}

	public function update() {
		// return "Update!";
		$validation = Validator::make(Input::all(), ['comment' => 'required']);

		if ($validation->fails()) {
			// return "Validation failed.";
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		// UPDATE comment SET comment = Input::get('comment_id') WHERE comment_id = Input::get('comment_id')
		DB::table('comments')
			->where('comment_id',Input::get('comment_id'))
			->update(array('comment'=>Input::get('comment')));

		return Redirect::to('admin');
	}
}