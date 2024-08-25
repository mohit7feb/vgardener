<?php

// session_start();
include "../database/db.php";
include "../database/auth.php";
error_reporting(0);

// $hospital_name = $_SESSION['auth_user']['hospital_name'];

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MEDPRONE - Hospital</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/doctorcolor.css" id="style_theme	">
	<link rel="stylesheet" href="../css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="../charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="../css/jquery-jvectormap.css">
	<link rel="stylesheet" href="../datatable/dataTables.bootstrap4.min.css">
	<link rel="icon" href="../images/logo.png" sizes="32x32" type="image/png">

	<script src="../js/modernizr.min.js"></script>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="../js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="../js/bootstrap.min.js"></script>
	<!-- jvectormap -->
	<script src="../js/jquery-jvectormap.min.js"></script>
	<script src="../js/jquery-jvectormap-world-mill.js"></script>
	<script src="../js/jquery.vmap.usa.js"></script>
	<script src="../js/jquery.vmap.india.js"></script>
	<script src="../js/custom-vector.js"></script>
	<!-- Custom Script-->
	<script src="../js/custom.js"></script>
	<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
	<style>

.logofortab{
	margin-top:12px;
}
		/* Custom CSS to position the menu at the bottom */
 .bottom-menu {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #f8f9fa;
      padding: 0px 10px 0px 10px !important;
    }
    /* Custom CSS to style menu items */
    .bottom-menu .navbar-nav {
      display:contents;
      justify-content: space-around;
      width: 100%;
      margin: 0;
      padding: 0;
    }
    .bottom-menu .nav-item {
      text-align: center;
    }
    .bottom-menu .nav-link {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #212529;
      font-size: 0.85rem;
    }
    .bottom-menu .nav-link i {
      font-size: 1.5rem;
      margin-bottom: 0.2rem;
    }
    @media (min-width: 576px) {
      .bottom-menu {
        display: none; /
      }
    }
	/* =================================================================== */
		@media only screen and (min-width: 320px) and (max-width: 768px) {
  /* CSS rules for mobile screens */
  .hospitalname{
	text-align:left;

  }
  body {
      padding-bottom: 90px;
    }
  .mobilemenu{
	font-size:20px !important; 
  }

  .mobilename{
	padding-bottom:15px;
	margin:auto;
	text-align:center;
	/* margin-right:70px !important; */

  }
  .laptopname{
	display:none;
  }

 .laptopmenubutton{
	display:none;
 }
  
 .container-fluid{
	padding:unset;
 }
 .navbar{
	padding:0px;
 }
 .container-fluid{
	display:block !important;
}
.navandlogo{
	display: flex;
    justify-content: space-between;
    padding-top: 0px !important;
    position: fixed;
    top: 0;
    z-index: 1000 !important;
    background: #95bde6;
	margin:auto;
	width: -webkit-fill-available !important;

}
nav.navbar.navbar-default {
       
        position: relative !important;
        top: 0;
        z-index: 100 !important;
    }
.logofortab{
	margin:auto;
	margin-top: 9px !important;
}
.breadcrumb{
	display:none;
}
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {


	.hospitalname{
	text-align:left;

  }
  body {
      padding-bottom: 90px;
    }
  .mobilemenu{
	font-size:20px !important; 
  }

  .mobilename{
	padding-bottom:15px;
	margin:auto;
	text-align:center;
	/* margin-right:70px !important; */

  }
  .laptopname{
	display:none;
  }

 .laptopmenubutton{
	display:none;
 }
  
 .container-fluid{
	padding:unset;
 }
 .navbar{
	padding:0px;
 }



.navandlogo{
	display: flex;
    justify-content: space-between;
    /* padding-top: 17px; */
    position: fixed;
    top: 0;
    z-index: 1000 !important;
    background: #95bde6;
	margin:auto;
	width: -webkit-fill-available !important;

}
.container-fluid{
	display:block !important;
}
.logofortab{
	margin:auto;
	margin-top: 8px !important;
}
.quickstats{
	/* text-align:end; */
}
.breadcrumb{
	/* display:none; */
}
.block-title{
	width:443px;
}
}

		@media screen and (min-width: 1024px) {
		.mobilename{
			display:none;
		}
		.mobmenubutton{
			display:none;
		}
		.openmenu-close{
			display:none;
		}
		#openmenu-closediv{
			display: none;
		}
}

#sidebarCollapse1{
/* padding:10px; */
font-size:17px;
cursor:pointer;
background:#555;
color:#fff;
border-radius:50%;
}
.openmenu-close{
	
	margin-left: 44% !important;
    margin-top: 10px;
    position: inherit !important;
    background: white;
    border-radius: 41px;
	z-index: 100000000 !important;

}

