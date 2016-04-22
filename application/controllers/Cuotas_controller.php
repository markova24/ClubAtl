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
 * Description of Cuotas_controller
 *
 * @author Usuario
 */
class Cuotas_controller extends CI_Controller {

    public function generarCuotas() {
        $monto = $this->input->post("inputMonto");
        $mes = $this->input->post("inputMes");
        $anio = $this->input->post("inputAño");
        //Genero las cuotas en la BD
        $this->load->model('cuotas_model');
        $this->cuotas_model->generarCuotasPorMesYAnio($mes, $anio, $monto);
        //Muestro mensaje
        echo 'LAS CUOTAS FUERON GENERADAS CON EXITO!!';
    }

    public function registrarPago() {
        $codCuota = $this->input->post("inputCodCuota");
        
        //Registro el pago en la BD
         $this->load->model('cuotas_model');
        $this->cuotas_model->setearPagoCuota($codCuota);
        
        //Muestro mensaje
        echo 'La cuota fue registrada como PAGADA';
    }

}
