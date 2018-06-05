<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_bagian extends CI_Model
{

    public $table = 'tb_bagian';
    public $id = 'id_bagian';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->where("bagian !=","Desa");
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_where($where)
    {
        $this->db->where("bagian !=","Desa");
        return $this->db->query('select * from tb_bagian '.$where)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where("bagian !=","Desa");
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows() {
        $this->db->where("bagian !=","Desa");
    	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0) {
        $this->db->where("bagian !=","Desa");
        $this->db->order_by($this->id, $this->order);
	    $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}