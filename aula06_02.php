
    <!--
    Criar um formulário com dois campos para digitar dois números
    Apresentar as operações aritméticas e de comparação entre esses dois números
-->
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<cabeça>
<meta charset="UTF-8">
<title>Operações</title>
</head>
<corpo>
<h3>Operações com dois números</h3>
<input id="n1" type="number" placeholder="Número 1">
<input id="n2" type="number" placeholder="Número 2">
<button onclick="calc()">Calcular</button>
<div id="res"></div>

<script>
função calc(){
deixe a = +n1.valor, b = +n2.valor;
res.innerHTML = `
${a}+${b}=${a+b}<br>
${a}-${b}=${ab}<br>
${a}×${b}=${a*b}<br>
${a}÷${b}=${b? (a/b):"erro"}<br>
Comparação: ${a>b?"N1 maior":a<b?"N2 maior":"Iguais"}
`;
}
</script>
</corpo>
</html>