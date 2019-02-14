
<!DOCTYPE HTML>
<html>
<head>
<title>Add Coures Timetable</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="../css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='../css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->

 <!-- js-->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- chart -->
<script src="../js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<script  src="../js/index1.js"></script>
<link href="../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>

</style>


</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <?php include("Navigationbar2.php"); ?>
    </div>

		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">
				<?php include("Header.php");
				include("DBconnect.php");
				$db = dbconnect::getInstance();
				$mysqli = $db->getConnection();
				$sql_query = "SELECT * FROM `Doctors`";
				$result = $mysqli->query($sql_query);
				$counter=-1;
				while ($row=mysqli_fetch_array($result)){
						$counter++;
                    
						$SchoolsID[$counter]=$row['DoctorID'];
						$SchoolsName[$counter]=$row['FirstName'];
                        $SchoolsLname[$counter] =$row['LastName'];
				}

				?>
		</div>

		<!-- //header-ends -->
		<!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <div class="forms">
                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
						<div class="form-title">
							<h4>Reserve Doctor</h4>
						</div>

						<div class="form-body">
							<form method="post">
                                    <div class="form-group">
                                        <label>Doctor Name </label>
                                        <?php


                                            echo "<select id='CourseID' onchange='shaf3y(this.value)' name='School' class='form-control'>";

                                                for($x=0;$x<=$counter;$x++){
                                                    echo "<option  value='$SchoolsID[$x]'>$SchoolsName[$x] $SchoolsLname[$x]</option>";
                                                }

                                            echo "</select>";

                                        ?>
  																			<label>Time Slot Avaliability </label>
																				<div id='ajax'>
                                                                        <select name='Members' class='form-control'>
                                                                        <?php
                                                                        $db = dbconnect::getInstance();
                                                                        $mysqli = $db->getConnection();
                                                                        $sql_query = "SELECT * FROM DoctorsTimeSlots INNER JOIN Doctors On DoctorsTimeSlots.DoctorID= Doctors.DoctorID INNER JOIN TimeSlots on TimeSlots.TimeSlotID = DoctorsTimeSlots.TimeSlotID where Avaliability = 0 and DoctorsTimeSlots.DoctorID = $SchoolsID[0]";
                                                                        $result = $mysqli->query($sql_query);

                                                                        while ($row=mysqli_fetch_array($result)){
                                                                            $DoctorsTimeSlotsID = $row['DoctorsTimeSlotsID'];
                                                                        
                                                                        echo '<option value = "'.$DoctorsTimeSlotsID.'">'.$row['TimeBegin'] . "~" .$row['TimeEnd'] .'</option>';
                                                                        }
                                                                        ?>


                                                                        </select>
																				</div>
                                    </div>





                            <input type="submit" value="Submit" class="btn btn-success">
                            </form>
							<?php
								if($_POST){
                                    $DoctorTimeSlot= $_POST['Members'];
                                    $db = dbconnect::getInstance();
                                    $mysqli = $db->getConnection();
                                     $sql_query = "Update DoctorsTimeSlots Set Avaliability = 1 where DoctorsTimeSlotsID =$DoctorTimeSlot ";
                                    $result = $mysqli->query($sql_query);
                                    
                                    
                  if(!$result){
                      echo $sql_query;
                  }
                                    // echo "<meta http-equiv='refresh' content='0'>";
								}
							?>
						</div>
					</div>
                </div>
			</div>
		</div>
  	<!--footer-->
  	<div class="footer">
  	  
  	</div>
    <!--//footer-->
	</div>


	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="../js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};


			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
            function shaf3y(x) {

                var y = document.getElementById("CourseID").value;


                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("ajax").innerHTML = this.responseText;
                 }
                };
                xmlhttp.open("GET", "GetSelected.php?q=" + x +"&w=" + y, true);
                xmlhttp.send();
			}

		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
   <!-- <script src="js/bootstrap.js"> </script> -->
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>