/*///////////////////////////////////////////////////////////////////////////////////*/
#sidebar-li{
      padding: 10px 1px 8px 1px;

    }
    #sidebar-li:hover {
    background-color: #95bde6;
    border-radius: 10px; /* Apply border-radius to all corners */
    
}
#sidebar-li:hover #appmenu{
  color:#08203e;
}
#sidebar-li:hover #petmenu{
  color:#08203e;
}
#sidebar-li:hover #schmenu{
  color:#08203e;
}
#sidebar-li:hover #medmenu{
  color:#08203e;
}
#sidebar-li:hover #suppmenu{
  color:#08203e;
}
#sidebar-li:hover #suppmenu{
  color:#08203e;
}
#sidebar-li:hover #paymenu {
  color: #08203e;
}

#sidebar-li:hover #prescmenu {
  color: #08203e;
}
#sidebar-li:hover #patmenu {
  color: #08203e;
}
#sidebar-li:hover #profilemenu {
  color: #08203e;
}
#sidebar-li:hover #dashmenu {
  color: #08203e;
}
#sidebar-li:hover #depmenu {
  color: #08203e;
}
#sidebar-li:hover #profilemenu {
  color: #08203e;
}
#sidebar-li:hover #docmenu {
  color: #08203e;
}
#sidebar-li:hover #allappointment {
  color: #08203e;
}
#sidebar-li:hover #settingmenu {
  color: #08203e;
}

#sidebar-li:hover .ti-dash:before {
  background-image: url('../images/Menu_icons/Dashboard2.png');
  
}
#sidebar-li:hover .ti-hospitalprofile:before {
  background-image: url('../images/Menu_icons/Hospital2.png');
  
}
#sidebar-li:hover .ti-subcription:before {
        background-image: url('../images/Menu_icons/Subscription2.png');
    }
#sidebar-li:hover .ti-department:before {
  background-image: url('../images/Menu_icons/Department2.png');
  
}
#sidebar-li:hover .ti-profile:before {
  background-image: url('../images/Menu_icons/Doctor2.png');
}
#sidebar-li:hover .ti-appointment:before {
  background-image: url('../images/Menu_icons/Appointment2.png');
}
#sidebar-li:hover .ti-allappointment:before {
  background-image: url('../images/Menu_icons/Appointment2.png');
}

#sidebar-li:hover .ti-patient:before {
  background-image: url('../images/Menu_icons/Patient2.png');
}

#sidebar-li:hover .ti-schedule:before {
  background-image: url('../images/Menu_icons/Schedule2.png');
}
 
#sidebar-li:hover .ti-payment:before {
  background-image: url('../images/Menu_icons/Payment2.png');
}
#sidebar-li:hover .ti-medicine:before {
  background-image: url('../images/Menu_icons/Medicine2.png');
}
#sidebar-li:hover .ti-supplier:before {
  background-image: url('../images/Menu_icons/supplier2.png');
}
#sidebar-li:hover .ti-prescription:before {
  background-image: url('../images/Menu_icons/Prescription2.png');
}
#sidebar-li:hover .ti-setting:before {
  background-image: url('../images/Menu_icons/Setting3.png');
}


/* Default styles */
.scrollable {
    overflow-y: hidden;
    height: -webkit-fill-available;
}

/* When content overflows, show scrollbar */
.scrollable:hover {
    overflow-y: auto; /* Show the scrollbar */
}

/* For WebKit (Chrome, Safari) */
.scrollable::-webkit-scrollbar {
    width: 1px !important; /* Set the default width of the scrollbar */
}

/* For WebKit (Chrome, Safari) */
.scrollable::-webkit-scrollbar-thumb {
    background-color: #95bde6;
    border-radius: 100px; /* Optional: Add border-radius */
}

/* For Firefox */
.scrollable {
    scrollbar-width: thin; /* Set the default width of the scrollbar */
}

/* For Firefox */
.scrollable::-webkit-scrollbar-thumb {
    background-color: #95bde6; 
}

.scrollable {
    scrollbar-color: #95bde6 transparent !important; /* Color of the scrollbar thumb and track */
}

/* Media query for responsive scrollbar */
@media screen and (max-width: 768px) {
    

    #sidebar.active ul li a{
      padding: 0px 4px;
      font-size: 17px !important;
      margin-bottom: 7px;
    }
	
}
@media screen and (min-width: 1024px) {
.mobilename{
	display:none;
}
.mobmenubutton{
	display:none;
}
.openmenu-close{
	display:none;
}
#openmenu-closediv{
	display: none;
}
}

