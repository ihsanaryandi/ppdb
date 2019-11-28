<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PPDB_Model extends CI_Model {

    public function getPendaftar()
    {

        $this->db->select('nama, asal_sekolah, nem')
                 ->from('pendaftaran')
                 ->join('siswa', 'pendaftaran.nisn = siswa.nisn')
                 ->order_by('nem', 'DESC');
        
        $data = $this->db->get()->result_array();

        return $data;

    }

    public function getSiswa($nisn)
    {

        $data = $this->db->get_where('siswa', ['nisn' => $nisn])->row_array();

        return $data;

    }

    public function register($nisn)
    {

        $email = htmlspecialchars($this->input->post('email'));
        $password = htmlspecialchars($this->input->post('password'));

        $data = [
            'nisn' => $nisn,
            'email' => $email,
            'password' => password_hash($password, CRYPT_BLOWFISH)
        ];

        $this->db->insert('akun', $data);

    }

    public function daftar($nisn)
    {

        $data = [
            'nisn' => $nisn
        ];

        $this->db->insert('pendaftaran', $data);

    }

}
