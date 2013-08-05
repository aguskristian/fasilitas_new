<?php $this->load->view ('template_admin/admin_logo')?>

<?php $this->load->view ('template_admin/admin_header')?>			
				
		<div class="container_12" style="overflow-x: scroll;">
				
		<?php $this->load->view('template_admin/admin_navigation_inventory')?>
				
		<div class="grid_12">
				
		<h2 class="page-title">Tabel Gudang<span class="breadcrumbs">
				
		<a href="<?php echo base_url()?>index.php/gudang/add_gudang">Form Gudang</a> &rsaquo; Tabel Gudang</span></h2></div>
				
		<table align="center"   style="font-size:12px" class="table ">
				
			<div>
			
			<strong>
			
				<?php 
				
					$search = $this->input->post( 'search' );
					
					echo $search ? "Menampilkan data pencarian '$search'" : 'Pencarian Data';
					
				?>
				
			</strong>
			
			</div>
     
                <form action="<?php echo site_url() ?>/station/tabel_station" method="post" class="navbar-search pull-left">
					
					<input type="search" name="search" class="input-medium search-query" placeholder="search" value="<?php echo $this->input->post( 'search' ) ?>" />
					
					
					<button class="search" type="button">Search</button>
				
                </form>
				
			<br></br>
		
		<tr align="center" bgcolor="#CCCCCC">  
		
			<th>Id Gudang</th>
           
		    <th>Jenis Barang</th>
			
			<th>No. Inventory</th>
            
			<th>Kode Akun</th>
			
			<th>Serial number </th>
			
			<th>Spesifikasi </th>
			
			<th>Penempatan awal</th>
			
			<th>Berita Acara </th>
			
			<th>Update On </th>
			
			<th>Update by </th>
			
			<th>Remaks </th>
			
			<th>File PDF </th>
			
			<th width="150"> Gambar </th>
			
			<th colspan="2" > Pilihan </th>
			
		</tr> 
	
		 <?php foreach ($records as $key ): ?>   
		<tr>    	
                    <td> <?php echo $key->id_gudang; ?> </td>
                    
					<td> <?php echo $key->jenis_barang; ?> </td>
                   
				    <td> <?php echo $key->no_inventory; ?> </td>
				   
				    <td> <?php echo $key->kode_akun; ?> </td>
					
					<td> <?php echo $key->serial_number; ?> </td>	
					
					<td> <?php echo $key->spesifikasi; ?> </td>	
					
					<td> <?php echo $key->penempatan_awal; ?> </td>	
					
					<td> <?php echo $key->berita_acara; ?> </td>	
					
					<td> <?php echo $key->update_on; ?> </td>	
					
					<td> <?php echo $key->update_by; ?> </td>	
					
					<td> <?php echo $key->remaks; ?> </td>	
					
					<td><a href="#" title="download" <?php echo $key->file_pdf; ?>>Download File</a></td> 
					
					<td align="center"> <img src="<?php echo base_url(); ?>uploads/<?php echo $key->gambar?>" width="50", height="50" /> </td>
							
					<td>
						<!-- Icons -->
						<a title="edit" href="<?php echo base_url().'index.php/gudang/edit/' . $key->id_gudang ?>"><img src="<?php echo base_url()?>asset/images/icons/pencil.png" alt="Edit" /></a>
						<a title="delete" href="<?php echo base_url().'index.php/gudang/delete/' . $key->id_gudang ?>"><img src="<?php echo base_url()?>asset/images/icons/cross.png" alt="Delete" /></a> 
					</td>
                    
		</tr>
                <?php endforeach; ?>
	</tbody>
</table>
</div>
       
<br><br>	
<?php $this->load->view ('template_admin/admin_footer')?>

