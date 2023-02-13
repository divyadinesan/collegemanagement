<?php
$this->load->view('Student/Layout/parent_header');
?>
<br><br>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<br><br><br>
<h2 align="center"> Internal Mark</h2><br><br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Faculty Name</th>
      <th>Semester</th>
      <th>Subject</th>
      <th>Mark</th>
      <th>Assignment</th>
      <th>Seminar</th>
      <th>Total Mark</th>
      <th>Status</th>

     
    </tr>
    <?php
    $i=1;
    foreach ($internal as $intrnl) {
    
    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $intrnl->faculty_name?></td>
      <td><?php echo $intrnl->semester?></td>
      <td><?php echo $intrnl->subject_name?></td>
      <td><?php echo $intrnl->mark?></td>
      <?php
      $assigment_mark=0;
      foreach ($assignment as $asgmnt) {
        if($intrnl->subject_id==$asgmnt->subject_id)
        {
          $assigment_mark=$assigment_mark+$asgmnt->assignment_mark;
        }
      
    }
      ?>
      <td><?php echo  $assigment_mark?></td>

       <?php
      $seminar_mark=0;
      foreach ($seminar as $smnr) {
        if($intrnl->subject_id==$smnr->subject_id)
        {
          $seminar_mark=$seminar_mark+$smnr->seminar_mark;
        }
      
    }
      ?>

      <td><?php echo  $seminar_mark?></td>
      <td><?php echo $intrnl->mark+$seminar_mark+$assigment_mark?></td>
      <?php
      if($intrnl->mark+$seminar_mark+$assigment_mark>55)
      {
      ?>
      <td style="color: green"><b>PASS</b></td>
      <?php
  }
  else
  	{
  		?>
  		 <td style="color: red"><b>FAIL</b></td>
  		 <?php
  		}
  		?>
      
    </tr>
    <?php
    $i++;
}
?>

  </table>
  <br><br><br>
</div>

</body>
</html>







<?php
$this->load->view('Student/Layout/footer');
?>
