<?php
require_once 'D:\lucia\OneDrive - ifsp.edu.br\OneDrive\Atividades - Tecnico em ADS - Software\USBWebserver.v8.6.3\usbwebserver\root\tcc\sitedereceita\autoload.php';

use Dotenv\Dotenv;

// Carrega as variáveis de ambiente do arquivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Carrega o arquivo config.php
require_once 'config.php';