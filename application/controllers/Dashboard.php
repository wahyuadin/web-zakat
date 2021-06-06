<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard - E-Zakat';
        $data['login'] = $this->db->get_where('login', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view('admin/dashboard/header', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/dashboard/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Logout!</div>');
        redirect('login');
    }
}
