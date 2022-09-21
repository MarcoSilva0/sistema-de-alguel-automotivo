<?php

class db{
    //Host
    private $host = 'localhost';

    //Usuário
    private $usuario = 'root';

    //Senha
    private $senha = '';

    //Nome banco
    private $database = 'sistemasi';

    public function conecta_mysql(){

        //Cria a conexao
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        //ajusta o charset de comunicação entre a aplicação e o banco
        mysqli_set_charset($con, 'utf-8');

        //Verificar se houve erro de conexão
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o BD: ' . mysqli_connect_error();
        }

        return $con;
    }

}