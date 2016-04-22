<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Clase Modelo para socios.
 *
 * @author SergioC
 */
class Socios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Metodo que devuelve todos los socios cargados en la DB.
     * @return \Socio array que contiene las instancias de objeto Socio de la BD.
     */
    public function obtenerSocios() {
        $result = array();
        $query = $this->db->get('socios'); // Produce: SELECT * FROM socios
        foreach ($query->result() as $row) {
            $result[] = new Socio($row->idsocio, $row->nomap, $row->nacionalidad, $row->fechanac, $row->estado_civil, $row->dni, $row->dom_particular, $row->dom_cobro, $row->facebook, $row->email, $row->telefono, $row->calidad, $row->foto_path, $row->idgrupo, $row->activo);
        }
        return $result;
    }
    
    /**
     * Metodo que devuelve todos los socios activos de la BD.
     * @return \Socio Array con los socios activos de la BD
     */
    public function obtenerSociosActivos() {
        $result = array();
        $this->db->where('activo', "1"); 
        $query = $this->db->get('socios');
        foreach ($query->result() as $row) {
            $result[] = new Socio($row->idsocio, $row->nomap, $row->nacionalidad, $row->fechanac, $row->estado_civil, $row->dni, $row->dom_particular, $row->dom_cobro, $row->facebook, $row->email, $row->telefono, $row->calidad, $row->foto_path, $row->idgrupo, $row->activo);
        }
        return $result;
    }
    
    /**
     * Metodo que devuelve un Socio buscado por un determinado ID.
     * @param int $idSocio Id del Socio en la BD
     * @return \Socio Objeto Socio buscado
     */
    public function obtenerSocioPorID($idSocio) {
        $this->db->select('*');
        $this->db->from('socios');
        $this->db->where('idsocio', $idSocio);
        $query = $this->db->get();
        // Produce:
        // SELECT * FROM socios WHERE idSocio=$idSocio
        foreach ($query->result() as $row) {
            $result[] = new Socio($row->idsocio, $row->nomap, $row->nacionalidad, $row->fechanac, $row->estado_civil, $row->dni, $row->dom_particular, $row->dom_cobro, $row->facebook, $row->email, $row->telefono, $row->calidad, $row->foto, $row->idgrupo, $row->activo);
        }
        return $result;
    }

    /**
     * Metodo que devuelve todos los socios pertenecientes al $grupoFamiliar
     * @param type $grupoFamiliar int
     */
    public function obtenerSociosDeGF($grupoFamiliar) {
        $this->db->select('*');
        $this->db->from('socios');
        $this->db->where('idgrupo', $grupoFamiliar);
        $query = $this->db->get();

        $rows = $query->custom_result_object('Socio');
        return $rows;
    }

    /**
     * Metodo que inserta un nuevo socio en la BD
     * @param Socio $socio Socio a insertar en la BD
     */
    public function insertarSocio(Socio $socio) {
        $data = array(
            'idsocio' => $socio->get_IDSocio(),
            'nomap' => $socio->get_nombreApellido(),
            'nacionalidad' => $socio->get_nacionalidad(),
            'fechanac' => $socio->get_fechaNac(),
            'estado_civil' => $socio->get_estadoCivil(),
            'dni' => $socio->get_dni(),
            'dom_particular' => $socio->get_dom_particular(),
            'dom_cobro' => $socio->get_dom_cobro(),
            'facebook' => $socio->get_facebook(),
            'email' => $socio->get_email(),
            'telefono' => $socio->get_telefono(),
            'calidad' => $socio->get_calidad(),
            'foto_path' => $socio->get_foto(),
            'idgrupo' => $socio->get_idGrupoFamiliar(),
            'activo' => '1'
        );

        $this->db->insert('socios', $data);
    }

    /**
     * Metodo que modifica un socio ya existente en la BD
     */
    public function modificarSocio(Socio $socio) {
        $data = array(
            'idsocio' => $socio->get_IDSocio(),
            'nomap' => $socio->get_nombreApellido(),
            'nacionalidad' => $socio->get_nacionalidad(),
            'fechanac' => $socio->get_fechaNac(),
            'estado_civil' => $socio->get_estadoCivil(),
            'dni' => $socio->get_dni(),
            'dom_particular' => $socio->get_dom_particular(),
            'dom_cobro' => $socio->get_dom_cobro(),
            'facebook' => $socio->get_facebook(),
            'email' => $socio->get_email(),
            'telefono' => $socio->get_telefono(),
            'calidad' => $socio->get_calidad(),
            'foto' => $socio->get_foto(),
            'idgrupo' => $socio->get_idGrupoFamiliar(),
        );

        $this->db->where('idsocio', $socio->get_IDSocio());
        $this->db->update('socios', $data);
        // Produces:
        //
        //      UPDATE socios
        //      SET title = '{$title}', name = '{$name}', date = '{$date}'
        //      WHERE id = $id
        // Modifica todos los campos a excepcion del idSocio
    }

    /**
     * Metodo que elimina un socio de la BD, OJO LO ELIMINA DE MANERA PERMANENTE!
     * @param int $idSocio ID del socio que se desa eliminar
     */
    public function deleteSocio($idSocio) {
        $this->db->where('idsocio', $idSocio);
        $this->db->delete('socios');

        // Produce:
        // DELETE FROM socios
        // WHERE idsocio = $idSocio
    }

    /**
     * Metodo que da de baja(desactiva) a un socio de la BD. El registro queda persistido en la BD.
     * @param int $idSocio
     */
    public function desactivarSocio($idSocio) {
        $data = array(
            'activo' => '0',
        );

        $this->db->where('idsocio', $idSocio);
        $this->db->update('socios', $data);
        // Produce:
        //
        //      UPDATE socios
        //      SET activo = '0'
        //      WHERE idsocio = $idSocio
    }

    /**
     * Metodo que da de alta(activa) a un socio de la DB, previamente dado de baja.
     * @param int $idSocio
     */
    public function activarSocio($idSocio) {
        $data = array(
            'activo' => '1',
        );

        $this->db->where('idsocio', $idSocio);
        $this->db->update('socios', $data);
        // Produce:
        //
        //      UPDATE socios
        //      SET activo = '1'
        //      WHERE idsocio = $idSocio 
    }

    /**
     * Metodo que busca nombres similares de socio en la table socios de la BD.
     * @param string $nombreSocio nombre del socio que se desea buscar.
     * @return \Socio Array con los Socios encontrados.
     */
    public function buscarSociosPorNombre($nombreSocio) {
        $this->db->select('*');
        $this->db->from('socios');
        $this->db->like('nomap', $nombreSocio);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $result[] = new Socio($row->idsocio, $row->nomap, $row->nacionalidad, $row->fechanac, $row->estado_civil, $row->dni, $row->dom_particular, $row->dom_cobro, $row->facebook, $row->email, $row->telefono, $row->calidad, $row->foto, $row->idgrupo, $row->activo);
        }
        return $result;
    }

}
