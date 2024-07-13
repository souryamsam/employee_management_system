<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('HomeModel');
    }

    public function index() {
        $this->load->view('index');
        $this->load->view('header/footer');
    }

    public function register() {
        $this->load->view('register');
        $this->load->view('header/footer');
    }

    public function registerNewUser() {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];

        $this->HomeModel->newRegisterUser($data);
        redirect('Home/index');
    }

    public function login_submit() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->HomeModel->checkLogin($email);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata('user_id', $user->id);
            redirect('home/home');
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('home/index');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('home/index');
    }

    public function home() {
        if (!$this->session->userdata('user_id')) {
            redirect('home/index');
        }
        $data['user_data'] = $this->HomeModel->getEmpData();
        $this->load->view('header/head');
        $this->load->view('home', $data);
        $this->load->view('header/footer');
    }

    public function addempfrom() {
        $this->load->view('header/head');
        $this->load->view('addEmp');
        $this->load->view('header/footer');
    }

    public function addemp() {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'position' => $this->input->post('position'),
            'department' => $this->input->post('department')
        ];

        $this->HomeModel->newEmpAdd($data);
        redirect('Home/home');
    }

    public function editEmp($id) {
        $data['user'] = $this->HomeModel->getEmpById($id);
        $this->load->view('header/head');
        $this->load->view('edit', $data);
        $this->load->view('header/footer');
    }

    public function update() {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'position' => $this->input->post('position'),
            'department' => $this->input->post('department')
        ];
        $id = $this->input->post('id'); 
        $this->HomeModel->updateEmp($id, $data);
        redirect('home/home');
    }

    public function delete($id) {
        $this->HomeModel->deleteEmp($id);
        redirect('home/home');
    }
    public function searchEmp() {
    $emp_id = $this->input->post('emp_id');

    $data['user_data'] = [];
    if (!empty($emp_id)) {
        $result = $this->HomeModel->getEmpById($emp_id);
        if ($result) {
            $data['user_data'] = [$result]; 
        }
    }

    $this->load->view('header/head');
    $this->load->view('home', $data);
    $this->load->view('header/footer');
}
}
