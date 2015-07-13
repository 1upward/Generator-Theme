<?php

define('GENERATOR_THEME_DIR', plugin_dir_path(__FILE__));
define('GENERATOR_THEME_URL', plugin_dir_url(__FILE__));

require_once(GENERATOR_THEME_DIR."/lib/parser_generator_theme.php");
require_once(GENERATOR_THEME_DIR."/lib/gen_theme.php");

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_style( 'flipclock', get_template_directory_uri() . '/css/flipclock.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
}

function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1');    
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array(), '1');
    wp_enqueue_script( 'flipclock_js', get_template_directory_uri() . '/js/flipclock.js', array(), '1');
    wp_enqueue_script( 'reviews', get_template_directory_uri() . '/js/reviews.js', array(), '1');
    wp_localize_script( 'jquery', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        ));
}

add_action('wp_ajax_get_reviews', 'get_reviews_function');
add_action('wp_ajax_nopriv_get_reviews', 'get_reviews_function');

add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

register_nav_menus( array(
    'main-menu' => 'Меню в шапке'
) );

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="smoothScroll"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menuclass');

function get_reviews_function(){
    if($_POST['last']=='y'){
        $count = 0;
    }
    else{
        $count = $_POST['coun-rev']+1;
    }

    $parser = new Parser_generator_theme();
    $gen =new gen_theme();
    $res = $gen->get_reviews();

    echo $parser->parse(GENERATOR_THEME_DIR."/view/reviews/reviews_box_view.php",array('text' => $res[$count]->text_reviews,'fio' => $res[$count]->fio,'name' => $res[$count]->name,'link' => $res[$count]->link,'count-rev'=>$count), true);
    die();
}
/*----------ADMIN--------------*/


function gen_menu_page(){
    add_menu_page( 'Добавить работу', 'Добавить работу', 'administrator', 'gen_theme', 'gen_theme_admin_page' );
    add_menu_page( 'Добавить отзыв', 'Добавить отзыв', 'administrator', 'gen_reviews', 'gen_reviews_admin_page' );
    add_menu_page( 'Слайдер', 'Настройки слайдера', 'administrator', 'slides', 'genSlidesAdminPage' );
}
add_action('admin_menu', 'gen_menu_page');

function gen_reviews_admin_page(){
    $parser = new Parser_generator_theme();
    if(isset($_GET['action'])) {
        if ($_GET['action'] == 'add_reviews') {
            $parser->parse(GENERATOR_THEME_DIR . "/view/add_reviews_view.php", array(), true);
        }

        if ($_GET['action'] == 'del') {
            $gen =new gen_theme();
            $del = $gen->delete_reviews($_GET['id']);
            print_reviews();
        }
    }
    else{
        if (isset($_POST['reviews'])){
            $gen = new gen_theme();
            $gen->add_reviews($_POST);
        }

        echo print_reviews();
    }
}

function print_reviews(){
    $parser = new Parser_generator_theme();
    $gen =new gen_theme();
    $res = $gen->get_reviews();
   $data['reviews'] = "";
    foreach ($res as $v) {
        $data['reviews'] .= $parser->parse(GENERATOR_THEME_DIR."/view/reviews_box_view.php",array('text' => $v->text_reviews,'fio' => $v->fio,'name' => $v->name,'link' => $v->link,'id' => $v->id_reviews), false);
    }

    $parser->parse(GENERATOR_THEME_DIR."/view/reviews_view.php",$data, true);
}

function gen_theme_admin_page(){
    $parser = new Parser_generator_theme();

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }
    if(isset($_GET['action'])){
        if($_GET['action']=='add_work'){
            $parser->parse(GENERATOR_THEME_DIR."/view/add_work_view.php",array(), true);
        }
        if($_GET['action']=='del'){
            $gen =new gen_theme();
            $del = $gen->delete_work($_GET['id']);
            $parser->parse(GENERATOR_THEME_DIR."/view/work_view.php",array(), true);
            print_work();
        }
    }
    else{
        if (isset($_POST['attachment_url'])){
            $gen = new gen_theme();
            $gen->add_work($_POST);

        }
        $parser->parse(GENERATOR_THEME_DIR."/view/work_view.php",array(), true);
       echo print_work();

    }
}

