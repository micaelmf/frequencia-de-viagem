<?php

class ManipuladorString
{
    /**
     * Retorna uma string para URLs amigáveis (SEO). Substitui " " por "-" e remove acentos
     *
     * @param [String] $string // a string que se deseja modificar
     * @return String // a string modificada
     */
    public function slug($string)
    {
        $string = preg_replace('/[^\\pL\d_]+/u', '-', $string);
        $string = trim($string, "-");
        $string = iconv('utf-8', "us-ascii//TRANSLIT", $string);
        $string = strtolower($string);
        $string = preg_replace('/[^-a-z0-9_]+/', '', $string);

        return $string;
    }
    public function subistituiEspacos($string, $valor)
    {
        preg_replace(
            array(
                "/(á|à|ã|â|ä)/",
                "/(Á|À|Ã|Â|Ä)/",
                "/(é|è|ê|ë)/",
                "/(É|È|Ê|Ë)/",
                "/(í|ì|î|ï)/",
                "/(Í|Ì|Î|Ï)/",
                "/(ó|ò|õ|ô|ö)/",
                "/(Ó|Ò|Õ|Ô|Ö)/",
                "/(ú|ù|û|ü)/","
                /(Ú|Ù|Û|Ü)/",
                "/(ñ)/",
                "/(Ñ)/"
            ),
            explode(
                " ",
                "a A e E i I o O u U n N"
            ),
            str_replace(
                " ",
                "",
                $string
            )
        );
        
        
        
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), str_replace(" ", "", $string));
    }

    public function removeAcentos($string)
    {
        return null;
    }
}