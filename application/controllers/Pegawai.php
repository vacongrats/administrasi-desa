<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Pegawai';
        $data['pegawi'] = $this->db->get('pegawai')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function aksi_simpan()
    {
        $nik_pegawai = $this->input->post('nik_pegawai');
        $nm_pegawai = $this->input->post('nama');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $stts_kerja = $this->input->post('stts_kerja');
        $jabatan = $this->input->post('jabatan');


        $data = array(
            'nik_pegawai' => $nik_pegawai,
            'nm_pegawai' => $nm_pegawai,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'stts_kerja' => $stts_kerja,
            'jabatan' => $jabatan
            // 'email' => $email,
            // 'password' => $password
        );
        $this->db->insert('pegawai', $data);
        $this->session->set_flashdata('message', '<div class="card mb-4 py-1 alert alert-success" role="alert"><div class="card-body"> Data pegawai berhasil di tambahkan! </div></div>');
        redirect('pegawai/index');
    }
    public function tambah()
    {
        $data['title'] = 'Data Pegawai';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/tambah_pegawai', $data);
        $this->load->view('templates/footer', $data);
    }

    public function get_data()
    {
        $id = $this->input->post('nik_pegawai');
        echo json_encode($this->db->where('nik_pegawai', $id)->get('pegawai')->row_array());
    }
    public function aksi_edit()
    {
        $nik_pegawai = $this->input->post('nik_pegawai');
        $nm_pegawai = $this->input->post('nm_pegawai');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $stts_kerja = $this->input->post('stts_kerja');
        $jabatan = $this->input->post('jabatan');


        $data = array(
            'nik_pegawai' => $nik_pegawai,
            'nm_pegawai' => $nm_pegawai,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'stts_kerja' => $stts_kerja,
            'jabatan' => $jabatan

        );
        $where = array(
            'nik_pegawai' => $nik_pegawai
        );
        $this->db->update('pegawai', $data, $where);
        $this->session->set_flashdata('message', '<div class="card mb-4 py-1 alert alert-success" role="alert"><div class="card-body"> Data pegawai berhasil di ubah! </div></div>');
        redirect('pegawai/index');
    }

    public function aksi_hapus($nik_pegawai)
    {

        $where = array('nik_pegawai' => $nik_pegawai);
        $this->db->delete('pegawai', $where);
        $this->session->set_flashdata('message', '<div class="card mb-4 py-1 alert alert-danger" role="alert"><div class="card-body"> Data berhasil di hapus! </div></div>');
        redirect('pegawai/index');
    }
}
