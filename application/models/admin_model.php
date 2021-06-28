<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function __construct()
    {
    parent::__construct();
    $this->load->database();
}
public function login($post)
{
    $this->db->select('*');
    $this->db->from('ini_admin');
    $this->db->where('username', $post['password']);
    $this->db->where('password', password_verify($post['password'])
    $query = $this->db->get();
    return $query;
}
public function get($id = null)
{
    $this->db->select('*');
    $this->db->from('ini_admin');
    if($id !=null)
    {
        $this->db->where('id_admin', $id);
    }
    $query = $this->db->get();
    return;
}
public function add($post)
{
    $params['nama']=$post['nama'];
    $params['username']=$post['username'];
    $params['password']=password_verify($post['password']);
}
}