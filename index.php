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
    #list_finance,#list_faculty {
        /* display: none; */
    }
</style>

<body>

    <button id="load" class="load" onclick="">Load Tables</button>
    <button id="add" class="add" onclick="addPub()">Add a publication</button>
    <button onclick="listFinan()">List of publication as per financial year</button>
    <button onclick="listFac()">List of publication as per faculty</button>

    <section style="display:none;">

    <!-- display faculty in table format -->
    <?php 

    $sql = "SELECT fac_id,fac_name,dept_id,password FROM faculty";
    $result = mysqli_query($connection, $sql);

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        echo "<table id='faculty' border='1'>
        <tr>
        <th>Faculty ID</th>
        <th>Faculty Name</th>
        <th>Department ID</th>
        <th>Password</th>
        </tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['fac_id'] . "</td>";
            echo "<td>" . $row['fac_name'] . "</td>";
            echo "<td>" . $row['dept_id'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    // display all tables in table format

    $sql = "SELECT * FROM journal";
    $result = mysqli_query($connection, $sql);
    echo "new table";
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        echo "<table id='journal' border='1'>
        <tr>
        <th>Journal ID</th>
        <th>Journal Name</th>
        <th>Title</th>
        <th>Voumen</th>
        <th>Issue</th>
        <th>Year</th>
        <th>Pages</th>
        </tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['jour_id'] . "</td>";
            echo "<td>" . $row['jour_pub'] . "</td>";
            echo "<td>" . $row['paper_title'] . "</td>";
            echo "<td>" . $row['volume_no'] . "</td>";
            echo "<td>" . $row['issue_no'] . "</td>";
            echo "<td>" . $row['year'] . "</td>";
            echo "<td>" . $row['pages'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    ?>

    

    </section>

    <section id="add_data" class="add_data">
        <!-- form for entering journal details -->
        <form id="add_journal" class="add_journal" action="">
            <h2>Add Data</h2>

            <h3>Journal</h3>

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
            <label for="jour_name">Journal Name</label>
            <input type="text" name="jour_name" id="jour_name" placeholder="Journal Name">


            <h3>Conference</h3>

            <label for="conf_pub">Conference Publication</label>
            <input type="text" name="conf_pub" id="conf_pub" placeholder="Conference Publication">
            <label for="conf_id">Conference ID</label>
            <input type="text" name="conf_id" id="conf_id" placeholder="Conference ID">
            <label for="conf_no">Conference No</label>
            <input type="text" name="conf_no" id="conf_no" placeholder="Conference No">
            <label for="place">Place</label>
            <input type="text" name="place" id="place" placeholder="Place">
            <label for="conf_name">Conference Name</label>
            <input type="text" name="conf_name" id="conf_name" placeholder="Conference Name">


            <h3>Faculty</h3>

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

            <h3>Research Scholar</h3>

            <!-- label and input for name, student password -->
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
            <label for="student_password">Student Password</label>
            <input type="text" name="student_password" id="student_password" placeholder="Student Password">


            <!-- submit button -->

            <button type="submit" id="submitData" class="submitData">Submit</button>

            
        </form>
        
        
        <!-- add journals in database -->
        
        <?php
                // echo "hi before";
            if(isset($_POST['submitData'])){
                // echo "hi after";
    
                $jour_pub = $_POST['jour_pub'] OR 0;
                $jour_id = $_POST['jour_id'] OR 0;
                $paper_title = $_POST['paper_title'] OR 0;
                $volume_no = $_POST['volume_no'] OR 0;
                $issue_no = $_POST['issue_no'] OR 0;
                $year = $_POST['year'] OR 0;
                $pages = $_POST['pages'] OR 0;
    
                // echo "hi";
    
                $sql = "INSERT INTO journal (jour_pub, jour_id, paper_title, volume_no, issue_no, year, pages) VALUES ('$jour_pub', $jour_id, '$paper_title', '$volume_no', '$issue_no', '$year', '$pages');";
                // echo $sql;
                // $result = mysqli_query($connection, $sql);
                // echo "hiiii";
                if($result){
                    echo "Journal added successfully";
                }else{
                    echo "Failed to add journal";
                }
    
                // <!-- add conference in database -->
    
                $conf_pub = $_POST['conf_pub'] OR 0;
                $conf_id = $_POST['conf_id'] OR 0;
                $conf_no = $_POST['conf_no'] OR 0;
                $place = $_POST['place'] OR 0;
    
                // echo "neeww";
                $sql = "INSERT INTO conference (conf_pub, conf_id, paper_title, conf_no, place, year, pages) VALUES ('$conf_pub', '$conf_id', '$paper_title', '$conf_no', '$place', '$year', '$pages');";
                // echo $sql;
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Conference added successfully";
                }else{
                    echo "Failed to add conference";
                }
    
                // <!-- add jour_pub and fac_id -->
    
    
                $fac_id = $_POST['fac_id'] OR 0;
    
                $sql = "INSERT INTO jour_pub_fac (jour_pub, fac_id) VALUES ('$jour_pub', '$fac_id');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Journal added successfully";
                }else{
                    echo "Failed to add journal";
                }
    
                // <!-- add jour_pub and roll_no -->
    
    
                $roll_no = $_POST['roll_no'] OR 0;
    
                $sql = "INSERT INTO jour_pub_roll (jour_pub, roll_no) VALUES ('$jour_pub', '$roll_no');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Journal added successfully";
                }else{
                    echo "Failed to add journal";
                }
    
                // <!-- add conf_pub and fac_id -->
    
    
    
                $sql = "INSERT INTO conf_pub_fac (conf_pub, fac_id) VALUES ('$conf_pub', '$fac_id');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Conference added successfully";
                }else{
                    echo "Failed to add conference";
                }
                
                // <!-- add conf_pub and roll_no -->
    
    
    
                $sql = "INSERT INTO conf_pub_roll (conf_pub, roll_no) VALUES ('$conf_pub', '$roll_no');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Conference added successfully";
                }else{
                    echo "Failed to add conference";
                }
    
                // <!-- add fac_id,fac_name, dept_id, password in Faculty table -->
    
                $fac_name = $_POST['fac_name'] OR 0;
                $dept_id = $_POST['dept_id'] OR 0;
                $password = $_POST['password'] OR 0;
    
                $sql = "INSERT INTO faculty (fac_id, fac_name, dept_id, password) VALUES ('$fac_id', '$fac_name', '$dept_id', '$password');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Faculty added successfully";
                }else{
                    echo "Failed to add faculty";
                }
    
                // <!-- add roll_no, name, dept_id, password in Research_Scholars table -->
    
                $name = $_POST['name'] OR 0;
                $password_roll = $_POST['student_password'] OR 0;
    
                $sql = "INSERT INTO research_scholars (roll_no, name, dept_id, password) VALUES ('$roll_no', '$name', '$dept_id', '$password_roll');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Research Scholar added successfully";
                }else{
                    echo "Failed to add Research Scholar";
                }
    
                // <!-- add dept_id, dept_name in Departments table -->
    
                $dept_name = $_POST['dept_name'] OR 0;
    
                $sql = "INSERT INTO departments (dept_id, dept_name) VALUES ('$dept_id', '$dept_name');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Department added successfully";
                }else{
                    echo "Failed to add Department";
                }
                // <!-- add jour_id, jour_name in Journals table -->
    
                $jour_name = $_POST['jour_name'] OR 0;
    
                $sql = "INSERT INTO journals (jour_id, jour_name) VALUES ('$jour_id', '$jour_name');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Journal added successfully";
                }else{
                    echo "Failed to add Journal";
                }
    
                // <!-- add conf_id, conf_name in Conferences table -->
                $conf_name = $_POST['conf_name'] OR 0;
    
                $sql = "INSERT INTO conferences (conf_id, conf_name) VALUES ('$conf_id', '$conf_name');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Conference added successfully";
                }else{
                    echo "Failed to add Conference";
                }
            }
    
            ?>
        
        

