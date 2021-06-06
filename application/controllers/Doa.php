<?php

class Doa extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard - Doa Zakat';
        $data['login'] = $this->db->get_where('login', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['doa'] = $this->db->get('doa')->result_array();
        $this->load->view('admin/dashboard/header', $data);
        $this->load->view('admin/dashboard/doa', $data);
        $this->load->view('admin/dashboard/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Menu Management';
        $data['login'] = $this->db->get_where('login', ['username' =>
        $this->session->userdata('username')])->row_array();


        $data['doa'] = $this->db->get('doa')->result_array();

        $this->form_validation->set_rules('nama_doa', 'Nama Doa', 'required', [
            'required' => 'Must be filled! '
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('admin/dashboard/header', $data);
            $this->load->view('admin/dashboard/tambah/doa', $data);
            $this->load->view('admin/dashboard/footer');
        } else {
            $this->db->insert('doa', [
                'nama_doa' => $this->input->post('nama_doa'),
                'bacaan' => $this->input->post('bacaan')

            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('doa/');
        }
    }

    public function hapus($id)
    {
        $this->db->where('id_doa', $id);
        $this->db->delete('doa');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Deleted Succefully!</div>');
        redirect('doa/');
    }
}
