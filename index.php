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
            margin: 0; /* Removendo margens padrão */
            font-family: 'PT Sans', sans-serif; /* Usando a fonte PT Sans */
        }

        #box {
            background-color: rgba(255, 255, 255, 0.1); /* Usando rgba para transparência */
            padding: 10px;
            border: 1px solid #6f6363;
            border-radius: 10px;
            display: flex;
            flex-direction: column; /* Mudando para coluna em telas menores */
            max-width: 90%; /* Usando percentual para largura máxima */
            min-height: 500px;
            margin: 20px; /* Adicionando margem */
        }

        #left, #right {
            padding: 10px;
            text-align: center; /* Centralizando texto */
        }

        #foto {
            width: 200px;
            height: 200px;
            margin: auto; /* Centralizando imagem */
        }

        #right {
            min-width: 350px;
        }

        #right h1 {
            font-size: 1.5rem; /* Tamanho de fonte responsivo */
            background-color: #97544e;
            margin: 0; /* Removendo margens padrão */
        }

        #about {
            background-color: #97544e;
            margin-bottom: 10px; /* Adicionando espaçamento inferior */
            padding: 10px;
            color: white; /* Definindo cor do texto */
        }

        body {
            background-image: url('https://images.tcdn.com.br/img/img_prod/690950/mesa_de_escritorio_hawai_branco_90cm_pes_madeira_1019_1_eb60bce7e3d863433a1357a04d6e5d22.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0; /* Removendo margens padrão */
        }

        /* Media Query para telas menores */
        @media screen and (max-width: 768px) {
            #box {
                max-width: 100%; /* Largura máxima de 100% para telas menores */
            }
            #left, #right {
                padding: 5px; /* Reduzindo o padding para telas menores */
            }
            #foto {
                width: 150px; /* Reduzindo o tamanho da imagem para telas menores */
                height: 150px;
            }
        }
    </style>
</head>
<body>
   <div id="box">
        <div id="left">
            <img id="foto" class="rounded" src="./img/Foto pessoal.png" alt="Foto Pessoal">  
        </div>
        <div id="right">
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
                Essa é a minha primeira experiência com programação, incluindo GitHub.
            </div>
            <div id="about">
                Contudo, é a primeira vez em que estou aprendendo tudo sobre criação de site e como subir no GitHub.
            </div>
        </div>
    </div>
</body>
</html>
