<?php get_header();?>
<div class="content pull-left">
        	
    
<?php if (have_posts()):?>
<?php while(have_posts()): the_post();?>
        	<div class="post clearfix">
                    <h1><a href="<?php the_permalink();?>"><?php the_title();?></a> <span><i class="icon-comment"></i> <?php comments_popup_link('0', '1', '%');?></span></h1>
        		<div class="image">
	        		<img src="http://blog-cook.local/wp-content/themes/mytemp/images/thumb.png" class="img-polaroid" alt="" />
				</div>
        		<div class="text">
                            <?php the_excerpt()?>
        			
        			<a href="<?php the_permalink();?>" class="btn btn-success">Читать полностью</a>
        		</div>
        	</div>
        	
        	<hr />
<?php endwhile;?>
                <div class='pagenavi'><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }?></div>
<?php else:?>
<?php endif;?>

        	
        	<div class="pagination">
		        <ul>
			        <li><a href="#">Назад</a></li>
			        <li><a href="#">1</a></li>
			        <li><a href="#">2</a></li>
			        <li><a href="#">3</a></li>
			        <li><a href="#">4</a></li>
			        <li><a href="#">Вперед</a></li>
		        </ul>
	        </div>
        	
        </div>
<?php get_sidebar();?>
<?php get_footer();?>       

        
        