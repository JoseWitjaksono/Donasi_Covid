<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmodels extends CI_Model
{
    public function insertDonasi($nik, $jumlah)
    {
		$query = $this->db->query("SELECT * FROM donasi_covid WHERE nik = '$nik'");

		$a = $query->result_array();

		if(count($a) > 0){
			return FALSE;
		}else{
			$data = array(
				'nik' => $nik,
				'jumlah' => $jumlah,
			);

			$this->db->insert('donasi_covid', $data);
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}else{
				return FALSE;
			}
		}
    }

	public function checkState($nik)
	{
		$query = $this->db->query("SELECT * FROM donasi_covid WHERE nik = '$nik'");

		$a = $query->result_array();

		if(count($a) > 0){
			return 'SUDAH';
		}else{
			return 'BELUM';
		}
	}

    public function jumlahDonasi($nik)
    {
        $query = $this->db->query("SELECT * FROM donasi_covid WHERE nik = '20180115'");

        $row = $query->row();

        if (isset($row)){
            return $row;
        }else{
            return FALSE;
        }
    }
}
