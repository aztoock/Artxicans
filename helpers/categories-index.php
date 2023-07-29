
  <article class="carousel-main">
  <h2 align="center">Lo más vendido</h2> 
    <!-- Slider main container -->
    <div class="swiper swiper-hero">
     
    <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <?php 
            $get_data = mysqli_query($conn,"SELECT * FROM products ORDER BY rand() LIMIT 3");
            while($set_data = mysqli_fetch_array($get_data)){ 
              
        
             ?>
          
          <div class="swiper-item-send">
              <a href="./product.php?id_product=<?php echo $set_data['id_product']?>">
            <img
              src="./assets/products/<?php echo $set_data['image1']?>"
              alt="<?php echo $set_data['product']?>"
            />
            <p style="color:black;font-weight:bold;text-align:center"><?php echo $set_data['product']?></p>
            </a>
          </div>
         
           <?php  } ?> 
          
        </div>
        <div class="swiper-slide">
        <?php 
            $get_data2 = mysqli_query($conn,"SELECT * FROM products ORDER BY rand() LIMIT 3");
            while($set_data2 = mysqli_fetch_array($get_data2)){ 
              
        
             ?>
          
          <div class="swiper-item-send">
          <a href="./product.php?id_product=<?php echo $set_data2['id_product']?>">
            <img
              src="./assets/products/<?php echo $set_data2['image1']?>"
              alt="<?php echo $set_data2['product']?>"
            />
            <p style="color:black;font-weight:bold;text-align:center"><?php echo $set_data2['product']?></p>
            </a>
          </div>
         
           <?php  } ?> 
         
        </div>
        <div class="swiper-slide">
        <?php 
            $get_data3 = mysqli_query($conn,"SELECT * FROM products ORDER BY rand() LIMIT 3");
            while($set_data3 = mysqli_fetch_array($get_data3)){ 
              
        
             ?>
          
          <div class="swiper-item-send">
          <a href="./product.php?id_product=<?php echo $set_data3['id_product']?>">
            <img
              src="./assets/products/<?php echo $set_data3['image1']?>"
              alt="<?php echo $set_data3['product']?>"
            />
            <p style="color:black;font-weight:bold;text-align:center"><?php echo $set_data3['product']?></p>
            </a>
          </div>
         
           <?php  } ?> 
         
        </div>
       
       
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>

    </article>

    <article class="carousel-main">
  <h2 align="center">Lo más buscado</h2> 
    <!-- Slider main container -->
    <div class="swiper swiper-hero">
     
    <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <?php 
            $get_data4 = mysqli_query($conn,"SELECT * FROM products ORDER BY rand() LIMIT 3");
            while($set_data4 = mysqli_fetch_array($get_data4)){ 
              
        
             ?>
          
          <div class="swiper-item-send">
              <a href="./product.php?id_product=<?php echo $set_data4['id_product']?>">
            <img
              src="./assets/products/<?php echo $set_data4['image1']?>"
              alt="<?php echo $set_data4['product']?>"
            />
            <p style="color:black;font-weight:bold;text-align:center"><?php echo $set_data4['product']?></p>
            </a>
          </div>
         
           <?php  } ?> 
          
        </div>
        <div class="swiper-slide">
        <?php 
            $get_data5 = mysqli_query($conn,"SELECT * FROM products ORDER BY rand() LIMIT 3");
            while($set_data5 = mysqli_fetch_array($get_data5)){ 
              
        
             ?>
          
          <div class="swiper-item-send">
          <a href="./product.php?id_product=<?php echo $set_data5['id_product']?>">
            <img
              src="./assets/products/<?php echo $set_data5['image1']?>"
              alt="<?php echo $set_data5['product']?>"
            />
            <p style="color:black;font-weight:bold;text-align:center"><?php echo $set_data5['product']?></p>
            </a>
          </div>
         
           <?php  } ?> 
         
        </div>
        <div class="swiper-slide">
        <?php 
            $get_data6 = mysqli_query($conn,"SELECT * FROM products ORDER BY rand() LIMIT 3");
            while($set_data6 = mysqli_fetch_array($get_data6)){ 
              
        
             ?>
          
          <div class="swiper-item-send">
          <a href="./product.php?id_product=<?php echo $set_data6['id_product']?>">
            <img
              src="./assets/products/<?php echo $set_data6['image1']?>"
              alt="<?php echo $set_data6['product']?>"
            />
            <p style="color:black;font-weight:bold;text-align:center"><?php echo $set_data6['product']?></p>
            </a>
          </div>
         
           <?php  } ?> 
         
        </div>
       
       
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>

    </article>