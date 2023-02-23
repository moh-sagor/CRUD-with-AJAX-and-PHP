<?php
$con = new mysqli('localhost', 'root', '', 'student_information');
$action = $_POST['action'];
$action();

function insert()
{
    global $con;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $status = $_POST["status"];
    $qur = $con->query("INSERT INTO tbl_student(name,email,phone,status)VALUES('$name','$email','$phone','$status')");

    if ($qur) {
        echo "Data Submitted";
    } else {
        echo "Data not Submitted";
    }
}
function update()
{
    echo "Update function";
}
function show()
{
    echo "Show function";
}
function delete()
{
    echo "Delete function";
}



?>