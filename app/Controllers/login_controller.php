<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class login_controller extends BaseController {
	public function index() {
		helper(['form','url']);

		$dato['titulo']='Login';
		echo view('front/head_view',$dato);
		echo view('front/navbar_view');
		echo view('back/usuario/login');
		echo view('front/footer_view');
	}

public function auth() {
        $session = session();
        $model = new usuario_Model();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();

        if ($data) {
            if (isset($data['id_usuario'])) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido!');
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Error en los datos de usuario');
                return redirect()->to('/login_controller');
            }
        } else {
            $session->setFlashdata('msg', 'Email inexistente o incorrecto');
            return redirect()->to('/login_controller');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}