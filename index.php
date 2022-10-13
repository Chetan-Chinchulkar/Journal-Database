<!-- php code to connect db using file-->

<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication Record</title>
</head>
<style>
    section{
        /* display: hidden; */
    }
</style>
<body>

    <button id="load" class="load">Load Tables</button>

    <button>Add faculty</button>
    <button>Add Research Scholar</button>
    <button>Add Department</button>
    <button>Add Journal</button>
    <button>Add Conference</button>

    <button>Add a publication</button>
    <button>List of publication as per financial year</button>
    <button>list of publication as per faculty</button>

    <section>

            
            

    </section>

    <section id="load_tables" class="load_tables">
        <!-- form for entering journal details -->
        <form id="add_journal" class="add_journal" action="">
            <!-- label and  input for jour_pub,jour_id,paper_title,volume_no, issue_no, year and pages -->
            <label for="jour_pub">Journal Publication</label>
            <input type="text" name="jour_pub" id="jour_pub" placeholder="Journal Publication">
            <label for="jour_id">Journal ID</label>
            <input type="text" name="jour_id" id="jour_id" placeholder="Journal ID">
            <label for="paper_title">Paper Title</label>
            <input type="text" name="paper_title" id="paper_title" placeholder="Paper Title">
            <label for="volume_no">Volume No</label>
            <input type="text" name="volume_no" id="volume_no" placeholder="Volume No">
            <label for="issue_no">Issue No</label>
            <input type="text" name="issue_no" id="issue_no" placeholder="Issue No">
            <label for="year">Year</label>
            <input type="text" name="year" id="year" placeholder="Year">
            <label for="pages">Pages</label>
            <input type="text" name="pages" id="pages" placeholder="Pages">


            <label for="conf_pub">Conference Publication</label>
            <input type="text" name="conf_pub" id="conf_pub" placeholder="Conference Publication">
            <label for="conf_id">Conference ID</label>
            <input type="text" name="conf_id" id="conf_id" placeholder="Conference ID">
            <label for="conf_no">Conference No</label>
            <input type="text" name="conf_no" id="conf_no" placeholder="Conference No">
            <label for="place">Place</label>
            <input type="text" name="place" id="place" placeholder="Place">

            <!-- label and input for fac_id -->
            <label for="fac_id">Faculty ID</label>
            <input type="text" name="fac_id" id="fac_id" placeholder="Faculty ID">
            <!-- label and input for roll_no -->
            <label for="roll_no">Roll No</label>
            <input type="text" name="roll_no" id="roll_no" placeholder="Roll No">

            <!-- label and input for fac_name, dept_id, password -->
            <label for="fac_name">Faculty Name</label>
            <input type="text" name="fac_name" id="fac_name" placeholder="Faculty Name">
            <label for="dept_id">Department ID</label>
            <input type="text" name="dept_id" id="dept_id" placeholder="Department ID">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Password">

            <!-- label and input for name, student password -->
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
            <label for="student_password">Student Password</label>
            <input type="text" name="student_password" id="student_password" placeholder="Student Password">

            <!-- label and input for jour_name -->
            <label for="jour_name">Journal Name</label>
            <input type="text" name="jour_name" id="jour_name" placeholder="Journal Name">

            <!-- label and input for conf_name -->
            <label for="conf_name">Conference Name</label>
            <input type="text" name="conf_name" id="conf_name" placeholder="Conference Name">

            <!-- submit button -->

            <button type="submit" id="submit" class="submit">Submit</button>

        </form>




    </section>



    <section id=""></section>


</body>
</html>