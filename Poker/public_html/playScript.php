<!DOCTYPE html>

<!--
-->

<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0">
        <title>Poker</title>
        <script>
            function refresh() {
                if (confirm("Você está certo disto ?"))
                    location.reload();
            }
            var i = 8;
            if (i > 0)
            {
                setInterval(function () {
                    document.getElementById("contador").innerHTML = i;
                    i--;
                }, 1000);
            }
        </script>
        <style>
            .playagain {
                position: absolute;
                left:1125px;
                top:650px;
                -webkit-box-sizing: content-box;
                box-sizing: content-box;
                width: 250px;
                height: 70px;
                cursor: pointer;
                margin: 0 auto;
                border: 2px solid rgb(30,205,151);
                -webkit-border-radius: 40px;
                border-radius: 40px;
                font: normal 37px/70px "Advent Pro", Helvetica, sans-serif;
                color: rgb(168, 255, 228);
                text-align: center;
                text-overflow: clip;
                word-spacing: -4px;
                background: rgba(0,0,0,0);
                -webkit-transition: background-color 0.3s cubic-bezier(0, 0, 0, 0), color 0.3s cubic-bezier(0, 0, 0, 0), width 0.3s cubic-bezier(0, 0, 0, 0), border-width 0.3s cubic-bezier(0, 0, 0, 0), border-color 0.3s cubic-bezier(0, 0, 0, 0);
                transition: background-color 0.3s cubic-bezier(0, 0, 0, 0), color 0.3s cubic-bezier(0, 0, 0, 0), width 0.3s cubic-bezier(0, 0, 0, 0), border-width 0.3s cubic-bezier(0, 0, 0, 0), border-color 0.3s cubic-bezier(0, 0, 0, 0);
                -webkit-transform:  scaleX(1.5) scaleY(1.5)  ;
                transform:  scaleX(1.5) scaleY(1.5)  ;
                animation: ganhadoranim 10800ms ease-out;
                animation-fill-mode: forwards;
                visibility: visible;
            }

            .playagain:hover {
                color: rgba(255,255,255,0.8);
                background: rgb(30, 205, 151);
            }

            .playagain:active {
                border: 2px solid rgba(33,224,163,1);
                color: rgba(208,255,0,1);
                background: rgba(33,224,163,0.3);
                -webkit-transition: none;
                transition: none;
            }
            .ganhador {

                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                width: 500px;
                cursor: pointer;
                opacity: 0;
                padding: 9px 20px;
                overflow: hidden;
                border: 3px solid;
                font: normal 18px/1.7 "Acme", Helvetica, sans-serif;
                color: rgba(0,0,0,1);
                text-align: center;
                background: rgba(255,255,255,0.3);
                -webkit-box-shadow: 10px 13px 9px 5px rgba(0,0,0,0.8) ;
                box-shadow: 10px 13px 9px 5px rgba(0,0,0,0.7) ;
                text-shadow: 1px 1px 1px rgba(0,0,0,0.2) ;
                position: absolute;
                left:70px;
                top:600px;
                margin-left: -100px;
                z-index:1;
                animation: ganhadoranim 10800ms ease-out;
                animation-fill-mode: forwards;
                visibility: visible;
            }
            @-webkit-keyframes ganhadoranim{
                0%{visibility: hidden;opacity: 0}
                95%{opacity: 0;visibility: hidden;}
                100%{opacity: 1;visibility: visible;}
            }
            .refresh {

                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                width: 160px;
                cursor: pointer;
                opacity: 1;
                padding: 9px 20px;
                overflow: hidden;
                border: 3px solid;
                font: normal 18px/1.7 "Acme", Helvetica, sans-serif;
                color: rgba(0,0,0,1);
                text-align: center;
                background: #ffffff;
                -webkit-box-shadow: 10px 13px 9px 5px rgba(0,0,0,0.8) ;
                box-shadow: 10px 13px 9px 5px rgba(0,0,0,0.7) ;
                text-shadow: 1px 1px 1px rgba(0,0,0,0.2) ;
                position: absolute;
                left:770px;
                top:250px;
                margin-left: -100px;
                z-index:1;
                animation: refresh 900ms ease-in-out;
                animation-delay: 8900ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes refresh{
                0%{}
                99%{opacity: 0.05;}
                100%{visibility: hidden;opacity: 0;}
            }



            .carta-img {
                -webkit-transform: scale(1);
                transition: all 1s ease;
                z-index:0;
            }

            .carta-img:hover {
                -webkit-transform: scale(3);
                z-index:2;
            }
            .baralho{

                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
            }
            .container1{
                background-color: darkolivegreen;
                position: absolute;
                top: 690px ;left: 580px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }

            .carta1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move1 400ms ease-in-out;
                animation-fill-mode: forwards;
            }
            .carta2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move2 400ms ease-in-out;
                animation-delay: 150ms;
                animation-fill-mode: forwards;
            }
            .carta3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move3 400ms ease-in-out;
                animation-delay: 300ms;
                animation-fill-mode: forwards;
            }
            .carta4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move4 400ms ease-in-out;
                animation-delay: 450ms;
                animation-fill-mode: forwards;
            }
            .carta5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move5 400ms ease-in-out;
                animation-delay: 600ms;
                animation-fill-mode: forwards;
            }


            @-webkit-keyframes move1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 750px ;left: 610px;}
            }
            @-webkit-keyframes move2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 750px ;left: 683px;}
            }
            @-webkit-keyframes move3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 750px ;left: 760px;}
            }
            @-webkit-keyframes move4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 750px ;left: 836px;}
            }
            @-webkit-keyframes move5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 750px ;left: 911px;}
            }
            /*||||||||||||||||||||||||____________NPCS_____________||||||||||||||||||||||||||||||||||||||||||||||*/

            .container2{
                -webkit-transform: rotate(270deg);
                background-color:darkolivegreen;
                position: absolute;
                top: 330px ;left: 900px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }
            .carta1-1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move1-1 400ms ease-in-out;
                animation-delay: 10750ms;
                animation-fill-mode: forwards;
            }
            .carta1-2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move1-2 400ms ease-in-out;
                animation-delay: 10900ms;
                animation-fill-mode: forwards;
            }
            .carta1-3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move1-3 400ms ease-in-out;
                animation-delay: 11050ms;
                animation-fill-mode: forwards;
            }
            .carta1-4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move1-4 400ms ease-in-out;
                animation-delay: 11200ms;
                animation-fill-mode: forwards;
            }
            .carta1-5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move1-5 400ms ease-in-out;
                animation-delay: 11350ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes move1-1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 520px ;left: 1092px;}
            }
            @-webkit-keyframes move1-2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 450px ;left: 1092px;}
            }
            @-webkit-keyframes move1-3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 380px ;left: 1092px;}
            }
            @-webkit-keyframes move1-4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 310px ;left: 1092px;}
            }
            @-webkit-keyframes move1-5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 240px ;left: 1092px;}
            }

            .container3{
                background-color: darkolivegreen;
                position: absolute;
                top: 190px ;left: 580px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }
            .carta2-1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move2-1 400ms ease-in-out;
                animation-delay: 10000ms;
                animation-fill-mode: forwards;
            }
            .carta2-2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move2-2 400ms ease-in-out;
                animation-delay: 10150ms;
                animation-fill-mode: forwards;
            }
            .carta2-3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move2-3 400ms ease-in-out;
                animation-delay: 10300ms;
                animation-fill-mode: forwards;
            }
            .carta2-4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move2-4 400ms ease-in-out;
                animation-delay: 10450ms;
                animation-fill-mode: forwards;
            }
            .carta2-5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move2-5 400ms ease-in-out;
                animation-delay: 10600ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes move2-1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 250px ;left: 610px;}
            }
            @-webkit-keyframes move2-2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 250px ;left: 683px;}
            }
            @-webkit-keyframes move2-3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 250px ;left: 760px;}
            }
            @-webkit-keyframes move2-4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 250px ;left: 836px;}
            }
            @-webkit-keyframes move2-5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 250px ;left: 911px;}
            }
            .container4{
                -webkit-transform: rotate(90deg);
                background-color:darkolivegreen;
                position: absolute;
                top: 330px ;left: 250px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }
            .carta3-1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move3-1 400ms ease-in-out;
                animation-delay: 10000ms;
                animation-fill-mode: forwards;
            }
            .carta3-2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move3-2 400ms ease-in-out;
                animation-delay: 10150ms;
                animation-fill-mode: forwards;
            }
            .carta3-3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move3-3 400ms ease-in-out;
                animation-delay: 10300ms;
                animation-fill-mode: forwards;
            }
            .carta3-4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move3-4 400ms ease-in-out;
                animation-delay: 10450ms;
                animation-fill-mode: forwards;
            }
            .carta3-5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move3-5 400ms ease-in-out;
                animation-delay: 10600ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes move3-1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 520px;left: 422px;}
            }
            @-webkit-keyframes move3-2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 450px;left: 422px;}
            }
            @-webkit-keyframes move3-3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 380px;left: 422px;}
            }
            @-webkit-keyframes move3-4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 310px;left: 422px;}
            }
            @-webkit-keyframes move3-5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 240px;left: 422px;}
            }
            /* 2 fileira =============================================================
            ==========================================================================*/
            .container5{
                -webkit-transform: rotate(270deg);
                background-color:darkolivegreen;
                position: absolute;
                top: 330px ;left: 1050px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }
            .carta4-1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move4-1 400ms ease-in-out;
                animation-delay: 10750ms;
                animation-fill-mode: forwards;
            }
            .carta4-2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move4-2 400ms ease-in-out;
                animation-delay: 10900ms;
                animation-fill-mode: forwards;
            }
            .carta4-3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move4-3 400ms ease-in-out;
                animation-delay: 11050ms;
                animation-fill-mode: forwards;
            }
            .carta4-4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move4-4 400ms ease-in-out;
                animation-delay: 11200ms;
                animation-fill-mode: forwards;
            }
            .carta4-5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move4-5 400ms ease-in-out;
                animation-delay: 11350ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes move4-1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 520px ;left: 1242px;}
            }
            @-webkit-keyframes move4-2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 450px ;left: 1242px;}
            }
            @-webkit-keyframes move4-3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 380px ;left: 1242px;}
            }
            @-webkit-keyframes move4-4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 310px ;left: 1242px;}
            }
            @-webkit-keyframes move4-5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 240px ;left: 1242px;}
            }

            .container6{
                background-color: darkolivegreen;
                position: absolute;
                top: 50px ;left: 580px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }
            .carta5-1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move5-1 400ms ease-in-out;
                animation-delay: 10000ms;
                animation-fill-mode: forwards;
            }
            .carta5-2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move5-2 400ms ease-in-out;
                animation-delay: 10150ms;
                animation-fill-mode: forwards;
            }
            .carta5-3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move5-3 400ms ease-in-out;
                animation-delay: 10300ms;
                animation-fill-mode: forwards;
            }
            .carta5-4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move5-4 400ms ease-in-out;
                animation-delay: 10450ms;
                animation-fill-mode: forwards;
            }
            .carta5-5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move5-5 400ms ease-in-out;
                animation-delay: 10600ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes move5-1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 110px ;left: 610px;}
            }
            @-webkit-keyframes move5-2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 110px ;left: 683px;}
            }
            @-webkit-keyframes move5-3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 110px ;left: 760px;}
            }
            @-webkit-keyframes move5-4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 110px ;left: 836px;}
            }
            @-webkit-keyframes move5-5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 110px ;left: 911px;}
            }
            .container7{
                -webkit-transform: rotate(90deg);
                background-color:darkolivegreen;
                position: absolute;
                top: 330px ;left: 100px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }
            .carta6-1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move6-1 400ms ease-in-out;
                animation-delay: 10000ms;
                animation-fill-mode: forwards;
            }
            .carta6-2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move6-2 400ms ease-in-out;
                animation-delay: 10150ms;
                animation-fill-mode: forwards;
            }
            .carta6-3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move6-3 400ms ease-in-out;
                animation-delay: 10300ms;
                animation-fill-mode: forwards;
            }
            .carta6-4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move6-4 400ms ease-in-out;
                animation-delay: 10450ms;
                animation-fill-mode: forwards;
            }
            .carta6-5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move6-5 400ms ease-in-out;
                animation-delay: 10600ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes move6-1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 520px;left: 272px;}
            }
            @-webkit-keyframes move6-2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 450px;left: 272px;}
            }
            @-webkit-keyframes move6-3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 380px;left: 272px;}
            }
            @-webkit-keyframes move6-4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 310px;left: 272px;}
            }
            @-webkit-keyframes move6-5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 240px;left: 272px;}
            }
            /* 3 fileira =============================================================
            ==========================================================================*/

            .container8{
                -webkit-transform: rotate(270deg);
                background-color:darkolivegreen;
                position: absolute;
                top: 330px ;left: 1200px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }
            .carta7-1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move7-1 400ms ease-in-out;
                animation-delay: 10750ms;
                animation-fill-mode: forwards;
            }
            .carta7-2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move7-2 400ms ease-in-out;
                animation-delay: 10900ms;
                animation-fill-mode: forwards;
            }
            .carta7-3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move7-3 400ms ease-in-out;
                animation-delay: 11050ms;
                animation-fill-mode: forwards;
            }
            .carta7-4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move7-4 400ms ease-in-out;
                animation-delay: 11200ms;
                animation-fill-mode: forwards;
            }
            .carta7-5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move7-5 400ms ease-in-out;
                animation-delay: 11350ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes move7-1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 520px ;left: 1392px;}
            }
            @-webkit-keyframes move7-2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 450px ;left: 1392px;}
            }
            @-webkit-keyframes move7-3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 380px ;left: 1392px;}
            }
            @-webkit-keyframes move7-4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 310px ;left: 1392px;}
            }
            @-webkit-keyframes move7-5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(90deg) ;top: 240px ;left: 1392px;}
            }

            .container9{
                background-color: darkolivegreen;
                position: absolute;
                top: 450px ;left: 580px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }
            .carta8-1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move8-1 400ms ease-in-out;
                animation-delay: 10000ms;
                animation-fill-mode: forwards;
            }
            .carta8-2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move8-2 400ms ease-in-out;
                animation-delay: 10150ms;
                animation-fill-mode: forwards;
            }
            .carta8-3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move8-3 400ms ease-in-out;
                animation-delay: 10300ms;
                animation-fill-mode: forwards;
            }
            .carta8-4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move8-4 400ms ease-in-out;
                animation-delay: 10450ms;
                animation-fill-mode: forwards;
            }
            .carta8-5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move8-5 400ms ease-in-out;
                animation-delay: 10600ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes move8-1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 510px ;left: 610px;}
            }
            @-webkit-keyframes move8-2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 510px ;left: 683px;}
            }
            @-webkit-keyframes move8-3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 510px ;left: 760px;}
            }
            @-webkit-keyframes move8-4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 510px ;left: 836px;}
            }
            @-webkit-keyframes move8-5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(0deg) ;top: 510px ;left: 911px;}
            }
            .container10{
                -webkit-transform: rotate(90deg);
                background-color:darkolivegreen;
                position: absolute;
                top: 330px ;left: -50px;
                width: 365px;
                height: 100px;
                z-index:-1;
            }
            .carta9-1{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move9-1 400ms ease-in-out;
                animation-delay: 10000ms;
                animation-fill-mode: forwards;
            }
            .carta9-2{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move9-2 400ms ease-in-out;
                animation-delay: 10150ms;
                animation-fill-mode: forwards;
            }
            .carta9-3{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move9-3 400ms ease-in-out;
                animation-delay: 10300ms;
                animation-fill-mode: forwards;
            }
            .carta9-4{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move9-4 400ms ease-in-out;
                animation-delay: 10450ms;
                animation-fill-mode: forwards;
            }
            .carta9-5{
                -webkit-transform: rotate(180deg);
                background-color: green;
                position: absolute;
                margin-left: -25px;
                margin-top: -36px;
                left:770px;
                top:350px;
                width: 50px;
                height: 72px;
                animation: move9-5 400ms ease-in-out;
                animation-delay: 10600ms;
                animation-fill-mode: forwards;
            }
            @-webkit-keyframes move9-1{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 520px;left: 122px;}
            }
            @-webkit-keyframes move9-2{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 450px;left: 122px;}
            }
            @-webkit-keyframes move9-3{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 380px;left: 122px;}
            }
            @-webkit-keyframes move9-4{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 310px;left: 122px;}
            }
            @-webkit-keyframes move9-5{
                0%{ -webkit-transform: rotate(180deg) ;}
                100%{ -webkit-transform: rotate(270deg) ;top: 240px;left: 122px;}
            }

        </style> 
    </head>
    <body Style="background-image: url(BG.png); background-color: yellowgreen">




        <?php
        include 'baralho.php';
        $iniciar = new bar;
        $njogadores = $_GET['Jogadores'];
        include 'Jogador.php';
 
        $jogador1 = new jogador($_GET['nome1'], $_GET['idade1'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
        $jogador2 = new jogador($_GET['nome2'], $_GET['idade2'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
        //zona de testes
        //
        // array(14,13,8,7,2 ); 
        // array (12,9,7,6,3 );
        //$jogador1->cartas[0][1]="ace";
        //$jogador1->cartas[1][1]="king";
        //$jogador1->cartas[2][1]="queen";
        //$jogador1->cartas[3][1]="jack";
        //$jogador1->cartas[4][1]=10;
        //$jogador2->cartas[0][1]="queen";
        //$jogador2->cartas[1][1]=9;
        //$jogador2->cartas[2][1]=7;
        //$jogador2->cartas[3][1]=6;
        //$jogador2->cartas[4][1]=3;
        //
        //fim da zona de testes
        echo '<div id="baralho" class="baralho"><img src="cards\\red_joker.png" alt="baraho"  style=" width:100%" ></div>';
        //1 deck --------------------------------------------------------
        echo '<div class="container1"> Jogador: ' . $_GET['nome1'];
        echo '</div>';
        echo '<div id="carta5" class="carta5"><img src="cards\\' . $jogador1->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
        echo '<div id="carta4" class="carta4"><img src="cards\\' . $jogador1->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
        echo '<div id="carta3" class="carta3"><img src="cards\\' . $jogador1->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
        echo '<div id="carta2" class="carta2"><img src="cards\\' . $jogador1->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
        echo '<div id="carta1" class="carta1"><img src="cards\\' . $jogador1->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';

        //10 segundos para iniciar um novo jogo     echo '';
        echo'<div class="refresh" onclick="refresh()" id="refreshdiv">Desistir da mão e iniciar outro jogo (TIMER de 8 segundos)<p id="contador"></p></div><link async href="http://fonts.googleapis.com/css?family=Acme" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>';
        include 'jogo.php';
        $jogo = new jogo($njogadores);
        $jogo->setJogador($jogador1, 0); //segundo parametro indica o indice do vetor que será alocado.
        $jogo->setJogador($jogador2, 1);
        if ($njogadores >= 3) {
            $jogador3 = new jogador($_GET['nome3'], $_GET['idade3'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
            $jogo->setJogador($jogador3, 2);


            if ($njogadores >= 4) {
                $jogador4 = new jogador($_GET['nome4'], $_GET['idade4'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
                $jogo->setJogador($jogador4, 3);


                if ($njogadores >= 5) {
                    $jogador5 = new jogador($_GET['nome5'], $_GET['idade5'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
                    $jogo->setJogador($jogador5, 4);


                    if ($njogadores >= 6) {
                        $jogador6 = new jogador($_GET['nome6'], $_GET['idade6'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
                        $jogo->setJogador($jogador6, 5);


                        if ($njogadores >= 7) {
                            $jogador7 = new jogador($_GET['nome7'], $_GET['idade7'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
                            $jogo->setJogador($jogador7, 6);


                            if ($njogadores >= 8) {
                                $jogador8 = new jogador($_GET['nome8'], $_GET['idade8'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
                                $jogo->setJogador($jogador8, 7);


                                if ($njogadores >= 9) {
                                    $jogador9 = new jogador($_GET['nome9'], $_GET['idade9'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
                                    $jogo->setJogador($jogador9, 8);


                                    if ($njogadores >= 10) {
                                        $jogador10 = new jogador($_GET['nome10'], $_GET['idade10'], array($iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter(), $iniciar->getter()));
                                        $jogo->setJogador($jogador10, 9);

                                        //10 deck --------------------------------------------------------
                                        echo '<div class="container10"> Jogador: ' . $_GET['nome10'];
                                        echo '</div>';
                                        echo '<div id="carta9-5" class="carta9-5"><img src="cards\\' . $jogador9->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                        echo '<div id="carta9-4" class="carta9-4"><img src="cards\\' . $jogador9->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                        echo '<div id="carta9-3" class="carta9-3"><img src="cards\\' . $jogador9->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                        echo '<div id="carta9-2" class="carta9-2"><img src="cards\\' . $jogador9->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                        echo '<div id="carta9-1" class="carta9-1"><img src="cards\\' . $jogador9->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                    }
                                    //9 deck --------------------------------------------------------
                                    echo '<div class="container9"> Jogador: ' . $_GET['nome9'];
                                    echo '</div>';
                                    echo '<div id="carta8-5" class="carta8-5"><img src="cards\\' . $jogador9->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                    echo '<div id="carta8-4" class="carta8-4"><img src="cards\\' . $jogador9->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                    echo '<div id="carta8-3" class="carta8-3"><img src="cards\\' . $jogador9->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                    echo '<div id="carta8-2" class="carta8-2"><img src="cards\\' . $jogador9->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                    echo '<div id="carta8-1" class="carta8-1"><img src="cards\\' . $jogador9->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                }
                                //8 deck --------------------------------------------------------
                                echo '<div class="container8"> Jogador: ' . $_GET['nome8'];
                                echo '</div>';
                                echo '<div id="carta7-5" class="carta7-5"><img src="cards\\' . $jogador8->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                echo '<div id="carta7-4" class="carta7-4"><img src="cards\\' . $jogador8->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                echo '<div id="carta7-3" class="carta7-3"><img src="cards\\' . $jogador8->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                echo '<div id="carta7-2" class="carta7-2"><img src="cards\\' . $jogador8->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                                echo '<div id="carta7-1" class="carta7-1"><img src="cards\\' . $jogador8->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                            }
                            //7 deck --------------------------------------------------------
                            echo '<div class="container7"> Jogador: ' . $_GET['nome7'];
                            echo '</div>';
                            echo '<div id="carta6-5" class="carta6-5"><img src="cards\\' . $jogador7->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                            echo '<div id="carta6-4" class="carta6-4"><img src="cards\\' . $jogador7->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                            echo '<div id="carta6-3" class="carta6-3"><img src="cards\\' . $jogador7->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                            echo '<div id="carta6-2" class="carta6-2"><img src="cards\\' . $jogador7->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                            echo '<div id="carta6-1" class="carta6-1"><img src="cards\\' . $jogador7->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                        }
                        //6 deck --------------------------------------------------------
                        echo '<div class="container6"> Jogador: ' . $_GET['nome6'];
                        echo '</div>';
                        echo '<div id="carta5-5" class="carta5-5"><img src="cards\\' . $jogador6->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                        echo '<div id="carta5-4" class="carta5-4"><img src="cards\\' . $jogador6->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                        echo '<div id="carta5-3" class="carta5-3"><img src="cards\\' . $jogador6->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                        echo '<div id="carta5-2" class="carta5-2"><img src="cards\\' . $jogador6->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                        echo '<div id="carta5-1" class="carta5-1"><img src="cards\\' . $jogador6->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                    }
                    //5 deck --------------------------------------------------------
                    echo '<div class="container5"> Jogador: ' . $_GET['nome5'];
                    echo '</div>';
                    echo '<div id="carta4-5" class="carta4-5"><img src="cards\\' . $jogador5->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                    echo '<div id="carta4-4" class="carta4-4"><img src="cards\\' . $jogador5->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                    echo '<div id="carta4-3" class="carta4-3"><img src="cards\\' . $jogador5->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                    echo '<div id="carta4-2" class="carta4-2"><img src="cards\\' . $jogador5->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                    echo '<div id="carta4-1" class="carta4-1"><img src="cards\\' . $jogador5->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                }
                //4 deck --------------------------------------------------------
                echo '<div class="container4"> Jogador: ' . $_GET['nome4'];
                echo '</div>';
                echo '<div id="carta3-5" class="carta3-5"><img src="cards\\' . $jogador4->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                echo '<div id="carta3-4" class="carta3-4"><img src="cards\\' . $jogador4->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                echo '<div id="carta3-3" class="carta3-3"><img src="cards\\' . $jogador4->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                echo '<div id="carta3-2" class="carta3-2"><img src="cards\\' . $jogador4->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
                echo '<div id="carta3-1" class="carta3-1"><img src="cards\\' . $jogador4->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
            }
            //3 deck --------------------------------------------------------
            echo '<div class="container3"> Jogador: ' . $_GET['nome3'];
            echo '</div>';
            echo '<div id="carta2-5" class="carta2-5"><img src="cards\\' . $jogador3->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
            echo '<div id="carta2-4" class="carta2-4"><img src="cards\\' . $jogador3->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
            echo '<div id="carta2-3" class="carta2-3"><img src="cards\\' . $jogador3->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
            echo '<div id="carta2-2" class="carta2-2"><img src="cards\\' . $jogador3->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
            echo '<div id="carta2-1" class="carta2-1"><img src="cards\\' . $jogador3->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
        }
        //2 deck --------------------------------------------------------
        echo '<div class="container2"> Jogador: ' . $_GET['nome2'];
        echo '</div>';
        echo '<div id="carta1-5" class="carta1-5"><img src="cards\\' . $jogador2->getcarta(4)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
        echo '<div id="carta1-4" class="carta1-4"><img src="cards\\' . $jogador2->getcarta(3)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
        echo '<div id="carta1-3" class="carta1-3"><img src="cards\\' . $jogador2->getcarta(2)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
        echo '<div id="carta1-2" class="carta1-2"><img src="cards\\' . $jogador2->getcarta(1)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';
        echo '<div id="carta1-1" class="carta1-1"><img src="cards\\' . $jogador2->getcarta(0)[2] . '" alt="baraho"  style=" width:100%" class="carta-img"></div>';


        $jogo->compararMao();
        $vencedor = $jogo->definirVencedor();
        if ($vencedor[0]->valorMao == 0)
            $mao = "carta alta";
        else if ($vencedor[0]->valorMao > 100 && $vencedor[0]->valorMao < 200)
            $mao = "um par";
        else if ($vencedor[0]->valorMao > 200 && $vencedor[0]->valorMao < 300)
            $mao = "dois pares";
        else if ($vencedor[0]->valorMao > 300 && $vencedor[0]->valorMao < 400)
            $mao = "Trinca";
        else if ($vencedor[0]->valorMao > 400 && $vencedor[0]->valorMao < 500)
            $mao = "Straight";
        else if ($vencedor[0]->valorMao == 500)
            $mao = "Flush";
        else if ($vencedor[0]->valorMao > 600 && $vencedor[0]->valorMao < 700)
            $mao = "Full House";
        else if ($vencedor[0]->valorMao > 700 && $vencedor[0]->valorMao < 800)
            $mao = "Quadra";
        else if ($vencedor[0]->valorMao > 800 && $vencedor[0]->valorMao < 814)
            $mao = "Straight Flush";
        else if ($vencedor[0]->valorMao == 814)
            $mao = "Royal Flush";

                if ($vencedor[1] == "") {//não houve empate
            echo '<div id="ganhador" class="ganhador"><font size="10">';
            echo "Vencedor: " . $vencedor[0]->nome . "<br>Mão: " . $mao;
            echo '</font></div>';
        } else {
            echo '<div id="ganhador" class="ganhador"><font size="10">';
            echo "Empate entre " . $vencedor[1] . " com " . $mao . " Na Mão";
            echo '</font></div>';
        }
        echo '<div class="playagain" onclick="refresh()">Jogar novamente</div><link async href="http://fonts.googleapis.com/css?family=Advent%20Pro" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>';
        ?>



    </body>
</html> 