/* Media query for responsive scrollbar */
@media screen and (max-width: 768px) {
    
    #sidebar-ul {
        position: relative !important;
    }
    #medicine-expend{
		top: 0px !important;
    }
    #doctor-expend{
		top: 0px !important;
    }
    #department-expend{
		top: 0px !important;	
    }
    #supplier-expend{
		top: 0px !important;
    }
    #patient-expend{
		top: 0px !important;
    }
    #schedule-expend{
		top: 0px !important;
    }
    #appoint-expend{
		top: 0px !important;
    }
	#setting-expend{
		top: 0px !important;
    }
    #sidebar.active ul li a{
      padding: 0px 4px;
      font-size: 17px !important;
      margin-bottom: 7px;
    }
}
@media screen and (max-width: 1024px) {
    .scrollable{
      position: relative !important;
    }
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px) {
  .hospitalname{
	text-align:left;

  }
  #hlogodiv{
    padding-top: 65px !important;
  }
  #appoint-expend{
	padding-left:46px !important;
  }
  #patient-expend{
	padding-left:88px !important; 
  }

  .mobilemenu{
	font-size:20px !important; 
  }

  .mobilename{
	padding-bottom:15px;
	margin:auto;
	text-align:center;
	

  }
  .laptopname{
	display:none;
  }

 .laptopmenubutton{
	display:none;
 }
  
 .container-fluid{
	padding:unset;
 }
 .navbar{
	padding:0px;
 }



 .quickstats{
  /* text-align:end; */
 }
 .container-fluid{
	display:block !important;
}
.navandlogo{
	padding-bottom:12px;
	margin:auto;

}
.logofortab{
	margin:auto;
}
#hospital-label
{
	display: none;
}
.hospital-select{
	margin:auto;
}
.hospital-select-div{
	padding: 6px 0px 4px 0px;
  
  margin:auto;
}


}
@media screen and (max-width: 1024px) {
    .scrollable{
      position: relative !important;
    }
    .mobilename{
	display:block;
}
.mobmenubutton{
	display:block;
}
.openmenu-close{
	display:block;
	        z-index: 100000000 !important;
}
    
  }

  @media only screen and (min-width: 1200px) and (max-width: 1440px) {
    .sidebar_ul {
     
    position: fixed !important;
   
    }
	
  }

  @media only screen and (min-width: 300px) and (max-width: 768px) {
    .sidebar_ul {
    		position: fixed !important;
    }

	
	
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px) {
    .sidebar_ul {
   			 position: unset !important;
    }
	
	.components{
        margin-left: 0px !important;
	}
	.mobilename{
		margin-top: 17px;
	}
	.hospitalname{
		margin-top: -3px;	
	}

  
  }

  @media only screen and (min-width: 1024px) and (max-width: 1199px) {
    
	.components{
        margin-left: 6px !important;
		/* position: static !important; */
	}
	

  
  }

	</style>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- <div class="wrapper"> -->
		<!-- Sidebar -->
		<nav id="sidebar" >
		<div class="row justify-content-center" id="openmenu-closediv" style="position: sticky; top: 0; padding-bottom: 4px;">
    <div class="col-md-12 text-center"> <!-- Adjust the column width as needed -->
        <img width="38" height="38" id="closeIcon" class="openmenu-close" src="../images/cross_icon.png" />
    </div>
</div>

		<script>
    $(document).ready(function(){
        // Add click event handler to the image
        $('.openmenu-close').click(function(){
            // Remove the 'active' class from the <nav> element with id 'sidebar'
            $('#sidebar').removeClass('active');
        });
    });
</script>


		<?php
				$hospital_id = $_SESSION['auth_user']['client_id'];
				// echo $hospital_id;
				$sql_name = "SELECT hospital_name FROM hospital WHERE hospital_id = '$hospital_id'";
				$result_name = mysqli_query($conn, $sql_name);
				$fetch_name = mysqli_fetch_assoc($result_name);
				$fetch_hospital_name = $fetch_name['hospital_name'];


				$sql_pharmacy = "SELECT pharmacy FROM subscription WHERE hospital_id = '$hospital_id'";
				$result_pharmacy = mysqli_query($conn, $sql_pharmacy);
				$pharmacy = mysqli_fetch_assoc($result_pharmacy);
				// echo $pharmacy['pharmacy'];


				$sql_image_url = "SELECT hospital_image_url  FROM hospital WHERE hospital_id = '$hospital_id'";
				$result_image_url = mysqli_query($conn, $sql_image_url);
				$fetch_image_url = mysqli_fetch_assoc($result_image_url);
				// echo $hospital_id;	
		?>
		<?php

$user_type_id=$_SESSION['auth_user']['user_type_id'];
$sql_t="select * from user_type where user_type_id='$user_type_id'";
$result_t=mysqli_query($conn,$sql_t);
$fetch_t=mysqli_fetch_assoc($result_t);
$user_type_name=$fetch_t['user_type_name'];


