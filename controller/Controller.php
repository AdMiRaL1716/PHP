<?php

class Controller extends RenderTemplate {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function start_site() {
        $html = $this->render_template('view/index.php', array(), array());
        return $html;
    }

    public function form_register() {
        $html = $this->render_template('view/index.php', array(), array());
        return $html;
    }
    
    public function license() {
        $html = $this->render_template('view/license.php', array(), array());
        return $html;
    }

    public function user_register() {
        $test = $this->model->user_register();
        $html = $this->render_template('view/reg.php', array('test' => $test), array());
        return $html;
    }

    public function error_404() {
        $html = $this->render_template('view/error_404.php', array(), array());
        return $html;
    }


}

?>