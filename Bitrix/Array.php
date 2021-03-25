<!-- Вывод масива, только для админа -->
<?
global $USER;
if($USER -> IsAdmin()){
    echo('<pre>');
    print_r($yourArray);
}
?>
<!-- Вывод масива, только для админа -->