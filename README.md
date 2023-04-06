# Exercício - Introdução ao PHP

Exercícios de Introdução ao PHP da disciplina de Linguagens de Servidor do Senac.

## O que fazer?

Você deve mexer apenas no arquivo `ex1.php`, `ex2.php` e `nomes.js`.
Há apenas 2 exercícios com códigos PHP a serem desenvolvidos.
Vocês devem desenvolver o conteúdo dos arquivos PHP conforme a descrição que se encontra em cada um deles.

Comece pelo `nomes.js` que fornece a lista com o nome dos alunos (exercício 0). Se você não conseguir fazer isso corretamente, sua nota será zero independente de todo o resto.

Os nomes dos arquivos PHP não devem ser trocados (se você fizer isso, os testes não vão te perdoar).
No entanto, você pode criar outras funções que/se julgar necessário.
Não é recomendado mudar o nome dos parâmetros, embora você possa fazer isso.

Faça o ADO em grupos de 1 até 4 pessoas.

## Como executar os exercícios? Como saber se o que fiz está certo?

O exercício funciona usando um framework de testes em JavaScript desenvolvido para a atividade.

Para executar e testar este ADO, basta abrir o arquivo `phpado1.html` em um navegador moderno (Chrome, Firefox, Opera, Edge, Konqueror, Safari ou Samsung Internet).
Há um pequeno formulário com um botão de executar os testes.
Clique nesse botão e veja toda a mágica dos testes acontecer!

Este botão dispara a execução de um montão de testes (exatos 330, para ser preciso).
O relatório de testes é colocado logo no fim do corpo do formulário.
Se houverem problemas, esses testes vão descrever o que foi que deu errado.

Obviamente, os arquivos `ex1.php` e `ex2.php` dados aqui falharão em todos os testes e vai te dar uma nota zero.
Não só isso, já te dará de cara uma caixa de mensagem de erro amarela com letras grandes vermelhas piscando bem chamativas dizendo que você precisa configurar o nome dos alunos (esse é o exercício 0).

O seu objetivo é editar esses arquivos PHP de forma a fazer todos os testes passarem.
Você deverá alterar estes arquivos até conseguir a nota 10 (ou até desistir de fazê-lo, mas espero que não seja o caso).
Faça EXATAMENTE o que o enunciado de cada exercício pede, nem mais e nem menos.
Além disso, qualquer coisa que os seus arquivos PHP produzirem como resposta, terá o HTML submetido ao crivo de um validador.
Se houver algum erro, os testes te dirão o que há de errado.

## E os demais arquivos?

Os testes estão no arquivo `phpado1-teste.js`.
O código responsável por gerenciar os testes está no `lib/testefw.js` e no `lib/testefw.css`.
Há também o arquivo `phpado1.html` que é o que você deve executar.
Você pode alterar o arquivo `config.js` para configurar o host, porta e caminho que você está utilizando no PHP. Mas, a menos que esteja errado por algum motivo, prefira deixar como está.
Para implementar alguns dos exercícios, você precisará usar as funções definidas no arquivo `lib/utils.js`.
Por fim, há este arquivo aqui (`README.md`) e o arquivo `LICENSE` com o qual você não precisa se preocupar.

É recomendável você deixar estes arquivos como estão, pois o professsor sempre usará os originais na correção, logo não há porque alterá-los.
Se você tiver coragem, você até pode mexer nesses arquivos para fazer algum experimento, colocar linhas de `console.log` para tentar entender como o código funciona, desmontar ou alterar pedaços para fazer debugging, etc.
No entanto, o funcionamento interno desses arquivos está em um nível bastante avançado e complexo e não é esperado que alunos que estejam recém-começando em JavaScript os entendam.
De toda forma, se quiser fuçar neles, fique a vontade.
Apenas sempre tenha em mãos os arquivos originais para poder se certificar de que não bagunçou nada e poder voltar atrás facilmente caso tenha bagunçado.

## Como fica a nota?

A página `phpado1.html` já calculará a nota automaticamente, da seguinte forma:

- Faça o exercício 0 antes de qualquer coisa.
  Ele se chama exercício 0 porque se você não o fizer direito, a sua nota também será 0.

- Cada exercício tem peso 5 para cada.
  Cada exercício tem a nota proporcional ao peso e ao número de testes realizados com sucesso.
  Se todos os testes no exercício forem executados com sucesso, 5 pontos são somados à nota.
  Se nenhum for executado com sucesso, nada acontece.
  Se somente alguns forem bem sucedidos, a nota proporcional à quantidade de testes do exercício e ao peso do exercício (5) será aplicada.

No entanto, há algumas observações a serem feitas:

- Se você fizer a entrega incorretamente, será penalizado em -1 ponto.

- Você só deve entregar os arquivos `ex1.php`, `ex2.php` e `nomes.js`. Vou ignorar quaisquer mudanças realizadas em outros arquivos e sempre fazer a correção com os demais arquivos originais.

- Quem tentar colocar algum tipo de malware ou código malicioso em quaisquer arquivos entregues fica com nota zero.

- **Fique atento(a) a erros que aparecerem no PHP. Códigos que não puderem ser carregados e/ou executados devido a erros sintáticos podem ocasionar uma nota zero.**

- **Scripts que travem ou não terminem de carregar nunca (por exemplo, `while (true) { /* fica preso no laço infinito. */}`) também podem ocasionar uma nota zero.**

- Se o professor encontrar alguma tentativa de burlar os testes, você vai perder pontos!

## Burlar os testes!? Como assim!?

Eis um exemplo de uma implementação sacana para tentar burlar os testes:

```js
// Este é o teste do professor.
teste("4 é menor que 7.", () => retornaMaiorNumero(4, 7), igual(7));
teste("3 é maior que 2.", () => retornaMaiorNumero(3, 2), igual(3));
```

```php
<?php
    // Esta é a implementação que visa burlar o teste.
    // Ela foi feita apenas para passar nos dois testes acima, mesmo estando
    // totalmente errada em qualquer outro caso.
    if ($_GET("a") === 4) echo "7";
    echo "3";
?>
```

Além de executar os testes automáticos, o professor também vai olhar o código procurando por coisas assim.

É claro que enquanto você estiver desenvolvendo, fazendo experimentos e debugging, você até pode fazer coisas assim.
Apenas se certifique de que no final não se esqueceu de limpar isso.

## Como fazer a entrega?

A entrega deve ser feita no Blackboard.

Coloque nele um arquivo ZIP contendo os seus arquivos `ex1.php`, `ex2.php` e `nomes.js` e nada mais além disso.
Os demais arquivos não são necessários e nem devem ser colocados, pois usarei sempre os originais.

Em caso de múltiplas entregas de um mesmo grupo de alunos, ainda que por pessoas diferentes do mesmo grupo, irei considerar apenas a última.

Quem fizer a entrega de uma forma errada (ex: arquivo RAR ao invés de ZIP, ou entregar ou enviar por e-mail ou de qualquer outra forma sem que haja uma boa justificativa para tal), vai ser penalizado em -1 ponto.
Isso, é claro, se o professor quiser e puder aceitar a entrega feita assim.
Além disso, pessoas que não realizarem a entrega da forma correta serão os últimos a terem os seus trabalhos corrigidos, isso se forem corrigidos.
