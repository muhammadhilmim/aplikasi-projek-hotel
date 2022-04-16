<?php
    class Hotel extends CI_Controller{

       function __cunstruct()
       {
           parent ::__construsct();
         

       }
      public function index()
      {
        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_hotel');
        $this->load->view('partisi_back/footer');
        $this->load->view('partisi_back/js');
      }
      public function dashboard()
      {
        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_hotel');
        $this->load->view('partisi_back/footer');
        $this->load->view('partisi_back/js');
      }

      public function tampil_konsumen(){
        $this->load->model('M_konsumen');
            $data['konsumen'] = $this->M_konsumen->konsumen()->result();

            $this->load->view('partisi_back/head');
            $this->load->view('partisi_back/navigasi');
            $this->load->view('v_konsumen', $data);
            //$this->load->view('partisi/footer');
            $this->load->view('partisi_back/js');
        }
        public function hapus_konsumen($id_konsumen){
            $id_konsumen = $id_konsumen;
            $this->db->delete('tbl_konsumen',['id_konsumen'=> $id_konsumen]);
            redirect('Hotel/tampil_konsumen');
        }
        
    public function tampil_kamar(){
        $this->load->model('M_tabel_kamar');
        $data['kamar'] = $this->M_tabel_kamar->kamar()->result();

        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_tabel_kamar', $data);
        //$this->load->view('partisi/footer');
        $this->load->view('partisi_back/js');
    } 
    public function user(){
        $this->load->model('M_user');
        $data['user'] = $this->M_user->user()->result();

        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_user', $data);
        //$this->load->view('partisi/footer');
        $this->load->view('partisi_back/js');
    } 
    
    public function delux(){
        $this->load->model('M_delux');
        $data['delux'] = $this->M_delux->delux()->result();

        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_delux', $data);
        //$this->load->view('partisi/footer');
        $this->load->view('partisi_back/js');
    } 
    public function family(){
        $this->load->model('M_family');
        $data['family'] = $this->M_family->family()->result();

        $this->load->view('partisi_back/head');
        $this->load->view('partisi_back/navigasi');
        $this->load->view('v_family', $data);
        //$this->load->view('partisi/footer');
        $this->load->view('partisi_back/js');
    } 
    
    function tambah_kamar(){
        $this->load->view('form_tambah_kamar');
    }
    
    
    }
?>