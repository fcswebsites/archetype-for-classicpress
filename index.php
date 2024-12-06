<?php get_header(); ?>
<div class="container grid blogListing">    
    
    <div class="nine columns">
        <h1>News &amp; Blog</h1>
        
        <?php if (have_posts()) { 
            while (have_posts()) { 
                the_post(); ?> 
             
            <div class="post clear" id="post-<?php the_ID(); ?>">  
		        <?php if ( has_post_thumbnail()) { ?>
		        <div class="newsThumb">
			        <a href="<?php the_permalink(); ?>">
				        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>"> 
			        </a>
		        </div> 
                <div class="newsText">  
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
                    <?php the_excerpt(); ?>  
                    <p class="postMetadata clear">
                        <span class="blogcat">Posted in <?php the_category(', ') ?></span>
                        <span class="blogdate"><?php the_time('F jS, Y') ?></span>      
                    </p>
                </div> 
		        <?php } else { ?>
     
                <div class="newsText wide">  
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
                    <?php the_excerpt(); ?>  
                    <p class="postmetadata clear">
                        <span class="blogcat">Posted in <?php the_category(', ') ?></span>
                        <span class="blogdate"><?php the_time('F jS, Y') ?></span>      
                    </p>
                </div>  
                <?php } ?>
            </div>  
            
            <?php } ?>
              
            <div class="navigation">  
                <div class="navlink"><?php next_posts_link('« Previous Entries') ?></div>  
                <div class="navlink"><?php previous_posts_link('Next Entries »') ?></div>  
            </div>  
          
        <?php } else { ?>  
        
            <h2 class="center">Not Found</h2>  
            
            <p class="center">Sorry, but you are looking for something that isn't here.</p>  
            
            <?php get_search_form(); ?>  
            
        <?php } ?>
    </div>
    
    <?php get_sidebar(); ?> 
    
</div>  
<?php get_footer(); ?> 