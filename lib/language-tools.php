<?php

require_once('lib/streams.php');
require_once('lib/gettext.php');

if (@$_GET['locale']) {
    $language = $_GET['locale'];
} else {
    $language = 'en_US';
}

$lang_file = new FileReader('lang/'.$language.'.mo');
$lang_fetch = new gettext_reader($lang_file);

function __($text) {
    global $lang_fetch;
    return $lang_fetch->translate($text);
}

?>
