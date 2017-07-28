<?php 

require_once __DIR__.'/../vendor/autoload.php';

(new Dotenv\Dotevn(__DIR__.'/../'))->load();

// Criar instancia de PHPomodoro, carregar configurações e retornar instancia;