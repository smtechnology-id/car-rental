<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('CarModel');
    }

    public function index()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/admin_footer');
    }

    // Car
    public function car()
    {
        $data['cars'] = $this->CarModel->get_all_cars();
        $this->load->view('templates/admin_header');
        $this->load->view('admin/car', $data);
        $this->load->view('templates/admin_footer');
    }

    public function carCreate()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/car-create');
        $this->load->view('templates/admin_footer');
    }

    public function carStore()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price_rate', 'Price Rate', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('photo', 'Photo', 'callback_photo_check');
        $this->form_validation->set_rules('seat', 'Seat', 'required');
        $this->form_validation->set_rules('door', 'Door', 'required');
        $this->form_validation->set_rules('engine', 'Engine', 'required');
        $this->form_validation->set_rules('fuel_type', 'Fuel Type', 'required');

        $slug = url_title(strip_tags($this->input->post('name') ?? ''), 'dash', TRUE);
        $status = 'available';


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/admin_header');
            $this->load->view('admin/car-create');
            $this->load->view('templates/admin_footer');
        } else {
            // Upload photo
            $config['upload_path'] = './assets/car-images';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 10048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('photo')) {
                echo $this->upload->display_errors();
            } else {
                $data = $this->upload->data();
                $photo = $data['file_name'];
            }

            // Prepare data for the car
            $data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'photo' => $photo, // Use the uploaded photo name
                'price_rate' => $this->input->post('price_rate'),
                'seat' => $this->input->post('seat'),
                'door' => $this->input->post('door'),
                'engine' => $this->input->post('engine'),
                'fuel' => $this->input->post('fuel_type'),
            ];

            // Call add_car with the correct parameters
            $this->CarModel->add_car($data, $slug, $status);
            if ($this->db->affected_rows() > 0) {
                redirect('admin/car');
            } else {
                echo "Gagal menambahkan data";
            }
        }
    }

    public function photo_check($str)
    {
        if (empty($_FILES['photo']['name'])) {
            $this->form_validation->set_message('photo_check', 'The {field} field is required.');
            return FALSE;
        }
        return TRUE;
    }

    public function carEdit($slug)
    {
        $data['car'] = $this->CarModel->get_car_by_slug($slug);
        $this->load->view('templates/admin_header');
        $this->load->view('admin/car-edit', $data);
        $this->load->view('templates/admin_footer');
    }

    public function carUpdate()
    {
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price_rate', 'Price Rate', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('photo', 'Photo', ''); 
        $this->form_validation->set_rules('seat', 'Seat', 'required');
        $this->form_validation->set_rules('door', 'Door', 'required');
        $this->form_validation->set_rules('engine', 'Engine', 'required');
        $this->form_validation->set_rules('fuel_type', 'Fuel Type', 'required');
        $id_car = $this->input->post('id_car');

        if ($this->form_validation->run() === FALSE) {
            $slug = $this->input->post('slug');
            $data['car'] = $this->CarModel->get_car_by_slug($slug);
            $this->load->view('templates/admin_header');
            $this->load->view('admin/car-edit', $data);
            $this->load->view('templates/admin_footer');
        } else {
            // Upload photo
            if(!empty($_FILES['photo']['name'])){
                $config['upload_path'] = './assets/car-images';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 10048;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    echo $this->upload->display_errors();
                } else {
                    $data = $this->upload->data();
                    $photo = $data['file_name'];
                }
            }
            else{
                // Ambil data photo dari database
                $photo = $this->CarModel->get_car_by_id($id_car);
                $photo = $photo->photo;
            }
            $data = [
                'id_car' => $id_car,
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'photo' => $photo,
                'price_rate' => $this->input->post('price_rate'),
                'seat' => $this->input->post('seat'),
                'door' => $this->input->post('door'),
                'engine' => $this->input->post('engine'),
                'fuel' => $this->input->post('fuel_type'),
            ];
            $slug = url_title(strip_tags($this->input->post('name') ?? ''), 'dash', TRUE);

            // Call update_car with the correct parameters
            $result = $this->CarModel->update_car($data, $slug);
            if ($result) {
                redirect('admin/car');
            } else {
                // Log error or display a message
                echo "Gagal mengubah data. Silakan periksa input dan coba lagi.";
                redirect('admin/carEdit/'.$this->input->post('slug'));
            }
        }
    }

    public function carDelete($slug)
    {
        $this->CarModel->delete_car($slug);
        if ($this->db->affected_rows() > 0) {
            redirect('admin/car');
        } else {
            echo "Gagal menghapus data";
        }
    }
}
