<?php 
    session_start();
    include("config/db.php"); // Include DB config

    if (!$_SESSION['username']):
        header('#');
    else:
        include("#");
?>
    <div class="container" id="data">
        <!-- View for Teacher -->
        <?php if ($_SESSION['username']): ?>
            <img src="assets/profile.svg" alt="teacher's profle pic">
            <h1><?php echo $_SESSION['username']; ?></h1>

            <div class="cards">
                <div class="card">
                    <a href="#" style="color: #ff4200">
                        <img src="" alt="">
                        Register
                    </a>
                </div>
                <div class="card">
                    <a href="create-assignment.php" style="color: #ff4200">
                        <img src="#" alt="">
                         Assignments
                    </a>
                </div>
                <div class="card">
                    <a href="#" style="color: #ff4200">
                        <img src="#" alt="">
                        Pupils
                    </a>
                </div>
            </div>
        <?php else: ?> 
        <!-- View for Pupils -->
        <div class="user">
            <h1>Welcome <?php echo $_SESSION['usercode']; ?>,</h1>
            <a class="link-btn" href="#CLI">Go to CLI</a>            
        </div>
        <?php endif ?>
    </div>
<?php 
    include("include/footer.php");
    endif
?>