<!-- <?php echo "hiiiiii"; ?> -->


    </section>



    <section id="list_finance" class="list_finance">
        <!-- form for listing publication as per financial year -->
        <form id="list_finan" class="list_finan" action="">

            <h2>List of publication as per financial year</h2>

                <!-- label and input for financial year -->
                <label for="finan_year">Financial Year</label>
                <input type="text" name="finan_year" id="finan_year" placeholder="Financial Year" required>
                <!-- extra option for all, journal, Conference, Department wise -->

                <label for="group">Group by</label>
                <select name="group" id="group">
                    <option value="conference">Conference</option>
                    <option value="department">Department</option>
                    <option value="institute">Institute</option>
                    <option value="department">Department</option>
                </select>



                <!-- submit button -->
                <button type="submit" id="submit_list_finan" class="submit_list_finan">Submit</button>

        </form>

        <?php
        if (isset($_POST['submit_list_finan'])) {
            $finan_year = $_POST['finan_year'];
            $sql = "SELECT * 
                                    FROM journal j
                                    , conference c
                                    , Conferences Co
                                    , Departments D
                                    , Faculty F
                                    , Journals Jo
                                    , ResearchScholars R
                                    , jour_pub_fac jpf
                                    , jour_pub_roll jpr
                                    , conf_pub_fac cpf
                                    , conf_pub_roll cpr
                                    LEFT JOIN ON j.paper_title = c.paper_title
                                    WHERE j.year = $finan_year
                                    OR c.year = $finan_year";

            // if group is not all
            if ($_POST['group'] != 'all') {
                $sql = $sql . " GROUP BY " . $_POST['group'];
            }
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);

            // display in table format
            if ($resultCheck > 0) {
                echo "<table>
                                <tr>
                                <th>Journal Publication</th>
                                <th>Paper Title</th>
                                <th>Volume No</th>
                                <th>Issue No</th>
                                <th>Year</th>
                                <th>Pages</th>
                                <th>Journal Name</th>
                                <th>Conference Publication</th>
                                <th>Place</th>
                                <th>Conference Name</th>
                                <th>Name</th>
                                <th>Faculty Name</th>
                                <th>Department Name</th>
                                </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['jour_pub'] . "</td><td>" . $row['paper_title'] . "</td><td>" . $row['volume_no'] . "</td><td>" . $row['issue_no'] . "</td><td>" . $row['year'] . "</td><td>" . $row['pages'] . "</td><td>" . $row['jour_name'] . "</td><td>" . $row['conf_pub'] . "</td><td>" . $row['place'] . "</td><td>" . $row['conf_name'] . "</td><td>" . $row['name'] . "</td><td>" . $row['fac_name'] . "</td><td>" . $row['dept_name'] . "</td></tr>";
                }
                echo "</table>";
            }
        }
            ?>

    </section>

    <section id="list_faculty" class="list_faculty">
        <!-- form for listing publication as per faculty -->
        <form id="list_fac" class="list_fac" action="">

            <h2>List of publication as per faculty</h2>

            <!-- label and input for faculty name -->
            <label for="fac_name">Faculty Name</label>
            <input type="text" name="fac_name" id="fac_name" placeholder="Faculty Name" required>
            <!-- filter option for all, particular year -->
            <label for="filter">Filter by</label>
            <select name="filter" id="filter">
                <option value="all">All</option>
                <option value="year">Year</option>
            </select>
            <!-- label and input for year -->
            <label for="year">Year</label>
            <input type="text" name="year" id="year" placeholder="Year">

            <!-- submit button -->
            <button type="submit" id="submit_list_fac" class="submit_list_fac">Submit</button>

            <?php
                $fac_name = $_POST['fac_name'];
                // $sql = "SELECT j.jour_pub,j.paper_title,j.volume_no,j.issue_no,j.year,j.pages,J.jour_name, c.conf_pub,c.place, C.conf_name, R.name, F.fac_name, D.dept_name 
                $sql = "SELECT * 
                                    FROM journal j
                                    , conference c
                                    , Conferences Co
                                    , Departments D
                                    , Faculty F
                                    , Journals Jo
                                    , ResearchScholars R
                                    , jour_pub_fac jpf
                                    , jour_pub_roll jpr
                                    , conf_pub_fac cpf
                                    , conf_pub_roll cpr
                                    LEFT JOIN ON j.paper_title = c.paper_title
                                    WHERE F.fac_name = '$fac_name'";
                // if filter is not all
                if ($_POST['filter'] != 'all') {
                    $sql = $sql . " AND j.year = " . $_POST['year'];
                }
                $result = mysqli_query($connection, $sql);
                $resultCheck = mysqli_num_rows($result);

                // display in table format
                if ($resultCheck > 0) {
                    echo "<table>
                                    <tr>
                                    <th>Journal Publication</th>
                                    <th>Paper Title</th>
                                    <th>Volume No</th>
                                    <th>Issue No</th>
                                    <th>Year</th>
                                    <th>Pages</th>
                                    <th>Journal Name</th>
                                    <th>Conference Publication</th>
                                    <th>Place</th>
                                    <th>Conference Name</th>
                                    <th>Name</th>
                                    <th>Faculty Name</th>
                                    <th>Department Name</th>
                                    </tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row['jour_pub'] . "</td><td>" . $row['paper_title'] . "</td><td>" . $row['volume_no'] . "</td><td>" . $row['issue_no'] . "</td><td>" . $row['year'] . "</td><td>" . $row['pages'] . "</td><td>" . $row['jour_name'] . "</td><td>" . $row['conf_pub'] . "</td><td>" . $row['place'] . "</td><td>" . $row['conf_name'] . "</td><td>" . $row['name'] . "</td><td>" . $row['fac_name'] . "</td><td>" . $row['dept_name'] . "</td></tr>";
                    }
                    echo "</table>";
                }
                ?>



    </section>


    <script type="text/javascript">

        // function to display none sections when window loads
        // window.onload = function () {
        //     document.getElementById("add_data").style.display = "none";
        //     document.getElementById("list_finance").style.display = "none";
        //     document.getElementById("list_faculty").style.display = "none";
        // }
        // function to load all tables 


        function addPub(){
            alert("add");
            document.getElementById("add_data").style.display = "block";
            document.getElementById("list_finance").style.display = "none";
            document.getElementById("list_faculty").style.display = "none";
        }

        function listFinan(){
            document.getElementById("add_data").style.display = "none";
            document.getElementById("list_finance").style.display = "block";
            document.getElementById("list_faculty").style.display = "none";
        }

        function listFac(){
            document.getElementById("add_data").style.display = "none";
            document.getElementById("list_finance").style.display = "none";
            document.getElementById("list_faculty").style.display = "block";
        }

    </script>

</body>

</html>