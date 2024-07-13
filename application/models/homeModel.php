\<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model {
    function newRegisterUser($data) {
        $this->db->insert('register', $data);
    }

    function checkLogin($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('register');
        return $query->row();
    }

    function newEmpAdd($data) {
        $this->db->insert('emp_info', $data);
    }

    function getEmpData() {
        return $this->db->get('emp_info')->result_array();
    }

    function getEmpById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('emp_info');
        return $query->row_array();
    }

    function updateEmp($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('emp_info', $data);
    }

    function deleteEmp($id) {
        $this->db->where('id', $id);
        $this->db->delete('emp_info');
    }

}