function print_work(){
    $parser = new Parser_generator_theme();
    $gen =new gen_theme();
    $res = $gen->get_work();   
    foreach ($res as $v) {
        $parser->parse(GENERATOR_THEME_DIR."/view/work_box_view.php",array('images' => $v->images,'name' => $v->name,'link' => $v->link,'id' => $v->id_work), true);           
    }
}

function genSlidesAdminPage(){
    global $wpdb;
    $message = '';
    $parser = new Parser_generator_theme();

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    if(isset($_GET['delSlide'])){
        $wpdb->delete('head_slider',array("id" => $_GET['delSlide']));
        $message = "Фото успешно удалено!";
    }

    if(isset($_POST['attachment_url'])){
        $wpdb->insert('head_slider', array("img" => $_POST['attachment_url'],
            "title" => $_POST['title'],"descr" => $_POST['descr']));
        $message = "Слайд успешно добавлен!";
        echo mysql_error();
    }

    $generate = '';

    $slides = $wpdb->get_results("SELECT * FROM head_slider");
    foreach ($slides as $slide) {
        $generate .= "<tr>
                        <td style='padding-right: 10px'><img src='". $slide->img. "' alt='' style='width: 50px;'/></td>
                        <td style='padding-right: 10px'><p>".$slide->title."</p></td>
                        <td style='padding-right: 10px'><p>".$slide->descr."</p></td>
                        <td style='padding-right: 10px'><a href='/wp-admin/admin.php?page=slides&delSlide=$slide->id'>Удалить</a></td>
                      </tr>";
    }

    $parser->parse(GENERATOR_THEME_DIR."/view/admin/headSlider.php",array('slides'=>$generate,
        'message'=>$message), true);
}

function slidesShortcode(){
    global $wpdb;

    $generate = "<div class='carousel-inner'>";
    $indicators = "<ol class='carousel-indicators'>";
    $iterator = 0;

    $slides = $wpdb->get_results("SELECT * FROM head_slider");

    foreach ($slides as $key => $slide) {
        if($key==0){
            $indicators .= "<li data-target='#myCarousel' data-slide-to='".$iterator."' class='active'></li>";
            $generate.= "<div class='item active'>";
        }else{
            $indicators .= "<li data-target='#myCarousel' data-slide-to='".$iterator."' ></li>";
            $generate.= "<div class='item'>";
        }

        $generate.= "<img src='".$slide->img."' alt='Carousel Item Title'>
                        <div class='onSlideText'>
    							<h1>".$slide->title."</h1>
    				    		<p>".$slide->descr."</p>
    				    		<a href='#'>Узнать подробнее</a>
    				    	</div>
                    </div>";
        $iterator++;
    }
    $indicators .= "</ol>";
    $generate .= "</diV>";

    return "<div id='myCarousel' class='carousel slide' data-interval='500' data-ride='carousel'>".$indicators.$generate."</div>";
}
add_shortcode('headSlides', 'slidesShortcode');

// load script to admin
function admin_js() {
    $url = get_template_directory_uri()  . '/js/admin.js';
    echo "<script type='text/javascript' src='$url'></script>";
}
add_action('admin_head', 'admin_js');

/*------------END ADMIN--------------*/
function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
    ,'format' => ''
    ,'current' => max( 1, get_query_var('paged') )
    ,'total' => $wp_query->max_num_pages
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');


if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );


function blog_home(){
    $parser = new Parser_generator_theme();
    $args = array( 'numberposts' => 4,'category_name' => 'blog' );
    $cat = get_category_by_slug('blog');
    $data['link_blog_all'] = $cat_link = get_category_link($cat->cat_ID);
    $data['posts'] = "";
    $lastposts = get_posts( $args );
    foreach ($lastposts as $v){
        $data['posts'] .= $parser->parse(GENERATOR_THEME_DIR."/view/blog/blog_posts_view.php",array('title'=>$v->post_title,'link_post'=>$v->guid), false);
    }
    $parser->parse(GENERATOR_THEME_DIR."/view/blog/blog_view.php",$data, true);
    //prn($lastposts);
}

add_shortcode('blog', 'blog_home');

