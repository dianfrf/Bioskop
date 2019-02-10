<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_film extends CI_Model{

    public function tampil_film()
    {
        $tm_film= $this->db->get('film')->result();
        return $tm_film;
    }

    public function detail($d)
    {
        $tm_film= $this->db
                                    ->join('kategori', 'kategori.id_kategori = film.id_kategori')
                                    ->where('id_film',$d)->get('film')->row();
        return $tm_film;
    }

}
