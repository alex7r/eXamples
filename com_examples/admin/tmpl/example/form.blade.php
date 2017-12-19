<?php
Joomla\CMS\HTML\HTMLHelper::_('behavior.core');
?>
<form method="<?= $method ?>" name="adminForm" id="adminForm" action="<?= Joomla\CMS\Router\Route::_('index.php') ?>">
    <input name="option" value="com_xexamples" type="hidden">
    <input name="task" value="" type="hidden">
    @yield('form')
</form>