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
 * Description of Socio
 *
 * @author SergioC
 */
class Socio {

    private $IDSocio;
    private $nombreApellido;
    private $nacionalidad;
    private $fechaNac;
    private $estadoCivil;
    private $dni;
    private $dom_particular;
    private $dom_cobro;
    private $facebook;
    private $email;
    private $telefono;
    private $calidad;
    private $foto;
    private $idGrupoFamiliar;
    private $activo;

    function __construct($IDSocio, $nombreApellido, $nacionalidad, $fechaNac, $estadoCivil, $dni, $dom_particular, $dom_cobro, $facebook, $email, $telefono, $calidad, $foto, $idGrupoFamiliar, $activo) {
        $this->IDSocio = $IDSocio;
        $this->nombreApellido = $nombreApellido;
        $this->nacionalidad = $nacionalidad;
        $this->fechaNac = $fechaNac;
        $this->estadoCivil = $estadoCivil;
        $this->dni = $dni;
        $this->dom_particular = $dom_particular;
        $this->dom_cobro = $dom_cobro;
        $this->facebook = $facebook;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->calidad = $calidad;
        $this->foto = $foto;
        $this->idGrupoFamiliar = $idGrupoFamiliar;
        $this->activo = $activo;
    }

        public function get_IDSocio() {
        return $this->IDSocio;
    }

    public function get_nombreApellido() {
        return $this->nombreApellido;
    }

    public function get_nacionalidad() {
        return $this->nacionalidad;
    }

    public function get_fechaNac() {
        return $this->fechaNac;
    }

    public function get_estadoCivil() {
        return $this->estadoCivil;
    }

    public function get_dni() {
        return $this->dni;
    }

    public function get_dom_particular() {
        return $this->dom_particular;
    }

    public function get_dom_cobro() {
        return $this->dom_cobro;
    }

    public function get_facebook() {
        return $this->facebook;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_telefono() {
        return $this->telefono;
    }

    public function get_calidad() {
        return $this->calidad;
    }

    public function get_foto() {
        return $this->foto;
    }

    public function get_idGrupoFamiliar() {
        return $this->idGrupoFamiliar;
    }
    
    public function get_activo() {
        return $this->activo;
    }

    public function set_IDSocio($IDSocio) {
        $this->IDSocio = $IDSocio;
    }

    public function set_nombreApellido($nombreApellido) {
        $this->nombreApellido = $nombreApellido;
    }

    public function set_nacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function set_fechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    public function set_estadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    public function set_dni($dni) {
        $this->dni = $dni;
    }

    public function set_dom_particular($dom_particular) {
        $this->dom_particular = $dom_particular;
    }

    public function set_dom_cobro($dom_cobro) {
        $this->dom_cobro = $dom_cobro;
    }

    public function set_facebook($facebook) {
        $this->facebook = $facebook;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function set_telefono($telefono) {
        $this->telefono = $telefono;
    }

    public function set_calidad($calidad) {
        $this->calidad = $calidad;
    }

    public function set_foto($foto) {
        $this->foto = $foto;
    }

    public function set_idGrupoFamiliar($idGrupoFamiliar) {
        $this->idGrupoFamiliar = $idGrupoFamiliar;
    }
    
    public function set_activo($activo) {
        $this->activo = $activo;
        
    }

}
