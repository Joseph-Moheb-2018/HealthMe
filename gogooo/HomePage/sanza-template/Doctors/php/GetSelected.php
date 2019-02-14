<?php
include_once "DBconnect.php";
$db = dbconnect::getInstance();
$mysqli = $db->getConnection();

$q = $_REQUEST["q"];
$sql_query = "SELECT * FROM DoctorsTimeSlots INNER JOIN Doctors On DoctorsTimeSlots.DoctorID= Doctors.DoctorID INNER JOIN TimeSlots on TimeSlots.TimeSlotID = DoctorsTimeSlots.TimeSlotID where Avaliability = 0 and DoctorsTimeSlots.DoctorID = $q";

    $result = $mysqli->query($sql_query);
echo "<select  name='Members' class='form-control'>";
    while($row = mysqli_fetch_array($result)){
 echo '<option value = "'.$row['DoctorsTimeSlotsID'].'">'.$row['TimeBegin'] . "~" .$row['TimeEnd'] .'</option>';
    }
echo "</select>";
    
?>

