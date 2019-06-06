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
	
	public function frequencia($num)
	{
		echo 'frequência de viagem - ' . $num[0];
	}
}
