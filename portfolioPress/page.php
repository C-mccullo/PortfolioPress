<?php get_header();  ?>

<div class="main">
  <section id="about" class="about"> 
    <h1 class= "aboutHeader">About Me</h1>
    
        
    <div class="container wrapper">
      <div class="aboutMeContainer">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <div class="aboutImageContainer">
            <img class ="colorChange" src="<?php the_field('about_image') ?>" alt="">
          </div>
          <div data-wow-duration="2s" class="wow fadeIn aboutTextContainer">
            <h3>Hey! I'm Colin</h3>
            <p><?php the_field('about_text') ?></p>
          </div> 
        <?php endwhile; // end the loop?>
      </div>

      <div class="aboutSkills">
        <div class="aboutSkillsContainer">
          <div class="aboutSkillsText">
            <h3>Skills</h3>
            <p>Some of the computer languages I know and work with.</p>
          </div>
          <ul class="skillsIconList">   
            <?php if( have_rows('about_skills') ): ?>
              <?php while( have_rows('about_skills') ): the_row(); ?>

                  <li class="aboutSkills">
                    <?php the_sub_field('skill_icon'); ?>
                    <h5> <?php the_sub_field('skill_name'); ?></h5>
                  </li>

              <?php endwhile ?>
            <?php endif; ?>
          </ul>
        </div>
        <div class="aboutWorkflowContainer">
          <div class="aboutWorkflowText">
            <h3>Workflow</h3>
            <p>Some of the coding tools I like to work with</p>
          </div>
          <ul class="workflowIconList">   
            <?php if( have_rows('about_workflow') ): ?>
              <?php while( have_rows('about_workflow') ): the_row(); ?>

                  <li class="aboutWorkflow">
                    <?php the_sub_field('workflow_icon'); ?>
                    <h5> <?php the_sub_field('workflow_name'); ?></h5>  
                  </li>

              <?php endwhile ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
      
    
  </section>
 
  <section id="portfolio" class="portfolio">

    <h1>My Work</h1>
    
    <div class="container wrapper">
       <?php $portfolioQuery = new WP_Query (array(
        'posts_per_page' => 4, 
        'post_type' => 'portfolio'
      )); ?>
      <?php if($portfolioQuery-> have_posts()):  ?>
        <?php while($portfolioQuery-> have_posts()): ?>
        <?php $portfolioQuery->the_post(); ?>
      
              <div class="portfolioContainer">
                <div class="portfolioTextContainer colorChange">
                <h3><?php the_title(); ?></h3>
                  <?php the_content(); ?>
                  <ul class="skillsContainer">
                    <?php while(has_sub_field('portfolio_work')): ?>
                      <li><?php the_sub_field('portfolio_item_image'); ?></li>
                     
                    <?php endwhile; ?> 
                  </ul>
                  <a href=" <?php the_field('project_url') ?>"><div class="viewButton">
                    <p>View Site</p>
                  </div></a>
                </div> 
                <div class="portfolioImageContainer colorChange" style="background-image: url(<?php echo portfolioPress_get_thumbnail_url($post); ?>)"> 
                </div>
              </div>
          <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
   
  </section>
  <section id="contact" class= "contact">
    <!-- contact me custom field -->
    <h1>Contact</h1>

    <div class="container wrapper">
            <div class="contactMeContainer">
        <?php if( have_rows('contact_me') ): ?>
          <?php while( have_rows('contact_me') ): the_row(); ?>

              <div class="contactMeItem">
                <?php the_sub_field('contact_icon'); ?>
                <h4> <?php the_sub_field('contact_header'); ?></h4>
                <p> <?php the_sub_field('contact_info'); ?> </p>   
              </div>

          <?php endwhile ?>
        <?php endif; ?>
            </div> <!-- contactMeContainer -->
      <div class="contactFormContainer">
        <?php
          
          if (get_field('contact_form')):
            echo do_shortcode(get_field('contact_form'));
          else:
            echo do_shortcode('[contact-form-7 id="4" title="Contact Me"]');
          endif; 
        ?>
      </div> <!-- contactFormContainer -->
    </div> <!-- container --> 
<?php get_footer(); ?>
  </section>
</div> <!-- /.main -->


