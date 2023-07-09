<?php
require_once('aplicacao/model/Cliente.php');

class ClienteController
{
	
	//Mostrar um registro apenas
	public function read()
	{

        $cliente = new Cliente($_GET['id_cliente']);
        $cliente->read();
        require_once 'aplicacao/view/Cliente_Read.php';

    }	
	
	//Mostrar registro a ser atualizar
	public function update()
	{

        $cliente = new Cliente($_GET['id_cliente']);

        if ( isset($_POST['nome_cliente']) ){

            $cliente->setNomeCliente($_POST['nome_cliente']);
            $cliente->setEmailCliente($_POST['email_cliente']);
            $cliente->setTelefoneCliente($_POST['telefone_cliente']);
			$cliente->setSenhaCliente($_POST['senha_cliente']);
			$cliente->setDataNascCliente($_POST['data_nasc_cliente']);

            $cliente->save();
            header("Location: ./?classe=Cliente&acao=all");

        }


        $cliente->update();
        require_once 'aplicacao/view/Cliente_Update.php';

    }
	
	//Mostrar todos os registros
	public function all()
	{

        $obj = new Cliente();
        $clientes = $obj->all();
        require_once 'aplicacao/view/Cliente_All.php';

    }
	
	//Preencher a classe com o registro a ser inserido
	public function create()
	{
		$cliente = new Cliente();
		
		if ( isset($_POST['nome_cliente']) ){

            $cliente->setNomeCliente($_POST['nome_cliente']);
            $cliente->setEmailCliente($_POST['email_cliente']);
            $cliente->setTelefoneCliente($_POST['telefone_cliente']);
			$cliente->setSenhaCliente($_POST['senha_cliente']);
			$cliente->setDataNascCliente($_POST['data_nasc_cliente']);

            $cliente->create();
            header("Location: ./?classe=Cliente&acao=all");

        }
		require_once 'aplicacao/view/Cliente_Novo.php';
	}

}

?>