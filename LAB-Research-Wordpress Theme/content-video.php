<h2><?php the_title(); ?></h2>
<p><?php the_author(); ?> | <?php the_date(); ?></p>
<p class="video_format"><?php
$content = trim( get_the_content( ) );
echo the_featured_video( $content );
?></p>