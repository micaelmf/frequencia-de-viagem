<?php
class Controller
{
    protected $vars = [];
    protected $layout = "default";

    public function _408()
    {
        print_r("408 - Página não encontrada");
    }
    
    public function _404()
    {
        print_r("404 - Página não encontrada");
    }

    function verificaSessao(){
        //Verifica se a sessão expirou
        if(isset($_SESSION['ultAtividade']) && ((time() - $_SESSION['ultAtividade']) > TEMPO_LIMITE_SESSAO)){
            session_destroy();
            header("Location:". URL_BASE."admin/entrar");
        }else{
            $_SESSION['ultAtividade'] = time();
        }
    
        //verifica se existe uma sessao ativa
        if(!isset($_SESSION['usuario'])){
            header("Location:". URL_BASE."admin/entrar");
        }
    }


    public function set($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }

    /**
     * ! Método de uso desencorajado devido a função extract() 
     * ! que dificulta a manutenção e entendimento do código
     * ! e pode provocar falhas de segurança em alguns casos
     */
    public function render($filename)
    {
        extract($this->vars);
        ob_start();
        require(ROOT . "app/views/" . ucfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');
        $content_for_layout = ob_get_clean();

        if ($this->layout == false) {
            $content_for_layout;
        } else {
            require(ROOT . "app/views/Layouts/" . $this->layout . '.php');
        }
    }

    private function secureInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    protected function secureForm($form)
    {
        foreach ($form as $key => $value) {
            $form[$key] = $this->secureInput($value);
        }
    }
}
