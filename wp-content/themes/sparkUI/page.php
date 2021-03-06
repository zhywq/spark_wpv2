<?php
/* header&footer为导航和下脚
 * index.php为所有页面通用模板  目前基本没用了,除非是没有设置的默认页面
 * front-page.php为仅仅首页的默认模板  设置了首页以后才有用
 * sidebar.php为右侧页面的默认模板    其中包含各个页面边栏不同的分类
 * page.php也是和sidebar一样是默认模板, 包含各个页面内容不同的分类
 *
 */

global $wpdb;
$page_qa_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'qa'");
$page_project_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'project'");
$page_ask_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'ask'");
$page_test_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'test'");
?>

<?php get_header(); ?>
<div class="container" style="margin-top: 10px">
    <div class="row" style="width: 100%">

            <!--引入动态模板-->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                <?php
                if(is_home() || is_front_page()) { //首页显示“首页侧栏”
                    echo "首页内容";
                }
//                elseif ( is_page('wiki') ) {//显示wiki侧栏”
//                    echo '<div class="col-md-9 col-sm-9 col-xs-9" id="col9">';
//                    echo "wiki内容";
//                    echo '</div>';

//                }
                elseif ( is_page($page_qa_id) ) {//显示问答侧栏 参数为pageID 如何自动获取??
                    require "template/qa/QA_content.php";
                    //require "test.php";
                    //require "template/qa/QA-content-test.php";
                }

                elseif (is_page($page_ask_id)){
                    require "template/qa/QA_ask.php";
                }
                elseif (is_page($page_project_id)){
                    echo '<div class="col-md-9 col-sm-9 col-xs-9" id="col9">';
                    echo "项目内容";
                    echo '</div>';
                }

                elseif (is_page($page_test_id)){
                    require "template/qa/test.php";
                }
                else{
                    the_content();
                }
                endwhile;
                ?>
            <?php else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
            <?php get_sidebar();?>
            </div>
</div>
<?php get_footer(); ?>
