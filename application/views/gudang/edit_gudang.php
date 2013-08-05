<?php $this->load->view ('template_admin/admin_header')?>			

	<div class="container_12">

	<?php $this->load->view('template_admin/admin_navigation_inventory')?>

	<div class="content">
	
	<div class="container_12">

	<h2 class="page-title">Form Data Gudang<span class="breadcrumbs">

	<a href="<?php echo base_url()?>index.php/gudang/tabel_gudang">Tabel Gudang</a> &rsaquo; Form inventory</span></h2>

	</div>

		<div class="grid_4">
	
			<?php echo form_open_multipart('gudang/submit'); ?>

			<?php echo form_hidden('id_gudang',$fid_gudang); ?>
			
			<p>
				<td> <strong><?php echo form_label('Jenis Barang '); ?></strong></td>
				<td><input class="text-box"<?php echo form_input('jenis_barang',$fjenis_barang,'id="jenis_barang"'); ?></td>
			</p> 
			
			<p>
				<td><strong><?php echo form_label('No. Inventory '); ?></strong></td>
				<td><input class="text-box"<?php echo form_input('no_inventory',$fno_inventory,'id="no_inventory"'); ?></td>
			</p> 
			
			<p>
				<td><strong><?php echo form_label('Kode Akun'); ?></strong></td>
				<td><input class="text-box"<?php echo form_input('kode_akun',$fkode_akun,'id="kode_akun" '); ?></td>
			</p>
			
			<p>
				<td> <strong><?php echo form_label('Serial Number'); ?></strong></td>
				<input class="text-box"<?php echo form_input('serial_number',$fserial_number,'id="serial_number" '); ?></td>
			</p>
			
			<p>
				<td> <strong><?php echo form_label('Spesifikasi'); ?></strong></td>
				<input class="text-box"<?php echo form_input('spesifikasi',$fspesifikasi,'id="spesifikasi" '); ?></td>
			</p>
			
			<p>
				<td> <strong><?php echo form_label('Penempatan Awal'); ?></strong></td>
				<td><input class="text-box"<?php echo form_input('penempatan_awal',$fpenempatan_awal,'id="penempatan_awal" '); ?></td>
			</p>
			
			<p>
				<td> <strong><?php echo form_label('Berita Acara'); ?></strong></td>
				<td><input class="text-box"<?php echo form_input('berita_acara',$fberita_acara,'id="berita_acara" '); ?></td>
			</p>
			
			<p>
				<td> <strong><?php echo form_label('Update On'); ?></strong></td>
				<td><input class="text-box"<?php echo form_input('update_on',$fupdate_on,'id="update_on" '); ?></td>
			</p>
			
			<p>
				<td> <strong><?php echo form_label('Update_By'); ?></strong></td>
				<td><input class="text-box"<?php echo form_input('update_by',$fupdate_by,'id="update_by" '); ?></td>
			</p>
			
			<p>
				<td> <strong><?php echo form_label('Remaks'); ?></strong></td>
				<td><input class="text-box"<?php echo form_input('remaks',$fremaks,'id="remaks" '); ?></td>
			</p>
			
			<p>
				<td> <strong><?php echo form_label('File PDF'); ?></strong></td>
				<td><input class="text-box" <?php echo form_input('file_pdf',$ffile_pdf,'id="file_pdf" '); ?></td>
			</p>
			
			<p>
				<td> <strong><?php echo form_label('Gambar'); ?></strong></td>
				<td><input class="text-box"<?php echo form_input('gambar',$fgambar,'id="gambar" '); ?></td>
			</p>
			
			
			<br></br>
			 
	 <tr>
	
		<td> <?php echo form_submit('update','Update','id="submit"'); echo form_close(); ?> </td>
	 
	 </tr>
			
</div>

		<?php $this->load->view ('template_admin/admin_footer')?>
	</div>
</div>