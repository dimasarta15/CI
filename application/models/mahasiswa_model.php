<?php

class Mahasiswa_model extends CI_Model {
     public function get () {
        $mhs = $this->db->get ('mahasiswa'); //select * from mahasiswa
        return $mhs->result();          
}

}