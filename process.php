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
    if ($name == '') {
        echo "Name is required";
    } else if ($email == '') {
        echo "Email is required";
    } else if ($phone == '') {
        echo "Phone is required";
    } else if ($status == '') {
        echo "Status is required";
    } else {
        $qur = $con->query("INSERT INTO tbl_student(name,email,phone,status)VALUES('$name','$email','$phone','$status')");

        if ($qur) {
            echo "Data Submitted";
        } else {
            echo "Data not Submitted";
        }

    }




}
function update()
{
    echo "Update function";
}
function show()
{
    global $con;
    $obj = $con->query("SELECT * FROM tbl_student");
    $allData = "";
    $sl = 1;
    while ($data = $obj->fetch_assoc()) {
        $allData .= "<tr>
        <td>" . $sl . "</td>
        <td>" . $data["name"] . "</td>
        <td>" . $data["email"] . "</td>
        <td>" . $data["phone"] . "</td>
        <td>" . $data["status"] . "</td>
        <td>
        <a class='btn btn-info btn-sm'  href='#'>Edit</a>
        <a class='btn btn-danger btn-sm' href='#'>Delete</a></td>
        </tr>";
        $sl++;
    }
    echo $allData;

}
function delete()
{
    echo "Delete function";
}



?>