<?php get_header(); ?>
<div class="front-page container">
  <div class="advert-01 container-fluid p-0 mb-3">
    <div class="row">
      <div class="container d-flex justify-content-center p-0">
        <div class="amd-pc-builds title p-3 justify-content-center">
          <a class="btn" href="<?php echo get_bloginfo('url').'/amd-5000-series'; ?>">
            <div class="amd-5000-series">
              <span>Check </span><span>out </span><span>our </span><span>new </span><span>products </span><span>based </span><span>on </span><span>the </span><span>AMD </span><span>Ryzen™ </span><span>5000 </span><span>Series</span>
            </div>
          </a>
        </div>
        <div class="ryzen-5000-get-yours justify-content-center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/3NhdwGPDBbA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="product-choice container p-3 rounded">
    <div class="row lets-make-pc-row p-3">
      <div class="lets-make-pc container d-flex justify-content-center m5 p-3 rounded">
        <h1>LET'S MAKE A PC</h1>
      </div>  
    </div>
    <div class="row">
      <a class="btn col d-inline-flex justify-content-center m-3 p-3 border rounded bg-primary" href="<?php echo get_bloginfo('url').'/choose-own'; ?>">
        <div class="choose-own">
          <h1>CHOOSE MY OWN COMPONENTS</h1>
          <div class="image d-none d-sm-block p-5">
            <img src="<?php echo get_bloginfo('url').'/choose-own'; ?>" alt="Choose My Own Components" width="300">
          </div>
        </div>
      </a>
      <a class="btn col d-inline-flex justify-content-center m-3 p-3 border rounded bg-danger" href="<?php echo get_bloginfo('url').'/pre-designed'; ?>">
        <div class="pre-designed">
          <h1>PRE-DESIGNED CUSTOM PCs</h1>
          <div class="image d-none d-sm-block p-5">
            <img src="<?php echo get_bloginfo('url').'/pre-designed'; ?>" alt="Pre-designed PCs" width="300">
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<?php get_footer(); ?>