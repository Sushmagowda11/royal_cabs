<?php
include("connection.php");

$msg = '';

if (isset($_POST['book_outstation'])) {
    $os_name = $_POST['os_name'];
    $os_phone_no=$_POST['os_phone_no'];
    $os_PickupLocation = $_POST['os_PickupLocation'];
    $os_DropoffLocation = $_POST['os_DropoffLocation'];
    $os_Pick_Up_Date = $_POST['os_Pick_Up_Date']; 
    $os_pickup_time = $_POST['os_pickup_time']; 

    $sql = "INSERT INTO bestcar_outstation (os_name, os_phone_no, os_PickupLocation, os_DropoffLocation, os_Pick_Up_Date, os_pickup_time)
     VALUES ('$os_name', '$os_phone_no', '$os_PickupLocation', '$os_DropoffLocation', '$os_Pick_Up_Date', '$os_pickup_time')";
    $insert = mysqli_query($conn, $sql);

    if ($insert) {
     $msg = "<div style='color:green'><h6 style='color:white'>Data inserted</h6></div>";
        // Redirect or display a success message to the user as needed.
       
    } else {
        $msg = "<div style='color:red'><h6 style='color:white'>Error inserting data</h6></div>";
        header("location : index.php");
    }
}

$msg = '';

if (isset($_POST['book_airport'])) {
    $Ap_name = $_POST['Ap_name'];
    $Ap_phone_no=$_POST['Ap_phone_no'];
    $Ap_PickupLocation = $_POST['Ap_PickupLocation'];
    $Ap_DropoffLocation = $_POST['Ap_DropoffLocation'];
    $Ap_Pick_Up_Date = $_POST['Ap_Pick_Up_Date'];  
    $Ap_pickup_time = $_POST['Ap_pickup_time'];  

  $sql = "INSERT INTO bestcar_airport (Ap_name, Ap_phone_no, Ap_PickupLocation, Ap_DropoffLocation, Ap_Pick_Up_Date, Ap_pickup_time)
     VALUES ('$Ap_name', '$Ap_phone_no', '$Ap_PickupLocation', '$Ap_DropoffLocation', '$Ap_Pick_Up_Date', '$Ap_pickup_time')";
    $insert = mysqli_query($conn, $sql);

    if ($insert) {
     $msg = "<div style='color:green'><h6 style='color:white'>Data inserted</h6></div>";
        // Redirect or display a success message to the user as needed.
       
    } else {
        $msg = "<div style='color:red'><h6 style='color:white'>Error inserting data</h6></div>";
        header("location : index.php");
    }
}



$msg = '';

if (isset($_POST['book_rental'])) {
    $R_name = $_POST['R_name'];
    $R_phone_no=$_POST['R_phone_no'];
    $R_PickupLocation = $_POST['R_PickupLocation'];
    $R_DropoffLocation = $_POST['R_DropoffLocation'];
    $R_Pick_Up_Date = $_POST['R_Pick_Up_Date']; 
    $R_pickup_time = $_POST['R_pickup_time']; 

  $sql = "INSERT INTO bestcar_rental (R_name, R_phone_no, R_PickupLocation, R_DropoffLocation, R_Pick_Up_Date, R_pickup_time)
     VALUES ('$R_name', '$R_phone_no', '$R_PickupLocation', '$R_DropoffLocation', '$R_Pick_Up_Date', '$R_pickup_time')";
    $insert = mysqli_query($conn, $sql);

    if ($insert) {
     $msg = "<div style='color:green'><h6 style='color:white'>Data inserted</h6></div>";
        // Redirect or display a success message to the user as needed.
       
    } else {
        $msg = "<div style='color:red'><h6 style='color:white'>Error inserting data</h6></div>";
        header("location : index.php");
    }
}
?>






<?php include("connection.php");
$msg = '';

if (isset($_POST['contactUs'])) {
    $name = $_POST['name'];
    $email=$_POST['email'];
    $PhoneNo= $_POST['PhoneNo'];
    $comments = $_POST['comments'];
   

  $sql = "INSERT INTO get_in_touch (name, email , PhoneNo ,comments )
     VALUES ('$name', '$email', '$PhoneNo', '$comments' )";
    $insert = mysqli_query($conn, $sql);

    if ($insert) {
     $msg = "<div style='color:green'><h6 style='color:white'>Data inserted</h6></div>";
        // Redirect or display a success message to the user as needed.
       
    } else {
        $msg = "<div style='color:red'><h6 style='color:white'>Error inserting data</h6></div>";
        header("location : index.php");
    }
}
?>