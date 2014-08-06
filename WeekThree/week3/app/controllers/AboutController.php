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

}
