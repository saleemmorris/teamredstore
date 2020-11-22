<footer id="footer" class="p-5 mt-3 align-middle">
  <div class="container">
    <div class="info row d-flex justify-content-around p-0">
      <div class="pages">
        <div class="pages title">
          Site Links:
        </div>
        <div class="pages-link">
          <a href="<?php bloginfo("url"); ?>">Home</a>
        </div>      
        <div class="pages-link">
          <a href="<?php echo get_bloginfo('url').'/about-us'; ?>">About Us</a>
        </div>      
        <div class="pages-link">
          <a href="<?php echo get_bloginfo('url').'/contact'; ?>">Contact</a>
        </div>
        <div class="pages-link">
          <a href="<?php echo get_bloginfo('url').'/support'; ?>">Support</a>
        </div>
      </div>
      <div class="address">
        <span class="address-title">Address:</span>
        <address>12 Eyeletter House<br>Greenwood Road<br>Northampton<br>NN5 5EG</address>
      </div>  
      <div class="email">
        <div class="email title">
          Email:
        </div>
        <div class="email-sales d-flex justify-content-between">
          <div>
            <span>Sales </span>
          </div>
          <div class="ml-3">
            <a href="mailto:sales@teamred.store">sales@teamred.store</a>
          </div>
        </div>
        <div class="email-support d-flex justify-content-between">
          <div>
            <span>Support </span>
          </div>
          <div class="ml-3">
            <a href="mailto:support@teamred.store">support@teamred.store</a>
          </div>
        </div>
        <div class="email-general d-flex justify-content-between">
          <div>
            <span>General Enquires </span>
          </div>
          <div class="ml-3">
            <a href="mailto:support@teamred.store">contact@teamred.store</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center p-0">
      <div class="copyright">©2020 teamred.store. All rights resserved.</div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>