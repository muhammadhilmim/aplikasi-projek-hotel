<?php
    class M_delux extends CI_Model{
        function delux(){
            return $this->db->get('tbl_jenis_kamar');
        }
    }
?>