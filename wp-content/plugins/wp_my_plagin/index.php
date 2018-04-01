<?php
/*
Plugin Name: myFirstPlagin Название плагина
Plugin URI: http://страница_с_описанием_плагина_и_его_обновлений
Description: Краткое описание плагина.
Version: Номер версии плагина, например: 1.0
Author: Имя автора плагина
Author URI: http://страница_автора_плагина
*/

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method()
{
   // echo 'addScript <br>';
   // wp_enqueue_script( 'newscript', get_template_directory_uri() . '/veriff-js-sdk-master/dist/veriff.min.js');
}



add_shortcode( 'misha', 'true_misha_func' );
function true_misha_func($atts)
{
    include_once 'newhtml.html';
    
    return '<button style="background-color:green;" onClick="openVeriffMe();">Start verification</button>';
}

function pluginprefix_setup_post_types()
{
    //register_post_type('book',['public' => true]);
}
add_action('init','pluginprefix_setup_post_types');

function pluginprefix_install()
{
   // pluginprefix_setup_post_types();
    //flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'pluginprefix_install');

function pluginprefix_deactivation()
{
   // flush_rewrite_rules();
}

register_deactivation_hook(__FILE__,'pluginprefix_deactivation');

function editor_admin_menu()
{
    add_menu_page("Отзывы", "Отзывы", 8, 'myMenu', 'myOnClickMenu');
}

add_action('admin_menu','editor_admin_menu');


add_action('admin_menu','setMyScript');
wp_enqueue_style ('theme-style', plugins_url('/veriff-js-sdk-master/dist/style.css',__FILE__));

function setMyScript()
{
   //wp_register_script('my_script', plugins_url('/my_script.js',__FILE__), array('jquery') );
   //wp_enqueue_script('my_script');

   //wp_register_script('require', plugins_url('/require.js',__FILE__), array('jquery') );
   //wp_enqueue_script('require');
 
   //wp_register_script('master', plugins_url('/veriff-js-sdk-master/dist/veriff.min.js',__FILE__), array('jquery') );
   //wp_enqueue_script('master');
   
   //wp_register_script('veriff_demo', plugins_url('/node_modules/veriff_demo.js',__FILE__), array('jquery') );
   //wp_enqueue_script('veriff_demo');
    
}
/**/

function myOnClickMenu()
{
    
    include 'newhtml.html';
    
    
    ?>

<!--

<div id="veriff-mount">
    <form class="veriff-container" name="veriff-form">
        <label class="veriff-label" id="veriff-label-given-name" htmlfor="givenName">Given name</label>
        <input class="veriff-text" id="veriff-given-name" name="givenName" required="true" type="text">
        <label class="veriff-label" id="veriff-label-last-name" htmlfor="lastName">Last name</label>
        <input class="veriff-text" id="veriff-last-name" name="lastName" required="true" type="text">
        <input value="Start verification" class="veriff-submit" id="veriff-submit-btn" name="submitBtn" required="true" type="submit">
    </form>
</div>

-->
	
<?php
    /**/

   // plugin_dir_path( __FILE__ ) . '/newhtml.html
   $data= "";
   echo login('https://api.veriff.me/v1/',$data);
}

  






wp_enqueue_script('newscript', '/wp-content/plugins/wp_my_plagin/my_script.js');


/*======================================*/

//include_once( plugin_dir_path( __FILE__ ) . '/newhtml.html');






/*==================================================*/

//Upload a blank cookie.txt to the same directory as this file with a CHMOD/Permission to 777
function login($url,$data){
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
    curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);
    ob_start();
    return curl_exec ($login);
    ob_end_clean();
    curl_close ($login);
    unset($login);    
}                  
 
function grab_page($site){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
}
 
function post_data($site,$data){
    $datapost = curl_init();
        $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
        curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, TRUE);
        curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
        curl_setopt($datapost, CURLOPT_COOKIEFILE, "cookie.txt");
    ob_start();
    return curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost);    
}
 


