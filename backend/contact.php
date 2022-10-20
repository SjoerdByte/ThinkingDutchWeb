<?php
session_start();

header('Location: ' . $_SERVER['HTTP_REFERER'] .'?status=success');