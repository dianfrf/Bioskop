<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller{

    public function index()
    {
        $data['konten'] = "home";
        $this->load->view('template', $data);
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function simpan()
    {
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                $this->load->model('m_user');
                if ($this->m_user->masuk() == TRUE) {
                    $this->session->set_flashdata('pesan', 'Sukses Simpan');
                    redirect('website/login','refresh');
                }
                else {
                    $this->session->set_flashdata('pesan', 'Gagal Simpan');
                    redirect('website/register','refresh');
                }
            }
            else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect('website/register','refresh');
            }
        }
    }

    public function proses_login()
    {
        if ($this->input->post('login')) {
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                $this->load->model('m_user');
                if ($this->m_user->get_login()->num_rows()>0) {
                    $data=$this->m_user->get_login()->row();
                    $array = array(
                        'login' => TRUE,
                        'nama_lengkap' => $data->nama,
                        'username' => $data->username,
                        'password' => $data->password,
                        'id_penonton' => $data->id_penonton
                    );
                    $this->session->set_userdata($array);
                    redirect('website','refresh');
                }
                else {
                    $this->session->set_flashdata('pesan', 'Username dan Password Salah');
                    redirect('website/login','refresh');
                }
            }
            else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect('website/login','refresh');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('website/login','refresh');
    }

    public function kritik()
    {
        $data['konten'] = "kritik";
        $this->load->view('template', $data);
    }

    public function tm_film()
    {
        $this->load->model('m_film');
        $data['tampil_film']=$this->m_film->tampil_film();
        $data['konten']="schedule";
        $this->load->view('template', $data);
    }

    public function detail_film($id_film='')
    {
        $this->load->model('m_film', 'fil');
        $data['detail']=$this->fil->detail($id_film);
        $data['konten']="tiket";
        if ($this->session->userdata('login') == TRUE) {
            $data['pesan']="Pesan Tiket";
            $data['url']="index.php/cart/add_cart/$id_film";
        }
        else {
            $data['pesan']="Login Dulu";
            $data['url']="index.php/website/login";
        }
        $this->load->view('template', $data);
    }

    public function kursi()
    {
        $data['konten']="kursi";
        $this->load->view('template', $data);
    }

}
