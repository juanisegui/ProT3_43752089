<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Sungla Anteojos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function about_view(){
        $data['titulo']='Sobre Nosotros';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/about_view');
        echo view('front/footer_view');
    }

    public function quienes_somos(){
        $data['titulo']='Quiénes Somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes-somos_view');
        echo view('front/footer_view');
    }

    public function login(){
        $data['titulo']='Login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/login_view');
        echo view('front/footer_view');
    }

    public function registro(){
        $data['titulo']='Registrarse';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/registro_view');
        echo view('front/footer_view');
    }

        public function usuarios(){
        $data['titulo']='Usuarios';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/usuarios_view');
        echo view('front/footer_view');
    }
}
