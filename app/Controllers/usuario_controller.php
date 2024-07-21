<?php

namespace App\Controllers;

use App\Models\Usuario_Model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['titulo'] = 'Registrarse';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation()
    {
        $validation = \Config\Services::validation();
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]'
        ]);

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $usuarioModel = new usuario_Model();
            $usuarioModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('success','msg', 'Usuario registrado con éxito.');
            return redirect()->to('/login');
        }
    }

    public function agregarUsuario()
    {
        $usuarioModel = new usuario_Model();

        $data = [
            'nombre' => 'Nombre del usuario',
            'apellido' => 'Apellido del usuario',
            'usuario' => 'Usuario',
            'email' => 'correo@example.com',
            'pass' => password_hash('contraseña', PASSWORD_DEFAULT),
            'perfil_id' => 1,
            'baja' => 'NO'
        ];

        $usuarioModel->insert($data);

        return "Usuario agregado correctamente.";
    }

    public function editarUsuario($id_usuario)
    {
        $usuarioModel = new usuario_Model();

        $usuario = $usuarioModel->find($id_usuario);

        if ($usuario) {
            $data = [
                'nombre' => 'Nuevo nombre',
                'apellido' => 'Nuevo apellido',
                'usuario' => 'Nuevo usuario',
                'email' => 'nuevo_correo@example.com',
                'pass' => password_hash('nueva_contraseña', PASSWORD_DEFAULT),
                'perfil_id' => 2,
                'baja' => 'NO'
            ];

            $usuarioModel->update($id_usuario, $data);

            return "Usuario actualizado correctamente.";
        } else {
            return "Usuario no encontrado.";
        }
    }

    public function eliminarUsuario($id_usuario)
    {
        $usuarioModel = new usuario_Model();

        if ($usuarioModel->find($id_usuario)) {
            $usuarioModel->delete($id_usuario);

            return "Usuario eliminado correctamente.";
        } else {
            return "Usuario no encontrado.";
        }
    }
}
