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
 * Clase Test.
 *
 * @author SergioC
 */
class Test extends CI_Controller {

    public function agregarSocio() {
        require_once(APPPATH . 'models/DTOs/Socio.php');
        $socio = new Socio("0", "Sergio Cabral", "Argentino", "1990-11-21", "Soltero", "1414", "Rocamora 1188", "Alberdi 324", "no tengo", "sergiocabral.1990@gmail.com", "32424", "Activo", NULL, NULL, "1");
        $this->load->model('socios_model');
        $this->socios_model->insertarSocio($socio);
    }

    public function obtenerSocios() {
        require_once(APPPATH . 'models/DTOs/Socio.php');
        $this->load->model('socios_model');
        $socios = $this->socios_model->obtenerSocios();
        foreach ($socios as $socio) {
            echo ($socio->get_nombreApellido());
            echo ('      -       ');
        }
    }

    public function modificarSocio() {
        require_once(APPPATH . 'models/DTOs/Socio.php');
        $socio = new Socio("1", "Sergio Cabral", "Argentino", "1990-11/21", "Soltero", "35226046", "sasda", "sdad", "sads", "dsada", "422222", "1", null, null);
        $this->load->model('socios_model');
        $this->socios_model->modificarSocio($socio);
    }

    public function obtenerSocioPorId($id) {
        require_once(APPPATH . 'models/DTOs/Socio.php');
        $this->load->model('socios_model');
        $socios = $this->socios_model->obtenerSocioPorID($id);
        foreach ($socios as $socio) {
            echo ($socio->get_nombreApellido());
            echo ('      -       ');
        }
    }

    public function generarCuotas() {
        $this->load->model('cuotas_model');
        $this->cuotas_model->generarCuotasMesYAnioActual(500);
    }

    public function pagarCuota($IDCuota) {
        $this->load->model('cuotas_model');
        $this->cuotas_model->setearPagoCuota($IDCuota);
    }

    public function obtenerCuotasID($IdSocio) {
        require_once(APPPATH . 'models/Cuota.php');
        $this->load->model('cuotas_model');
        $cuotas = $this->cuotas_model->obtenerCuotasDeSocio($IdSocio);
        foreach ($cuotas as $cuota) {
            echo ($cuota->get_idCuota());
            echo ('      -       ');
        }
    }

    public function generarCuotasMyA() {
        $this->load->model('cuotas_model');
        $this->cuotas_model->generarCuotasPorMesYAnio(2, 1998, 250);
    }

    public function deleteGF($idGrupo) {
        $this->load->model('gfamiliar_model');
        $this->gfamiliar_model->deleteGrupoFamiliar($idGrupo);
    }

    public function load() {
        $this->load->view('agregarsocio_view');
    }

    public function loadgc() {
        $this->load->view('generarcuotas_view');
    }

    public function loadrp() {
        $this->load->view('registrarpago_view');
    }

}
