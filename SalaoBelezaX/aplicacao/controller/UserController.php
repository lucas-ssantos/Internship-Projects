<?php
require_once('model/User.php');

class UserController
{
	
	//Mostrar um registro apenas
	public function read()
	{

        $user = new User($_GET['id_user']);
        $user->read();
        require_once 'view/User_Read.php';

    }	
	
	//Mostrar registro a ser atualizar
	public function update()
	{

        $user = new User($_GET['id_user']);

        if ( isset($_POST['nome_user']) ){

            $user->setNomeUser($_POST['nome_user']);
            $user->setEmailUser($_POST['email_user']);
			$user->setSenhaUser($_POST['senha_user']);
			$user->setAdmUser($_POST['adm_user']);

            $user->save();
            header("Location: ?classe=User&acao=all");

        }


        $user->update();
        require_once 'view/User_Update.php';

    }
	
	//Mostrar todos os registros
	public function all()
	{

        $obj = new User();
        $users = $obj->all();
        require_once 'view/User_All.php';

    }
	
	//Preencher a classe com o registro a ser inserido
	public function create()
	{
		$user = new User();
		
		if ( isset($_POST['nome_user']) ){

            $user->setNomeUser($_POST['nome_user']);
            $user->setEmailUser($_POST['email_user']);
			$user->setSenhaUser($_POST['senha_user']);
			
			$adm_bd;
			
			if($_POST['adm_user'] == "sim")
			{
				$adm_bd = 1;
			}
			else
			{
				$adm_bd = 0;
			}
			
			$user->setAdmUser($adm_bd);

            $user->create();
            header("Location: ?classe=User&acao=all");

        }
		require_once 'view/User_Novo.php';
	}
	
	//Deleta um registro
	public function del()
	{

        $user = new User($_GET['id_user']);
        $user->del();
		header("Location: ?classe=User&acao=all");

    }

}

?>