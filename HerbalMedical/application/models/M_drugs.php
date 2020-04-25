<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_drugs extends CI_Model
{
    public function getDrugs()
    {
        return $this->db->get('drugs')->result_array();
    }
    public function getCode($code)
    {
        return $this->db->get_where('drugs', ['code_drugs' => $code])->row_array();
    }
    public function searchDrugs()
    {
        $search = $this->input->post('search');
        $this->db->like('name', $search);
        $this->db->or_like('description', $search);
        return $this->db->get('drugs')->result_array();
    }

    public function tambahDataDrugs()
    {

        // $upload_data = $this->upload->data();
        // $file_name = $upload_data['file_name'];
        // var_dump($upload_data);
        $data = [
            "code_drugs" => $this->input->post('code_drugs', true),
            "name" => $this->input->post('name', true),
            "description" => $this->input->post('description', true),
            "usability" => $this->input->post('usability', true),
            "making" => $this->input->post('making', true),
            "code" => $this->input->post('code', true),
            "foto_drugs" => 'upload/'.$this->upload->data("file_name"),
        ];

        $this->db->insert('drugs',$data);
    }

    public function hapusDataDrugs($code_drugs)
    {
        //use query builder to delete data based on code 
        $this->db->delete('drugs', ['code_drugs' => $code_drugs]);
    }

    public function getDrugsbyCode($code_drugs)
    {
        return $this->db->get_where('drugs', ['code_drugs'=>$code_drugs])->row_array();
    }

    public function updateDrugs($foto_name)
    {
        $data = [
            "name" => $this->input->post('name', true),
            "description" => $this->input->post('description', true),
            "usability" => $this->input->post('usability', true),
            "making" => $this->input->post('making', true),
            "code" => $this->input->post('code', true),
            "foto_drugs" => $foto_name,
        ];
        // var_dump($data);

        $this->db->where('code_drugs', $this->input->post('code_drugs', true));
        $this->db->update('drugs',$data);
    }

    public function insert($data)
    {
    $this->db->insert('drugs', $data);
    }
}

?>