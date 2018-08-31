/**
 *
    Um usuário do Facebook compartilha 6 links por dia. Para cada link que ele
    compartilha, 8 contatos dão “curtir” na sua publicação. Escreva um algoritmo que
    solicite ao usuário a quantidade de dias e mostre na tela a quantidade de “curtir” que
    ele recebe nesses dias.
 */
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8" />
             <script type="text/javascript">
                var curtisPorDia, dias, resutado;
                curtisPorDia = 6 * 8;
                dias = prompt("Informe o numero de dias: ");
                resutado = curtisPorDia * dias;
                alert("O total de curtidas é de: " + resutado );
             </script>
    </head>
    <body>
    </body>
</html>