<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Work_model extends CI_Model {
  public function get_user($staff_id = '')
{
    $this->db->select('works.*, staffs.emp_name');
    $this->db->from('works');
    $this->db->join('staffs', 'staffs.staff_id = works.staff_id', 'left');

    if ($staff_id != '') {
        $this->db->where('works.staff_id', $staff_id);
    }

    return $this->db->get()->result();  
}

    public function add_user($data) {
        return $this->db->insert('works', $data);
    }

    public function edit_user($staff_id, $data) {
        $this->db->where('staff_id', $staff_id);
        return $this->db->update('works', $data);
    }

    public function delete_user($staff_id) {
        return $this->db->delete('works', ['staff_id' => $staff_id]);
    }
    public function add_status($data)
{
    return $this->db->insert('works', $data);
}

}