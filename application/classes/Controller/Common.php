<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

    public $template = 'main';

    public function before()
    {
        parent::before();
        View::set_global('title', 'Kohana Site');
        $this->template->content = '';
        $this->template->styles = array('style');
        $this->template->scripts = '';
    }

} // End Common