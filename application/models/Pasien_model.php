<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pasien_model extends CI_Model
{

    public $table = 'pasien';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    function join_by_id($id){
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->join('dokter','pasien.dokter_id=dokter.id');
        $this->db->join('poliklinik','pasien.poliklinik_id=poliklinik.id');
        $this->db->join('category','category_id=category.id');
        $this->db->where('pasien.id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('name', $q);
	$this->db->or_like('address', $q);
	$this->db->or_like('dob', $q);
	$this->db->or_like('place_dob', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('phone_number', $q);
	$this->db->or_like('image', $q);
	$this->db->or_like('pasien_type', $q);
	$this->db->or_like('card_member_id', $q);
	$this->db->or_like('rm_number', $q);
	$this->db->or_like('gender', $q);
	$this->db->or_like('religion', $q);
	$this->db->or_like('profession', $q);
	$this->db->or_like('card_type', $q);
	$this->db->or_like('complaint', $q);
	$this->db->or_like('exp_card_member', $q);
	$this->db->or_like('created_at', $q);
	$this->db->or_like('dokter_id', $q);
	$this->db->or_like('diagnosis', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('name', $q);
	$this->db->or_like('address', $q);
	$this->db->or_like('dob', $q);
	$this->db->or_like('place_dob', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('phone_number', $q);
	$this->db->or_like('image', $q);
	$this->db->or_like('pasien_type', $q);
	$this->db->or_like('card_member_id', $q);
	$this->db->or_like('rm_number', $q);
	$this->db->or_like('gender', $q);
	$this->db->or_like('religion', $q);
	$this->db->or_like('profession', $q);
	$this->db->or_like('card_type', $q);
	$this->db->or_like('complaint', $q);
	$this->db->or_like('exp_card_member', $q);
	$this->db->or_like('created_at', $q);
	$this->db->or_like('dokter_id', $q);
	$this->db->or_like('diagnosis', $q);
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

/* End of file Pasien_model.php */
/* Location: ./application/models/Pasien_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-16 06:54:32 */
/* http://harviacode.com */