function news_home(){
    $parser = new Parser_generator_theme();
    $args = array( 'numberposts' => 3,'category_name' => 'news' );
    $lastposts = get_posts( $args );
    $n = 0;
    $data['news'] = "";
    foreach ($lastposts as $v){
       $data_post = date_smart($v->post_date);

        if ($n == 0){
            $size = array(347,284);
            $text = $v->post_content;
            $text = substr($text, 0, 300);
           $img = get_the_post_thumbnail($v->ID, $size );
           $data['first_news'] = $parser->parse(GENERATOR_THEME_DIR."/view/news/first_news_view.php",array('title'=>$v->post_title,'link_post'=>$v->guid,'content' => $text,'images' => $img,'data' => $data_post), false);
        }
        else{
            $text = $v->post_content;
            $text = substr($text, 0, 150);
            $size = array(165,130);
            $img = get_the_post_thumbnail($v->ID, $size );
            $data['news'] .= $parser->parse(GENERATOR_THEME_DIR."/view/news/other_news_view.php",array('title'=>$v->post_title,'link_post'=>$v->guid,'content' => $text,'images' => $img,'data' => $data_post), false);
        }
        $n++;
    }

  // prn($lastposts);
    $parser->parse(GENERATOR_THEME_DIR."/view/news/news_block_view.php",$data, true);
}
add_shortcode('news','news_home');

function work_home_short(){
    $parser = new Parser_generator_theme();
    $gen =new gen_theme();
    $res = $gen->get_work();
    foreach ($res as $v) {
        $parser->parse(GENERATOR_THEME_DIR."/view/works/work_view.php",array('images' => $v->images,'name' => $v->name,'link' => $v->link), true);
    }
}
add_shortcode('work','work_home_short');


function reviews_home_short(){
    $parser = new Parser_generator_theme();
    $gen =new gen_theme();
   // $res = $gen->get_reviews_one();
    $res = $gen->get_reviews();
    $kol = $gen->get_all_reviews();
    $ending = get_ending($kol);

 // prn($res);
    $parser->parse(GENERATOR_THEME_DIR."/view/reviews/reviews_block_view.php",array('text' => $res[0]->text_reviews,'fio' => $res[0]->fio,'name' => $res[0]->name,'link' => $res[0]->link,'kol_reviews' =>$kol,'ending' => $ending, 'count-rev'=>0), true);

}
add_shortcode('reviews','reviews_home_short');



function date_smart($date_input, $time=false) {
    date_default_timezone_set( 'Europe/Moscow' );
    $monthes = array(
        '', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
        'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
    );
    $date = strtotime($date_input);

//Время
    if($time) $time = ' G:i';
    else $time = '';

/*//Сегодня, вчера, завтра
    if(date('Y') == date('Y',$date)) {
        if(date('z') == date('z', $date)) {
            $result_date = date('Сегодня'.$time, $date);
        } elseif(date('z') == date('z',mktime(0,0,0,date('n',$date),date('j',$date)+1,date('Y',$date)))) {
            $result_date = date('Вчера'.$time, $date);
        } elseif(date('z') == date('z',mktime(0,0,0,date('n',$date),date('j',$date)-1,date('Y',$date)))) {
            $result_date = date('Завтра'.$time, $date);
        }

        if(isset($result_date)) return $result_date;
    }*/

//Месяца
    $month = $monthes[date('n',$date)];

//Года
    if(date('Y') != date('Y', $date)) $year = 'Y г.';
    else $year = '';

    $result_date = date('j '.$month.' '.$year.$time, $date);
    return $result_date;
}


function get_ending($count){

        $count = strval($count);
        $last = $count{ strlen($count) - 1 } ;
        if ($last == 1){
            $res = 'отзыв';
        }
        if ($last == 2 || $last == 3 || $last == 4){
            $res = 'отзыва';
        }
        if ($last >= 5){
            $res = 'отзывов';
        }
return $res;
}

add_action( 'admin_menu', 'xelly_remove_menu_items' );

function xelly_remove_menu_items() {
    // тут мы укахываем ярлык пункты который удаляем.
    remove_menu_page( 'themes.php' );                 // Внешний вид // Удаляем пункт "Комментарии"
}