?>
	<div class="sidebar-header" style="background:#95bde6; padding-bottom:30px; height:97px !important; position:sticky; top:0; ">
	<?php 
				if($user_type_name == 'Pharmacist')
				{
		?>
		<a href="../dashboard/pharmacist_dashboard.php" ><img src="../images/logo.png" class="logo" alt="logo"width="100%"></a>
		<?php }else{ ?>
			<a href="../dashboard/dashboard.php" ><img src="../images/logo.png" class="logo" alt="logo"width="100%"></a>
	<?php	} ?>
	</div>
			<div class="row" style="overflow: auto !important;height: 471px !important;">
				<div class="col-md-12" styel="background:#1d76d1!important;">

		<ul class="list-unstyled components scrollable sidebar_ul" id="sidebar-ul" style="margin-left:6px;margin-top:6px; margin-right:6px;background: #1d76d1;padding:7px;border-radius: 7px 7px 7px 7px;">
			
		<?php 
				if($user_type_name == 'Pharmacist')
				{
		?>
				<li id="sidebar-li">
					<a href="../dashboard/pharmacist_dashboard.php" id="dashmenu" style="display:flex;" >
						<span class="ti-dash"></span>&nbsp; Dashboard
					</a>
					<ul class="collapse list-unstyled" id="nav-dashboard">
					
					</ul>
				</li>
				<li id="sidebar-li">
					<a href="../userprofile/user_profile.php" id="profilemenu" style="display:flex;" >
						<span class="ti-hospitalprofile"></span>&nbsp; Profile
					</a>
				</li>

				<li id="sidebar-li">
					<a href="../prescription/patients_observed.php" id="prescmenu" style="display:flex;">
						<span class="ti-prescription"></span>&nbsp; Prescriptions
					</a>
					</li>
				<li id="sidebar-li">
					<a href="../payment/payments.php" id="paymenu" style="display: flex;">
						<span class="ti-payment"></span>&nbsp; Payments
					</a>
				</li>

				<?php

				if(isset($pharmacy['pharmacy']) && $pharmacy['pharmacy'] ===  'yes'){
					
					?>
					
				<li id="sidebar-li">
						<a href="#" id="medmenu" style="display:flex;" data-toggle="collapse" >
							<span class="ti-medicine"></span>&nbsp; Medicine
							<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="medicine-expend"></i>
						</a>
						<ul class="list-unstyled" id="med-menu">
							<li>
								<a href="../medicine/add_medicine.php">Add-View Medicine</a>
							</li>
							<li>
								<a href="../medicine/medicine_stock.php">Medicine Stocks</a>
							</li>
						
						</ul>
					</li>
				<li id="sidebar-li">
					
				<script>
    $(document).ready(function(){
        $('#med-menu').hide(); // Corrected class to match HTML

        $('#medmenu').click(function(){ // Corrected ID to match HTML
            $('#med-menu').toggle(); // Corrected ID to match HTML
			$('#medicine-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#medicine-expend').addClass('ti-plus');
    });
</script>
						<a href="#" id="suppmenu" style="display:flex;" data-toggle="collapse" >
							<span class="ti-supplier"></span>&nbsp; Supplier
							<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="supplier-expend"></i>
						</a>
						<ul class="list-unstyled" id="supp-menu">
							<li>
								<a href="../supplier/add_supplier.php">Add Supplier</a>
							</li>
							<li>
								<a href="../supplier/all_supplier.php">All Supplier</a>
							</li>
						
						</ul>
					</li>
					
				<script>
    $(document).ready(function(){
        $('#supp-menu').hide(); // Corrected class to match HTML

        $('#suppmenu').click(function(){ // Corrected ID to match HTML
            $('#supp-menu').toggle(); // Corrected ID to match HTML
			$('#supplier-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#supplier-expend').addClass('ti-plus');
    });
</script>					
<?php } ?>

		<?php }else{ ?>
		

				<li id="sidebar-li">
					<a href="../dashboard/dashboard.php" id="dashmenu" style="display:flex;" >
						<span class="ti-dash"></span>&nbsp; Dashboard
					</a>
					<ul class="collapse list-unstyled" id="nav-dashboard">
					
					</ul>
				</li>
				<li id="sidebar-li">
					<a href="../hospital/profile.php" id="profilemenu" style="display:flex;" >
						<span class="ti-hospitalprofile"></span>&nbsp; Hospital Profile
					</a>
				
				
				</li>
			
					<script>
		$(document).ready(function(){
			$('#pat-menu').hide(); // Corrected class to match HTML

			$('#patmenu').click(function(){ // Corrected ID to match HTML
				$('#pat-menu').toggle(); // Corrected ID to match HTML
				$('#patient-expend').toggleClass('ti-plus ti-minus'); 
		});

		// Set initial class to ti-plus
		$('#patient-expend').addClass('ti-plus');
		});
	</script>
					<li id="sidebar-li" >
					<a href="" id="patmenu" style="display:flex;" data-toggle="collapse" >
						<span class="ti-patient"></span>&nbsp; Patients
						<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="patient-expend"></i>
					</a>
					<ul class="list-unstyled" id="pat-menu">
						<li>
							<a href="../patient/add_patient.php" class="mobilemenu">Add Patient</a>
						</li>
						<li>
							<a href="../patient/patients.php" class="mobilemenu">All Patients</a>
						</li>
						
					</ul>   
				</li>
				<li id="sidebar-li">
					<a href="#" id="docmenu" style="display:flex;" data-toggle="collapse" >
						<span class="ti-profile"></span>&nbsp; Doctors
						<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="doctor-expend"></i>

					</a>        
					<ul class="list-unstyled" id="doc-menu">
						<li>
							<a href="../doctor/add_doctor.php" class="mobilemenu">Add Doctor</a>
						</li>
						<li>
							<a href="../doctor/doctors.php" class="mobilemenu">All Doctors</a>
						</li>
						<!-- <li>
							<a href="about_doctor.php">Doctor Details</a>
						</li>
						<li>
							<a href="edit_doctor.php">Edit Doctor</a>
						</li> -->
					</ul>
				</li>
				
				<script>
    $(document).ready(function(){
        $('#doc-menu').hide(); // Corrected class to match HTML

        $('#docmenu').click(function(){ // Corrected ID to match HTML
            $('#doc-menu').toggle(); // Corrected ID to match HTML
   // Toggle class for plus and minus icon
   $('#doctor-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#doctor-expend').addClass('ti-plus');
});
</script>
<li id="sidebar-li">
					<a href="../allappointment/appointments.php" id="allappointment" style="display:flex;" >
						<span class="ti-allappointment"></span>&nbsp; All Appointments
					</a>
				
				
				</li>
				<li id="sidebar-li" style="position: relative;">
    <a href="#" id="appmenu" data-toggle="collapse" style="display: flex;">
        <span class="ti-appointment"></span>&nbsp; Appointment Manager
        <i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="appoint-expend"></i>
    </a>
    <ul class="list-unstyled" id="app-menu">
        <li>
            <a href="../appointment/add_appointment.php" class="mobilemenu">Add Appointments</a>
        </li>
        <li>
            <a href="../appointment/cancelled_appointments.php" class="mobilemenu">Cancelled Appointment</a>
        </li>
    </ul>
</li>

				
				<script>
    $(document).ready(function(){
        $('#app-menu').hide(); // Corrected class to match HTML

        $('#appmenu').click(function(){ // Corrected ID to match HTML
            $('#app-menu').toggle(); // Corrected ID to match HTML
      // Toggle class for plus and minus icon
	  $('#appoint-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#appoint-expend').addClass('ti-plus');
    });
</script>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

				<?php

				if(isset($pharmacy['pharmacy']) && $pharmacy['pharmacy'] ===  'yes'){
					
					?>
					
				<li id="sidebar-li">
						<a href="#" id="medmenu" style="display:flex;" data-toggle="collapse" >
							<span class="ti-medicine"></span>&nbsp; Medicine
							<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="medicine-expend"></i>
						</a>
						<ul class="list-unstyled" id="med-menu">
							<li>
								<a href="../medicine/add_medicine.php">Add-View Medicine</a>
							</li>
							<li>
								<a href="../medicine/medicine_stock.php">Medicine Stocks</a>
							</li>
						
						</ul>
					</li>
				<li id="sidebar-li">
					
				<script>
    $(document).ready(function(){
        $('#med-menu').hide(); // Corrected class to match HTML

        $('#medmenu').click(function(){ // Corrected ID to match HTML
            $('#med-menu').toggle(); // Corrected ID to match HTML
			$('#medicine-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#medicine-expend').addClass('ti-plus');
    });
</script>
						<a href="#" id="suppmenu" style="display:flex;" data-toggle="collapse" >
							<span class="ti-supplier"></span>&nbsp; Supplier
							<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="supplier-expend"></i>
						</a>
						<ul class="list-unstyled" id="supp-menu">
							<li>
								<a href="../supplier/add_supplier.php">Add Supplier</a>
							</li>
							<li>
								<a href="../supplier/all_supplier.php">All Supplier</a>
							</li>
						
						</ul>
					</li>
					
				<script>
    $(document).ready(function(){
        $('#supp-menu').hide(); // Corrected class to match HTML

        $('#suppmenu').click(function(){ // Corrected ID to match HTML
            $('#supp-menu').toggle(); // Corrected ID to match HTML
			$('#supplier-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#supplier-expend').addClass('ti-plus');
    });
</script>					
<?php } ?>

<li id="sidebar-li">
      <a href="../prescription/patients_observed.php" id="prescmenu" style="display:flex;">
        <span class="ti-prescription"></span>&nbsp; Prescriptions
      </a>
    </li>
<li id="sidebar-li">
      <a href="../payment/payments.php" id="paymenu" style="display: flex;">
        <span class="ti-payment"></span>&nbsp; Payments
      </a>
    </li>


<li id="sidebar-li">
      <a href="" id="schmenu" style="display:flex;" data-toggle="collapse" >
        <span class="ti-schedule"></span>&nbsp; Schedule
		<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="schedule-expend"></i>
      </a>
      <ul class="list-unstyled" id="sch-menu">
        <li>
          <a href="../availability/availability.php" class="mobilemenu">Regular Schedule</a>
        </li>
        <li>
          <a href="../availability/special_days.php" class="mobilemenu">Special Days</a>
        </li>
       
      </ul>
    </li>
    <script>
    $(document).ready(function(){
        $('#sch-menu').hide(); // Corrected class to match HTML

        $('#schmenu').click(function(){ // Corrected ID to match HTML
            $('#sch-menu').toggle(); // Corrected ID to match HTML
			$('#schedule-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#schedule-expend').addClass('ti-plus');
    });
</script>
					
                <li id="sidebar-li">
					<a href="#" id="depmenu" style="display:flex;" data-toggle="collapse" >
					<span class="ti-department"></span>&nbsp; Department
					<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="department-expend"></i>

					</a>
					<ul class="list-unstyled" id="dep-menu">
						<li>
							<a href="../department/add_department.php" class="mobilemenu">Add Department</a>
						</li>
						<li>
							<a href="../department/view_department.php" class="mobilemenu">All Departments</a>
						</li>
						
					</ul>   
				</li>
				<li id="sidebar-li">
                <a href="../subscription_invoice/subscription_view.php" id="submenu" style="display: flex;width: fit-content;">
                    <span class="ti-subcription"></span>&nbsp; Subscription Invoice
                </a>
            </li>

				<li id="sidebar-li">
						<a href="#" id="settingmenu" data-toggle="collapse"  style="display:flex;">
							<span class="ti-setting"></span>&nbsp; Settings
              <i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="setting-expend"></i>
						</a>
						<ul class="list-unstyled" id="setting-menu">
							<li>
								<a href="../setting/refresh_page.php">Refresh Page</a>
							</li>
							<!-- <li>
								<a href="../medicine/medicine_stock.php">Medicine Stocks</a>
							</li> -->
						
						</ul>
					</li>
          <script>
    $(document).ready(function(){
        $('#setting-menu').hide(); // Corrected class to match HTML

        $('#settingmenu').click(function(){ // Corrected ID to match HTML
            $('#setting-menu').toggle(); // Corrected ID to match HTML
            $('#setting-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#setting-expend').addClass('ti-plus');
    });
</script>
<?php } ?>
				
			</ul>
	
			</div>
			</div>
				<script>
		$(document).ready(function(){
			$('#dep-menu').hide(); // Corrected class to match HTML

			$('#depmenu').click(function(){ // Corrected ID to match HTML
				$('#dep-menu').toggle(); // Corrected ID to match HTML
		// Toggle class for plus and minus icon
		$('#department-expend').toggleClass('ti-plus ti-minus'); 
		});

		// Set initial class to ti-plus
		$('#department-expend').addClass('ti-plus');
	});
	</script>
		</nav>
		<div id="sidebar-overlay">

		</div>
		<script>
  $(document).ready(function() {
    $('.openmenu-close').click(function() {
        // $('#sidebar').toggleClass('active');
        $('#sidebar-overlay').toggle(); // Show/hide the overlay when toggling the sidebar
    });
    $('#sidebarCollapse1').click(function() {
        // $('#sidebar').toggleClass('active');
        $('#sidebar-overlay').toggle(); // Show/hide the overlay when toggling the sidebar
    });
});

</script>
		<style>
  .actives{
    background: #95bde6;
    border-radius: 10px;
    color: #08203e;
  }
  .dash-back:before {
    background-image: url('../images/Menu_icons/Dashboard2.png');
}
.profile-back:before {
    background-image: url('../images/Menu_icons/Doctor2.png');
}
.appoint-back:before {
    background-image: url('../images/Menu_icons/Appointment2.png');
}
.patient-back:before {
    background-image: url('../images/Menu_icons/Patient2.png');
}
.schedule-back:before {
    background-image: url('../images/Menu_icons/Schedule2.png');
}
.presc-back:before {
    background-image: url('../images/Menu_icons/Prescription2.png');
}
.medicine-back:before {
    background-image: url('../images/Menu_icons/Medicine2.png');
}
.supplier-back:before {
    background-image: url('../images/Menu_icons/supplier2.png');
}
.payment-back:before {
    background-image: url('../images/Menu_icons/Payment2.png');
}
.subs-invoice:before {
    background-image: url('../images/Menu_icons/Subscription2.png');
}
.hospital-back:before {
    background-image: url('../images/Menu_icons/Hospital2.png');
}
.department-back:before {
    background-image: url('../images/Menu_icons/Department2.png');
}
.allappoint-back:before {
    background-image: url('../images/Menu_icons/Appointment2.png');
}



</style>
<script>
$(document).ready(function(){
    // Add click event handler to the image
    $('.openmenu-close').click(function(){
        // Remove the 'active' class from the <nav> element with id 'sidebar'
        $('#sidebar').removeClass('active');
    });

    // Highlight selected tab
    var currentPageUrl = window.location.pathname;
var pathStartIndex = currentPageUrl.indexOf('/', 1); // Find the second occurrence of "/"
var pathEndIndex = currentPageUrl.indexOf('/', pathStartIndex + 1); // Find the third occurrence of "/"
var currentUrls = currentPageUrl.substring(pathStartIndex, pathEndIndex); 
currentUrls += '/'; // Add a trailing slash
// console.log(currentUrls);

    // console.log("Current Page URL:", currentPageUrl); // Debug statement

    $('#sidebar-ul li').each(function() {
        var menuLink = $(this).find('a').attr('href');

        // Convert relative URLs to absolute paths
        var absoluteMenuLink = new URL(menuLink, window.location.origin).pathname;
var pathStartIndex = absoluteMenuLink.indexOf('/', 1); // Find the second occurrence of "/"
var currentUrl = absoluteMenuLink.substring(0, pathStartIndex + 1); // Extract the substring starting from the beginning up to the second occurrence of "/"


        // Ensure consistent trailing slashes for comparison
        currentPageUrl = currentPageUrl.replace(/\/$/, ''); // Remove trailing slash if present
        absoluteMenuLink = absoluteMenuLink.replace(/\/$/, ''); // Remove trailing slash if present
      // console.log(currentUrl);
      // console.log(currentUrls);
        if (currentUrl.trim() === currentUrls.trim()) { // Trim both URLs before comparison
          // console.log(currentUrl);
            // Add 'active' class to the closest <li> element
            if (currentUrl == '/dashboard/') {
                $('.ti-dash').addClass('dash-back');
              
            }
          if (currentUrl == '/doctor/') {
              $('.ti-profile').addClass('profile-back');
          }
          if (currentUrl == '/doctor/') {
           $('.ti-profile').addClass('profile-back');
         }
         if (currentUrl == '/appointment/') {
           $('.ti-appointment').addClass('appoint-back');
         }
         if (currentUrl == '/allappointment/') {
           $('.ti-allappointment').addClass('allappoint-back');
         }

         if (currentUrl == '/patient/') {
           $('.ti-patient').addClass('patient-back');
         }
         if (currentUrl == '/availability/') {
           $('.ti-schedule').addClass('schedule-back');
         }
         if (currentUrl == '/prescription/') {
           $('.ti-prescription').addClass('presc-back');
         }
         if (currentUrl == '/payment/') {
           $('.ti-payment').addClass('payment-back');
         }
		 if (currentUrl == '/subscription_invoice/') {
           $('.ti-subcription').addClass('subs-invoice');
         }
         if (currentUrl == '/medicine/') {
           $('.ti-medicine').addClass('medicine-back');
         }
         if (currentUrl == '/supplier/') {
           $('.ti-supplier').addClass('supplier-back');
         }
         if (currentUrl == '/hospital/') {
           $('.ti-hospitalprofile').addClass('hospital-back');
         }
         if (currentUrl == '/department/') {
           $('.ti-department').addClass('department-back');
         }

            $(this).addClass('actives');

            // Show the parent <ul> element if it's a submenu
            $(this).parents('ul').addClass('show');
            // Add 'active' class to the parent <li> element
            $(this).parents('li').addClass('actives');
            
        }
    });

    // Add 'active' class to the clicked <li> element
    $('#sidebar-ul li').click(function() {
        $('#sidebar-ul li').removeClass('actives'); // Remove 'active' class from all <li> elements
     
    });

    // Add 'active' class to the clicked <a> element
    $('#sidebar-ul li a').click(function(e) {
        // e.stopPropagation(); // Prevent the click event from bubbling up to the parent <li>
        $('#sidebar-ul li').removeClass('actives'); // Remove 'active' class from all <li> elements
        // Add 'active' class to the parent <li> element
        $(this).closest('li').addClass('actives');
    });
});
</script>

		<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // Add click event handler to the span icon
        $('#sidebarCollapse1').click(function(){
            // Toggle the 'active' class for the <nav> element with id 'sidebar'
            $('#sidebar').toggleClass('active');
        });
    });
</script>

		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default" style="position:sticky; top:0; z-index:1000 !important;">
				<div class="container-fluid">
				<div class="responsive-logo">
					<div style="background-color:#95bde6 !important;" class="mobmenubutton">
			<div style="display:flex; justify-content:space-between; padding-top:17px;" class="navandlogo">
					<ul class="nav" style="margin-left:10px;">
						<li class="nav-item mobsidebar" style="padding-top:6px;">
							<span class="ti-menumobile" id="sidebarCollapse1"></span>
						</li>
</ul>
						<a href="../dashboard/dashboard.php" class="logofortab" ><img src="../images/logo.png" style="background-color:#95bde6 !important; width: 65%;
   "  class="logo" alt="logo"></a>
						<ul class="nav" >

						<li class="nav-item ">
							<a class="dropdown-toggle" data-toggle="dropdown" style="padding-top:5px;" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcementmobile"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
								<a class="dropdown-item" href="#">
									<span class="ti-money"></span> Patient payment done</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span>Patient Appointment booked</a>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
							</div>
						</li>
						</ul>
						<ul class="nav" style="padding-top:6px; margin-right:17px;">
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-usermobile"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5><?php echo $fetch_hospital_name;?></h5>
								<!-- <a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a> -->

									<form action="../logout.php" method="Post">
										<a class="dropdown-item" href="" name="logout">
											 
											<span class="ti-power-off"></span><input type="submit" style="background: none;border: none;cursor: pointer;" name="submit" value="Logout"> </a>
								</form>

							</div>
						</li>
</ul>
</div>

<div style="text-align:center; padding-top:80px; background:white;" id="hlogodiv">
<img src="<?php echo $fetch_image_url['hospital_image_url'];?>"  onerror="this.src='../images/hospital_default.png'"  alt="Hospital Logo" class="mobilename" style="height:100px;">					
<h3 class="hospitalname mobilename" style="color:#494d66; padding-top:0px; font-size:18px;"><?php echo $fetch_hospital_name;?></h3>
</div>	

						</div>
						<div style="display:flex; align-items: center;"">
						<img src="<?php echo $fetch_image_url['hospital_image_url'];?>"  onerror="this.src='../images/hospital_default.png'"  alt="Hospital Logo" class="laptopname" style="height:56px;   ">
						<h3 class="hospitalname laptopname"  style="margin: 0; margin:0px;  margin-left:17px;" ><?php echo $fetch_hospital_name;?></h3>
						</div>
					</div>
					<!-- <div> -->
											<div class="laptopmenubutton">
					<ul class="nav" style="margin-right:4px;">
						<li class="nav-item lapsidebar">
							<span class="ti-menudesktop"   id="sidebarCollapse"></span>
						</li>
						<script>
        document.getElementById("sidebarCollapse").addEventListener("click", function() {
            var sidebarHeader = document.querySelector(".sidebar-header");
            if (sidebarHeader.style.paddingBottom === "75px") {
                sidebarHeader.style.paddingBottom = "45px";
            } else {
                sidebarHeader.style.paddingBottom = "75px";
            }
        });
    </script>

						<!-- <li class="nav-item">
							<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
						</li>
						<li class="nav-item">
							<a  data-toggle="modal" data-target=".proclinic-modal-lg">
								<span class="ti-search"></span>
							</a> -->
							<!-- <div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content proclinic-box-shadow2">
										<div class="modal-header">
											<h5 class="modal-title">Search Patient/Doctor:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens proclinic-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div> -->
						<!-- </li> -->
						<li class="nav-item lapannouncement">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcementdesktop"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
								<a class="dropdown-item" href="#">
									<span class="ti-money"></span> Patient payment done</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span>Patient Appointment booked</a>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-userdesktop" style="margin-right:2px;"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5><?php echo $fetch_hospital_name;?></h5>
								<!-- <a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a> -->

									<form action="../logout.php" method="Post">
										<a class="dropdown-item" href="" name="logout">
											 
											<span class="ti-power-off"></span><input type="submit" style="background: none;border: none;cursor: pointer;" name="submit" value="Logout"> </a>
								</form>

							</div>
						</li>
					</ul>
				
				</div>
				
				
				</div>
				<!-- </div> -->

		<!-- Bottom Menu -->
		<nav class="bottom-menu navbar navbar-light bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../dashboard/dashboard.php">
        <i class="fas fa-home" style="color: #06418f !important;font-size: 22px;"></i>
        <span style="font-size: 11px;font-weight: bold;">Home</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../patient/patients.php">
        <i class="fas fa-user-friends" style="color: #06418f !important;font-size: 22px;"></i>
         <span style="font-size: 11px;font-weight: bold;">Patients</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../appointment/add_appointment.php" style="margin-top: 20px;">
        <!-- <i class="fas fa-prescription-bottle-alt"></i> -->
        <img src="../images/rx_icon.png" alt="" style="position: absolute;margin-top: -3.5rem !important;box-shadow: 2px 0px 17px 0px;border-radius: 35px;width: 50px;">
        <span style="font-size: 11px;font-weight: bold;">Appointment</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="far fa-calendar-alt" style="color: #06418f !important;font-size: 22px;"></i>
         <span style="font-size: 11px;font-weight: bold;">Calendar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../hospital/profile.php">
        <i class="fas fa-user" style="color: #06418f !important;font-size: 22px;"></i>
        <span style="font-size: 11px;font-weight: bold;">Profile</span>
      </a>
    </li>
  </ul>
</nav>
<?php
		$user_id=$_SESSION['auth_user']['user_id'];
		$sql_u="select * from users where user_id='$user_id'";
		$result_u=mysqli_query($conn,$sql_u);
		$fetch_u=mysqli_fetch_assoc($result_u);
		$user_name=$fetch_u['username'];
		if(!empty($user_name))
		{
?>

			<div class="row" style="width: -webkit-fill-available;">
					<div class="col-md-12 " style="text-align: end;">
						<label for="" style="font-size: 14px;line-height: 1;"><?php echo 'Hello, '.$user_name ?></label>
					</div>
				</div>
		<?php }else{ ?>
			<div class="row" style="width: -webkit-fill-available;">
					<div class="col-md-12 " style="text-align: end;">
						<label for="" style="font-size: 14px;line-height: 1;"> </label>
					</div>
				</div>
	<?php	} ?>
			</nav>
			
			<!-- /Top Navigation -->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="../js/popper.min.js"></script>
	<!-- Bootstrap Library-->
    <script src="../js/bootstrap.min.js"></script>
    
    <!-- Datatable  -->
	<script src="../datatable/jquery.dataTables.min.js"></script>
	<script src="../datatable/dataTables.bootstrap4.min.js"></script>
    
	<!-- Custom Script-->
	<script src="../js/custom.js"></script>
	<!-- /Back to Top -->
    <!-- Jquery Library-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Popper Library-->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap Library-->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Custom Script-->
    <script src="../js/custom.js"></script>
  </body>
</html>