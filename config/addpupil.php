<?php
    session_start();
    error_reporting();
    include('includes/config.php');
    if(strlen($_SESSION['alogin'])=="")
    {
        header("Location: index.php");
    }
         else{
        if(isset($_POST['submit']))
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $phoneNumber=$_POST['phoneNumber'];
            $userCode=$_POST['userCode'];
            $status=1;

            $sql="INSERT INTO Pupil(fname, lname, phoneNumber, userCode,Status)VALUES(:fname,:lname,:phoneNumber,:userCode)";
            $query = $dbh->prepare($sql);
            $query->blindParam(':fname',$fname,PDO::PARAM_STR);
            $query->blindParam(':lname',$lname,PDO::PARAM_STR);
            $query->blindParam(':phoneNumber',$phoneNumber,PDO::PARAM_STR);
            $query->blindParam(':userCode',$userCode,PDO::PARAM_STR);
            $query->blindParam(':Status',$Status,PDO::PARAM_STR)
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if($lastInsertId)
            {
                $msg="Pupil info added successfully";
            }
            else
            {
                $error="Something went wrong.Please try again";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
       <title>teacher| pupil Admission</title>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <!-- ===========TOP NAVBAR =========== -->
  <?php include('includes/topbar.php');?> 
            <!-- =========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT =========== -->
            <div class="content-wrapper">
                <div class="content-container">
                    
                <!-- ======== LEFT SIDEBAR ========= -->
                <?php include('includes/leftbar.php');?>

                <div class="main-page">

                <div class="container-fluid">
                    <div class="row page-title-div">
                        <div class="col-md-6">
                            <h2 class="title">Pupil registeration</h2>

    </div>
       <!-- /.col-md-6 text-right -->
    </div>
        <!-- /.row -->
        <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">pupil Registration</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                           <div class="row">
                                       <div class="col-md-12">
                                           <div class="panel">
                                               <div class="panel-heading">
                                                   <div class="panel-title">
                                                       <h5>Fill the pupil info</h5>
                                                   </div>
                                               </div>
                                               <div class="panel-body">
         <?php if($msg){?>
             <div class="alert alert-success left-icon-alert" role="alert">
                 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
         </div><?php }
       else if($error){?>
           <div class="alert alert-danger left-icon-alert" role="alert">
            <strong>Oh snap!</strong><?php echo htmlentities($error); ?>
       </div>
       <?php } ?>
       <form class="form-horizontal" method="post">
       </div>

       <div class="form-group">
<label for="default" class="col-sm-2 control-label">fname</label>
<div class="col-sm-10">
<input type="text" name="fname" class="form-control" id="fname" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">lname</label>
<div class="col-sm-10">
<input type="text" name="lname" class="form-control" id="lname" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">phoneNumber</label>
<div class="col-sm-10">
<input type="text" name="phonenumber" class="form-control" id="phonenumber" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">userCode</label>
<div class="col-sm-10">
<input type="text" name="usercode" class="form-control" id="usercode" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                        </div>
                                                    </div>
                                                </form>
       </body>
       </html>
       <?php} ?>

       }                                            
     }