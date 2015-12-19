<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Common {

    public function action_index()
    {
        $content = View::factory('/pages/show');
        $this->template->content = $content;
    }
} // End Home
