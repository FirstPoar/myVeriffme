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
    echo 'addScript <br>';
    wp_enqueue_script( 'newscript', get_template_directory_uri() . '/veriff-js-sdk-master/dist/veriff.min.js');
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

function myOnClickMenu()
{
    $data = "firstName=Topor&lastName=Topor&idNumber=12345678";
    $data= "https://magic.veriff.me/v/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXNzaW9uX2lkIjoiNGUwMWQ0Y2MtZGI0Yi00MjhkLTgyYjQtZTViZTIxYjY4NGQyIiwiaWF0IjoxNTIyNDgyOTk2LCJleHAiOjE1MjMwODc3OTZ9.O5tTRuWiToZ0eEU9xNhINwMgJ0VVWBi0nX6ho1zOKXk/intro";
    echo login('https://api.veriff.me/v1/',$data);

    
    /** /
    // Получаю адрес текущей страницы
$current_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 
// В перемненную сохраняю HTML-код формы авторизации. Переменную можно вывести тогда, когда потребуется отобразить форму авторизации.
$login_form = "
<form action=\"".wp_login_url($current_url)."\" id=\"loginForm\" method=\"post\">
     <div class=\"field\">
          <label for=\"login\">Имя пользователя:</label>
     </div>
     <div class=\"input\">
          <input type=\"text\" name=\"log\" value=\"\"  id=\"login\">
     </div>
     <div class=\"field\">
          <label for=\"pass\">Пароль:</label>
     </div>
     <div class=\"input\">
          <input type=\"password\" name=\"pwd\" value=\"\" id=\"pass\">
     </div>
     <div class=\"rememberme\">
          <input name=\"rememberme\" type=\"checkbox\" id=\"rememberme\" value=\"forever\"> <label for=\"rememberme\">Запомнить меня</label>
     </div>
     <div class=\"submit\">
          <input name=\"submit\" type=\"submit\" value=\"Войти\">
     </div>
     <input type=\"hidden\" value=\"$product_id\" name=\"product_id\">
</form>
";

echo $login_form;
/** /
   
    if ($curl = curl_init()) 
    {
    curl_setopt($curl, CURLOPT_URL, 'http://mysite.com/get_users.php?name=Jim&age=20');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    // Обработка результатов, полученных от сервера в переменную $result
    }

    $data = "firstName=Tundmatu&lastName=Toomas&idNumber=48103122716";
    
   echo login('https://api.veriff.me/v1/',$data);

    
    $url = 'url_to_post';
    $data = array("first_name" => "First name",
        "last_name" => "last name",
        "email"=>"email@gmail.com",
        "addresses" => array ("address1" => "some address" ,
            "city" => "city",
            "country" => "CA", 
            "first_name" =>  "Mother",
            "last_name" =>  "Lastnameson",
            "phone" => "555-1212", 
            "province" => "ON", 
            "zip" => "123 ABC" ) 
        );
    
    
    
    $data_string = json_encode($data);
    $ch=curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, array("customer"=>$data_string));
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
               array('Content-Type:application/json',
                      'Content-Length: ' . strlen($data_string))
               );

    $result = curl_exec($ch);
    curl_close($ch);
    /**/
    
    ?>
<!--
<div class="hren" style="position:relative; top:200px; left: 200px; width: 200px;" >
        <div style="display: inline-block; width: 50px;"><label>логин</label></div> <div style="display: inline-block; width: calc(100% - 100px);"><input type="input"></div> <br>
        <div style="display: inline-block; width: 50px;"><label>пароль</label></div> <div style="display: inline-block; width: 100px;"><input type="input"></div> <br>
        <div style="display: inline-block; width: 50px;"><label>apikey</label></div> <div style="display: inline-block; width: 100px;"><input type="input"></div> <br>
        <div class="textright" style="width: calc(100% + 35px);"> <button onclick="topor();" id="hren" >Submit</button> </div>
            
    </div> -->

<!--
<div id='veriff-root'>
    
    <div class="hren" style="position:relative; top:200px; left: 200px; width: 200px;" >
        <div style="display: inline-block; width: 50px;"><label>логин</label></div> <div style="display: inline-block; width: calc(100% - 100px);"><input type="input"></div> <br>
        <div style="display: inline-block; width: 50px;"><label>пароль</label></div> <div style="display: inline-block; width: 100px;"><input type="input"></div> <br>
        <div style="display: inline-block; width: 50px;"><label>apikey</label></div> <div style="display: inline-block; width: 100px;"><input type="input"></div> <br>
        <div class="textright" style="width: calc(100% + 35px);"> <button onclick="topor();" id="hren" >Submit</button> </div>
            
    </div> 

    
</div>
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="veriff-mount">

    </div>
      <script src="/wp-content/plugins/wp_my_plagin/veriff-js-sdk-master/dist/veriff.dev.js"></script>
    <script type="text/javascript">
      const veriff = Veriff('8e4f7cd8-7a19-4d7d-971f-a076407ee03c',{ features: ['selfid', 'video_call']});
      veriff.mount('veriff-mount')
      console.log(veriff.id);
    </script>
  </body>
</html>
    <?php
}



add_action('admin_menu','setMyScript');

function setMyScript()
{
    wp_register_script('my_script', plugins_url('/my_script.js',__FILE__), array('jquery') );
    wp_enqueue_script('my_script');

   
    wp_register_script('master', plugins_url('/veriff-js-sdk-master/dist/veriff.min.js',__FILE__), array('jquery') );
    wp_enqueue_script('master');
   
   // wp_register_script('veriff_demo', plugins_url('/veriff_demo.js',__FILE__), array('jquery') );
  //  wp_enqueue_script('veriff_demo');
    
}


wp_enqueue_style ('theme-style', plugins_url('/veriff-js-sdk-master/dist/style.css',__FILE__));
/** /

$curl = curl_init();
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                                                                  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data))                                                                       
);
curl_setopt($curl, CURLOPT_URL, 'http://webservice.local/');  // Set the url path we want to call
$result = curl_exec($curl);

//see the results
$json=json_decode($result,true);
curl_close($curl);
print_r($json);


/**
function setMyHren()
{
    
     $url = 'url_to_post';
    $data = array("first_name" => "First name","last_name" => "last name","email"=>"email@gmail.com","addresses" => array ("address1" => "some address" ,"city" => "city","country" => "CA", "first_name" =>  "Mother","last_name" =>  "Lastnameson","phone" => "555-1212", "province" => "ON", "zip" => "123 ABC" ) );
    $data_string = json_encode($data);
    $ch=curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, array("customer"=>$data_string));
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
               array('Content-Type:application/json',
                      'Content-Length: ' . strlen($data_string))
               );

    $result = curl_exec($ch);
    curl_close($ch);
    
    
    
    
    
    $ch = curl_init( $url );
    # Setup request to send json via POST.
    $payload = json_encode( array( "customer"=> $data ) );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    # Return response instead of printing.
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    # Send request.
    $result = curl_exec($ch);
    curl_close($ch);
    # Print response.
    echo "<pre>$result</pre>";
}



/**/



 
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
 


