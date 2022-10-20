<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$lang = in_array($lang, ['en', 'nl']) ? $lang : 'en';
header("Location: /" . $lang);