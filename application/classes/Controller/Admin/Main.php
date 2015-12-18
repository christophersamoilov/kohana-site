<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Common {

    public function action_index()
    {
        $content = View::factory('/admin/show');
        $this->template->content = $content;
        $this->request->directory();
        $this->request->controller();
        $this->request->action();
        Request::current()->directory();
        Request::current()->controller();
        Request::current()->action();
    }

} // End Main