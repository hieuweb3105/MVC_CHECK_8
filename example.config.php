<?php

//  [*] DEFINE
define('DOMAIN',$_SERVER['HTTP_HOST']);
define('URL',(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https'.'://'.$_SERVER['HTTP_HOST'].'/' : 'http'.'://'.$_SERVER['HTTP_HOST'].'/');

//  [*] URL
const URL_ADMIN = URL . 'admin/';
const URL_STORAGE = URL . "assets/file/";

//  [*] WEB CONTEXT
const WEB_NAME = '';
const WEB_LOGO = URL_STORAGE . 'system/logo.png';
const WEB_FAVICON = URL_STORAGE . 'system/favicon.png';
const WEB_ADDRESS = '';
const WEB_HOTLINE = '';
const WEB_EMAIL = '';
const WEB_DESCRIPTION = '';

//  [*] DB
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = '';

//  [*] VALUE
const TOAST_TIME = 3000;
const REQUEST_API_TIME = 30;
const LIMIT_SIZE_FILE = 4; // đơn vị MB (megabyte)

//  [*] SHEET
const SHEET_ID = ''; //ID bảng sheet
const SHEET_JSON_FILE = '';