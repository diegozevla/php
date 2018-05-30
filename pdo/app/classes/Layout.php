<?php

namespace app\classes;

class Layout {

    private $view;

    // adiciona uma view para ser carregada posteriormente, em views/layout
    public function add($view) {
        $this->view = $view;
    }

    // após adicionar, retorna uma string com o caminho para a view
    public function load() {
        return "../app/views/{$this->view}.php";
    }

    // apenas carrega o template master, no caso, layout
    public function master($master) {
        return "../app/views/{$master}.php";
    }
}
