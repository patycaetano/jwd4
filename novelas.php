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
    <img src="fotos/cheias.jpg" width="400" height="205" />
</div>

<h1>Cadastro de Novelas</h1>
   <hr size=4 color=black widht=200>
   <br>
   <form method="post" id="cadastro" action="novelascadastro.php">

   <p> <label for="titulo">Título:</label><input type="text" name="titulo" id="titulo" size="40" maxlenght="100" placeholder="Digite o título da serie"></p>
   <p> <label for="atrizprotagonista">Atriz Protagonista:</label><input type="text" name="atrizprotagonista" id="atrizprotagonista" size="30" maxlenght="100" placeholder="Digite o nome da atriz protagonista"></p>
   <p> <label for="atorprotagonista">Ator Protagonista:</label><input type="text" name="atorprotagonista" id="atorprotagonista" size="30" maxlenght="100" placeholder="Digite o nome do ator protagonista"></p>
   <p> <label for="totalepisodios">Total de episodios:</label><input type="number" name="totalepisodios" id="totalepisodios" size="60" maxlenght="100" placeholder="Digite o total de episodios"></p>
   <p>Sinopse</p> <p><textarea name="sinopse" id="sinopse" class="textarea"></textarea></p>
</fieldset>
   <br>
   <header class="botao">
<input type="image" src="fotos/botao.jpg" style="border: 0;" height="32" width="181" class="botao">
</header>
</form>
<div class="rodapenov"><img src="fotos/forca.jpg"widht="358"height="250" > </div>
</div>
</body>
</html> 