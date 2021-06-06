<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => 'Masukan Username',

        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [

            'required' => 'Masukan Password'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Login';
            $this->load->view('admin/index', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $login = $this->db->get_where('login', ['username' => $username])->row_array();


        if ($login) {
            if ($login['is_active'] == 1) {
                if (password_verify($password, $login['password'])) {
                    $data = [
                        'username' => $login['username'],
                        'role_id' => $login['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($login['role_id'] == 1) {
                        redirect('dashboard');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Dan Password Salah !</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Dan Password Salah !</div>');
            redirect('login/');
        }
    }
}
