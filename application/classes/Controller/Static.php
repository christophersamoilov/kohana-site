<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Common {

    public function action_about()
    {
        $content = View::factory('/pages/about');
        $this->template->content = $content;
    }

    public function action_contact()
    {
        $content = View::factory('/pages/contact');
        $this->template->content = $content;
    }

} // End Static