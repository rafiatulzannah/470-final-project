  <?php  $this->view("BeautyE-commerce/header",$data); ?>
  <header class="section background-white">

  <section class="section background-white">
    <div class="s-12 m-12 l-4 center">
      <h4 class="text-size-20 margin-bottom-20 text-dark text-center">BOOK PRODUCT</h4>
      <form class="register-form customform" method="post">
        <div class="s-12">
        <input type="text" name="username" placeholder="your name"/>
      </div>
        <div class="s-12">
        <input type="text" name="email" placeholder="your email address"/>
      </div>
        <div class="s-12">
        <input type="text" name="contact" placeholder="your contact"/>
      </div>
        <div class="s-12">
        <input type="text" name="password" placeholder="your address"/>
      </div>
        <div class="s-12">
        <input type="text" name="item_name" placeholder="Item Name"/>
       </div>
        <div class="s-12">
        <input type="text" name="item_no" placeholder="No of items"/>
      </div>
        <button>Book Product</button>
      </form>
      <!-- <form action="product.php" name="contactForm" class="customform" method="post">
       <div class="s-12">
          <input name="subject" class="subject" placeholder="Your Name" title="Your Name" type="text">
          <p class="subject-error form-error">Your Name.</p>
        </div>
        <div class="s-12">
          <input name="subject" class="subject" placeholder="Your Email" title="Subject" type="text">
          <p class="subject-error form-error">Your Email.</p>
        </div>
         <div class="s-12">
          <input name="subject" class="subject" placeholder="Your contact" title="Subject" type="text">
          <p class="subject-error form-error">Your contact.</p>
        </div>
        <div class="s-12">
          <input name="subject" class="subject" placeholder="Your Address" title="Subject" type="text">
          <p class="subject-error form-error">Your Address.</p>
        </div>
        <div class="s-12">
          <input name="subject" class="subject" placeholder="Item Name" title="Subject" type="text">
          <p class="subject-error form-error">Item Name.</p>
        </div>
        <div class="s-12">
          <input name="subject" class="subject" placeholder="No-of-Items" title="Subject" type="text">
          <p class="subject-error form-error">No of Items.</p>
        </div>
        <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
      </form> -->
    </div>
  </section>

</header>


    <?php  $this->view("BeautyE-commerce/footer",$data); ?>
