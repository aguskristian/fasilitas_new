<article class="module width_full" style="overflow-x: scroll;">
		<div class="module_content">
			<br></br>
			
			<?php $this->load->view('template_admin/admin_header');	?>
			<?php $this->load->view('sidebar');?>
			<div>
			<strong>
			
				<?php 
				
					$search = $this->input->post( 'search' );
					
					echo $search ? "Menampilkan data pencarian '$search'" : 'Pencarian Data';
					
				?>
				
			</strong>
			</div>
     
                <form action="<?php echo site_url() ?>/gudang/tabel_gudang" method="post" class="navbar-search pull-left">
					
					<input type="search" name="search" class="input-medium search-query" placeholder="search" value="<?php echo $this->input->post( 'search' ) ?>" />
					
					
					<button class="btn" type="button">Search</button>
				
                </form>
				
			<br></br>
    		<table align="center" border="1" cellpadding="0" cellspacing="0" style="font-size:12px" class="table table-bordered">

                <tr align="center" bgcolor="#CCCCCC">
				
                    <td> <strong>Id Gudang</strong></td>
                    <td> <strong>Jenis Barang</strong></td>
					<td> <strong>No. Inventory</strong></td>
                    <td> <strong>Kode Akun</strong></td>
					<td> <strong>Serial number </strong></td>
					<td> <strong>Spesifikasi </strong></td>
					<td> <strong>Penempatan awal</strong></td>
					<td> <strong>Berita Acara </strong></td>
					<td> <strong>Update On </strong></td>
					<td> <strong>Update by </strong></td>
					<td> <strong>Remaks </strong></td>
					<td> <strong>File PDF </strong></td>
					<td width="150"> Gambar</td>

 					<td colspan="2" > Pilihan </td>
								
                </tr> 
		
<!------------------------------------------------------------------------------------------------------>
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
						<td> <?php echo $key->file_pdf; ?> </td>	
						 <td align="center"> <img src="<?php echo base_url(); ?>uploads/<?php echo $key->gambar?>" width="150", height="100" /> </td>
							
					<td>

						<a href="<?php echo base_url().'index.php/gudang/edit/' . $key->id_gudang ?>">Edit</a>
						&nbsp;|&nbsp;
						<a href="<?php echo base_url().'index.php/gudang/delete/' . $key->id_gudang ?>">Delete</a>
					</td>
                    
				</tr>
         
          
                <?php endforeach; ?>
 
            </table>
		<?php $this->load->view ('footer')?>
            
            

		</div>
			
    </article><!-- end of stats article -->
	
	
	
 <div class="clear"></div>