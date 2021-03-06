<?php

namespace ministerio\modelo ;

class  ministerio{

	private $id ;
	private $nome ;
	private $erro ;


		  public function __get($prop){

					 return $this->$prop ;
		  
		  }

		  public function __set($prop, $valor){

					 $this->$prop = $valor ;
		  
		  }

			  public function salvar(){

			  //abrir conexao com o banco
			  $pdo = new \PDO(DSN, USER, PASSWD);
			  //cria sql
			  $sql = "INSERT INTO Ministerio ( nome )
				  VALUES (?)";

			  //prepara sql
			  $stm = $pdo->prepare($sql);
			  //trocar valores
			  $stm->bindParam(1, $this->nome);

			  $resposta = $stm->execute();

			  //fechar conexÃ£o
			  $pdo = null ;

			  return $resposta;
	}
			  public function salvarMinisterioDiscipulo(){

			  //abrir conexao com o banco
			  $pdo = new \PDO(DSN, USER, PASSWD);
			  //cria sql
			  $sql = "INSERT INTO MinisterioTemDiscipulo ( ministerioId, discipuloId, funcaoId )
				  VALUES (?,?,?)";

			  //prepara sql
			  $stm = $pdo->prepare($sql);
			  //trocar valores
			  $stm->bindParam(1, $this->nome);
			  $stm->bindParam(2, $this->nome);
			  $stm->bindParam(3, $this->nome);

			  $resposta = $stm->execute();

			  //fechar conexÃ£o
			  $pdo = null ;

			  return $resposta;
	}

	public function listarTodos(){

		$pdo = new \PDO (DSN,USER,PASSWD);	

		$sql = 'SELECT * FROM Ministerio';

		$stm = $pdo->prepare($sql);

		$stm->execute();

		return $stm->fetchAll();

	}

	public function listarUm(){

		$pdo = new \PDO (DSN,USER,PASSWD);	

		$sql = 'SELECT * FROM Ministerio WHERE id = ?';

		$stm = $pdo->prepare($sql);

		$stm->bindParam(1, $this->id);

		$stm->execute();

		return $stm->fetch();

	}

	public function atualizarMinisterio(){

	//abrir conexao com o banco
	$pdo = new \PDO(DSN, USER, PASSWD);
	//cria sql
	$sql = " UPDATE Ministerio SET 	nome = ? 
		WHERE id = ? ";
	//prepara sql
	$stm = $pdo->prepare($sql);
	//trocar valores
	$stm->bindParam(1, $this->nome);
	$stm->bindParam(2, $this->id);

	$resposta = $stm->execute();


	//fechar conexÃ£o
	$pdo = null ;

	return $resposta;
	
	}

	public function excluir(){
	try {
		$pdo = new \PDO (DSN,USER,PASSWD);	

		$sql = 'DELETE FROM Ministerio WHERE id = ?';

		$stm = $pdo->prepare($sql);

		$stm->bindParam(1, $this->id);

		$resposta = $stm->execute();
		$erro = $stm->errorCode();
		 
		if ($erro != '0000'){

			 throw new \Exception ('Existe discípulos cadastrados') ;
		}
		}catch ( \Exception $e ) {
		
				  $this->erro= $e->getMessage();
	}

	}


}
