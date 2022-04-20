<?php
//Передаём переменным данные форм
//Присваиваем каждой форме переменную
$name=$_POST['contact_name'];
$category=$_POST['contact_category'];
$link=$_POST['contact_sse'];
$rec=$_POST['contact_rec'];


// Подключаемся к БД
$host = 'localhost';
$user = 'shur';
$password = 'edutpi';
$database = 'niga';


mysql_connect($host, $user, $password);
mysql_select_db($database);
mysql_set_charset("utf8");
mysql_query("CREATE TABLE IF NOT EXISTS niga (`id` int(10) unsigned NOT NULL auto_increment, `date_created` datetime NOT NULL, `name` text, `category` text,
`link` text,`rec` text,  PRIMARY KEY  (`id`) )
ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6849") or die(mysql_error());


//Записываем в БД данные форм
$niga="INSERT INTO `niga` (`id`, `date_created`, `name`, `category`, `link`, `rec`)
VALUES ('', NOW(), '$name', '$category', '$link', '$rec')";
$result = mysql_query($niga);
if (!$result) {
$feedback = 'ОШИБКА - Ошибка базы данных';
$feedback = mysql_error();
return $feedback;
}
echo '<META HTTP-EQUIV=Refresh Content="1;URL=index.html">'
?>
