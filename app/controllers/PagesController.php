<?php

class PagesController extends \BaseController {

    public function home()
    {
        return View::make('pages.home');
    }

}
