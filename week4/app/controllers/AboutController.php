<?php

class AboutController extends BaseController {

    public function showAbout()
    {
        return View::make('about');
    }

    public function showContact()
    {
        return View::make('contact');
    }

    public function showUsers() {
    	return View::make('users');
    }

    public function createUser() {
    	return View::make('create');
    }

    public function updateUser() {
    	return View::make('update');
    }

    public function deleteUser() {
    	return View::make('delete');
    }
}
