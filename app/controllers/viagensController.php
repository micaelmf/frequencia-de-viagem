<?php

class viagensController
{
    public function viagens()
	{
		require_once DAO . 'ViagemDAO.php';
        require_once ROOT . "app/core/Controller.php";
		
		/* session_start();
        $controller = new Controller();
        $controller->verificaSessao(); */

        $dao = new ViagemDAO();
		$viagens = $dao->carregaViagensDoOrganizador(1);

		include ROOT . 'app/views/viagens.php';
	}
    public function criar()
	{
        echo 'criar';
	}
	
	public function chamada($num)
	{
		//echo 'chamada de viagem - ' . $num[0];
		include ROOT . 'app/views/chamada-org.php';
	}

	public function viajante($num)
	{
		//echo 'chamada de viagem - ' . $num[0];
		include ROOT . 'app/views/chamada-viaj.php';
	}
}
