<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model{

    public function tm_pesan()
    {
        return $this->db->where('id_penonton', $this->session->userdata('id_penonton'))
                        ->get('nota')->result();
    }

}
