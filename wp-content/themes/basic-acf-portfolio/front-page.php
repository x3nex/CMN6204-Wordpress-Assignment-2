<?php get_header(); ?>
<?php the_post(); ?>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

      <?php 
      $slider = get_field('slider');
      foreach ($slider as $key => $slide) :
        if ($key === 0) {
          $class = 'active';
        } else {
          $class = '';
        }
        $image = $slide['slide_image']['sizes']['Hero'];
        $title = $slide['slide_title'];
        $description = $slide['slide_description'];
        ?>

        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item <?= $class ?>" style="background-image: url('<?= $image ?>')">
          <div class="carousel-caption d-none d-md-block">
            <h3><?= $title ?></h3>
            <p><?= $description ?></p>
          </div>
        </div>

      <?php endforeach; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<!-- Page Content -->
<div class="container">

  <h1 class="my-4">Welcome to Milos Tadic's Portfolio!</h1>

  <?php  
  $url = get_field('welcome_image')['sizes']['Portfolio Featured'];
  ?>

  <!-- Features Section -->
  <div class="row">
    <div class="col-lg-6">
      <?= the_content(); ?>
    </div>
    <div class="col-lg-6 content">
      <?php
      $url = get_field('welcome_image')['sizes']['Portfolio Featured'];
      ?>
      <img class="img-fluid rounded" src="<?= $url ?>" alt="">
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <?php
  $text = get_field('text');
  $url = get_field('call_to_action');

  ?>
  <!-- Call to Action Section -->
  <div class="row mb-4">
    <div class="col-md-8">
      <p><?= $text?></p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-secondary btn-block" href="<?= $url ?>">Call to Action</a>
    </div>
  </div>


  <!-- Portfolio Section -->
  <h2>Testimonials</h2>
  <div class="row">
    <?php
    while ( have_rows('testemonials') ) : the_row();
      $url = get_sub_field('image')['sizes']['Portfolio Featured'];
      $quote = get_sub_field('quote');
      $name = get_sub_field('name');
      ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?= $url ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?= $name ?></a>
            </h4>
            <p class="card-text"> <?= $quote ?></p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div> 
  <!-- /.row -->

</div>

<?php get_footer(); ?>