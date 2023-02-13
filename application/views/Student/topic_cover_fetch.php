<?php
$this->load->view('Student/Layout/header');
?>
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
<br><br>
<h2 align="center">Topics covered</h2><br><br>

<div style="overflow-x:auto;">
  <table>
    <tr>
      
      <th>Module 1</th>
      <th>Module 2</th>
      <th>Module 3</th>
      <th>Module 4</th>
      <th>Module 5</th>
     
    </tr>
    <?php
    foreach ($syllabus as $sylbs) {
    
    	?>
    <tr>
      <td><?php echo $sylbs->module1_update?></td>
      <td><?php echo $sylbs->module2_update?></td>
      <td><?php echo $sylbs->module3_update?></td>
      <td><?php echo $sylbs->module4_update?></td>
      <td><?php echo $sylbs->module5_update?></td>
      
    </tr>
    <?php
}
?>
   
  </table>
</div>

</body>
</html>
<br><br><br>

<?php
$this->load->view('Student/Layout/footer');
?>