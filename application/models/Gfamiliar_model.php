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
 * Clase Modelo para Grupos Familiares
 *
 * @author SergioC
 */
class Gfamiliar_model extends CI_Model {

    /**
     * Metodo que inserta en BD un nuevo Grupo Familiar
     * @param GrupoFamiliar $grupoF Grupo familiar a inserar.
     */
    public function insertarGrupoFamiliar(GrupoFamiliar $grupoF) {
        $data = array(
            'idgrupo' => '0',
            'nombre_grupo' => $grupoF->getNombreGrupo()
        );
        $this->db->insert('grupo_familiar', $data);
    }

    /**
     * Metodo que elmina un Grupo Familiar en forma permanente de la BD.
     * @param int $IDGrupoF ID del grupo familiar que se desea eliminar.
     */
    public function deleteGrupoFamiliar($IDGrupoF) {
        $this->db->set('idgrupo', NULL);
        $this->db->where('idgrupo', $IDGrupoF);
        $this->db->update('socios');
        // Produve:
        //  UPDATE socios 
        //  SET `idgrupo` = NULL 
        //  WHERE `idgrupo` = $IDGrupoF
        $this->db->where('idgrupo', $IDGrupoF);
        $this->db->delete('grupo_familiar');
        // Produce:
        // DELETE FROM grupo_familiar
        // WHERE idgrupo = $IDGrupoF
    }
    
    /**
     * Metodo que devuelve la cantidas de Socios Asignados a un Grupo Familiar.
     * @param int $idGrupoF ID del Grupo Familiar.
     * @return int Cantidad de socios del Grupo Familiar.
     */
    public function cantSociosDeGF($idGrupoF) {
        $this->db->where('idgrupo', $idGrupoF);
        $query = $this->db->get('socis');
        return count($query);
    }
    
    
    /**
     * Metodo que le asigna a un socio un determinado Grupo Familiar
     * @param int $idSocio  ID del Socio que se desea asignar.
     * @param int $idGrupoF ID del GF a asignar.
     */
    public function asignarSocioAGrupoFamiliar($idSocio, $idGrupoF) {
        $this->db->set('idgrupo', $idGrupoF);
        $this->db->where('idsocio', $idSocio);
        $this->db->update('socios');
        // Produve:
        //  UPDATE socios 
        //  SET `idgrupo` = $idGrupoF 
        //  WHERE `idsocio` = $idSocio
    }

    /**
     * Metodo que desasigna a un determinado Socio de un grupo familiar.
     * @param int $idSocio ID del Socio que se desea desasignar.
     */
    public function desasignarSocioDeGrupoFamiliar($idSocio) {
        $this->db->set('idgrupo', NULL);
        $this->db->where('idsocio', $idSocio);
        $this->db->update('socios');
        // Produve:
        //  UPDATE socios 
        //  SET `idgrupo` = NULL 
        //  WHERE `idsocio` = $idSocio
    }
        
}
