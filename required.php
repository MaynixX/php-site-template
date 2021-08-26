<?
// Внедрение конфигурации
require "configuration/config.php";

// Внедрение функций
require "configuration/functions.php";

// Подключение всех классов
$classes_dir = "configuration/classes";
$classes_scandir = scandir($classes_dir);
unset($classes_scandir[0], $classes_scandir[1]);
foreach ($classes_scandir as $class) {
	require "$classes_dir/$class";
}