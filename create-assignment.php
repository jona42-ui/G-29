<?php 
    session_start();
    include("config/db.php");

    if (isset($_POST['assignment'])) {
        $title = $_POST['title'];
        $characters = $_POST['characters'];
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];
        $date = $_POST['date'];
       

        if ($title != '' && $characters !='' && $starttime !='' && $endtime !='' && $date != '') {

            $sql = "INSERT INTO assignment (title, characters,startTime,endTime,date) VALUES ('$title','$characters','$starttime','$endtime' '$date')";
            $query = $conn->query($sql);

            
        }
        else {
            $error = 'Please fill all the details!';
        }
    }
?>
<?php 
    if (!isset($_SESSION['username'])): 
        header('#');        
    else:
        include("include/header.php");
?>
    <div class="container">
        <div class="forms">
            <div class="box" id="data">
                <h1>Create assignment</h1>
                <form action="create-assignment.php" method="POST">
                    <div class="input-box">
                        <div class="form-field">
                            <label for="name">Add Assignment Name</label>
                            <input type="text" name="title" placeholder="Assignment Name" id="title">
                        </div>
                        <div class="form-field">
                            <label for="characters">Add Characters</label>
                            <input type="text" name="characters" placeholder="Characters" id="characters" maxlength="8">
                        </div>
                        <div class="form-field">
                            <label for="startTime">Add Start Time</label>
                            <input type="time" name="starttime" placeholder="Start Time" id="starttime">
                        </div>
                        <div class="form-field">
                            <label for="endTime">Add End Time</label>
                            <input type="time" name="endtime" placeholder="End Time" id="endtime">
                        </div>
                    </div>
                    <label for="duedate">Add Due Date</label>
                    <input type="date" name="date" placeholder="Due  Date" id="duedate">
                    <br>
                    <input type="submit" name="assignment" value="Create Assignment">   
                 
                    <div class="alert">
                        <?php 
                            if (isset($_POST['assignment'])) {
                                echo $error;
                            }
                        ?>
                    </div>
            </form>
        </div>
    </div>
<?php
    include("include/footer.php");
    endif
?>