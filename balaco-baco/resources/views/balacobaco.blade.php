<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> 

    * {
        display; flex;
        justify-content: center; 
    } 

    p {
        text-align: center;
        margin-left: 30%;
        margin-right: 30%;
        font-size: 20px; 
        color: black;   
    }

    .fundo{
        background-color: #a4908c;
        margin-left: 30%;
        margin-right: 30%; 
        border: 2px, solid, #a4908c; 
        border-radius: 10px
    }     

    body{
        background-image: url(https://p2.trrsf.com/image/fget/cf/1200/1200/middle/images.terra.com/2023/12/20/1032664925-design-sem-nome-19-1.png);
        background-repeat: no-repeat;
        background-size: cover;
        }

    form{
        color: black;
        margin-top: 5px;
        margin-bottom: 50px; 
    }

    input{
        margin: 5px;
    }

    button{
        margin: 5px;
    }

    .container{
        margin: 5px;
        align-items: center;
        margin-left: 33%;
        margin-top: 5%;
    }

    .form-container{
        margin: 5px;
        border: 2px, solid, #a4908c;
        border-radius: 10px;
        margin-right: 50%;
        background-color: #a4908c;
    }

    .form-group{
        margin: 5px;
        margin-left: 5px;
    }

    .form-control{
        margin: 5px;
    }

    .btn{
        margin: 5px;
    }

    h1{
        color: black;
    }

</style> 
</head>
<body>

<center> <h1> Luan Pereire - Fazendeiro Lyrics </h1> </center>

    <div class = 'fundo'> 
    
<p> 

Ela me viu passando na minha Dodge Ram
Já correu me procurar no Instagram
Curtiu minhas foto e falou que é minha fã
Pelo jeito, ela tá querendo ahn
Pelo jeito, ela tá querendo ahn
Pelo jeito, ela tá querendo quem?

</p>

<p>

(Fazendeiro)
Ela se amarra num cowboy porque playboy não tem dinheiro
(Fazendeiro)
Ela quer minha pegada bruta com aroma de paieiro
(Fazendeiro)
Ela se amarra num cowboy porque playboy não tem dinheiro
(Fazendeiro)
Ela quer minha pegada bruta com aroma de paieiro

</p>

<p> 

Ela me viu passando na minha Dodge Ram
Já correu me procurar no Instagram
Curtiu minhas foto e falou que é minha fã
Pelo jeito, ela tá querendo ahn
Pelo jeito, ela tá querendo ahn
Pelo jeito, ela tá querendo quem?

</p>

<p> 

(Fazendeiro)
Ela se amarra num cowboy porque playboy não tem dinheiro
(Fazendeiro)
Ela quer minha pegada bruta com aroma de paieiro
(Fazendeiro)
Ela se amarra num cowboy porque playboy não tem dinheiro
(Fazendeiro)
Ela quer minha pegada bruta com aroma de paieiro

</p>

<p>

E pra você não esquecer
(É mais uma do LP)
É mais uma do LP

</p>

<p> 
Três, dois
Joga a mão no céu, no céu, no céu e canta: Chama o fazendeiro
Fazendeiro
</p>

<p> 
Ela se amarra num cowboy porque playboy não tem dinheiro
(Fazendeiro) quem gostou, dá um grito! 

</p>

</div>


<center>

<div class="container">
        <div class="form-container">

        <h1> 🤩 Faça o Cadastro para Acompanhar o Maior Artista da Década 🤩 </h1> 

            <form action="/pou" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name"><strong>Nome:</strong></label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email"><strong>Email:</strong></label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password"><strong>Senha:</strong></label>
                    <input type="password" name="password" id="password" class="form-control"></input>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>
    </div>

</center>
    
</body>
</html>