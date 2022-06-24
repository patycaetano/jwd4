<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container">
    <img src="fotos/stranger.jpg" width="400" height="205" />
</div>

<h1>Cadastro de Series</h1>
   <hr size=4 color=black widht=200>
   <br>
   <form method="post" id="cadastro" action="cadastro.php">

   <p> <label for="titulo">Título:</label><input type="text" name="titulo" id="titulo" size="40" maxlenght="100" placeholder="Digite o título da serie"></p>
   <p> <label for="atrizprincipal">Atriz Principal:</label><input type="text" name="atrizprincipal" id="atrizprincipal" size="30" maxlenght="100" placeholder="Digite o nome da atriz principal"></p>
   <p> <label for="atorprincipal">Ator Principal:</label><input type="text" name="atorprincipal" id="atorprincipal" size="30" maxlenght="100" placeholder="Digite o nome do ator principal"></p>
   <p> <label for="qtdtemporadas">Quantidade de Temporadas:</label><input type="number" name="qtdtemporadas" id="qtdtemporadas" size="60" maxlenght="100" placeholder="Digite a quantidade de temporadas"></p>
   <p> <label for="totalepisodios">Total de episodios:</label><input type="number" name="totalepisodios" id="totalepisodios" size="60" maxlenght="100" placeholder="Digite o total de episodios"></p>
   <p>Sinopse</p> <p><textarea name="sinopse" id="sinopse" class="textarea"></textarea></p>
</fieldset>
   <br>
   <header class="botao">
<input type="image" src="fotos/botao.jpg" style="border: 0;" height="32" width="181" class="botao">
</header>
</form>
<div class="rodape"><img src="fotos/zumbi.jpg"widht="358"height="100" > </div>
</div>
</body>
</html> 