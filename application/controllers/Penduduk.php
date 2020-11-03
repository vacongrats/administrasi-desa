<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Data Penduduk';
        $data['penddk'] = $this->db->get('penduduk')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('penduduk/index', $data);
        $this->load->view('templates/footer', $data);
    }



    public function aksi_simpan()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $pekerjaan = $this->input->post('pekerjaan');
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $desa = $this->input->post('desa');
        $kecamatan = $this->input->post('kecamatan');
        $no_hp = $this->input->post('no_hp');
        // $email = $this->input->post('email');
        // $password = $this->input->post('password');

        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'tmp_lahir' => $tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jk' => $jk,
            'agama' => $agama,
            'pekerjaan' => $pekerjaan,
            'alamat' => $alamat,
            'rt' => $rt,
            'rw' => $rw,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'no_hp' => $no_hp
            // 'email' => $email,
            // 'password' => $password
        );
        $this->db->insert('penduduk', $data);
        $this->session->set_flashdata('message', '<div class="card mb-4 py-1 alert alert-success" role="alert"><div class="card-body"> Data Penduduk berhasil di tambahkan! </div></div>');
        redirect('penduduk/index');
    }
    public function tambah()
    {
        $data['title'] = 'Data Penduduk';
        $data['penddk'] = $this->db->get('penduduk')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('penduduk/tambah_penduduk', $data);
        $this->load->view('templates/footer', $data);
    }

    public function get_data()
    {
        $id = $this->input->post('nik');
        echo json_encode($this->db->where('nik', $id)->get('penduduk')->row_array());
    }
    public function aksi_edit()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $pekerjaan = $this->input->post('pekerjaan');
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $desa = $this->input->post('desa');
        $kecamatan = $this->input->post('kecamatan');
        $no_hp = $this->input->post('no_hp');
        // $email = $this->input->post('email');
        // $password = $this->input->post('password');

        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'tmp_lahir' => $tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jk' => $jk,
            'agama' => $agama,
            'pekerjaan' => $pekerjaan,
            'alamat' => $alamat,
            'rt' => $rt,
            'rw' => $rw,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'no_hp' => $no_hp
            // 'email' => $email,
            // 'password' => $password
        );
        $where = array(
            'nik' => $nik
        );
        $this->db->update('penduduk', $data, $where);
        $this->session->set_flashdata('message', '<div class="card mb-4 py-1 alert alert-success" role="alert"><div class="card-body"> Data Penduduk berhasil di ubah! </div></div>');
        redirect('penduduk/index');
    }

    public function aksi_hapus($nik)
    {

        $where = array('nik' => $nik);
        $this->db->delete('penduduk', $where);
        $this->session->set_flashdata('message', '<div class="card mb-4 py-1 alert alert-danger" role="alert"><div class="card-body"> Data berhasil di hapus! </div></div>');
        redirect('penduduk/index');
    }
}
