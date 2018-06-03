<?php

namespace app\classes;

class Layout
{
    private $view;

    public function addView($view) {
        $this->view = $view;
    }

    public function loadView() {
        //dd(scandir("../app/views/"));
        return "../app/views/{$this->view}.php";
    }

    public function loadMaster($master) {
        return "../app/views/{$master}.php";
    }
}
