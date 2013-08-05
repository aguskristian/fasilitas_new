<html>
<?php $this->load->view ('admin_header')?>
<?php $this->load->view('sidebar')?>
<form action="" method="post">	
<header><h3>Form Input Data Gudang </h3></header>

<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Forms</a></li>
					</ul>
		

		<p>
			<label>Id Gudang</label>
			<input class="text-input small-input" type="text" id="small-input" name="id_gudang"/>
		</p>
								
		<p>
			<label>Jenis Barang</label>
			<select name="dropdown" class="small-input">
			<option value="option1">Option 1</option>
				<option value="option2">Option 2</option>
				<option value="option3">Option 3</option>
				<option value="option4">Option 4</option>
			</select> 
		</p>
								
		<p>
			<label>No. Inventory</label>
			<input class="text-input small-input" type="text" id="small-input" name="no_inventory"/>
		</p>
								
		<p>
			<label>Serial Number</label>
			<input class="text-input small-input" type="text" id="small-input" name="serial_number"/>
		</p>

		<p>
			<label>Spesifikasi</label>
			<input class="text-input small-input" type="text" id="small-input" name="spesifikasi"/>
		</p>
								
		<p>
			<label>Penempatan awal</label>
			<input class="text-input small-input" type="text" id="small-input" name="penempatan_awal"/>
		</p>
		
		<p>
			<label>Update By</label>
			<input class="text-input small-input" type="text" id="small-input" name="update_by"/>
		</p>
		
		<p>
			<label>Update On</label>
			<input class="text-input medium-input datepicker" type="text" id="medium-input" name="update_on" /> 
		</p>
		
		<p>
			<label>Remaks</label>
			<input class="text-input small-input" type="text" id="small-input" name="remaks"/>
		</p>
		
		<p>
			<label>Gambar</strong> <label>
			<input type="file" name="gambar" size="20"/>
		</p>
					
		<p>
		 <input type="submit" value="Add" name="submit" />
		</p>
													
		
		<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->

</form>

		<?php $this->load->view('admin_footer')?>




