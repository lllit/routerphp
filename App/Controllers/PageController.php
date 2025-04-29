<?php
    class PageController extends Controller{
        public function home(){
            //require_once __DIR__ . '/../Views/home.view.php';
            $this->render('home',[],'site');
        }
        public function listar(){
            //require_once __DIR__ . '/../Views/listar.view.php';
            $this->render('listar',[],'site');
        }
        public function modificar(){
            //require_once __DIR__ . '/../Views/modificar.view.php';
            $this->render('modificar',[],'site');
        }
        public function nuevo(){
            //require_once __DIR__ . '/../Views/nuevo.view.php';
            $this->render('nuevo',[],'site');
        }
        public function eliminar(){
            //require_once __DIR__ . '/../Views/eliminar.view.php';
            $this->render('eliminar',[],'site');
        }
    }