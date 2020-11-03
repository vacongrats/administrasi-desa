<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_cari');
    }

    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registrasi()
    {
        $keyword = $this->input->post('keyword');
        $data['penddk'] = $this->db->get('penduduk')->result_array();
        // $data['carinik'] = $this->m_cari->get_cari($keyword);
        $data['carinik'] = $this->db->select('nama')->where('nik')->like('nik', $keyword)->get('penduduk')->result_array();

        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/registrasi');
        $this->load->view('templates/auth_footer');
    }
}
