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
        /* display: none; */
    }
</style>
<body>

    <button id="load" class="load" onclick="">Load Tables</button>
    <button id="add" class="add" onclick="addPub()">Add a publication</button>
    <button onclick="listFinan()">List of publication as per financial year</button>
    <button onclick="listFac()">List of publication as per faculty</button>

    <section>

            
            

    </section>

    <section id="load_tables" class="load_tables" >
        <!-- form for entering journal details -->
        <form id="add_journal" class="add_journal" action="">

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

            <button type="submit" id="submit" class="submit">Submit</button>

        </form>




    </section>



    <section id="list_finance" class="list_finance">
        <!-- form for listing publication as per financial year -->
        <form id="list_finan" class="list_finan" action="">

            <h3>List of publication as per financial year</h3>

            <!-- label and input for financial year -->
            <label for="finan_year">Financial Year</label>
            <input type="text" name="finan_year" id="finan_year" placeholder="Financial Year">
            <!-- extra option for all, journal, Conference, Department wise -->
            <label for="filter">Filter by</label>
            <select name="filter" id="filter">
                <option value="all">All</option>
                <option value="journal">Journal : 
                    <!-- input for journal -->
                    <input type="text" name="journal" id="journal" placeholder="Journal">

                </option>
                <option value="conference">Conference</option>
                <option value="department">Department</option>
            </select>
            <label for="group">Group by</label>
            <select name="group" id="group">
                <option value="institute">Institute</option>
                <option value="department">Department</option>
            </select>



            <!-- submit button -->
            <button type="submit" id="submit_list_finan" class="submit_list_finan">Submit</button>

            <?php
                $sql = "SELECT * FROM journalrecord";
                // if filter is not all
                if(isset($_POST['filter']) && $_POST['filter'] != 'all'){
                    // if filter is journal
                    if($_POST['filter'] == 'journal'){
                        // if journal is not empty
                        if(isset($_POST['journal']) && $_POST['journal'] != ''){
                            $sql = "SELECT * FROM journalrecord WHERE journal_name = '".$_POST['journal']."'";
                        }
                    }
                    // if filter is conference
                    if($_POST['filter'] == 'conference'){
                        // if conference is not empty
                        if(isset($_POST['conference']) && $_POST['conference'] != ''){
                            $sql = "SELECT * FROM journalrecord WHERE conference_name = '".$_POST['conference']."'";
                        }
                    }
                    // if filter is department
                    if($_POST['filter'] == 'department'){
                        // if department is not empty
                        if(isset($_POST['department']) && $_POST['department'] != ''){
                            $sql = "SELECT * FROM journalrecord WHERE department_name = '".$_POST['department']."'";
                        }
                    }
                }
                $result = mysqli_query($connection, $sql);
                $resultCheck = mysqli_num_rows($result);

                // display in table format
                if($resultCheck > 0){
                    echo "<table>
                    <tr>
                    <th>Journal Publication</th>
                    <th>Journal ID</th>
                    <th>Paper Title</th>
                    <th>Volume No</th>
                    <th>Issue No</th>
                    <th>Year</th>
                    <th>Pages</th>
                    <th>Journal Name</th>
                    </tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr><td>" . $row["jour_pub"]. "</td><td>" . $row["jour_id"] . "</td><td>" . $row["paper_title"] . "</td><td>" . $row["volume_no"] . "</td><td>" . $row["issue_no"] . "</td><td>" . $row["year"] . "</td><td>" . $row["pages"] . "</td><td>" . $row["jour_name"] . "</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
            
        </form>
    </section>

    <section id="list_faculty" class="list_faculty"></section>


    <script>
        function addPub(){
            document.getElementById("load_tables").style.display = "block";
            document.getElementById("list_finance").style.display = "none";
            document.getElementById("list_faculty").style.display = "none";
        }

        function listFinan(){
            document.getElementById("load_tables").style.display = "none";
            document.getElementById("list_finance").style.display = "block";
            document.getElementById("list_faculty").style.display = "none";
        }

        function listFac(){
            document.getElementById("load_tables").style.display = "none";
            document.getElementById("list_finance").style.display = "none";
            document.getElementById("list_faculty").style.display = "block";
        }

    </script>

</body>
</html>