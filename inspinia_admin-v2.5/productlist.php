<?php

if (isset($_GET['sucess'])){
?>
<script>
    alert("data updated");
</script>
<?php }
if (isset($_GET['failure'])){
?>
<script>
    alert("Error occured");
</script> 
<?php }
if (isset($_GET['delete'])){
?>
<script>
    alert("product deleted");
</script> 
 <?php }
?>
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
            <div class="col-lg-12">
            
                <table border="1" class="table table-responsive">
                    <thead>
                        <tr>
                            <th>product id</th>
                            <th>Product name</th>
                            <th>Product price</th>
                            <th>product description</th>
                            <th>product image</th>
                            <th>Submit here</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            
           include '../include/function.php';
     $con=dbconnect();
            $sql="select * from products";
            $a=mysqli_query($con, $sql);
            while ($row= mysqli_fetch_array($a)){
            
            ?>
                    <form method="POST" action="validate.php?id=<?=$row['pid']?>" enctype="multipart/form-data">
                        
                        <tr>
                            <td><?=$row['pid']?></td>
                            <td><input type="text" value="<?=$row['pname']?>" name="name"></td>
                            <td><input type="text" value="<?=$row['pprice']?>" name="price"></td>
                            <td><input type="text" value="<?=$row['pdesc']?>" name="pdesc"></td>
                            <td><img class="img-responsive" height="100px" width="100px" src="<?=$row['pimage']?>">
                                <input type="file" name="myfile">
                            </td>
                            <td><input type="submit" name="submit" value="update">
                            <input type="submit" name="delete" value="delete"></td>
                        </tr>
                        </form>
              <?php
            }
              ?>
                    </tbody>
                </table>

            
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
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

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

