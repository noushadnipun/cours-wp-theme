<?php 
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

$childrens = get_terms( $term->taxonomy, array(
        'parent'    => $term->term_id,
        'hide_empty' => false
) );
//echo '<pre>';
// var_dump($children);
//var_dump($term);
?>
<?php /*
<div class="py-5 bg-light team1 d-none">
  <div class="container">
    <div class="row justify-content-center mb-3">
      <div class="col-md-7 text-center">
        <h3 class="mb-3"><?php echo apply_filters( 'the_title', $term->name ); ?></h3>
        <h6 class="subtitle font-weight-normal"></h6>
      </div>
    </div>
    <div class="row">
      <!-- column  -->
      <div class="col-lg-6">
        <div class="card card-shadow border-0 mb-4">
          <!-- Row -->
          <div class="row no-gutters">
            <div class="col-md-5 pro-pic" style="background:url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg) center center no-repeat / cover">
              <div class="card-img-overlay">
                <ul class="list-inline position-relative text-center">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-7 bg-white">
              <div class="p-4 text-dark">
                <h6 class="mb-0 font-weight-medium">Michael Doe</h6>
                <h6 class="subtitle-designition mb-1">Property Specialist</h6>
                <p class="mb-0">Department: </p>
                <p class="mb-0">Phone: </p>
                <p class="mb-0">Email: </p>
                <ul class="list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="text-decoration-none d-block pe-1"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none d-block pe-1"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
      </div>
      <!-- column  -->
      <div class="col-lg-6">
        <div class="card card-shadow border-0 mb-4">
          <!-- Row -->
          <div class="row no-gutters card-shadow">
            <div class="col-md-5 pro-pic" style="background:url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg) center center no-repeat / cover">
              <div class="card-img-overlay">
                <ul class="list-inline position-relative text-center">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-7 bg-white">
              <div class="p-4">
                <h6 class="mb-3 font-weight-medium">Michael Doe</h6>
                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
      </div>
      <!-- column  -->
    </div>
    <div class="row">
      <!-- column  -->
      <div class="col-lg-6">
        <div class="card card-shadow border-0 mb-4">
          <!-- Row -->
          <div class="row no-gutters card-shadow">
            <div class="col-md-5 pro-pic" style="background:url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg) center center no-repeat / cover">
              <div class="card-img-overlay">
                <ul class="list-inline position-relative text-center">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-7 bg-white">
              <div class="p-4">
                <h6 class="mb-3 font-weight-medium">Michael Doe</h6>
                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
      </div>
      <!-- column  -->
      <div class="col-lg-6">
        <div class="card card-shadow border-0 mb-4">
          <!-- Row -->
          <div class="row no-gutters card-shadow">
            <div class="col-md-5 pro-pic" style="background:url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg) center center no-repeat / cover">
              <div class="card-img-overlay">
                <ul class="list-inline position-relative text-center">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-7 bg-white">
              <div class="p-4">
                <h6 class="mb-3 font-weight-medium">Michael Doe</h6>
                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
      </div>
      <!-- column  -->
    </div>
  </div>
</div>

*/ ?>



<div class="py-5 team4">
  <div class="container">
    <?php 
       function takePost($temSlug){
        return [
          'post_type' => ['executive'], // the post type
          'tax_query' => array(
              [
                  'taxonomy' => 'executive-category', // the custom vocabulary
                  'field'    => 'slug',                 
                  'terms'    => array($temSlug),      // provide the term slugs
              ],
          ),
        ];
       } 

        echo heading($term->name, $term->description);
        $getPost = new WP_Query(takePost($term->slug));
        echo '<div class="row justify-content-center pb-5">';
        while ($getPost->have_posts()) : $getPost->the_post();
          echo template();
        endwhile;
        echo '</div>';
            

      if($childrens):
      foreach($childrens as $children) {
          echo heading($children->name, $children->description);
            // Query Arguments

          $getPost = new WP_Query(takePost($children->slug));
          echo '<div class="row justify-content-center pb-5">';
          while ($getPost->have_posts()) : $getPost->the_post();
            echo template();
          endwhile;
          echo '</div>';
            
      } 
          endif;
        
      ?>



<?php function heading($title, $description) {?>
      <div class="row justify-content-center mb-4">
        <div class="col-md-7 text-center">
          <h3 class="mb-3"><?php echo $title; ?></h3>
          <h6 class="subtitle"><?php echo $description ?></h6>
        </div>
      </div>
<?php } ?>



<?php function template(){ ?>
      <div class="col-lg-4 mb-3">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12 text-center mx-auto">
            <img src="<?php the_post_thumbnail_url();?>" alt=""  class="userPic img-fluid rounded-circle" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0"><?php echo get_the_title();?></h5>
              <h6 class="subtitle mb-0 text-dark"><?php echo get_field('designation');?></h6>
              <h6 class="subtitle mb-2 text-dark"><?php echo get_field('designation_department');?></h6>
              <h6 class="subtitle mb-0 text-dark"><?php echo get_field('department');?></h6>
                <span class="text-dark"><?php echo get_the_content();?></span>
              <h6 class="subtitle mb-0 text-dark"><strong>Phone:</strong> <?php echo get_field('phone');?></h6>
              <h6 class="subtitle mb-3 text-dark"><strong>Email:</strong> <?php echo get_field('email');?></h6>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="<?php echo get_field('facebook_id');?>" class="text-decoration-none d-block px-1"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="<?php echo get_field('linkedin_id');?>" class="text-decoration-none d-block px-1"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>

<?php } ?>



  </div>
</div>

<style>
  .userPic {
    width: 180px;
    object-fit: cover;
    object-position: center;
  }
</style>
<?php get_footer();?>