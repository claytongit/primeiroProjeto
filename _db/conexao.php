<?php

class client{
	private $pdo;

	public function __construct($host, $dbname, $user, $senha){
		try {
			$pdo = $this->pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $senha);
		} catch (PDOException $e) {
			echo "Erro de conexao ".$e->getMessage();
		}catch (Exception $e) {
			echo "Erro desconhecido ".$e->getMessage();
		}
	}

	public function enviar($nome, $instagram, $mensagem){
		$cmd = $this->pdo->prepare("INSERT INTO one (nome, instagram, mensagem) VALUES (:n, :i, :c)");
		$cmd->bindValue(":n", $nome);
		$cmd->bindValue(":i", $instagram);
		$cmd->bindValue(":c", $mensagem);

		$cmd->execute();
	}

}