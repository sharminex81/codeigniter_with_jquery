<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index()
    {
        $this->load->database();

        $this->db->limit(5, ($this->input->get("page",1) - 1) * 5);
        $query = $this->db->get("users");
        $data['data'] = $query->result();
        $data['total'] = $this->db->count_all("users");

        echo json_encode($data);
    }

    /**
     * Store Data from this method.
     *
     * @return Response
     */
    public function store()
    {
        $user = UsersModel::store($_POST);
        echo json_encode($user);
    }
}