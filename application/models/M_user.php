<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{

    public function masuk()
    {
      $nama=$this->input->post('nama');
  		$username=$this->input->post('username');
  		$password=$this->input->post('password');

  		$data_simpan=array('nama'=>$nama, 'username'=>$username, 'password'=>md5($password));
  		$this->db->insert('penonton', $data_simpan);
  		if ($this->db->affected_rows()>0) {
        return TRUE;
      }
      else {
        return FALSE;
      }
    }

    public function get_login()
    {
      return $this->db->where('username', $this->input->post('username'))
                      ->where('password', md5($this->input->post('password')))
                      ->get('penonton');
    }

}
