<?php
$this->load->view('Admin/Layout/admin_header');
?>


<br><br><br><br>


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

<h2 align="center">Manage Holiday</h2>
<br>
<br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Holiday</th> 
      <th>Leave From</th>
      <th>Leave To</th>
      <th>Edit</th>
      <th>Delete</th>
     
    </tr>
    <?php
    $i=1;
    foreach ($holiday as $hldy) 
    {
     

    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $hldy->reason?></td>
      <td><?php echo $hldy->from_date?></td>
      <td><?php echo $hldy->to_date?></td>
       <td><a href="<?php echo base_url('index.php/Admincontroller/holiday_edit/'.$hldy->holiday_id)?>"><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 40px;width: 40px"></a></td>
      <td><a href="<?php echo base_url('index.php/Admincontroller/holiday_delete/'.$hldy->holiday_id)?>"><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>"  style="height: 40px;width: 40px"></a></td>
     
    </tr>

    
    <?php
    $i++;
}

?>
   
  </table>
</div><br><br>

</body>
</html>

<br><br><br><br>


<?php
$this->load->view('Admin/Layout/admin_footer');
?>