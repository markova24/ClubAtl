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
 * Description of Cuota
 *
 * @author SergioC
 */
class Cuota {

    private $idCuota;
    private $idSocio;
    private $fechaCuota;
    private $monto;
    private $estado;
    private $fechaPago;
    
    function __construct($idCuota, $idSocio, $fechaCuota, $monto, $estado, $fechaPago) {
        $this->idCuota = $idCuota;
        $this->idSocio = $idSocio;
        $this->fechaCuota = $fechaCuota;
        $this->monto = $monto;
        $this->estado = $estado;
        $this->fechaPago = $fechaPago;
    }

        
    function get_idCuota() {
        return $this->idCuota;
    }

    function get_idSocio() {
        return $this->idSocio;
    }

    function get_fechaCuota() {
        return $this->fechaCuota;
    }

    function get_monto() {
        return $this->monto;
    }

    function get_estado() {
        return $this->estado;
    }

    function getFechaPago() {
        return $this->fechaPago;
    }
    
    function set_idCuota($idCuota) {
        $this->idCuota = $idCuota;
    }

    function set_idSocio($idSocio) {
        $this->idSocio = $idSocio;
    }

    function set_fechaCuota($fechaCuota) {
        $this->fechaCuota = $fechaCuota;
    }

    function set_monto($monto) {
        $this->monto = $monto;
    }

    function set_estado($estado) {
        $this->estado = $estado;
    }

    function setFechaPago($fechaPago) {
        $this->fechaPago = $fechaPago;
    }


    
    
    
}
