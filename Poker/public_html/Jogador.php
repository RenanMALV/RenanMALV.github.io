<?php
class jogador
{
    public $nome;
    public $idade;
    public $cartas;
    public $valorMao;//flush,trinca,par... numericamente
    public function jogador($n,$i,$c)
    {
        $this->nome = $n;
        $this->idade = $i;
        $this->cartas = $c;
        //foreach ($this->cartas as $value)
            //echo $value[2] ."-->". $this->nome. $this->idade."<br>";

    }
    public function getcarta($index){
        return $this->cartas[$index];
    }

} 
?>
