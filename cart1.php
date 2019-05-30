
<!DOCTYPE html>
<html lang='en'>
  
<head>

    <!-- SITE TITTLE -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>BIGBAG Store - Ecommerce Bootstrap Template</title>

    <!-- PLUGINS CSS STYLE -->
    <link href='plugins/jquery-ui/jquery-ui.css' rel='stylesheet'>
    <link href='plugins/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
    <link href='plugins/font-awesome/css/font-awesome.min.css' rel='stylesheet'>
    <link href='plugins/selectbox/select_option1.css' rel='stylesheet'>
    <link href='plugins/fancybox/jquery.fancybox.min.css' rel='stylesheet'>
    <link href='plugins/iziToast/css/iziToast.css' rel='stylesheet'>
    <link href='plugins/prismjs/prism.css' rel='stylesheet'>
    <link rel='stylesheet' type='text/css' href='plugins/rs-plugin/css/settings.css' media='screen'>
    <link rel='stylesheet' type='text/css' href='plugins/slick/slick.css' media='screen'>
    <link rel='stylesheet' type='text/css' href='plugins/slick/slick-theme.css' media='screen'>


    <!-- CUSTOM CSS -->
    <link href='css/style.css' rel='stylesheet'>
    <link rel='stylesheet' href='css/default.css' id='option_color'>

    <!-- Icons -->
    <link rel='shortcut icon' href='img/favicon.png'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
    <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->

  </head>

  <body class='body-wrapper version1'>

    <?php
                //include './include/preloader.php';
    
    ?>

    <div class='main-wrapper'>

      <?php
                include './include/header.php';
                include './include/slider.php';
                 //include './include/function.php';
      
      ?>




<div class='container-fluid' style='margin-top: 20px'>
               
                        <div class='row'>
            <div class='col-lg-12'>
            
                <table border='1' class='table table-responsive'>
                    <thead style='background-color: blue'>
                        <tr>
                            <th>product id</th>
                             <th>product image</th>
                            <th>Product name</th>
                            <th>Product price</th>
                            <th>Quantity</th>
                           
                            <th>Submit here</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php


                        $con=dbconnect();
                     include 'function.php';
                     $ip = getIp();


                        $query='select * from cart where ip_addr='$ip'';
                        $rs=mysqli_query($con,$query);
                        while ($row=mysqli_fetch_array($rs)) {
                          
                          $pid=$row['pid'];
                         
                          $co=dbconnect();
                          $quer='select * from products where pid=$pid';
                        $r=mysqli_query($co,$quer);
                        while ($ro=mysqli_fetch_array($r)) {
                          
                        ?>
                    <form method='POST' action='validate.php?id=<?=$row['pid']?>'>
                        
                        <tr>
                            <td><?=$row['pid']?></td>
                            <td><img class='img-responsive' height='100px' width='100px' src='<?=$ro['pimage']?>'>
                                
                            </td>
                            <td><?=$ro['pname']?></td>
                            <td><?=$ro['pprice']?></td>
                            <td><input type='number' name='qnt' value='<?=$row['quantity']?>'></td>
                            
                            <td><input type='submit' name='submit' value='update'>
                            <input type='submit' name='delete' value='delete'></td>
                        </tr>
                        </form>
              <?php
            } }
              ?>
                    </tbody>
                </table>

            
            </div>
            </div>
                    </div>
 <?php
                include './include/footer.php';
               
      ?>

    <script src='plugins/jquery/jquery.min.js'></script>
    <script src='plugins/jquery/jquery-migrate-3.0.0.min.js'></script>
    <script src='plugins/jquery-ui/jquery-ui.js'></script>
    <script src='plugins/bootstrap/js/popper.min.js'></script>
    <script src='plugins/bootstrap/js/bootstrap.min.js'></script>
    <script src='plugins/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
    <script src='plugins/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <script src='plugins/slick/slick.js'></script>
    <script src='plugins/fancybox/jquery.fancybox.min.js'></script>
    <script src='plugins/iziToast/js/iziToast.js'></script>
    <script src='plugins/prismjs/prism.js'></script>
    <script src='plugins/selectbox/jquery.selectbox-0.1.3.min.js'></script>
    <script src='plugins/countdown/jquery.syotimer.js'></script>
    <script src='plugins/velocity/velocity.min.js'></script>
    <script src='js/custom.js'></script>

  <link href='options/optionswitch.css' rel='stylesheet'>
<script src='options/optionswitcher.js'></script>
<script type='text/javascript'>
  function s(){
  var q=document.getElementById('a').value;
  alert(q);
}
</script>
</body>


</html>
<?php
if (isset($_REQUEST['update'])) { ?>
<script>
  alert('HELLO');
</script>
<?php
}
?>
