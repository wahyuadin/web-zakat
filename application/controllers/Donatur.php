<?php
class Donatur extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard - Data Donatur';
        $data['login'] = $this->db->get_where('login', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['donatur'] = $this->db->get('donatur')->result_array();

        $this->load->view('admin/dashboard/header', $data);
        $this->load->view('admin/dashboard/donatur', $data);
        $this->load->view('admin/dashboard/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Menu Management';
        $data['login'] = $this->db->get_where('login', ['username' =>
        $this->session->userdata('username')])->row_array();


        $data['donatur'] = $this->db->get('donatur')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Must be filled! '
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('admin/dashboard/header', $data);
            $this->load->view('admin/dashboard/tambah/donatur', $data);
            $this->load->view('admin/dashboard/footer');
        } else {
            $this->db->insert('donatur', [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telp' => $this->input->post('telp'),
                'desa' => $this->input->post('desa'),
                'dusun' => $this->input->post('dusun'),
                'nominal' => $this->input->post('nominal')
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('donatur/');
        }
    }

    public function hapus($id)
    {
        $this->db->where('id_donatur', $id);
        $this->db->delete('donatur');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Deleted Succefully!</div>');
        redirect('donatur/');
    }
}
