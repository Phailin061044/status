<?php
	require_once 'ConDB.php';
	
	if(ISSET($_GET['save'])){
    
        $id = $_GET[`id`];
        $fname = $_GET[`fname`];
		$lname = $_GET['lname'];
		$study_group = $_GET['study_group'];
		$tell = $_GET['tell'];
        $time_open = $_GET['time_open'];
        $room = $_GET['room'];
        $teacher = $_GET['teacher'];
        $name_close = $_GET['name_close'];
        $time_close = $_GET['time_close'];
	
		
		try{
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `status_room`(id, fname, lname, study_group, tell, time_open, room, teacher, name_close, time_close, )  
            VALUES ('$id', '$fname', '$lname','$study_group', '$tell', '$time_open', '$room', '$teacher', '$name_close', '$time_close')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		
		header("location: status.php");
	
    }
    
    
?>

<?php
include "../view/view_status_card.php";  //การโชว์ข้อมูลในรูปแบบของการ์ด
?>