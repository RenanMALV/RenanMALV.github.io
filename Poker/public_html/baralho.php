<?php
include 'stack.php';

class bar 
{
    public $stackbar;
    public function embaralhar(){
        for ($i = 0; $i < 52; $i++){
            $ri = rand(0,51);
            $temp = $this->cartas[$ri];
            $this->cartas[$ri] = $this->cartas[$i];
            $this->cartas[$i]=$temp;
            
        }
        $this->stackbar = new Stack(52);
        
        for ($i = 0; $i < 52; $i++) {
            
            $this->stackbar->push($this->cartas[$i]);
        }
        
    }
    
    // cartas é a array com todos os objs "carta"
    public $cartas;
    // bar() é a função que cria o baralho
    public function bar(){
        $card = new carta;
        
    for ( $i=1;$i<=52;$i++ )
        {
        $this->cartas[$i-1] = array( 0=>$card->getCarta($i)[0], 1=>$card->getCarta($i)[1],2=>$card->getCarta($i)[2]) ;
        
        
        }
        $this->embaralhar();
    }
    
    public function getter(){
        return $this->stackbar->pop();
    }
}

class carta{
    public $naipe;
    public $valor;
    public $URL="";

    public function getCarta($cont){
        if($cont <=13){
        $this->naipe = "clubs";}
        else if($cont <=26){
        $this->naipe = "diamonds";}
        else if($cont <=39){
        $this->naipe = "hearts";}
        else {
        $this->naipe = "spades";}
            switch ($cont)
            {
                case ($cont == 1 ||$cont == 14 ||$cont == 27 ||$cont == 40):
                    $this->valor = 2;
                    break;
                case ($cont ==2 or$cont == 15 or$cont == 28 or$cont == 41):
                    $this->valor = 3;
                    break;
                case ($cont ==3||$cont ==16||$cont ==29||$cont ==42):
                    $this->valor = 4;
                    break;
                case ($cont ==4||$cont ==17||$cont ==30||$cont ==43):
                    $this->valor = 5;
                    break;
                case ($cont ==5||$cont ==18||$cont ==31||$cont ==44):
                    $this->valor = 6;
                    break;
                case ($cont ==6||$cont ==19||$cont ==32||$cont ==45):
                    $this->valor = 7;
                    break;
                case ($cont ==7||$cont ==20||$cont ==33||$cont ==46):
                    $this->valor = 8;
                    break;
                case ($cont ==8||$cont ==21||$cont ==34||$cont ==47):
                    $this->valor = 9;
                    break;
                case ($cont ==9||$cont ==22||$cont ==35||$cont ==48):
                    $this->valor = 10;
                    break;
                case ($cont ==10||$cont ==23||$cont ==36||$cont ==49):
                    $this->valor = "jack";
                    break;
                case ($cont ==11||$cont ==24||$cont ==37||$cont ==50):
                    $this->valor = "queen";
                    break;
                case ($cont ==12||$cont ==25||$cont ==38||$cont ==51):
                    $this->valor = "king";
                    break;
                case ($cont ==13||$cont ==26||$cont ==39||$cont ==52):
                    $this->valor = "ace";
                    break;
            }
        $this->URL = $this->valor . "_of_" . $this->naipe . ".png";
        return [$this->naipe,$this->valor,$this->URL];
    }

}
?>
