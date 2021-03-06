<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ruangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ruangan_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->isLogin();
       
	}
	public function isLogin(){
		if($this->session->userdata('login') == TRUE){
			$this->template->load('template', 'ruangan/ruangan_list');
		}else {
			redirect('login');
		}

	}

    public function list()
    {
       $this->load->database();
       if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
       }
    
       $json = array();
       foreach ($this->db->get("ruangan")->result() as $p) {


            $row = array();
            $row[] = $p->id;                    
            $row[] = $p->name;
            $row[] = $p->class;
            $row[] = $p->capacity;
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_category('."'".$p->id."'".')"><i class="material-icons">edit</i></a>
            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_category('."'".$p->id."'".')"><i class="material-icons">delete_forever</i></a>';
            
            $json[] = $row;
       }                   
       $data['aaData'] = $json;
       $data['success'] = true;
       
       echo json_encode($data);
    }
    public function get($id){
        $query = $this->Ruangan_model->get_by_id($id);
        echo json_encode($query);
    }
    public function read($id) 
    {
        $row = $this->Ruangan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'capacity' => $row->capacity,
	    );
            $this->template->load('ruangan/ruangan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ruangan/create_action'),
	    'id' => set_value('id'),
	    'name' => set_value('name'),
	    'capacity' => set_value('capacity'),
	);
        $this->template->load('template','ruangan/ruangan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'capacity' => $this->input->post('capacity',TRUE),
	    );

            $this->Ruangan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ruangan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ruangan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ruangan/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'capacity' => set_value('capacity', $row->capacity),
	    );
            $this->template->load('template','ruangan/ruangan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
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
		'capacity' => $this->input->post('capacity',TRUE),
	    );

            $this->Ruangan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ruangan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ruangan_model->get_by_id($id);

        if ($row) {
            $this->Ruangan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ruangan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('capacity', 'capacity', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Ruangan.php */
/* Location: ./application/controllers/Ruangan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-23 06:18:30 */
/* http://harviacode.com */