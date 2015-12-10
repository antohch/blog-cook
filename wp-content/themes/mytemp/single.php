<?php get_header();?>
        <div class="content pull-left">
        	
        	<ul class="breadcrumb">
		        <li><a href="#">Главная</a> <span class="divider">/</span></li>
		        <li><a href="#">Спецэффекты</a> <span class="divider">/</span></li>
		        <li class="active">Заголовок статьи</li>
	        </ul>
        	
                <?php if (have_posts()):?>
                <?php while(have_posts()): the_post();?>
        	<div class="post">
        		<h1><?php the_title();?></h1>
        		<div class="text">
                    <?php the_content();?>
        			
        			<span class="label label-warning">Метки статьи</span>
        			<div class="meta"><i class="icon-tags"></i> 
                    <?php
                        $posttags = get_the_tags();
                        if ($posttags){
                            foreach($posttags as $tag){
                                $tag_links[] = '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
                            }
                            echo join(',', $tag_links);
                        }
                    ?>
                    
                    </div>
        			
        		</div>
        		
        		<hr />
        		

        		
                <?php comments_template();?>
        		

        		
        	</div>
        	<?php endwhile;?>
            <?php else:?>
            <?php endif;?>
        	<hr />
        	
        </div>
        
<?php get_sidebar();?>
<?php get_footer(); ?> 