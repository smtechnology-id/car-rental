<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarModel extends CI_Model {

    // Nama tabel
    private $table = 'cars';

    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan semua data mobil
    public function get_all_cars() {
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    // Menambahkan mobil baru
    public function add_car($data, $slug, $status) {
        $data['slug'] = $slug; 
        $data['status'] = $status; // Add status to the data array

        return $this->db->insert($this->table, $data);
    }

    // Mengupdate data mobil
    public function update_car($data, $slug) {
        $data['slug'] = $slug;
        
        $this->db->where('id_car', $data['id_car']);
        if ($this->db->update($this->table, $data)) {
            return $this->db->affected_rows() > 0;
        }
        return false;
    }

    // Menghapus mobil
    public function delete_car($slug) {
        $this->db->where('slug', $slug);
        return $this->db->delete($this->table);
    }

    public function get_car_by_slug($slug) {
        $this->db->where('slug', $slug);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function get_car_by_id($id_car) {
        $this->db->where('id_car', $id_car);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    
}
