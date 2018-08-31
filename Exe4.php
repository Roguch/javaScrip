<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <script type="text/javascript">

            var notaInicial, numeroTweets, mediaFinal;
            notaInicial  = prompt("Media final do aluno: ");
            numeroTweets  = prompt("Numero de tweets no ano: ");
            mediaFinal   = notaInicial - Math.trunc((numeroTweets / 100));
            alert("A media final do aluno será: " + mediaFinal);

        </script>
</head>
<body>

    O mesmo aluno da questão 3 vai perder um ponto na média final da disciplina de
    algoritmos para cada 100 tweets que escrever. Escreva um algoritmo que solicite ao
    usuário a nota inicial do aluno, o número de tweets do aluno no ano, calcule a sua
    nota final e mostre na tela.

</body>
</html>