<!-- Вывод масива, только для админа -->
<?
global $USER;
if($USER -> IsAdmin()){
    echo('<pre>');
    print_r($yourArray);
}
?>
<!-- Вывод масива, только для админа -->

<!-- Получение пользовательских свойств раздела -->
<?$fSections = CIBlockSection::GetList(
    false,
    Array("IBLOCK_ID" => /*Тут id инфоблока*/ , "ID" => /*Тут id раздела*/ , "ACTIVE"=>"Y", "GLOBAL_ACTIVE"=>"Y", "SECTION_ACTIVE" => "Y"),
    false,
    Array("Здесь название св-ва"),
    false
);    
    $flSections = $fSections->Fetch();
    $links =  $flSections["Здесь название св-ва"];
    echo $links;
?>
<!-- Получение пользовательских свойств раздела --> <!---->

