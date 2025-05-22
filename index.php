<?php
if (!empty($_SERVER['QUERY_STRING'])) {
    header("Location: https://thinkingdutch.com/nl/pricing", true, 301);
    exit();
}

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$lang = in_array($lang, ['en', 'nl']) ? $lang : 'en';

header("Location: /" . $lang);

