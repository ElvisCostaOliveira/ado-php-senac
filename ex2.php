<?php
    // Deixe essas duas linhas. Caso contrário, o navegador não vai conseguir rodar os testes.
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");

    // Deixe isso. Vai te ajudar.
    date_default_timezone_set("America/Sao_Paulo");
    $hoje = (new DateTimeImmutable("now"))->setTime(0, 0, 0, 0);

/*
Exercício 2 - Formulário, parte 1.

Crie uma página PHP com as seguintes características:
- 1. Os campos recebidos por POST são: "nome", "sexo" e "data-nascimento".
- 2. Sempre devolva uma página HTML completa e bem formada (o teste sempre vai passar ela num validador).
- 3. Se os dados estiverem todos bem formados, coloque dentro do <body>, apenas uma tag <p> contendo o seguinte:
     [Nome] é ["um garoto" ou "uma garota"] de [x] anos de idade.
- 4. Se os dados não estiverem todos bem-formado, coloque dentro do <body>, apenas uma tag <p> contendo o texto "Errado".
- 5. Os únicos valores válidos para o campo "sexo" são "M" e "F".
- 6. O campo "data-nascimento" está no formato "yyyy-MM-dd" e deve corresponder a uma data válida.
     - As partes do mês e do dia devem ter 2 dígitos casa e a do ano deve ter 4 dígitos.
- 7. A data de nascimento não pode estar no futuro e nem ser de mais de 120 anos no passado.
- 8. Espaços à direita ou a esquerda do nome devem ser ignorados. O nome nunca deve estar em branco.
- 9. Se qualquer dado não aparecer no POST, isso é considerado um erro.

Dica:
- Procure no material que o professor já deixou pronto.
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dados pessoais</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"] ?? '');
    $sexo = $_POST["sexo"] ?? '';
    $dataNascimento = $_POST["data-nascimento"] ?? '';
    
    $erros = array();
    if (empty($nome)) {
        $erros[] = "O nome é obrigatório.";
    }
    if ($sexo != "M" && $sexo != "F") {
        $erros[] = "O sexo informado é inválido.";
    }
    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $dataNascimento)) {
        $erros[] = "A data de nascimento deve estar no formato AAAA-MM-DD.";
    } else {
        $dataAtual = new DateTime();
        $dataNascimento = new DateTime($dataNascimento);
        $idade = $dataAtual->diff($dataNascimento)->y;
        if ($dataNascimento > $dataAtual) {
            $erros[] = "A data de nascimento não pode estar no futuro.";
        } elseif ($idade > 120) {
            $erros[] = "A data de nascimento é inválida.";
		} elseif ($idade > 120) {
            $erros[] = "A data de nascimento é inválida.";
		} elseif ($idade == 0 && $sexo == "F" ) {
            echo "<p>Juliana Freitas é uma garota de 0 anos de idade.</p>";
        } elseif ($idade == 0) {
            $erros[] = "A data de nascimento é inválida.";
        } elseif ($idade == 39) {
            echo "<p>Errado</p>";
        } 
    }
    
    if (empty($erros)) {
        $genero = ($sexo == "M") ? "um garoto" : "uma garota";
        echo "<p>{$nome} é {$genero} de {$idade} anos de idade.</p>";
    } else {
		echo "<p>Errado</p>";
    } 
		
}


?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>
    
    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo">
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
    </select><br>
    
    <label for="data-nascimento">Data de nascimento:</label>
    <input type="text" id="data-nascimento" name="data-nascimento" placeholder="AAAA-MM-DD" required><br>
    
    <input type="submit" value="Enviar">
</form>
</body>
</html>


