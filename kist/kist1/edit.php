<?php
include 'connect.php';
//assign textbox to variable
$edit_id=$_POST['txtld'];
$edit_ic=$_POST['txtlc'];
$edit_name=$_POST['txtName'];
$edit_program=$_POST['txtProg'];
$edit_phone=$_POST['txtPhone'];
$edit_sem=$_POST['txtSem'];
$edit_gender=$_POST['txtGen'];
$edit_famnum=$_POST['txtFamNum'];
$edit_fathername=$_POST['txtFatherName'];
$edit_fatherjob=$_POST['txtFatherJob'];
$edit_fathersalary=$_POST['txtFatherSalary'];
$edit_mothername=$_POST['txtMotherName'];
$edit_motherjob=$_POST['txtMotherJob'];
$edit_mothersalary=$_POST['txtMotherSalary'];
$edit_familyaddress=$_POST['txtFamilyAddress'];
$edit_poscode=$_POST['txtPoscode'];
$edit_city=$_POST['txtCity'];
$edit_state=$_POST['txtState'];
$edit_names=$_POST['txtName2'];
$edit_nophone=$_POST['txtNumPhone'];
$edit_relationship=$_POST['txtRelationship'];


//Update data
$result = mysql_query("Update student, family, familyliability, emergency set name='$edit_name', ic=$edit_ic', program='$edit_program', phone='$edit_phone', sem='$edit_sem', gender='$edit_gender', famnum='$edit_famnum', fathername='$edit_fathername', fatherjob='$edit_fatherjob', mothername='$edit_mothername', motherjob='$edit_motherjob', mothersalary='$edit_mothersalary',  familyaddress='$edit_familyaddress', poscode='$edit_poscode', city='$edit_city', state='$edit_state', names='$edit_names', nophone='$edit_nophone', relationship='$edit_relationship'  where id='$edit_id'" );
if ($result)
echo " Updated Successfully ! <a href='view.php'> back to view </a>";
else
echo "Problem occured !";
?>

