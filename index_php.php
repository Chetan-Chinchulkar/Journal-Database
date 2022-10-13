
<!-- add journals in database -->

<?php 
include 'connect.php';
if(isset($_POST['submit'])){

    $jour_pub = $_POST['jour_pub'] OR "";
    $jour_id = $_POST['jour_id'] OR "";
    $paper_title = $_POST['paper_title'] OR "";
    $volume_no = $_POST['volume_no'] OR "";
    $issue_no = $_POST['issue_no'] OR "";
    $year = $_POST['year'] OR "";
    $pages = $_POST['pages'] OR "";

    $sql = "INSERT INTO journal (jour_pub, jour_id, paper_title, volume_no, issue_no, year, pages) VALUES ('$jour_pub', '$jour_id', '$paper_title', '$volume_no', '$issue_no', '$year', '$pages')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Journal added successfully";
    }else{
        echo "Failed to add journal";
    }

    // <!-- add conference in database -->

    $conf_pub = $_POST['conf_pub'] OR "";
    $conf_id = $_POST['conf_id'] OR "";
    $conf_no = $_POST['conf_no'] OR "";
    $place = $_POST['place'] OR "";

    $sql = "INSERT INTO conference (conf_pub, conf_id, paper_title, conf_no, place, year, pages) VALUES ('$conf_pub', '$conf_id', '$paper_title', '$conf_no', '$place', '$year', '$pages')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Conference added successfully";
    }else{
        echo "Failed to add conference";
    }

    // <!-- add jour_pub and fac_id -->


    $fac_id = $_POST['fac_id'] OR "";

    $sql = "INSERT INTO jour_pub_fac (jour_pub, fac_id) VALUES ('$jour_pub', '$fac_id')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Journal added successfully";
    }else{
        echo "Failed to add journal";
    }

    // <!-- add jour_pub and roll_no -->


    $roll_no = $_POST['roll_no'] OR "";

    $sql = "INSERT INTO jour_pub_roll (jour_pub, roll_no) VALUES ('$jour_pub', '$roll_no')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Journal added successfully";
    }else{
        echo "Failed to add journal";
    }

    // <!-- add conf_pub and fac_id -->



    $sql = "INSERT INTO conf_pub_fac (conf_pub, fac_id) VALUES ('$conf_pub', '$fac_id')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Conference added successfully";
    }else{
        echo "Failed to add conference";
    }
    
    // <!-- add conf_pub and roll_no -->



    $sql = "INSERT INTO conf_pub_roll (conf_pub, roll_no) VALUES ('$conf_pub', '$roll_no')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Conference added successfully";
    }else{
        echo "Failed to add conference";
    }

    // <!-- add fac_id,fac_name, dept_id, password in Faculty table -->

    $fac_name = $_POST['fac_name'] OR "";
    $dept_id = $_POST['dept_id'] OR "";
    $password = $_POST['password'] OR "";

    $sql = "INSERT INTO faculty (fac_id, fac_name, dept_id, password) VALUES ('$fac_id', '$fac_name', '$dept_id', '$password')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Faculty added successfully";
    }else{
        echo "Failed to add faculty";
    }

    // <!-- add roll_no, name, dept_id, password in Research_Scholars table -->

    $name = $_POST['name'] OR "";
    $password_roll = $_POST['student_password'] OR "";

    $sql = "INSERT INTO research_scholars (roll_no, name, dept_id, password) VALUES ('$roll_no', '$name', '$dept_id', '$password_roll')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Research Scholar added successfully";
    }else{
        echo "Failed to add Research Scholar";
    }

    // <!-- add dept_id, dept_name in Departments table -->

    $dept_name = $_POST['dept_name'] OR "";

    $sql = "INSERT INTO departments (dept_id, dept_name) VALUES ('$dept_id', '$dept_name')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Department added successfully";
    }else{
        echo "Failed to add Department";
    }
    // <!-- add jour_id, jour_name in Journals table -->

    $jour_name = $_POST['jour_name'] OR "";

    $sql = "INSERT INTO journals (jour_id, jour_name) VALUES ('$jour_id', '$jour_name')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Journal added successfully";
    }else{
        echo "Failed to add Journal";
    }

    // <!-- add conf_id, conf_name in Conferences table -->
    $conf_name = $_POST['conf_name'] OR "";

    $sql = "INSERT INTO conferences (conf_id, conf_name) VALUES ('$conf_id', '$conf_name')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Conference added successfully";
    }else{
        echo "Failed to add Conference";
    }
}

?>
