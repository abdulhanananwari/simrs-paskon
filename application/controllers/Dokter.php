<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'dokter/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'dokter/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'dokter/index.html';
            $config['first_url'] = base_url() . 'dokter/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Dokter_model->total_rows($q);
        $dokter = $this->Dokter_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'dokter_data' => $dokter,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','dokter/dokter_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'spesialist' => $row->spesialist,
		'active' => $row->active,
		'image' => $row->image,
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
            exit(json_encode($data));
            $this->Dokter_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dokter'));
        }
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
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'spesialist' => $this->input->post('spesialist',TRUE),
		'active' => $this->input->post('active',TRUE),
		'image' => $this->input->post('image',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Dokter_model->update($this->input->post('id', TRUE), $data);
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