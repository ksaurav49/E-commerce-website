

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | PRODUCTENTRY</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    
        
<?php
include 'include/sidebar.php';

?>
        <div id="page-wrapper" class="gray-bg">
            <?php
            include 'include/header.php';
          ?>
            
            
            <div class="container-fluid" style="margin-top: 20px">
                <div class="row">
                     <div class="col-md-2">
                        
                    </div>
                    
                   <div class="col-md-8">
                        <h2 style="color: red; text-align: center">Enter New Category</h2>
                        <form action="" method="post" role="form">
                           <div class="form-group">
                               <label for="">Enter Product Category</label>
                               <input type="text" class="form-control" id="" name="pcat">
                           </div>
                            <button type="submit" class="btn btn-primary btn-block" name="save">Save</button>

                           </form>
                 
                         <h2 style="color: red; text-align: center">Enter Sub Category</h2>
                        <form action="" method="get" role="form">
                           <div class="form-group">
                               <label for="">Select Category</label><br>
                               <select name="select">
                                   <optgroup label="Select category"> 
                                       
                               <?php
                                   include '../include/function.php';
                                     $con=dbconnect();
                                    $sql="select * from category where role='parent'";
                                    $a= mysqli_query($con, $sql);
                                    while ($row= mysqli_fetch_array($a)){     
                               ?>
                                       
                                  <option value="<?=$row['cid']?>"><?=$row['cname']?></option>
                                   <?php } ?>
                                  </optgroup>
                               </select>
                           </div>
                            <div class="form-group">
                               <label for="">Enter sub category</label>
                               <input type="text" class="form-control" id="" name="cat">
                           </div>
                           <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>

                           </form>
                       
                    </div>
                    <div class="col-md-2">
                        
                    </div>
                </div>  
            </div>
          <?php  
            include 'include/footer.php';
        ?> 
        </div>
        
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>
</body>
</html>
<?php
 if(isset($_REQUEST['save'])){
     
     $name=$_REQUEST['pcat'];
     $con=mysqli_connect("localhost","root","","summer");
     $sql="insert into category (cname,role) values('$name','parent')";
     $a=mysqli_query($con, $sql);
     if ($a==1){ ?>
        <script>
            alert("inserted");
        </script>
   <?php  }
 }


?>

        
<?php
 if(isset($_REQUEST['submit'])){
     
     $name=$_REQUEST['cat'];
     $cid=$_REQUEST['select'];
    
     $con=dbconnect();
     $sql="insert into category (cname,role) values('$name','$cid')";
     $a=mysqli_query($con, $sql);
     if ($a==1){ ?>
        <script>
            alert("inserted");
        </script>
   <?php  }
 }


?>