
      <!-- BANNER -->
      <div class='bannercontainer bannerV1'>
        <div class='fullscreenbanner-container'>
          <div class='fullscreenbanner'>
            <ul>
          <?php
              //include 'include/function.php';
              $c= dbconnect();
              $s='select * from slider';
              $rs= mysqli_query($c, $s);
              while ($rown= mysqli_fetch_array($rs)){
                $count=1;                  
                                    
           ?>
                
                
              <li data-transition='slidehorizontal' data-slotamount='5' data-masterspeed='700' data-title='Slide <?=$count?>'>
                <img src='img/home/banner-slider/slider-bg.jpg' alt='slidebg1' data-bgfit='cover' data-bgposition='center center' data-bgrepeat='no-repeat'>
                <div class='slider-caption slider-captionV1 container'>

                  <div class='tp-caption rs-caption-1 sft start'
                    data-hoffset='0'
                    data-x='700'
                    data-y='0'
                    data-speed='800'
                    data-start='1500'
                    data-easing='Back.easeInOut'
                    data-endspeed='300' >
                    <img src='<?=$rown['image']?>' alt='slider-image' class='w3-hover-grayscale' style='width: auto; height: auto;'>
                  </div>

                  <div class='tp-caption rs-caption-2 sft'
                    data-hoffset='0'
                    data-y='100'
                    data-x='[15,15,42,15]'
                    data-speed='800'
                    data-start='2000'
                    data-easing='Back.easeInOut'
                    data-endspeed='300'>
                    <?=$rown['name']?>
                  </div>

                  <div class='tp-caption rs-caption-3 sft'
                    data-hoffset='0'
                    data-y='175'
                    data-x='[15,15,42,15]'
                    data-speed='1000'
                    data-start='3000'
                    data-easing='Power4.easeOut'
                    data-endspeed='300'
                    data-endeasing='Power1.easeIn'
                    data-captionhidden='off'>
                    Start From - $<?=$rown['price']?><br>
                    <small><?=$rown['pdesc']?></small>
                  </div>
                  <div class='tp-caption rs-caption-4 sft'
                    data-hoffset='0'
                    data-y='310'
                    data-x='[15,15,42,15]'
                    data-speed='800'
                    data-start='3500'
                    data-easing='Power4.easeOut'
                    data-endspeed='300'
                    data-endeasing='Power1.easeIn'
                    data-captionhidden='off'>
                    <span class='page-scroll'><a href='#' class='btn primary-btn'>Buy Now<i class='fa fa-chevron-right'></i></a></span>
                  </div>
                </div>
              </li>
             <?php
              }
             
             ?>
              
              
            </ul>
          </div>
        </div>
      </div>