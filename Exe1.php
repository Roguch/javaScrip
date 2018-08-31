/**
 * Exercicios 1
 *  Marcos comprou um ingresso para ver um show e pagou R$170,00. Só que na última
    hora surgiu um imprevisto, e Marcos não poderá mais ir. Ele anunciou no Twitter que
    estava vendendo seu ingresso, e recebeu várias propostas. Escreva um algoritmo que
    solicite a Marcos que informe o valor de uma proposta e depois mostre na tela a
    diferença entre o valor que ele pagou pelo ingresso e o valor da proposta recebida.

 */
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <script type="text/javascript">
                var valorIngresso, proposta, diferenca;
                valorIngresso = 170.00;
                proposta = prompt("Informe uma proposta: ");
                diferenca = proposta - valorIngresso;
                alert("Adiferença é de: " + diferenca + " reais");
            </script>
    </head>
    <body>
    </body>
</html>