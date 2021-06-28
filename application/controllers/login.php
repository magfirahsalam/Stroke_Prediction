<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('halamanlogin/login_header', $data);
            $this->load->view('halamanlogin/login');
            $this->load->view('halamanlogin/login_footer');
        } else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika user ada
        if ($user) {
            // jika user aktif
            if ($user['is_active'] == 1) {
                //  cek password
                if (password_verify($password, $user['password'])) {
                    $data =
                        [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('index_tampilan_admin');
                    } else
                        redirect('index_medis/index');
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">
                        Sorry, your password is wrong! </div>'
                    );
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                    Sorry, your email has not  been activated! </div>'
                );
                redirect('login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
            Sorry, email is not registered! </div>'
            );
            redirect('login');
        }
    }
    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Sorry, this email has been registered.'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[10]|matches[password2]', [
            'matches' => 'password doesnt match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration Page';
            $this->load->view('halamanlogin/login_header', $data);
            $this->load->view('halamanlogin/registration');
            $this->load->view('halamanlogin/login_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];


            $this->db->insert('user', $data);


            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Registration Successful! Please Login! </div>'
            );
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        You have been logout!</div>'
        );
        redirect('login');
    }
}
