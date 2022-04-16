<?php
    class M_user extends CI_Model{
        function user(){
            return $this->db->get('tbl_user');
        }
    }
?>