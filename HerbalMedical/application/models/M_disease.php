<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_disease extends CI_Model
{
    public function getDisease()
    {
        return $this->db->get('disease')->result_array();
    }
    public function getCode($code)
    {
        return $this->db->get_where('disease', ['code' => $code])->row_array();
    }
    public function searchDisease()
    {
        $search = $this->input->post('search');
        $this->db->like('name', $search);
        $this->db->or_like('description', $search);
        return $this->db->get('disease')->result_array();
    }
    
    public function tambahDataPenyakit()
    {
        $data = [
            "code" => $this->input->post('code', true),
            "name" => $this->input->post('name', true),
            "description" => $this->input->post('description', true),
            "prevention" => $this->input->post('prevention', true),
        ];

        //use query builder to insert $data to table "disease"
        $this->db->insert('disease',$data);
    }

    public function hapusDataPenyakit($code)
    {
        //use query builder to delete data based on code 
        $this->db->delete('disease', ['code' => $code]);
    }


    public function getPenyakitBycode($code)
    {
        //get data disease based on code
        //return $this->db->get_where('disease', ['code'=>$code])->row_array();
        $query = $this->db->get_where('disease', array('code' => $code));
        return $query->row_array();


    }
    public function ubahDataPenyakit()
    {
        // var_dump('test');
        //use query builder class to update data penyakit based on code
        // $this->db->where('code',$this->input->post('code'));
        $data = [
                "name" => $this->input->post('name', true),
                "description" => $this->input->post('description', true),
                "prevention" => $this->input->post('prevention', true),
        ];
        $this->db->where('code', $this->input->post('id', true));
        $this->db->update('disease',$data);
    

    }
    public function cariDataPenyakit()
    {
        $keyword = $this->input->post('code', true);
        //use query builder class to search data mahasiswa based on keyword "code" or "name" or "description" or "prevention"
        //return data penyakit/disease that has been searched
        // $this->db->like('code', $keyword);
        // $this->db->or_like('name',$keyword);
        // $this->db->or_like('description', $keyword);
        // $this->db->or_like('prevention', $keyword);
        // return $this->db->get('disease')->result_array();
    }
}