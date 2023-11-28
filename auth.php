<?
// отключает проверку авторизации
define('NOT_CHECK_PERMISSIONS', true);

// подключение файлов ядра
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

global $USER;

// проверка защитного условия
if ($_GET['auth'] === 'Y')
{
    // авторизация под пользователем с админским правами
    $USER->Authorize(1);
   
    // удаление данного файла с сервера
    @unlink(__FILE__);
}

// редирект на главную страницу
LocalRedirect("/bitrix/admin");

// подключение файлов ядра
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php');