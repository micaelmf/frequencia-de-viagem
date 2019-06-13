<?php

class viagensController
{
    public function viagem()
	{
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
