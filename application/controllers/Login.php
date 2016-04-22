<?php

/*
 * Copyright (C) 2016 Usuario
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * Description of Login_controller
 *
 * @author SergioC
 */
class Login extends CI_Controller {
    
    public function index() {
        $this->load->view('login_view');
        
    }
    
    public function test() {
        $this->load->view('inicio_view');
        
    }
    
    public function do_login() {
        require_once(APPPATH . 'models/DTOs/Usuario.php');
        #$nombreUsuario = $this-> input -> post('NombreUsuario'); 
        $nombreUsuario = $_POST['NombreUsuario'];
        $password = $_POST['Password'];
        $nuevoUsuario = new Usuario(0, $nombreUsuario, $password);
        $this -> load -> model('Usuarios_model');
        $bool = $this -> Usuarios_model -> verificarLogin($nuevoUsuario);
        if ($bool == TRUE)
        {
            echo "Existe usuario";            
        }
        else
        {
            echo "No existe usuario";
        }
    }
    
    
    
    
}
    
    
    
    

