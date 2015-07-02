<?php

define('GENERATOR_THEME_DIR', plugin_dir_path(__FILE__));
define('GENERATOR_THEME_URL', plugin_dir_url(__FILE__));

require_once(GENERATOR_THEME_DIR."/lib/parser_generator_theme.php");

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
}

function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array(), '1');
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');

    
}

add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

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