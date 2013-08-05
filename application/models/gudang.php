<?php
	class Gudang extends CI_Model
	{
	function __construct(){
	
		parent::__construct();
		
			$this->load->database();
	}
	#---------------------------------------------------------
	#							Gudang				     -
	#---------------------------------------------------------
	#input data dari form gudang
	function input_gudang($data)
		{
			$query =$this->db->insert('gudang_atk',$data);
		}
	
	function gudang_tabel()
    		{
				#memanggil nilai dari tabel 'var_station'
       			$query = $this->db->get('gudang_atk');
				if ( $this->input->post( 'search' ) ) $data['records'] = $this->gudang->search_gudang( $this->input->post( 'search' ));
				
					return $query->result();
			}
			
	function delete_gudang($id)
			{
        		#menghapus nilai berdasarkan id
				$this->db->delete('gudang_atk', array('id_gudang'=>$id));
    		}
		
	function edit_gudang($id)
			{
				$query = $this->db->get_where('gudang-atk',array('id_gudang'=>$id));
				return $query->row_array();
			}
	 function search_gudang($qword)
        {
            #melakukan proses searching berdasarkan field database 
            //$query = $this->input->POST ('search');
			$this->db->select('*');
			$this->db->from('gudang_atk');
            $this->db->like ('id_gudang', $qword);
            $this->db->or_like('no_inventory', $qword);
			$this->db->or_like('kode_akun', $qword);
			$this->db->or_like('serial_number', $qword);
			$this->db->or_like('jenis_barang', $qword);
			$this->db->or_like('spesifikasi', $qword);
			$this->db->or_like('penempatan_awal', $qword);
			$this->db->or_like('berita_acara', $qword);
			$this->db->or_like('remaks', $qword);
			$this->db->or_like('update_on', $qword);
			$this->db->or_like('update_by', $qword);
			$this->db->or_like('file_pdf', $qword);
			$this->db->or_like('gambar', $qword);
			
			
         
            return $this->db->get()->result(); 
        }
	}
?>
	