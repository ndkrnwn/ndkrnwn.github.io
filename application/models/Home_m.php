<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_m extends CI_Model
{
    // menampilkan data karyawan
    public function get($id = null)
    {
        $this->db->from('karyawan');
        if ($id != null) {
            $this->db->where('karyawan_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // menghapus data karyawan
    public function del($id)
    {
        $this->db->where('karyawan_id', $id);
        $this->db->delete('karyawan');
    }

    // menambah data karyawan
    public function add($post)
    {
        $params = [
            'name' => $post['karyawan_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'position' => $post['position'],
        ];
        $this->db->insert('karyawan', $params);
    }

    // mengedit data karyawan
    public function edit($post)
    {
        $params = [
            'name' => $post['karyawan_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' =>  $post['address'],
            'position' => $post['position'],
        ];
        $this->db->where('karyawan_id', $post['id']);
        $this->db->update('karyawan', $params);
    }
}
