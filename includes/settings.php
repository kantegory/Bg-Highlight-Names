<?php
/******************************************************************************************
	Страница настроек плагина
	
*******************************************************************************************/
function bg_hlnames_options_page() {
	add_option('bg_hlnames_datebase', "");
	add_option('bg_hlnames_maxtime', 60);
?>
<div class="wrap">
<h2>Настройки плагина &#171;Подсветка имён&#187;</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">

<tr valign="top">
<th scope="row">XML-файл имён</th>
<td><input type="text" name="bg_hlnames_datebase" value="<?php echo get_option('bg_hlnames_datebase'); ?>" /><br>
<i>(Укажите локальный URL XML-файла, содержащего имена для подсветки в тексте статей.<br>Оставьте поле пустым, чтобы использовать XML-файл по умолчанию.)</i></td>
</tr>
 
<tr valign="top">
<th scope="row">Максимальное время работы плагина</th>
<td><input type="number" name="bg_hlnames_maxtime" value="<?php echo get_option('bg_hlnames_maxtime'); ?>" /> сек.</td>
</tr>
 
</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="bg_hlnames_datebase, bg_hlnames_maxtime" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
<p class="help">
Скачать файл схемы XML-файла: <a href="<?php echo plugins_url( 'schema.xml', dirname(__FILE__) ); ?>">schema.xml</a><br>
О создании XML-файла имён читайте <a href="<?php echo plugins_url( 'readme.txt', dirname(__FILE__) ); ?>">readme.txt</a><br>
Создание и редактирование XML-файла в Excel описано в <a href="https://bogaiskov.ru/xml-excel/">этой статье</a>.
</p>


</form>
</div>
<?php

}
