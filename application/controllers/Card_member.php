<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Card_member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Card_member_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'card_member/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'card_member/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'card_member/index.html';
            $config['first_url'] = base_url() . 'card_member/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Card_member_model->total_rows($q);
        $card_member = $this->Card_member_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'card_member_data' => $card_member,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('card_member/card_member_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Card_member_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'type' => $row->type,
		'created_at' => $row->created_at,
	    );
            $this->load->view('card_member/card_member_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('card_member'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('card_member/create_action'),
	    'id' => set_value('id'),
	    'name' => set_value('name'),
	    'type' => set_value('type'),
	    'created_at' => set_value('created_at'),
	);
        $this->load->view('card_member/card_member_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'type' => $this->input->post('type',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Card_member_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('card_member'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Card_member_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('card_member/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'type' => set_value('type', $row->type),
		'created_at' => set_value('created_at', $row->created_at),
	    );
            $this->load->view('card_member/card_member_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('card_member'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'type' => $this->input->post('type',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Card_member_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('card_member'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Card_member_model->get_by_id($id);

        if ($row) {
            $this->Card_member_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('card_member'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('card_member'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('type', 'type', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Card_member.php */
/* Location: ./application/controllers/Card_member.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-16 06:55:01 */
/* http://harviacode.com */