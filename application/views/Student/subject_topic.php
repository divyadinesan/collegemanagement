<?php
$this->load->view('Student/Layout/header');
?>

<div class="">
		<div class="container">
			
			<div class="inner_sec_w3_agileinfo">
				<?php
				foreach ($subject as $sylbs) {
				
				?>
				<div class="col-md-4 grid_info_main">
					<div class="grid_info">
						<div class="icon_info">
							<a href="<?php echo base_url('index.php/Studentcontroller/topic_cover_fetch/'.$sylbs->subject_id)?>"><img src="<?php echo base_url('Asset/Admin/subject/'.$sylbs->subject_image)?>" style="height: 150px;width: 150px"></a>
							<h5><?php echo $sylbs->subject_name?></h5>
							
						</div>
					</div>
					
				</div>
				<?php
			}
			?>
				
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<br><br><br>

<?php
$this->load->view('Student/Layout/footer');
?>