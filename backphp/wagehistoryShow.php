<?php
header("content-type:text/html;charset=utf-8");
require_once("./connect.php");
mysqli_query($conn,"SET NAMES UTF8");

$sql="SELECT * FROM employee,paydetails,payhistory WHERE employee.employeeNo=payhistory.employeeNo AND employee.employeeNo=paydetails.employeeNo AND paydetails.employeeNo=payhistory.employeeNo ORDER BY employee.employeeNo ASC";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
    $rows[]=$row;
  }
echo json_encode($rows);
?>