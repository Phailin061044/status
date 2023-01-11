<!DOCTYPE html>
<html>
<body style="background-color:	#FFFFFF">
<head>
    <title>สถานะการเบิกและคืนกุญแจห้อง</title>
<center><h2>สถานะการเบิกและคืนกุญแจห้อง</h2></center>
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

<table border="1" height="60%">
  <tr>
    <th>ลำดับ</th>
    <th>ชื่อผู้เบิกกุญแจ</th>
    <th>นามสกุลผู้เบิกกุญแจ</th>
    <th>หมู่เรียน</th>
    <th>เบอร์โทร</th>
    <th>เวลาเบิกกุญแจ</th>
    <th>ห้องเรียน</th>
    <th>อาจารย์ผู้สอน</th>
    <th>ลงชื่อคืนกุญแจ</th>
    <th>เวลาคืนกุญแจ</th>
    
  </tr>

<tbody>

<?php 
{


?>

<tr>
<td><?php echo $us['id'];?></td>
<td><?php echo $us['fname'];?></td>
<td><?php echo $us['lname'];?></td>
<td><?php echo $us['study_group'];?></td>
<td><?php echo $us['tell'];?></td>
<td><?php echo $us['time_open'];?></td>       
<td><?php echo $us['room'];?></td>
<td><?php echo $us['teacher'];?></td>
<td><?php echo $us['name_close'];?></td>
<td><?php echo $us['time_close'];?></td>
</tr>
<?php }?>
</tbody>
</table>
  
 
</table>

</body>
</html>