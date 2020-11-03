 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class M_cari extends CI_Model
    {
        function get_cari($keyword)
        {
            $this->db->select('*')->from('penduduk')->like('nik', $keyword);
            return $this->db->get()->result();
        }
    }
