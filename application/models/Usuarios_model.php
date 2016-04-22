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
 * Clase Modelo para Usuarios.
 *
 * @author SergioC
 */
class Usuarios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * @param Usuario $user Usuario que se intenta logear al sistema
     * @return boolean TRUE si el nombreuser y contrasenia son correctos/FALSE si no coincede el nombre y la contrasenia.
     */
    public function verificarLogin(Usuario $user) {
        $this->db->where('nomusuario', $user ->get_nomusuario());
        $this->db->where('contrasenia', $user ->get_contrasenia());
        $query = $this->db->get_where('usuarios', array('nomusuario' => $user -> get_nomusuario()) );
        $count = $query -> num_rows();
        if ($count === 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
