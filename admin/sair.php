<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['senha']);

echo "Esperamos você em breve!";

header('Location: /index.php');