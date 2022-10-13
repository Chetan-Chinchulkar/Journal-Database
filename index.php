
<!-- add journals in database -->

<?php 
include 'connect.php';
if(isset($_POST['submit_jour'])){
    $jour_pub = $_POST['jour_pub'];
    $jour_id = $_POST['jour_id'];
    $paper_title = $_POST['paper_title'];
    $volume_no = $_POST['volume_no'];
    $issue_no = $_POST['issue_no'];
    $year = $_POST['year'];
    $pages = $_POST['pages'];

    $sql = "INSERT INTO journal (jour_pub, jour_id, paper_title, volume_no, issue_no, year, pages) VALUES ('$jour_pub', '$jour_id', '$paper_title', '$volume_no', '$issue_no', '$year', '$pages')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Journal added successfully";
    }else{
        echo "Failed to add journal";
    }
}
?>

<!-- add conference in database -->

<?php
include 'connect.php';
if(isset($_POST['submit_conf'])){
    $conf_pub = $_POST['conf_pub'];
    $conf_id = $_POST['conf_id'];
    $paper_title = $_POST['paper_title'];
    $conf_no = $_POST['conf_no'];
    $year = $_POST['year'];
    $place = $_POST['place'];
    $pages = $_POST['pages'];

    $sql = "INSERT INTO conference (conf_pub, conf_id, paper_title, conf_no, place, year, pages) VALUES ('$conf_pub', '$conf_id', '$paper_title', '$conf_no', '$place', '$year', '$pages')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Conference added successfully";
    }else{
        echo "Failed to add conference";
    }
}

?>

<!-- add jour_pub and fac_id -->
<?php
include 'connect.php';
if(isset($_POST['submit_jour_pub'])){
    $jour_pub = $_POST['jour_pub'];
    $fac_id = $_POST['fac_id'];

    $sql = "INSERT INTO jour_pub (jour_pub, fac_id) VALUES ('$jour_pub', '$fac_id')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Journal added successfully";
    }else{
        echo "Failed to add journal";
    }
}

?>

<!-- add jour_pub and roll_no -->
<?php
include 'connect.php';
if(isset($_POST['submit_jour_pub'])){
    $jour_pub = $_POST['jour_pub'];
    $roll_no = $_POST['roll_no'];

    $sql = "INSERT INTO jour_pub (jour_pub, roll_no) VALUES ('$jour_pub', '$roll_no')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Journal added successfully";
    }else{
        echo "Failed to add journal";
    }
}

?>

<!-- add conf_pub and fac_id -->
<?php
include 'connect.php';
if(isset($_POST['submit_conf_pub'])){
    $conf_pub = $_POST['conf_pub'];
    $fac_id = $_POST['fac_id'];

    $sql = "INSERT INTO conf_pub (conf_pub, fac_id) VALUES ('$conf_pub', '$fac_id')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Conference added successfully";
    }else{
        echo "Failed to add conference";
    }
}

?>

<!-- add conf_pub and roll_no -->
<?php
include 'connect.php';
if(isset($_POST['submit_conf_pub'])){
    $conf_pub = $_POST['conf_pub'];
    $roll_no = $_POST['roll_no'];

    $sql = "INSERT INTO conf_pub (conf_pub, roll_no) VALUES ('$conf_pub', '$roll_no')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Conference added successfully";
    }else{
        echo "Failed to add conference";
    }
}

?>

<!-- add fac_id,fac_name, dept_id, password in Faculty table -->
<?php
include 'connect.php';

if(isset($_POST['submit_fac'])){
    $fac_id = $_POST['fac_id'];
    $fac_name = $_POST['fac_name'];
    $dept_id = $_POST['dept_id'];
    $password = $_POST['password'];

    $sql = "INSERT INTO faculty (fac_id, fac_name, dept_id, password) VALUES ('$fac_id', '$fac_name', '$dept_id', '$password')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Faculty added successfully";
    }else{
        echo "Failed to add faculty";
    }
}

?>

<!-- add roll_no, name, dept_id, password in Research_Scholars table -->

<?php
include 'connect.php';

if(isset($_POST['submit_rs'])){
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $dept_id = $_POST['dept_id'];
    $password = $_POST['password'];

    $sql = "INSERT INTO research_scholars (roll_no, name, dept_id, password) VALUES ('$roll_no', '$name', '$dept_id', '$password')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Research Scholar added successfully";
    }else{
        echo "Failed to add Research Scholar";
    }
}

?>

<!-- add dept_id, dept_name in Departments table -->

<?php
include 'connect.php';

if(isset($_POST['submit_dept'])){
    $dept_id = $_POST['dept_id'];
    $dept_name = $_POST['dept_name'];

    $sql = "INSERT INTO departments (dept_id, dept_name) VALUES ('$dept_id', '$dept_name')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Department added successfully";
    }else{
        echo "Failed to add Department";
    }
}

?>

<!-- add jour_id, jour_name in Journals table -->

<?php
include 'connect.php';

if(isset($_POST['submit_jour'])){
    $jour_id = $_POST['jour_id'];
    $jour_name = $_POST['jour_name'];

    $sql = "INSERT INTO journals (jour_id, jour_name) VALUES ('$jour_id', '$jour_name')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Journal added successfully";
    }else{
        echo "Failed to add Journal";
    }
}

?>

<!-- add conf_id, conf_name in Conferences table -->

<?php
include 'connect.php';

if(isset($_POST['submit_conf'])){
    $conf_id = $_POST['conf_id'];
    $conf_name = $_POST['conf_name'];

    $sql = "INSERT INTO conferences (conf_id, conf_name) VALUES ('$conf_id', '$conf_name')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Conference added successfully";
    }else{
        echo "Failed to add Conference";
    }
}

?>
