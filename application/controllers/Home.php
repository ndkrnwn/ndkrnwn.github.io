<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_m');
    }

    public function index()
    {
        $data['row'] = $this->Home_m->get();
        $this->load->view('Home', $data);
    }

    // FORM DELETE
    public function del($id)
    {
        $this->Home_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('Home') . "';</script>";
    }
    // FORM ADD
    public function add()
    {
        $karyawan = new stdClass();
        $karyawan->karyawan_id = null;
        $karyawan->name = null;
        $karyawan->gender = null;
        $karyawan->phone = null;
        $karyawan->address = null;
        $karyawan->position = null;
        $data = array(
            'page' => 'add',
            'row' => $karyawan
        );
        $this->load->view('Home_form', $data);
    }

    // form edit
    public function edit($id)
    {
        $query = $this->Home_m->get($id);
        if ($query->num_rows() > 0) {
            $karyawan = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $karyawan
            );
            $this->load->view('Home_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='" . site_url('Home') . "';</script>";
        }
    }

    // FORM PROSES
    public function process()
    {
        $post = $this->input->post(null, True);
        if (isset($_POST['add'])) {
            $this->Home_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->Home_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='" . site_url('Home') . "';</script>";
    }
}
