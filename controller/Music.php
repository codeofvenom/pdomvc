<?php 
class Music{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $music = $this->model->getAllmusic();
        require 'view/music/list.php';
    }

    public function detail($id)
    {
        $music = $this->model->getMusicById($id);
        require 'view/music/detail.php';
    }

    public function create()
    {
        if ($_POST) {
            $this->model->insert();
            header("Location: http://localhost/pdomvc/index.php/music");
        } else {
            require 'view/music/form.php';
        }
    }

    public function edit($id)
    {
        if ($_POST) {
            $this->model->update($id);
            header("Location: http://localhost/pdomvc/index.php/music");
        } else {
            $music = $this->model->getMusicById($id);
            require 'view/music/form.php';
        }
    }

    public function delete($id)
    {
        if ($id) {
            $this->model->delete($id);
            header("Location: http://localhost/pdomvc/index.php/music");
        }
    }
}