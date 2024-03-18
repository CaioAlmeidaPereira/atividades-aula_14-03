<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Arrays Associativos</title>
    <style>
        /* Estilos CSS para a página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Lançamento dos filmes</h2>
        <?php
        // Criando um array associativo especificando chaves e valores para cada elemento
        $filmes_e_generos = array(
            array("filme" => "Interestelar", "genero" => "Ficção Científica"),
            array("filme" => "O Poderoso Chefão", "genero" => "Drama"),
            array("filme" => "Vingadores: Ultimato", "genero" => "Ação"),
            array("filme" => "Cidade de Deus", "genero" => "Drama"),
            array("filme" => "Matrix", "genero" => "Ficção Científica"),
            array("filme" => "O Senhor dos Anéis: A Sociedade do Anel", "genero" => "Fantasia"),
            array("filme" => "O Lobo de Wall Street", "genero" => "Drama"),
            array("filme" => "Batman: O Cavaleiro das Trevas", "genero" => "Ação"),
            array("filme" => "A Origem", "genero" => "Ficção Científica"),
            array("filme" => "Clube da Luta", "genero" => "Drama")
        );
        ?>

        <h3>Detalhes do filme</h3>
        <ul>
            <?php
           foreach ($filmes_e_generos as $filme) {
            echo $filme['filme'] . " - " . $filme['genero'] . "<br>" ;
        }
            foreach ($filmes_e_generos as $filme) {
                if ($filme['genero'] == 'Ficção Científica') { 
                        echo "<br>" . $filme['filme'] . " - " . $filme['genero'] . "<br>";
                    
                }
            }
            ?>
        </ul>
    </div>
</body>

</html>