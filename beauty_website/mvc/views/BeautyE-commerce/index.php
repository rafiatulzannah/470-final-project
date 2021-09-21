  <?php  $this->view("BeautyE-commerce/header",$data); ?>
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">
              <p class="margin-bottom-0 text-size-16 text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
              <h1 class=" text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Be More with Less</h1>
              <!-- <p class="margin-bottom-0 text-size-16 text-dark">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p> -->

            </div>
          </header>
<!-- //1st product image -->
            <div class="background-white full-width">
           <div style="margin-left:0.025%; margin-right:0.025%;" class="row">
             <div style="padding:0;" class="col-lg-4 col-md-6">
               <?php if(isset($_SESSION['user_name'])): ?>
               <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>product" title="Portfolio Image">
                 <div class="image-hover-overlay background-primary">
                   <div class="image-hover-overlay-content text-center padding-2x">
                     <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                     <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                  <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                   </div>
                 </div>
                 <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/lipstick.jpg" alt=""/>
               </a>
               <?php else: ?>
                 <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>login" title="Portfolio Image">
                   <div class="image-hover-overlay background-primary">
                     <div class="image-hover-overlay-content text-center padding-2x">
                       <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                       <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                    <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                     </div>
                   </div>
                   <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/lipstick.jpg" alt=""/>
                 </a>
                 <?php endif; ?>
                </div>

<!-- // 2nd product image -->


             <div style="padding:0;" class="col-lg-4 col-md-6">
              <?php if(isset($_SESSION['user_name'])): ?>
               <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>product" title="Portfolio Image">
                 <div class="image-hover-overlay background-primary">
                   <div class="image-hover-overlay-content text-center padding-2x">
                     <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                     <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                    <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                   </div>
                 </div>
                 <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/1205702_1.jpg" alt=""/>
               </a>
               <?php else: ?>
                 <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>login" title="Portfolio Image">
                   <div class="image-hover-overlay background-primary">
                     <div class="image-hover-overlay-content text-center padding-2x">
                       <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                       <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                      <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                     </div>
                   </div>
                   <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/1205702_1.jpg" alt=""/>
                 </a>
                  <?php endif; ?>
             </div>
<!-- //3rd product image -->

             <div style="padding:0;" class="col-lg-4 col-md-6">
              <?php if(isset($_SESSION['user_name'])): ?>
               <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>product" title="Portfolio Image">
                 <div class="image-hover-overlay background-primary">
                   <div class="image-hover-overlay-content text-center padding-2x">
                     <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>

                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                      <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                   </div>
                 </div>
                 <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/foundation.jpg" alt=""/>
               </a>
               <?php else: ?>
                 <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>login" title="Portfolio Image">
                   <div class="image-hover-overlay background-primary">
                     <div class="image-hover-overlay-content text-center padding-2x">
                       <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>

                      <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                        <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                     </div>
                   </div>
                   <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/foundation.jpg" alt=""/>
                 </a>
                   <?php endif; ?>
             </div>

<!-- 4th product image -->
           <div style="margin-left:0.025%; margin-right:0.025%;" class="row">
             <div style="padding:0;" class="col-lg-4 col-md-6">
              <?php if(isset($_SESSION['user_name'])): ?>
               <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>product" title="Portfolio Image">
                 <div class="image-hover-overlay background-primary">
                   <div class="image-hover-overlay-content text-center padding-2x">
                     <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                     <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                      <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                   </div>
                 </div>
                 <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/mascara.jpg" alt=""/>
               </a>
                <?php else: ?>
                  <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>login" title="Portfolio Image">
                    <div class="image-hover-overlay background-primary">
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                        <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                         <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                      </div>
                    </div>
                    <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/mascara.jpg" alt=""/>
                  </a>
                  <?php endif; ?>
             </div>

             <!-- 5th product image -->
             <div style="padding:0;" class="col-lg-4 col-md-6">
                <?php if(isset($_SESSION['user_name'])): ?>
                <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>product" title="Portfolio Image">
                 <div class="image-hover-overlay background-primary">
                   <div class="image-hover-overlay-content text-center padding-2x">
                     <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                     <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                      <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                   </div>
                 </div>
                 <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/eyeliner.png" alt=""/>
               </a>
               <?php else: ?>
                 <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>login" title="Portfolio Image">
                  <div class="image-hover-overlay background-primary">
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                      <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                       <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                    </div>
                  </div>
                  <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/eyeliner.png" alt=""/>
                </a>
                <?php endif; ?>
             </div>
<!-- 6th product image -->

             <div style="padding:0;" class="col-lg-4 col-md-6">
             <?php if(isset($_SESSION['user_name'])): ?>
               <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>product" title="Portfolio Image">
                 <div class="image-hover-overlay background-primary">
                   <div class="image-hover-overlay-content text-center padding-2x">
                     <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                     <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                        <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                   </div>
                 </div>
                 <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/blush.jpg" alt=""/>
               </a>
               <?php else: ?>
                 <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT?>login" title="Portfolio Image">
                   <div class="image-hover-overlay background-primary">
                     <div class="image-hover-overlay-content text-center padding-2x">
                       <h3 class="text-white text-size-20 margin-bottom-10">Reference Title</h3>
                       <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                          <button type="button" class="btn btn-light btn-lg btn-lg bttn">BOOK PRODUCT</button>
                     </div>
                   </div>
                   <img class="full-img" src="<?=ASSETS?>BeautyE-commerce/img/portfolio/blush.jpg" alt=""/>
                 </a>
                 <?php endif; ?>
             </div>


           </div>
          </div>
        </article>
      </main>

        <?php  $this->view("BeautyE-commerce/footer",$data); ?>
