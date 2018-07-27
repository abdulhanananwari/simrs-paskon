<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->model('Poliklinik_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->isLogin();
       
	}
	public function isLogin(){
		if($this->session->userdata('login') == TRUE){
			$this->template->load('template', 'dokter/dokter_list');
		}else {
			redirect('login');
		}

	}

    public function read($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);
        if ($row) {
            $data = array(
                    'id' => $row->id,
                    'name' => $row->name,
                    'spesialist' => $row->spesialist,
                    'image' => $row->image,
                    'ktp' =>$row->ktp,
                    'dokter_registration_code'=> $row->dokter_registration_code,
                    'address' => $row->address,
                    'phone_number' => $row->phone_number,
                    'mobile_number' => $row->mobile_number,
                    'email' => $row->email,
                    'dob' =>$row->dob,
                    'place_dob' => $row->place_dob,
                    'created_at' => $row->created_at,
	    );
            $this->template->load('template','dokter/dokter_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dokter'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('dokter/create_action'),
	    'id' => set_value('id'),
	    'name' => set_value('name'),
	    'spesialist' => set_value('spesialist'),
	    'active' => set_value('active'),
	    'image' => set_value('image'),
	    'created_at' => set_value('created_at'),
    );
        $data['polikliniks'] = $this->Poliklinik_model->get_all();
        
        $this->template->load('template','dokter/dokter_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'dokter_registration_code' => $this->input->post('dokter_registration_code'),
                'ktp' => $this->input->post('ktp'),
                'dob' => $this->input->post('dob'),
                'phone_number' => $this->input->post('phone_number'),
                'mobile_number' => $this->input->post('mobile_number'),
                'image' => $this->input->post('image'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            if (isset($_FILES)) {
            //    exit('jkghjkgh');
                $upload = $this->upload();
                $data['image'] = $upload;
            }
            $this->Dokter_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dokter'));
        }
    }
    public function list()
    {
       $this->load->database();
       if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
       }
    
       $json = array();
       foreach ($this->db->get("dokter")->result() as $p) {


            $row = array();
            $row[] = $p->id;                    
            $row[] = $p->name;
            $row[] = $p->spesialist;
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)"  title="Edit" onclick="edit_category('."'".$p->id."'".')"><i class="material-icons">edit</i></a>
            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_category('."'".$p->id."'".')"><i class="material-icons">delete_forever</i></a>';
            
            $json[] = $row;
       }                   
       $data['aaData'] = $json;
       $data['success'] = true;
       
       echo json_encode($data);
    }
    
    public function get($id){
        $query = $this->Dokter_model->get_by_id($id);
        echo json_encode($query);
    }

    public function update($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dokter/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'spesialist' => set_value('spesialist', $row->spesialist),
		'active' => set_value('active', $row->active),
		'image' => set_value('image', $row->image),
		'created_at' => set_value('created_at', $row->created_at),
	    );
            $this->template->load('template','dokter/dokter_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dokter'));
        }
    }
    
    public function update_action($id) 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                    'name' => $this->input->post('name',TRUE),
                    'spesialist' => $this->input->post('spesialist',TRUE),
                    'active' => $this->input->post('active',TRUE),
                    // 'image' => $this->input->post('image',TRUE),
                    'created_at' => $this->input->post('created_at',TRUE),
	            );

            $this->Dokter_model->update($id, $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dokter'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);

        if ($row) {
            $this->Dokter_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dokter'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dokter'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	
	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    private function upload(){

        // $config['upload_path'] = 'uploads/';
        // $config['allowed_types'] = 'gif|png|jpg';
        // $config['max_size'] = 10000;
        // $config['encrypt_name'] = TRUE;

        // $this->load->library('upload', $config);
        // $this->upload->do_upload('image');
        // exit(json_encode($this->upload->data()));
        // return $this->upload->data('file_name');

        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000; //set max size allowed in Kilobyte
        $config['max_width']            = 5000; // set max width image allowed
        $config['max_height']           = 5000; // set max height allowed
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('image')) //upload and validate
        {
            $data['inputerror'][] = 'image';
			$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		return $this->upload->data('file_name');
    }
}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-16 06:54:50 */
/* http://harviacode.com */