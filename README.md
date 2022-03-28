# wordpress theme resume

Hi guys this is my resume wordpress template you can use for your resume
Part 1-2

change index.html to index.php

Add style.css  in parent  file 

 Create a screenshot.png for image at theme

Create a description in a main file css (copy from other theme ):

/*
Theme Name: پیشرو
Theme URI: https://websoft3.com/
Author: دانشجویان دوره
Author URI: https://websoft3.com/
Description: قالب طراحی شده در دوره جامع آموزش طراحی قاالب وردپرس در سایت وبسافت3
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks, accessibility-ready
Version: 1.0
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: وبسافت3
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

Make a functions.php file for command wordpress

Part 3

Add and include file css and js  for wordpress to read your theme

https://developer.wordpress.org/themes/basics/including-css-javascript/ 





<?php

function add_theme_scripts(){

    // اضافه کردن فایل های css

    wp_enqueue_style('all' , get_template_directory_uri() . '/css/all.css' , array() , false , 'all');

    wp_enqueue_style('owl.carousel' , get_template_directory_uri() . '/css/owl.carousel.min.css' , array() , false , 'all');

    wp_enqueue_style('owl.theme' , get_template_directory_uri() . '/css/owl.theme.default.min.css' , array() , false , 'all');

    wp_enqueue_style('style' , get_stylesheet_uri() , array() , false , 'all');

 

    //اضافه کردن فایل جاوااسکریپت

    wp_enqueue_script('jq' , get_template_directory_uri() . '/js/jquery-3.5.1.min.js' , array() , false , true);

    wp_enqueue_script('owl.carousel.js' , get_template_directory_uri() . '/js/owl.carousel.min.js' , array('jquery') , false , true);

    wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js' , array('jquery') , false , true);

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );




Add  function header and footer in the index.php for lunch theme :

 <?php wp_head(); ?>

<?php wp_footer(); ?>


Get image in the index.php :

 <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/majed-2.png' ?>" alt="">

Part 4

Dynamic lang in the main index.php (with chane by setting wordpress ):

<html <?php language_attributes(); ?> >

Dynamic Meta Charset :

<meta charset="<?php bloginfo('charset'); ?>">

Dynamic Title header :

function pishro_setup_theme(){

    add_theme_support('title-tag');

}

add_action('after_setup_theme','pishro_setup_theme');

// and we must to remove title in the index.php

Add Link feed comment and post n the header for good SEO :

function pishro_setup_theme(){
  // for dynamic title
    add_theme_support('title-tag');

  // add feed comment
    add_theme_support('automatic-feed-links');

}

add_action('after_setup_theme','pishro_setup_theme');

Cut header and footer from index.php and make a new file  : header.php and footer.php 

 get data from index.php with :

<?php get_header(); ?>

<?php get_footer(); ?>

// add this function  replace a header in the index.php

کد های هدر و فوتر را از فایل اصلی جدا میکنیم و به صورت جدا در هر کدام ذخیره میکنیم 

Part 5

Register Menus 

 Dynamic Menus  (active menus in ) :

https://developer.wordpress.org/themes/functionality/navigation-menus/ 



Add this code  :

function farsdev_setup_theme(){

    // dynamic title tab :

    add_theme_support('title-tag');

    // add comment and feed blog

    add_theme_support('automatic-feed-links');

 

    // dynamic menus

    register_nav_menus(

        array(

            // if we want create very place for menus:

          'main-menu' => __( 'place main menu ' ),

          'top-menu' => __( 'place top menu' )

         )

       );

}

add_action('after_setup_theme','farsdev_setup_theme');


View in the panel :



Display Menus 

<header id="header">

    <nav class="nav-menu">

      <!-- ما کل منو را حذف کردیم و این کد را گذاشتیم و ایدی منو را قرار دادیم  -->

    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

    </nav>

  </header>



Link additional manual menu :

https://developer.wordpress.org/reference/functions/wp_nav_menu/ 

For example :

We remove class menu-majed-2-container  in html file 



Action :



<header id="header">

    <nav class="nav-menu">

      <!-- ما کل یو ال  را حذف کردیم و این کد را گذاشتیم و ایدی منو را قرار دادیم  -->

    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' =>'' ) ); ?>

    <!-- 'container => '<span></span>'

    می توانیم هرچیبزی بزاریم و بر اساس ان لینک میتوانیم خیلی چیز ها را مشخص کنیم و تغییر دهیم  -->

    </nav>



به همین طریق بالا میتوانیم منو های زیادی را ایجاد کنیم در واقع در داخل فایل function.php منو را ایجاد میکنیم و در فایل html خود مکان مورد نظر را تایین میکنم و در پل میتوانیم ان ها مدیریت کنیم 



Part 6-7

Blog Dynamic fro section post (basic loop)

 در این بخش قصد داریم یک حلقه ساده  برای نمایش نوشته ها ایجاد کنیم و در این بخش امکان فیلتر وجود ندارد 



https://developer.wordpress.org/themes/basics/the-loop/

In the Panel : 



2. in here we need example code 

// این حلقه یک حلقه ساده از نشان  دادن پست ها هست  هیچ فیلتری ندارد 
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
        //  در اینجا تمپلیت بلاگ خود را قرار میدهیم 

    endwhile; 
endif; 
?>



3. we need function for display post content : 

For Display data from post section we must put this data from : 

next_post_link() – a link to the post published chronologically after the current post

previous_post_link() – a link to the post published chronologically before the current post

the_category() – the category or categories associated with the post or page being viewed

the_author() – the author of the post or page

the_content() – the main content for a post or page

the_excerpt() – the first 55 words of a post’s main content followed by an ellipsis (…) or read more link that goes to the full post. You may also use the “Excerpt” field of a post to customize the length of a particular excerpt.

the_ID() – the ID for the post or page

the_meta() – the custom fields associated with the post or page

the_shortlink() – a link to the page or post using the url of the site and the ID of the post or page

the_tags() – the tag or tags associated with the post

the_title() – the title of the post or page

the_time() – the time or date for the post or page. This can be customized using standard php date function formatting.

4. here is code  : 

<?php 
get_header();
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <p><?php the_title(); ?></p>
        <p><?php the_category(); ?></p>
        <?php
    endwhile; 
endif; 
?>

5. view : 



we can add condition for run this data for which page : 



is_home() – Returns true if the current page is the homepage

is_admin() – Returns true if inside Administration Screen, false otherwise

is_single() – Returns true if the page is currently displaying a single post

is_page() – Returns true if the page is currently displaying a single page

is_page_template() – Can be used to determine if a page is using a specific template, for example: is_page_template('about-page.php')

is_category() – Returns true if page or post has the specified category, for example: is_category('news')

is_tag() – Returns true if a page or post has the specified tag

is_author() – Returns true if inside author’s archive page

is_search() – Returns true if the current page is a search results page

is_404() – Returns true if the current page does not exist

has_excerpt() – Returns true if the post or page has an excerpt

for example : 

?php 
if(is_home(  )){  // بهش میگیم اگر داخل صفحه خانه بود اجرا کن اگر نبود نه همینطور میتوانیم از شرط های بالا استفاده کنیم 

get_header();
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <p><?php the_title(); ?></p>
        <p><?php the_category(); ?></p>
        <?php
    endwhile; 
endif; 
}
?>



Post Dynamic (Full)

در این قسمت ما میتوانیم فیلتر بندی کنیم و فقط هم پست هارو از دسته بندی نوشته ها دریافت نکنیم میتوانیم از جایی دیگر مثل رسانه یا صفحه ها اقدام کنیم اما الان میخواهیم فقط برای نوشته ها اقدام کنیم 



by use under class we can filter in post :

https://developer.wordpress.org/reference/classes/wp_query/

 

بر اساس لینک بالا مقداری ک مد نظر ما هست رو میتوانی در ارایه قرار دهیم و فیلتر کنیم 

<?php 
// یک ارایه ساختیم و فیلنر هایی که نیاز داریم را درون ان میریزیم  
$array = array(
    
    // importnat 
    // 'author' => 123, //  نویسنده ای  که ایدیش 123 باشد 
    // 'author_name' => 'rami',
    // 'author__in' => array( 2, 6 ), // نویسنده هایی که فقط این ایدی را دارند نمایش داده شود 

    'category_name' => 'wordpress',امکشون  // مطالب که ن این باشد 


); 

$query =new WP_Query($array); // با این کلاس میتوانیم فلیتر اعمال کنیم 

if($query -> have_posts(  )){
    while($query -> have_posts(  )) : $query -> the_post(  );?>
    <p><?php  the_title( ); ?></p>
    <?php
    endwhile;
}
wp_reset_postdata(  );
?>
