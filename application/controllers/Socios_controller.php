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
 * Description of Socios_controller
 *
 * @author Usuario
 */
class Socios_controller extends CI_Controller{
    
    public function agregarSocio() {
        //var_dump($this->input->post("nacionalidad"));
        
        
        //Inserto el nuevo Socio en la BD
        require_once(APPPATH . 'models/DTOs/Socio.php');
        $socio = new Socio($this->input->post("idSocio"),
                $this->input->post("nombre"), 
                $this->input->post("nacionalidad"), 
                $this->input->post("fecha_nac"), 
                $this->input->post("estadoCivil"), 
                $this->input->post("dni"), 
                $this->input->post("dom_particular"), 
                $this->input->post("dom_cobro"),
                $this->input->post("facebook"), 
                $this->input->post("email"), 
                $this->input->post("telefono"), 
                $this->input->post("calidadSocio"), 
                NULL, 
                NULL, 
                "1");
        $this->load->model('socios_model');
        $this->socios_model->insertarSocio($socio);
        
        //muestro Pantalla de "Socio agregado"
        echo 'Socio Agregado Correctamente!';
    }
    
    
    
}
