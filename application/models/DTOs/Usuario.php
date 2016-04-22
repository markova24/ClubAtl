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
 * Description of Usuario
 *
 * @author Usuario
 */
class Usuario {
    private $idusuario;
    private $nomusuario;
    private $contrasenia;
    
    function __construct($idusuario, $nomusuario, $contrasenia) {
        $this ->idusuario = $idusuario;
        $this->nomusuario = $nomusuario;
        $this->contrasenia = $contrasenia;
    }
    
    
    function get_nomusuario() {
        return $this->nomusuario;
    }

    function get_contrasenia() {
        return $this->contrasenia;
    }

    function set_nomusuario($nomusuario) {
        $this->nomusuario = $nomusuario;
    }

    function set_contrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }


    
   
}
