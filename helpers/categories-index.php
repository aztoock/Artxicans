
  <article class="carousel-main">
  <h2 align="center">Alebrijes</h2> 
    <!-- Slider main container -->
    <div class="swiper swiper-hero">
     
    <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <?php 
            $get_data = mysqli_query($conn,"SELECT * FROM products WHERE category = 'Alebrije' ORDER BY rand() LIMIT 3");
            while($set_data = mysqli_fetch_array($get_data)){ 
              
        
             ?>
          
          <div class="swiper-item-send">
         
            <img
              src="./assets/products/<?php echo $set_data['image1']?>"
              alt="<?php echo $set_data['product']?>"
            />
            <p><?php echo $set_data['product']?></p>
          </div>
         
           <?php  } ?> 
          
        </div>
        <div class="swiper-slide">
        <?php 
            $get_data2 = mysqli_query($conn,"SELECT * FROM products WHERE category = 'Alebrije' ORDER BY rand() LIMIT 3");
            while($set_data2 = mysqli_fetch_array($get_data2)){ 
              
        
             ?>
          
          <div class="swiper-item-send">
         
            <img
              src="./assets/products/<?php echo $set_data2['image1']?>"
              alt="<?php echo $set_data2['product']?>"
            />
            <p><?php echo $set_data2['product']?></p>
          </div>
         
           <?php  } ?> 
         
        </div>
        <div class="swiper-slide">
        <?php 
            $get_data = mysqli_query($conn,"SELECT * FROM products WHERE category = 'Alebrije' ORDER BY rand() LIMIT 3");
            while($set_data = mysqli_fetch_array($get_data)){ 
              
        
             ?>
          
          <div class="swiper-item-send">
         
            <img
              src="./assets/products/<?php echo $set_data['image1']?>"
              alt="<?php echo $set_data['product']?>"
            />
            <p><?php echo $set_data['product']?></p>
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