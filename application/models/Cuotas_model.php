<?php

use Cuota;

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
 * Clase Modelo para Cuotas.
 *
 * @author SergioC
 */
class Cuotas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Metodo que genera cuotas para todos los socios activos en la BD, para el mes y año actual.
     * @param float $monto Monto a abonar para cada cuota
     */
    public function generarCuotasMesYAnioActual($monto) {
        //Obtengo todos los socios activos para asignarles las cuotas
        $query = $this->db->get('socios'); // Produce: SELECT * FROM socios
        //Para cada socio agrego una nueva cuota
        foreach ($query->result() as $row) {
            $cuota = array(
                'idcuota' => '0',
                'idsocio' => $row->idsocio,
                'fecha_cuota' => date("Y-m") . '-01', //Formato AAAA-MM-DD
                'monto' => $monto,
                'estado' => 'Impaga');
            $this->db->insert('cuota_socio', $cuota);
        }
    }

    /**
     * Metodo que genera cuotas para todos los socios activos en la BD, para un determinado mes y año.
     * @param int $mes Mes de las Cuotas a generar en la BD
     * @param int $anio Año de las Cuotas a generar en la BD
     * @param float $monto Monto a abonar para cada cuota
     */
    public function generarCuotasPorMesYAnio($mes, $anio, $monto) {
        //Obtengo todos los socios activos para asignarles las cuotas
        $query = $this->db->get('socios'); // Produce: SELECT * FROM socios
        //Para cada socio agrego una nueva cuota
        foreach ($query->result() as $row) {
            $cuota = array(
                'idcuota' => '0',
                'idsocio' => $row->idsocio,
                'fecha_cuota' => $anio . '-' . $mes . '-01', //Formato AAAA-MM-DD
                'monto' => $monto,
                'estado' => 'Impaga');
            $this->db->insert('cuota_socio', $cuota);
        }
    }

    /**
     * Metodo que permite verificar si ya existen cuotas creadas en la BD para un determinado mes y año.
     * @param int $mes
     * @param int $anio
     * @return boolean TRUE si no existen cuotas/FALSE si ya existen cuotas.
     * 
     */
    public function verificarExistenciaCuotas($mes, $anio) {
        $this->db->where('fecha_cuota', $anio . "-" . $mes . "-" . "01"); //Formato fecha= AAAA-MM-DD
        $query = $this->db->get('cuota_socio');
        $cant = count($query);
        if ($cant === 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Metodo que elimina permanentemente de la BD todas las cuotas de un MES y AÑO. 
     * @param int $mes Mes de las cuotas a eliminar.
     * @param int $anio Año de las cuotas a eliminar.
     */
    public function deleteCuotasPorMesYAnio($mes, $anio) {
        $this->db->where('fecha_cuota', $anio . "-" . $mes . "-" . "01");
        $this->db->delete('cuota_socio');

        // Produce:
        // DELETE FROM cuota_socio
        // WHERE fecha_cuota = $anio-$mes-01
    }

    /**
     * Metodo que elimina de forma permanente una cuota de la BD por su ID.
     * @param int $iDCuota ID de la cuota a eliminar
     */
    public function deleteCuotaPorIDCuota($iDCuota) {
        $this->db->where('idcuota', $iDCuota);
        $this->db->delete('cuota_socio');

        // Produce:
        // DELETE FROM cuota_socio
        // WHERE idcuota = $iDCuota
    }

    /**
     * Metodo que permite registrar una cuota almacenada en DB como 'Pagada' y el dia de pago actual.
     * @param int $IdCuota Id de la cuota que se desea registrar como 'Pagada'
     */
    public function setearPagoCuota($IdCuota) {
        $data = array(
            'estado' => 'Pagada',
            'fecha_pago' => date("Y-m-d")
        );
        $this->db->where('idcuota', $IdCuota);
        $this->db->update('cuota_socio', $data);
        //Produce:
        //      UPDATE cuota_socio
        //      SET estado = 'Pagada'
        //      WHERE idcuota = $IdCuota
    }

    /**
     * Metodo que permite obtener las cuotas de un socio determinado.
     * @param int $IdSocio ID del socio del que se desea obtener las cuotas 
     * @return \Cuota Array con los objetos Cuota del socio
     */
    public function obtenerCuotasDeSocio($IdSocio) {
        $this->db->where('idsocio', $IdSocio);
        $query = $this->db->get('cuota_socio');
        foreach ($query->result() as $row) {
            $result[] = new Cuota($row->idcuota, $row->idsocio, $row->fecha_cuota, $row->monto, $row->estado, $row->fecha_pago);
        }
        return $result;
    }

    /**
     * Metodo que devuelve todas las Cuotas de la BD
     * @return \Cuota Array con todos los objetos Cuota de la BD.
     */
    public function obtenerCuotas() {
        $query = $this->db->get('cuota_socio');
        foreach ($query->result() as $row) {
            $result[] = new Cuota($row->idcuota, $row->idsocio, $row->fecha_cuota, $row->monto, $row->estado, $row->fecha_pago);
        }
        return $result;
    }

    /**
     * Metodo que obtiene todas la Cuotas Impagas de la BD
     * @return Cuota Array con todas las cuotas impagas.
     */
    public function obtenerCuotasImpagas() {
        $this->db->where('estado', "Impaga");
        $query = $this->db->get('cuota_socio');
        foreach ($query->result() as $row) {
            $result[] = new Cuota($row->idcuota, $row->idsocio, $row->fecha_cuota, $row->monto, $row->estado, $row->fecha_pago);
        }
        return $result;
    }

}
