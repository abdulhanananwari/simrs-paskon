<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pasien/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pasien/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pasien/index.html';
            $config['first_url'] = base_url() . 'pasien/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pasien_model->total_rows($q);
        $pasien = $this->Pasien_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pasien_data' => $pasien,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pasien/pasien_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pasien_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'address' => $row->address,
		'dob' => $row->dob,
		'place_dob' => $row->place_dob,
		'email' => $row->email,
		'phone_number' => $row->phone_number,
		'image' => $row->image,
		'pasien_type' => $row->pasien_type,
		'card_member_id' => $row->card_member_id,
		'rm_number' => $row->rm_number,
		'gender' => $row->gender,
		'religion' => $row->religion,
		'profession' => $row->profession,
		'card_type' => $row->card_type,
		'complaint' => $row->complaint,
		'exp_card_member' => $row->exp_card_member,
		'created_at' => $row->created_at,
		'dokter_id' => $row->dokter_id,
		'diagnosis' => $row->diagnosis,
	    );
            $this->load->view('pasien/pasien_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pasien'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pasien/create_action'),
	    'id' => set_value('id'),
	    'name' => set_value('name'),
	    'address' => set_value('address'),
	    'dob' => set_value('dob'),
	    'place_dob' => set_value('place_dob'),
	    'email' => set_value('email'),
	    'phone_number' => set_value('phone_number'),
	    'image' => set_value('image'),
	    'pasien_type' => set_value('pasien_type'),
	    'card_member_id' => set_value('card_member_id'),
	    'rm_number' => set_value('rm_number'),
	    'gender' => set_value('gender'),
	    'religion' => set_value('religion'),
	    'profession' => set_value('profession'),
	    'card_type' => set_value('card_type'),
	    'complaint' => set_value('complaint'),
	    'exp_card_member' => set_value('exp_card_member'),
	    'created_at' => set_value('created_at'),
	    'dokter_id' => set_value('dokter_id'),
	    'diagnosis' => set_value('diagnosis'),
	);
        $this->load->view('pasien/pasien_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'address' => $this->input->post('address',TRUE),
		'dob' => $this->input->post('dob',TRUE),
		'place_dob' => $this->input->post('place_dob',TRUE),
		'email' => $this->input->post('email',TRUE),
		'phone_number' => $this->input->post('phone_number',TRUE),
		'image' => $this->input->post('image',TRUE),
		'pasien_type' => $this->input->post('pasien_type',TRUE),
		'card_member_id' => $this->input->post('card_member_id',TRUE),
		'rm_number' => $this->input->post('rm_number',TRUE),
		'gender' => $this->input->post('gender',TRUE),
		'religion' => $this->input->post('religion',TRUE),
		'profession' => $this->input->post('profession',TRUE),
		'card_type' => $this->input->post('card_type',TRUE),
		'complaint' => $this->input->post('complaint',TRUE),
		'exp_card_member' => $this->input->post('exp_card_member',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'dokter_id' => $this->input->post('dokter_id',TRUE),
		'diagnosis' => $this->input->post('diagnosis',TRUE),
	    );

            $this->Pasien_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pasien'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pasien_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pasien/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'address' => set_value('address', $row->address),
		'dob' => set_value('dob', $row->dob),
		'place_dob' => set_value('place_dob', $row->place_dob),
		'email' => set_value('email', $row->email),
		'phone_number' => set_value('phone_number', $row->phone_number),
		'image' => set_value('image', $row->image),
		'pasien_type' => set_value('pasien_type', $row->pasien_type),
		'card_member_id' => set_value('card_member_id', $row->card_member_id),
		'rm_number' => set_value('rm_number', $row->rm_number),
		'gender' => set_value('gender', $row->gender),
		'religion' => set_value('religion', $row->religion),
		'profession' => set_value('profession', $row->profession),
		'card_type' => set_value('card_type', $row->card_type),
		'complaint' => set_value('complaint', $row->complaint),
		'exp_card_member' => set_value('exp_card_member', $row->exp_card_member),
		'created_at' => set_value('created_at', $row->created_at),
		'dokter_id' => set_value('dokter_id', $row->dokter_id),
		'diagnosis' => set_value('diagnosis', $row->diagnosis),
	    );
            $this->load->view('pasien/pasien_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pasien'));
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
		'address' => $this->input->post('address',TRUE),
		'dob' => $this->input->post('dob',TRUE),
		'place_dob' => $this->input->post('place_dob',TRUE),
		'email' => $this->input->post('email',TRUE),
		'phone_number' => $this->input->post('phone_number',TRUE),
		'image' => $this->input->post('image',TRUE),
		'pasien_type' => $this->input->post('pasien_type',TRUE),
		'card_member_id' => $this->input->post('card_member_id',TRUE),
		'rm_number' => $this->input->post('rm_number',TRUE),
		'gender' => $this->input->post('gender',TRUE),
		'religion' => $this->input->post('religion',TRUE),
		'profession' => $this->input->post('profession',TRUE),
		'card_type' => $this->input->post('card_type',TRUE),
		'complaint' => $this->input->post('complaint',TRUE),
		'exp_card_member' => $this->input->post('exp_card_member',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'dokter_id' => $this->input->post('dokter_id',TRUE),
		'diagnosis' => $this->input->post('diagnosis',TRUE),
	    );

            $this->Pasien_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pasien'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pasien_model->get_by_id($id);

        if ($row) {
            $this->Pasien_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pasien'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pasien'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('address', 'address', 'trim|required');
	$this->form_validation->set_rules('dob', 'dob', 'trim|required');
	$this->form_validation->set_rules('place_dob', 'place dob', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('phone_number', 'phone number', 'trim|required');
	$this->form_validation->set_rules('image', 'image', 'trim|required');
	$this->form_validation->set_rules('pasien_type', 'pasien type', 'trim|required');
	$this->form_validation->set_rules('card_member_id', 'card member id', 'trim|required');
	$this->form_validation->set_rules('rm_number', 'rm number', 'trim|required');
	$this->form_validation->set_rules('gender', 'gender', 'trim|required');
	$this->form_validation->set_rules('religion', 'religion', 'trim|required');
	$this->form_validation->set_rules('profession', 'profession', 'trim|required');
	$this->form_validation->set_rules('card_type', 'card type', 'trim|required');
	$this->form_validation->set_rules('complaint', 'complaint', 'trim|required');
	$this->form_validation->set_rules('exp_card_member', 'exp card member', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('dokter_id', 'dokter id', 'trim|required');
	$this->form_validation->set_rules('diagnosis', 'diagnosis', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pasien.xls";
        $judul = "pasien";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Address");
	xlsWriteLabel($tablehead, $kolomhead++, "Dob");
	xlsWriteLabel($tablehead, $kolomhead++, "Place Dob");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Phone Number");
	xlsWriteLabel($tablehead, $kolomhead++, "Image");
	xlsWriteLabel($tablehead, $kolomhead++, "Pasien Type");
	xlsWriteLabel($tablehead, $kolomhead++, "Card Member Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Rm Number");
	xlsWriteLabel($tablehead, $kolomhead++, "Gender");
	xlsWriteLabel($tablehead, $kolomhead++, "Religion");
	xlsWriteLabel($tablehead, $kolomhead++, "Profession");
	xlsWriteLabel($tablehead, $kolomhead++, "Card Type");
	xlsWriteLabel($tablehead, $kolomhead++, "Complaint");
	xlsWriteLabel($tablehead, $kolomhead++, "Exp Card Member");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Dokter Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Diagnosis");

	foreach ($this->Pasien_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->address);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dob);
	    xlsWriteLabel($tablebody, $kolombody++, $data->place_dob);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->phone_number);
	    xlsWriteLabel($tablebody, $kolombody++, $data->image);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pasien_type);
	    xlsWriteLabel($tablebody, $kolombody++, $data->card_member_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rm_number);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gender);
	    xlsWriteLabel($tablebody, $kolombody++, $data->religion);
	    xlsWriteLabel($tablebody, $kolombody++, $data->profession);
	    xlsWriteLabel($tablebody, $kolombody++, $data->card_type);
	    xlsWriteLabel($tablebody, $kolombody++, $data->complaint);
	    xlsWriteLabel($tablebody, $kolombody++, $data->exp_card_member);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteNumber($tablebody, $kolombody++, $data->dokter_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->diagnosis);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Pasien.php */
/* Location: ./application/controllers/Pasien.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-16 06:54:32 */
/* http://harviacode.com */