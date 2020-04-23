<html>
<head>
<title>Lab1 </title>
<script type="text/javascript" src="validate.js"> </script>
<?php
include_once 'DBConnector.php';
include_once 'user.php';
$con = new DBConnector;
if(isset($_POST['btn_save'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $user= new User($first_name,$last_name,$city);
    if($res){
        echo "Save operation was successful";
    }else{echo "An error occured!";

    }
     
}
?>


</head>
<body>
<form method ="post" name="user_details" id="user_details" onsubmit="return validateForm()" action="<?=$_SERVER['PHP_SELF']?>" >
<table align="center">
<tr>
<td><input type="text" name="first_name" required placeholder="First Name" /> </td>
</tr>
<tr>
<td><input type="text" name= "last_name" placeholder="Last Name" /></td>

</tr>
<tr>
<td><input type="text" name= "city_name" placeholder="City" /></td>

</tr>
<td><button type="submit" name="btn_save"><strong>SAVE</strong></button></td>
</tr>
</table>
</form>
</body>
</html>

