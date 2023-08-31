
<?php 
$this->load->view('sule/header');
?>


<div class="container">
			<h1 id='form_head'>User Listing</h1>
			<?php if (isset($results)) { ?>
				<table border="1" cellpadding="0" cellspacing="0">
					<tr>
						<th>product id</th>
						<th>product code</th>
                                    <th>product name</th>
						<th>product price</th>


					</tr>
					
					<?php foreach ($results as $data) { ?>
						<tr>
							<td><?php echo $data->pid ?></td>
							<td><?php echo $data->pcode ?></td>
                                          <td><?php echo $data->pname ?></td>
                                          <td><?php echo $data->price ?></td>
						</tr>
					<?php } ?>
				</table>
			<?php } else { ?>
				<div>No user(s) found.</div>
			<?php } ?>
			<?php if (isset($links)) { ?>
				<?php echo $links ?>
			<?php } ?>
                  
                  <br><br>
<?php 
  $this->load->view('sule/foot');
  ?>