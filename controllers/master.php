<?php

namespace Controllers;

class Master_Controller
{
    protected $pr_view = '/views/';
    protected $layout;
    protected $views_dir;
    protected $template_name;

    public function __construct($class_name = '\Controllers\\Master_Controller', $model = 'master', $views_dir = 'master')
    {
        //echo "MASTER <br/>";
        $this->views_dir = $this->pr_view . $views_dir . '/';
        $this->class_name = $class_name;

        include_once DX_ROOT_DIR . "models/{$model}.php";
        $model_class = "\\Models\\" . ucfirst($model) . "_Model";

        $this->model = new $model_class(array('table' => 'none'));
        $this->layout = DX_ROOT_DIR . 'views\layouts\default.php';
    }

    public function index()
    {

    }
}