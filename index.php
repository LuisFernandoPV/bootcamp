<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio - Luis Fernando</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
     body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
     }

    #box{
            background-color: #ffffff1c;
            padding: 10px;
            border: 1px solid #6f6363;
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            min-width: 1000px;
            min-height: 500px;
    }

    .flex-divised{
        flex: 1;
    }

    .flex-center{
        display: flex;
        align-items: center;
        justify-content: center;

    }

    #foto{
        width: 200px;
        height: 200px;
        
    }

    .rounded{
        border-radius: 50%;
    }

    #left,#right{
        padding: 10px;
    }

    #right{
        min-width: 350px;

    }

    #right h1{
        text-align: center;
        font-family: PT Sans;
        background-color: #97544e;
    }

    #about{
        font-family: Comfortaa;
        background-color: #97544e;

    }

    body{
        background-image: url('https://images.tcdn.com.br/img/img_prod/690950/mesa_de_escritorio_hawai_branco_90cm_pes_madeira_1019_1_eb60bce7e3d863433a1357a04d6e5d22.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center;
    }

    </style>
    

    </style>
</head>
<body class="flex-center">
   <div id="box">
        <div id="left" class="flex-divised flex-center">
        <img id="foto" class="rounded" src="./img/Foto pessoal.png" alt="Foto Pessoal">    

        </div>
        <div id="right" class="flex-divised"> 
        <h1>Sobre mim...</h1>
        <div id="about">
            Meu nome é Luis Fernando, tenho 16 anos, gosto de praticar esportes como futebol, basquete e vôlei.
                </div>
            <div id="about">
            Atualmente estou cursando desenvolvimento de sistemas e estou no 2 ano do Ensino Médio.
            </div>
            
            <div id="about">
            Eu moro com meus pais, minha mãe se chama Rozane e meu pai se chama João. Sou irmão caçula, nenhum dos meus irmãos moram comigo, pois cada um tem sua casa.
            </div>

            <div id="about">
            Essa é a minha primeira experiência com programação, incluindo github.
            </div>

            <div id="about">
            Contudo, é a primeira vez em que estou aprendendo tudo sobre criação de site e como subir no git.
            </div>

            <div> 
        </body>
    </html>