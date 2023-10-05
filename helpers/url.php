<?php

// Constrói a URL base do site combinado o protocolo,
// nome do servidor, diretório atual e barra final

$BASE_URL = "https://".$_SERVER['SERVER_NAME'] .dirname($_SERVER["REQUEST_URI"].'?').'/';