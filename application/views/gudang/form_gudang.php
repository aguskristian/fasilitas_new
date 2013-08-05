
<?php $this->load->view ('template_admin/admin_logo')?>

<?php $this->load->view ('template_admin/admin_header')?>			
			
		<div class="container_12" style="overflow-x: scroll;">
				
		<?php $this->load->view('template_admin/admin_navigation_inventory')?>
			
		<div class="content">
		
		<div class="container_12">
			
		<h2 class="page-title">Form Data Gudang<span class="breadcrumbs">
			
		<a href="<?php echo base_url()?>index.php/gudang/tabel_gudang">Tabel Gudang</a> &rsaquo; Form inventory</span></h2>
		
		</div>

		<div class="grid_4">
										
			<p>
				<label>Id Gudang</label>
				<input class="text-box" type="text" id="small-input" name="id_gudang"/>
			</p>
									
			<p>
				<label>Jenis Barang</label>
				<select name="jenis_barang" class="text-box">
					<option value="pc">PC</option>
					<option value="laptop">LAPTOP</option>
					<option value="printer">PRINTER</option>
					<option value="lcd">LCD</option>
				</select> 
			</p>
									
			<p>
				<label>No. Inventory</label>
				<input class="text-box" type="text" id="small-input" name="no_inventory"/>
			</p>
			
			<p>
				<label>Kode Akun</label>
				<input class="text-box" type="text" id="small-input" name="kode_akun"/>
			</p>
									
			<p>
				<label>Serial Number</label>
				<input class="text-box" type="text" id="small-input" name="serial_number"/>
			</p>

			<p>
				<label>Spesifikasi</label>
				<input class="text-box" type="text" id="small-input" name="spesifikasi"/>
			</p>
									
			<p>
				<label>Penempatan awal</label>
				<input class="text-box" type="text" id="small-input" name="penempatan_awal"/>
			</p>
			
			<p>
				<label>Berita Acara</label>
				<input class="text-box" type="text" id="small-input" name="berita_acara"/>
			</p>
			
			<p>
				<label>Update By</label>
				<input class="text-box" type="text" id="small-input" name="update_by"/>
			</p>
			
			<p>
				<label>Update On</label>
				<input class="text-box" type="text" id="medium-input" name="update_on" /> 
			</p>
			
			<p>
				<label>Remaks</label>
				<input class="text-box" type="text" id="small-input" name="remaks"/>
			</p>
			
			<p>
				<label>Upload Gambar</strong> <label>
				<input type="file" name="gambar" size="20"/>
			</p>
						
			<p>
			 <input class="button" type="submit" value="Add" name="submit" />
			</p>
														
		<div class="clear"></div><!-- End .clear -->					
							
	
	</div>
						
	<br></br>
<?php $this->load->view ('template_admin/admin_footer')?>

