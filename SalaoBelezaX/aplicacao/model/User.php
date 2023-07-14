<?php

class User
{
	private $id_user;
	private $nome_user;
	private $email_user;
	private $senha_user;
	private $adm_user;
	
	private $con;
	
	//Método contrutor
	public function __construct($id_user=NULL, $nome_user=NULL, $email_user=NULL, $senha_user=NULL, $adm_user=NULL)
	{
		$this->id_user = $id_user;
		$this->nome_user = $nome_user;
		$this->email_user = $email_user;
		$this->senha_user = $senha_user;
		$this->adm_user = $adm_user;
		
		$this->con = new PDO(SERVIDOR, USUARIO, SENHA);
	}
	
	//Encapsulamento
	public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }
	
	public function getNomeUser()
    {
        return $this->nome_user;
    }

    public function setNomeUser($nome_user)
    {
        $this->nome_user = $nome_user;
    }
	
	public function getEmailUser()
    {
        return $this->email_user;
    }

    public function setEmailUser($email_user)
    {
        $this->email_user = $email_user;
    }
	
	public function getSenhaUser()
    {
        return $this->senha_user;
    }

    public function setSenhaUser($senha_user)
    {
        $this->senha_user = $senha_user;
    }
	
	public function getAdmUser()
    {
        return $this->adm_user;
    }

    public function setAdmUser($adm_user)
    {
        $this->adm_user = $adm_user;
    }
	
	public function __toString()
    {
		return "$this->id_user - $this->nome_user - $this->email_user - $this->senha_user - $this->adm_user";
	}
	
	//retornar apenas um registro
	public function read()
	{

        $sql = $this->con->prepare("SELECT * FROM users WHERE id_user=?");
        $sql->execute( array($this->id_user) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id_user = $row->id_user;
            $this->nome_user = $row->nome_user;
            $this->email_user = $row->email_user;
			$this->senha_user = $row->senha_user;
			$this->adm_user = $row->adm_user;
        }

    }
	
	//Atualizar registro
	public function update()
	{

        $sql = $this->con->prepare("SELECT * FROM users WHERE id_user=?");
        $sql->execute( array($this->id_user) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id_user = $row->id_user;
            $this->nome_user = $row->nome_user;
            $this->email_user = $row->email_user;
			$this->senha_user = $row->senha_user;
			$this->adm_user = $row->adm_user;
        }

    }
	
	//Salvar registro atualizado
	public function save()
	{

        $sql = $this->con->prepare("UPDATE users SET nome_user=?, email_user=?, senha_user=?, adm_user=? WHERE id_user=?");
        $sql->execute( array($this->nome_user, $this->email_user, md5($this->senha_user), $this->adm_user, $this->id_user) );

        if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Usuário alterado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
    }
	
	//Chamar todos so registros
	public function all()
	{

        $sql = $this->con->prepare("SELECT * FROM users");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
	
	//Inserir registro no BD
	public function create()
	{	
		$sql = $this->con->prepare("INSERT INTO users VALUES(NULL,?,?,?,?)");
		$sql->execute( array($this->nome_user, $this->email_user, md5($this->senha_user), $this->adm_user));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
	}
	
	//Deleta registro no BD
	public function del()
	{	
		$sql = $this->con->prepare("DELETE FROM users WHERE id_user=?");
		$sql->execute(array($this->id_user));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-warning'>Usuário deletado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

	}
	
	
	
	
	
	
	
	
	
}

?>