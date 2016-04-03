<?php

function db_connect() {
   $result = new mysqli('localhost', 'root', '', 'priceline');
   if (!$result) {
      return false;
   }
   $result->autocommit(TRUE);
   return $result;
}

function login($username, $passwd) {

  $conn = db_connect();
  if (!$conn) {
    return 0;
  }

  
  $result = $conn->query("select * from admin
                         where username='".$username."'
                         and passwd = '".$passwd."'");
  if (!$result) {
     return 0;
  }

  if ($result->num_rows>0) {
     return 1;
  } else {
     return 0;
  }
}

function db_result_to_array($result) {
   $res_array = array();

   for ($count=0; $row = $result->fetch_assoc(); $count++) {
     $res_array[$count] = $row;
   }

   return $res_array;
}

function check_admin_user() {


  if (isset($_SESSION['admin_user'])) {
    return true;
  } else {
    return false;
  }
}

function do_html_URL($url, $name) {
  
?>
  <a href="<?php echo $url; ?>"><?php echo $name; ?></a><br />
<?php
}

?>
<?php
function insert_hotel_form() {
?>  <form action="insert_hotel.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc"> 	
   <tr><td>Old password:</td>
       <td><input type="password" name="old_passwd" size="16" maxlength="16" /></td>
   </tr>
   <tr>
    <td>Name:</td>
    <td><input type="text" name="Name" size="16" maxlength="16" /></td>
        </tr>
  <tr>
    <td>Address:</td>
    <td><input type="text" name="Address"  size="16" maxlength="16" /></td>
        <tr>
    <td>City:</td>
    <td><input type="text" name="City"  size="16" maxlength="16" /></td>
        </tr>
   <tr>
    <td>State:</td>
    <td><input type="text" name="State"  size="16" maxlength="16" /></td>
        </tr>
   <tr>
    <td>ZipCode:</td>
    <td><input type="text" name="ZipCode"  size="16" maxlength="16" /></td>
        </tr>
   <tr>
    <td>PhoneNumber:</td>
    <td><input type="text" name="PhoneNumber"  size="16" maxlength="16" /></td>
        </tr>
   <tr>
    <td>EmailAddress:</td>
    <td><input type="text" name="EmailAddress"  size="16" maxlength="16" /></td>
         </tr>
   <tr><td colspan=2 align="center"><input type="submit" value="Add Hotel">
   </td></tr>
<?php
}

?>


<?php
function insert_hotel_room_form() {
?>
  <form action="insert_hotel_room.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc"> 	
   <tr><td>Old password:</td>
       <td><input type="password" name="old_passwd" size="16" maxlength="16" /></td>
   </tr>
   <tr>
    <td>Name:</td>
    <td><input type="text" name="Name" size="16" maxlength="16" /></td>
        </tr>
  <tr>
    <td>Address:</td>
    <td><input type="text" name="Address"  size="16" maxlength="16" /></td>
        <tr>
    <td>City:</td>
    <td><input type="text" name="City"  size="16" maxlength="16" /></td>
        </tr>
   <tr>
    <td>State:</td>
    <td><input type="text" name="State"  size="16" maxlength="16" /></td>
        </tr>
   <tr>
    <td>ZipCode:</td>
    <td><input type="text" name="ZipCode"  size="16" maxlength="16" /></td>
        </tr>
   <tr>
    <td>PhoneNumber:</td>
    <td><input type="text" name="PhoneNumber"  size="16" maxlength="16" /></td>
        </tr>
   <tr>
    <td>EmailAddress:</td>
    <td><input type="text" name="EmailAddress"  size="16" maxlength="16" /></td>
         </tr>
   <tr><td colspan=2 align="center"><input type="submit" value="Add Hotel">
   </td></tr>
<?php
}

?>


<?php

function insert_hotel($Name, $Address, $City, $State, $ZipCode, $PhoneNumber, $EmailAddress) {


   $conn = db_connect();

  
   $query = "insert into hotel values
            ('".$Name."', '".$Address."', '".$City."',
             '".$State."', '".$ZipCode."', '".$PhoneNumber."', '".$EmailAddress."')";

   $result = $conn->query($query);
   if (!$result) {
     return false;
   } else {
     return true;
   }
}
?>
<?php
function insert_hotel_room($RoomQuantity, $Description, $RoomName, $RoomPrice, $Hotelid) {

   $conn = db_connect();

   
   $query = "insert into room values
            ('".$RoomQuantity."', '".$Description."', '".$RoomName."',
             '".$RoomPrice."', '".$Hotelid."')";

   $result = $conn->query($query);
   if (!$result) {
     return false;
   } else {
     return true;
   }
}
?>





<?php
function display_admin_menu(){
	
?>
<br />
<a href="insert_hotel_form.php">Add a new hotel</a><br />
<a href="insert_hotel_room_form.php">Add a new hotel room</a><br />
<a href="logout.php">Logout</a><br />
<?php
}


function filled_out($form_vars) {
  
  foreach ($form_vars as $key => $value) {
     if ((!isset($key)) || ($value == '')) {
        return false;
     }
  }
  return true;
}

?>