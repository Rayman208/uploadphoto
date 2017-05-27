<?php



$time_stamp =time();
$name_parts = explode('.', $_FILES['picture']['name']);
$name = md5($name_parts[0]);
$ext=$name_parts[1];
$name = $time_stamp.$name.'.'.$ext;

$tmp_name = $_FILES['picture']['tmp_name'];
$path = 'img/';

$final_file_name =$path.$name;

if(copy($tmp_name,$final_file_name))
{
    $db = mysql_connect("localhost","root","");
    mysql_select_db("gilrs",$db);
    mysql_set_charset('utf-8',$db);

    echo "успешно загружено".'<br/>';


    $result = mysql_query("INSERT INTO `photo`(`name`) VALUES ('{$final_file_name}')");
  
}
else
{
    echo "проблема загрузки".'<br/>';
}

echo $_FILES['picture']['size'].'<br/>';
echo $_FILES['picture']['type'].'<br/>';
echo $_FILES['picture']['name'].'<br/>';

echo $_FILES['picture']['tmp_name'].'<br/>';
?>
