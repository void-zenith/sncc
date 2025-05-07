<?php
defined('ABSPATH') or die('No script kiddies please!!');

if (!class_exists('classThumbnail')) {

    class classThumbnail
    {
        function __construct()
        {
            $this->thumbnail_function();
        }

        function thumbnail_function()
        {
            /**
             * Thumbnail size function
             */
            function dat_thumbnail()
                                    {
                if ( has_post_thumbnail()) {
                                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
                                $url = $thumb['0'];
                                ?> <img loading="lazy" src="<?php echo $url; ?>" alt="<?php the_title() ?>"> <?php }
                                else  {
                                    $url = site_url();
                                    $links = $url.'/wp-content/uploads/2022/08/ATH_Logo_Black.jpg';
                                    ?>
<img loading="lazy" src="<?php echo $links; ?>" alt="<?php the_title() ?>">
<?php 
                                }

                                  
}

              
/**
 * Medium thumbail size function
 */
function dat_thumbnail_med()
{
   if ( has_post_thumbnail()) {
                                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
                                        $url = $thumb['0'];
                                        ?> <img loading="lazy" src="<?php echo $url; ?>" alt="<?php the_title() ?>"> <?php }
                                        else  {
                                            $url = site_url();
                                            $links = $url.'/wp-content/uploads/2022/08/ATH_Logo_Black.jpg';
                                            ?>
<img loading="lazy" src="<?php echo $links; ?>" alt="<?php the_title() ?>">
<?php 
                                        }

                                           
}
/**
 * Medium thumbail size function
 */
function dat_thumbnail_med_card()
{
   if ( has_post_thumbnail()) {
                                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
                                        $url = $thumb['0'];
                                        ?> <img loading="lazy" src="<?php echo $url; ?>" alt="<?php the_title() ?>"
    class="c-card__media-img"> <?php }
                                        else  {
                                            $url = site_url();
                                            $links = $url.'/wp-content/uploads/2022/08/ATH_Logo_Black.jpg';
                                            ?>
<img loading="lazy" src="<?php echo $links; ?>" alt="<?php the_title() ?>" class="c-card__media-img">
<?php 
                                        }

                                           
}
/**
 * big size thumbnail function
 */
function dat_thumbnail_big()
{
   if ( has_post_thumbnail()) {
                                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'big' );
                                        $url = $thumb['0'];
                                        ?> <img loading="lazy" src="<?php echo $url; ?>" alt="<?php the_title() ?>"> <?php }
                                        else  {
                                            $url = site_url();
                                            $links = $url.'/wp-content/uploads/2022/08/ATH_Logo_Black.jpg';
                                            ?>
<img loading="lazy" src="<?php echo $links; ?>" alt="<?php the_title() ?>">
<?php 
                                        }


}
        }
    }
    new classThumbnail();
}