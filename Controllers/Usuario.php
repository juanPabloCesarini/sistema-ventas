<?php
    class Usuario extends Controller{
        public function index()
        {
            print_r($this->model->getUsuario());
        }
    }
?>