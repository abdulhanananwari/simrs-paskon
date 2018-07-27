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

    public function index() {
        $this->isLogin();
       
	}
	public function isLogin(){
		if($this->session->userdata('login') == TRUE){
			$this->template->load('template', 'card_member/card_member_list');
		}else {
			redirect('login');
		}

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
            $this->template->load('card_member/card_member_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('card_member'));
        }
    }
    public function get($id){
        $query = $this->Card_member_model->get_by_id($id);
        echo json_encode($query);
    }
    public function list()
    {
       $this->load->database();
       if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
       }
    
       $json = array();
       foreach ($this->db->get("card_member")->result() as $p) {


            $row = array();
            $row[] = $p->id;                    
            $row[] = $p->name;
            $row[] = $p->type;
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_category('."'".$p->id."'".')"><i class="material-icons">edit</i></a>
            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_category('."'".$p->id."'".')"><i class="material-icons">delete_forever</i></a>';
            
            $json[] = $row;
       }                   
       $data['aaData'] = $json;
       $data['success'] = true;
       
       echo json_encode($data);
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
        $this->template->load('template','card_member/card_member_form', $data);
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
		            'created_at' =>  date('Y-m-d H:i:s')
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
            $this->template->load('template','card_member/card_member_form', $data);
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
	
	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Card_member.php */
/* Location: ./application/controllers/Card_member.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-16 06:55:01 */
/* http://harviacode.com */