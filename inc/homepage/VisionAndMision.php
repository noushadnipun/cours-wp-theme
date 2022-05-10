<!-- Vision And Mision Area Start Here -->
<?php 
function getVmPage($pageId){
    $id = get_post($pageId);
    //$content = $post_id_5369->post_content;
    //$content = apply_filters('the_content', $content);
    //$content = str_replace(']]>', ']]>', $content);
    //echo $content;
    return $id;
}
$visionPage = getVmPage($options['vision-page']);
$missionPage = getVmPage($options['mission-page']);
?>

<div class="vision-mision-area news-event-area bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news-inner-area">
                        <h2 class="title-default-left"><?php echo $visionPage->post_title;?></h2>
                            <p><?php echo $visionPage->post_excerpt;?>
                        
                            <a href="<?php echo $visionPage->guid;?>" class="">...read more</a> </p>
                        
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news-inner-area">
                        <h2 class="title-default-left"><?php echo $missionPage->post_title;?></h2>
                            <p><?php echo $missionPage->post_excerpt; ?> 
                       
                            <a href="<?php echo $missionPage->guid;?>" class="">...read more</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Vision And Mision Area End Here -->