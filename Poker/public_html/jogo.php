<?php
class jogo{
    public $njogadores;
    public $ArrayJogador;
    public function jogo($njogadores){
        $this->njogadores= $njogadores;
    }
    public function setJogador($jogador,$indice){
        $this->ArrayJogador[$indice]=$jogador;
        //echo $this->ArrayJogador[$indice]->nome."nome do jogador -------------<br>";
    }
    public function compararMao(){
        
        for($i=0;$i<$this->njogadores;$i++)//próximo jogador ...
        {   $valorMao=0;
            $dois=0;
            $tres=0;
            $quatro=0;
            $cinco=0;
            $seis=0;
            $sete=0;
            $oito=0;
            $nove=0;
            $dez=0;
            $valete=0;
            $dama=0;
            $rei=0;
            $as=0;
            //verifica o valor das cartas.
            foreach($this->ArrayJogador[$i]->cartas as $carta)
            {
                switch ($carta[1]){
                
                    case "2":
                        $dois++;
                        break;
                    case "3":
                        $tres++;
                        break;
                    case "4":
                        $quatro++;
                        break;
                    case "5":
                        $cinco++;
                        break;
                    case "6":
                        $seis++;
                        break;
                    case "7":
                        $sete++;
                        break;
                    case "8":
                        $oito++;
                        break;
                    case "9":
                        $nove++;
                        break;
                    case "10":
                        $dez++;
                        break;
                    case "jack":
                        $valete++;
                        break;
                    case "queen":
                        $dama++;
                        break;
                    case "king":
                        $rei++;
                        break;
                    case "ace":
                        $as++;
                        break;
                }
            
            }
            //casa da centena ----------
            //carta alta 0 (default) --cX
            //um par 1 --------------cX
            //dois pares 2 ---------cX
            //trinca 3
            //straight 4
            //flush 5 ------------cX
            //full house 6 
            //quadra 7 
            //straight flush 8 
            //----------------------
            //dezanas determinam o valor da carta em sí(no caso de pares, trincas(com ou sem full houses), quadras e straights).
                                                                
            if($dois!=0){
                if($dois==2) //par
                    $valorMao=102;
                else if($dois==3)//trinca
                        $valorMao=302;
                else if($dois==4)//quadra
                        $valorMao=702;
                else if($as==1&&$tres==1&&$quatro==1&&$cinco==1)//straight conta nas dezenas a carta mais alta
                        $valorMao=405;
                else if($tres==1&&$quatro==1&&$cinco==1&&$seis==1)
                        $valorMao=406;
            }
            if($tres!=0){
                if($tres==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                    {$decimal=($valorMao-100)/100;
                        $valorMao=203+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                    {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                    }
                    else $valorMao=103;//par normal
                }
                else if($tres==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=603;
                        else $valorMao=303;
                else if($tres==4)//quadra
                        $valorMao=703;
                else if($quatro==1&&$cinco==1&&$seis==1&&$sete==1)//straight conta nas dezenas a carta mais alta
                        $valorMao=407;
            }
            if($quatro!=0){
                if($quatro==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=204+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=104; //par normal
                }
                else if($quatro==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=604;
                        else $valorMao=304;
                else if($quatro==4)//quadra
                        $valorMao=704;
                else if($cinco==1&&$seis==1&&$sete==1&&$oito==1)//straight conta nas dezenas a carta mais alta
                        $valorMao=408;
            }
            if($cinco!=0){
                if($cinco==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=205+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=105; //par normal
                }
                else if($cinco==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=605;
                        else $valorMao=305;
                else if($cinco==4)//quadra
                        $valorMao=705;
                else if($seis==1&&$sete==1&&$oito==1&&$nove==1)//straight conta nas dezenas a carta mais alta
                        $valorMao=409;
            }
            if($seis!=0){
                if($seis==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=206+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=106; //par normal
                }
                else if($seis==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=606;
                        else $valorMao=306;
                else if($seis==4)//quadra
                        $valorMao=706;
                else if($sete==1&&$oito==1&&$nove==1&&$dez==1)//straight conta nas dezenas a carta mais alta
                        $valorMao=410;
            }
            if($sete!=0){
                if($sete==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=207+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=107; //par normal
                }
                else if($sete==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=607;
                        else $valorMao=307;
                else if($sete==4)//quadra
                        $valorMao=707;
                else if($oito==1&&$nove==1&&$dez==1&&$valete==1)//straight conta nas dezenas a carta mais alta
                        $valorMao=411;
            }
            if($oito!=0){
                if($oito==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=208+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=108; //par normal
                }
                else if($oito==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=608;
                        else $valorMao=308;
                else if($oito==4)//quadra
                        $valorMao=708;
                else if($nove==1&&$dez==1&&$valete==1&&$dama==1)//straight conta nas dezenas a carta mais alta
                        $valorMao=412;
            }
            if($nove!=0){
                if($nove==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=209+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=109; //par normal
                }
                else if($nove==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=609;
                        else $valorMao=309;
                else if($nove==4)//quadra
                        $valorMao=709;
                else if($dez==1&&$valete==1&&$dama==1&&$rei==1)//straight conta nas dezenas a carta mais alta
                        $valorMao=413;
            }
            if($dez!=0){
                if($dez==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=210+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=110; //par normal
                }
                else if($dez==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=610;
                        else $valorMao=310;
                else if($dez==4)//quadra
                        $valorMao=710;
                else if($valete==1&&$dama==1&&$rei==1&&$as==1)//straight conta nas dezenas a carta mais alta
                        $valorMao=414;
            }
            if($valete!=0){
                if($valete==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=211+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=111; //par normal
                }
                else if($valete==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=611;
                        else $valorMao=311;
                else if($valete==4)//quadra
                        $valorMao=711;
            }
            if($dama!=0){
                if($dama==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=212+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=112; //par normal
                }
                else if($dama==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=612;
                        else $valorMao=312;
                else if($dama==4)//quadra
                        $valorMao=712;
            }
            if($rei!=0){
                if($rei==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=213+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=113; //par normal
                }
                else if($rei==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=613;
                        else $valorMao=313;
                else if($rei==4)//quadra
                        $valorMao=713;
            }
            if($as!=0){
                if($as==2) //par
                {
                    if($valorMao>100&&$valorMao<200)//já possui um par
                        {$decimal=($valorMao-100)/100;
                        $valorMao=214+$decimal;
                    }
                    else if($valorMao>300&&$valorMao<400)//full house
                            {
                            $somar=$valorMao-300;
                            $valorMao=600 + $somar;
                            }
                    else $valorMao=114; //par normal
                }
                else if($as==3)//trinca
                        if($valorMao>100&&$valorMao<200)//verificar se há um par anterior, se sim, é full house.
                            $valorMao=614;
                        else $valorMao=314;
                else if($as==4)//quadra
                        $valorMao=714;
            }
            
            if($valorMao>400&&$valorMao<500)//straight flush
            {
                $naipe=$this->ArrayJogador[$i]->cartas[0][0];
                if($naipe==$this->ArrayJogador[$i]->cartas[1][0]&&$naipe==$this->ArrayJogador[$i]->cartas[2][0]&&$naipe==$this->ArrayJogador[$i]->cartas[3][0]&&$naipe==$this->ArrayJogador[$i]->cartas[4][0])
                    $valorMao=$valorMao+400;
            }
            else if($valorMao<500)//flush
            {
                $naipe=$this->ArrayJogador[$i]->cartas[0][0];
                if($naipe==$this->ArrayJogador[$i]->cartas[1][0]&&$naipe==$this->ArrayJogador[$i]->cartas[2][0]&&$naipe==$this->ArrayJogador[$i]->cartas[3][0]&&$naipe==$this->ArrayJogador[$i]->cartas[4][0])
                    $valorMao=500;
            }
            $this->ArrayJogador[$i]->valorMao=$valorMao;
            //echo $this->ArrayJogador[$i]->valorMao."--";
        }
    }
    public function definirVencedor(){
        
        $atualVencedor=0;
        $empate="";
        for($i=1;$i<$this->njogadores;$i++)
        {
            //organizar numericamente as cartas
        for($c=0;$c<5;$c++){
            if($this->ArrayJogador[$i]->cartas[$c][1]=="jack")
                $this->ArrayJogador[$i]->cartas[$c][1]=11;
            else if($this->ArrayJogador[$i]->cartas[$c][1]=="queen")
                $this->ArrayJogador[$i]->cartas[$c][1]=12;
            else if($this->ArrayJogador[$i]->cartas[$c][1]=="king")
                $this->ArrayJogador[$i]->cartas[$c][1]=13;
            else if($this->ArrayJogador[$i]->cartas[$c][1]=="ace")
                $this->ArrayJogador[$i]->cartas[$c][1]=14;
            
            if($this->ArrayJogador[$atualVencedor]->cartas[$c][1]=="jack")
                $this->ArrayJogador[$atualVencedor]->cartas[$c][1]=11;
            else if($this->ArrayJogador[$atualVencedor]->cartas[$c][1]=="queen")
                $this->ArrayJogador[$atualVencedor]->cartas[$c][1]=12;
            else if($this->ArrayJogador[$atualVencedor]->cartas[$c][1]=="king")
                $this->ArrayJogador[$atualVencedor]->cartas[$c][1]=13;
            else if($this->ArrayJogador[$atualVencedor]->cartas[$c][1]=="ace")
                $this->ArrayJogador[$atualVencedor]->cartas[$c][1]=14;
            
            }
            $arrayVencedor = array($this->ArrayJogador[$atualVencedor]->cartas[0][1],$this->ArrayJogador[$atualVencedor]->cartas[1][1],$this->ArrayJogador[$atualVencedor]->cartas[2][1],$this->ArrayJogador[$atualVencedor]->cartas[3][1],$this->ArrayJogador[$atualVencedor]->cartas[4][1]);
            $arrayI = array($this->ArrayJogador[$i]->cartas[0][1],$this->ArrayJogador[$i]->cartas[1][1],$this->ArrayJogador[$i]->cartas[2][1],$this->ArrayJogador[$i]->cartas[3][1],$this->ArrayJogador[$i]->cartas[4][1]);
            rsort($arrayVencedor);
            rsort($arrayI);

            
            //echo 'Vencedor ->';print_r( array_values ($arrayVencedor));
            //echo "<br>";
            //echo 'a ser comparado ->';print_r( array_values ($arrayI));
            //echo "<br>outro loop<br>";
            
            if($this->ArrayJogador[$atualVencedor]->valorMao < $this->ArrayJogador[$i]->valorMao){
            $atualVencedor=$i;$empate="";}
            else if($this->ArrayJogador[$atualVencedor]->valorMao == $this->ArrayJogador[$i]->valorMao){// empate
                                if($this->ArrayJogador[$atualVencedor]->valorMao == 0){//carta alta
                                    for($cont=0;$cont<5;$cont++)
                                    {    
                                        if($arrayVencedor[$cont]!=$arrayI[$cont])
                                            if($arrayVencedor[$cont]>$arrayI[$cont])
                                                break;// if true atual vencedor continua
                                            else{
                                            $atualVencedor = $i;
                                            $empate="";
                                            break;}
                                        else if($cont==4){
                                            $empate =$empate . $this->ArrayJogador[$atualVencedor]->nome . " e " . $this->ArrayJogador[$i]->nome . ", ";
                                        }


                                    }
                                }
                                else if($this->ArrayJogador[$atualVencedor]->valorMao > 100&&$this->ArrayJogador[$atualVencedor]->valorMao < 200){//um par
                                // primeiro verificar o unico par e zera-o, a fim de não interferir na comparação
                                    for($cont=0;$cont<5;$cont++)
                                    {
                                        if($cont!=4){
                                            if($arrayVencedor[$cont]==$arrayVencedor[$cont+1]){
                                                $arrayVencedor[$cont+1]=0;
                                                $arrayVencedor[$cont]=0; 
                                            }
                                            if($arrayI[$cont]==$arrayI[$cont+1]){
                                                $arrayI[$cont+1]=0;
                                                $arrayI[$cont]=0; 
                                            }
                                        }
                                    }
                                    rsort($arrayVencedor);
                                    rsort($arrayI);
                                    for($cont=0;$cont<5;$cont++)
                                    {
                                        if($arrayVencedor[$cont]!=$arrayI[$cont])
                                            if($arrayVencedor[$cont]>$arrayI[$cont])
                                                break;// if true atual vencedor continua
                                            else{
                                            $atualVencedor = $i;
                                            $empate="";
                                            break;}
                                        else if($cont==4){
                                            $empate =$empate . $this->ArrayJogador[$atualVencedor]->nome . " e " . $this->ArrayJogador[$i]->nome . ", ";
                                        }   
                                    }       
                                }
                                //empate de dois pares
                                else if($this->ArrayJogador[$atualVencedor]->valorMao > 200&&$this->ArrayJogador[$atualVencedor]->valorMao < 300){
                                    for($cont=0;$cont<5;$cont++)
                                    {
                                        if($cont!=4){
                                            if($arrayVencedor[$cont]==$arrayVencedor[$cont+1]){
                                                $arrayVencedor[$cont+1]=0;
                                                $arrayVencedor[$cont]=0; 
                                            }
                                            if($arrayI[$cont]==$arrayI[$cont+1]){
                                                $arrayI[$cont+1]=0;
                                                $arrayI[$cont]=0; 
                                            }
                                        }
                                    }
                                    //resta somente uma carta não zerada, logo este será o maior valor.
                                    rsort($arrayVencedor);
                                    rsort($arrayI);
                                    if($arrayVencedor[0]!=$arrayI[0])
                                            if($arrayVencedor[0]>$arrayI[0])
                                                break;// if true atual vencedor continua
                                            else{
                                            $atualVencedor = $i;
                                            $empate="";
                                            }
                                    else {
                                            $empate =$empate . $this->ArrayJogador[$atualVencedor]->nome . " e " . $this->ArrayJogador[$i]->nome . ", ";
                                        } 
                                }
                                // flush.
                                else
                                {
                                    for($cont=0;$cont<5;$cont++)
                                    {    
                                        if($arrayVencedor[$cont]!=$arrayI[$cont])
                                            if($arrayVencedor[$cont]>$arrayI[$cont])
                                                break;// if true atual vencedor continua
                                            else{
                                            $atualVencedor = $i;
                                            $empate="";
                                            break;}
                                        else if($cont==4){
                                            $empate =$empate . $this->ArrayJogador[$atualVencedor]->nome . " e " . $this->ArrayJogador[$i]->nome . ", ";
                                        }


                                    }
                                }
            }
        }
        //echo $empate;
        return [$this->ArrayJogador[$atualVencedor],$empate];
    }
}
?>
