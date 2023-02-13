<?php
$this->load->view('Student/Layout/parent_header');
?>
<br><br>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2 align="center" style="color: red"><b ><marquee> <i>Upcoming Holidays</i></marquee></b></h2><br><br>

<table>
  <thead>
  <tr>
    <th>Sl.no</th>
    
       <th>Reason</th>
       <th>Holiday From</th>
       <th>Holiday To</th>
      
       
  </tr>
  </thead>
  <tbody>
    <?php
    $i=1;

    foreach ($holiday as $hldy) {
    
    ?>
    <tr>
    	<td><?php echo $i?></td>
      <td><?php echo $hldy->reason?></td>
      <td><?php echo $hldy->from_date?></td>
     <td><?php echo $hldy->to_date?></td>
    
     
     
    </tr>
    <?php
    $i++;
}
?>
   
    
  </tbody>
  
</table>

</body>
</html>
<br><br><br>












<?php
$this->load->view('Student/Layout/footer');
?>