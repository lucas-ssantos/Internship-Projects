<?php

class Cliente
{
	private $id_cliente;
	private $nome_cliente;
	private $email_cliente;
	private $telefone_cliente;
	private $senha_cliente;
	private $data_nasc_cliente;
	
	private $con;
	
	//Método contrutor
	public function __construct($id_cliente=NULL, $nome_cliente=NULL, $email_cliente=NULL, $telefone_cliente=NULL, $senha_cliente=NULL, $data_nasc_cliente=NULL)
	{
		$this->id_cliente = $id_cliente;
		$this->nome_cliente = $nome_cliente;
		$this->email_cliente = $email_cliente;
		$this->telefone_cliente = $telefone_cliente;
		$this->senha_cliente = $senha_cliente;
		$this->data_nasc_cliente = $data_nasc_cliente;
		
		$this->con = new PDO(SERVIDOR, USUARIO, SENHA);
	}
	
	//Encapsulamento
	public function getIdCliente()
    {
        return $this->id_cliente;
    }

    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }
	
	public function getNomeCliente()
    {
        return $this->nome_cliente;
    }

    public function setNomeCliente($nome_cliente)
    {
        $this->nome_cliente = $nome_cliente;
    }
	
	public function getEmailCliente()
    {
        return $this->email_cliente;
    }

    public function setEmailCliente($email_cliente)
    {
        $this->email_cliente = $email_cliente;
    }
	
	public function getTelefoneCliente()
    {
        return $this->telefone_cliente;
    }

    public function setTelefoneCliente($telefone_cliente)
    {
        $this->telefone_cliente = $telefone_cliente;
    }
	
	public function getSenhaCliente()
    {
        return $this->senha_cliente;
    }

    public function setSenhaCliente($senha_cliente)
    {
        $this->senha_cliente = $senha_cliente;
    }
	
	public function getDataNascCliente()
    {
        return $this->data_nasc_cliente;
    }

    public function setDataNascCliente($data_nasc_cliente)
    {
        $this->data_nasc_cliente = $data_nasc_cliente;
    }
	
	public function __toString()
    {
		return "$this->id_Cliente - $this->nome_cliente - $this->email_cliente - $this->telefone_cliente - $this->senha_cliente - $this->data_nasc_cliente";
	}
	
	//retornar apenas um registro
	public function read()
	{

        $sql = $this->con->prepare("SELECT * FROM clientes WHERE id_cliente=?");
        $sql->execute( array($this->id_cliente) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id_cliente = $row->id_cliente;
            $this->nome_cliente = $row->nome_cliente;
            $this->email_cliente = $row->email_cliente;
			$this->telefone_cliente = $row->telefone_cliente;
			$this->senha_cliente = $row->senha_cliente;
			$this->data_nasc_cliente = $row->data_nasc_cliente;
        }

    }
	
	//Atualizar registro
	public function update()
	{

        $sql = $this->con->prepare("SELECT * FROM clientes WHERE id_cliente=?");
        $sql->execute( array($this->id_cliente) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id_cliente = $row->id_cliente;
            $this->nome_cliente = $row->nome_cliente;
            $this->email_cliente = $row->email_cliente;
			$this->telefone_cliente = $row->telefone_cliente;
			$this->senha_cliente = $row->senha_cliente;
			$this->data_nasc_cliente = $row->data_nasc_cliente;
        }

    }
	
	//Salvar registro atualizado
	public function save()
	{

        $sql = $this->con->prepare("UPDATE clientes SET nome_cliente=?, email_cliente=?, telefone_cliente=?, senha_cliente=?, data_nasc_cliente=? WHERE id_cliente=?");
        $sql->execute( array($this->nome_cliente, $this->email_cliente, $this->telefone_cliente, md5($this->senha_cliente), $this->data_nasc_cliente, $this->id_cliente) );

        if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Alterado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
    }
	
	//Chamar todos so registros
	public function all()
	{

        $sql = $this->con->prepare("SELECT * FROM clientes");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
	
	//Inserir registro no BD
	public function create()
	{	
		$sql = $this->con->prepare("INSERT INTO clientes VALUES(NULL,?,?,?,?,?)");
		$sql->execute( array($this->nome_cliente, $this->email_cliente, $this->telefone_cliente, md5($this->senha_cliente), $this->data_nasc_cliente));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Cadastrado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
	}
	
	
	
	
	
	
	
	
	
}

?>