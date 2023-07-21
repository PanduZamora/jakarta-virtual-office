<?php include 'includes/conn.php';

$trs_id = $_GET['trs_id'];
$result = mysqli_query($conn, "SELECT * FROM `payment-data` WHERE transaction_id=$trs_id");
 
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}
 
echo json_encode($data);
exit();