
<iframe src="http://www.google.com/talk/service/badge/Show?tk=z01q6amlqjr106c52prp4q6rf1hmdngupotptukcj4pt6iieib71nvcrb5vkavr8db1dn4sd6eah008j78aa287pqcjbf8qdokrkal6k8r935g93o17i6djgsq898fdp1v97qhlcc7hd7e6gp4ropgkhvo5dngmcc6v3oluqjtlnk4c3t828gv09jkn3a48umto&amp;w=200&amp;h=60" frameborder="0" allowtransparency="true" width="200" height="60"></iframe>
<br />Google talk andrecardosodev@gmail.com<br />

<?php
/* Status do GTalk */

// na variável $status = file("URL") coloque a URL correspondente ao seu login no GTalk:
$status = file ("http://www.google.com/talk/service/badge/Show?tk=z01q6amlqjr106c52prp4q6rf1hmdngupotptukcj4pt6iieib71nvcrb5vkavr8db1dn4sd6eah008j78aa287pqcjbf8qdokrkal6k8r935g93o17i6djgsq898fdp1v97qhlcc7hd7e6gp4ropgkhvo5dngmcc6v3oluqjtlnk4c3t828gv09jkn3a48umto&amp;w=200&amp;h=60");
/*foreach ($status as $line_num => $line) {
    echo "Linha #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br>\n";
} */
//echo $status[57]{0};

// Como o meu apache está com lang=english, a resposta da URL é AVAILABLE, e não  "LIVRE" como nos browser com lang=pt-br....
//por isso a gente testa o status = "A":
if ($status[57]{0} == "A"){
   echo "Atendimento ON-Line";
//return TRUE;
} else {
   echo "Atendimento Off-Line";
}

/*
Pronto, agora o script PHP retorna se você está online ou offline automaticamente. Assim você pode escrever ou não no site o seu status.
Sugestão 1: Faça deste código um método de um objeto PHP.
Sugestão 2: Tenha um serviço de atendimento online c/ muitas contas GTalk (muitos atendentes) fazendo com que o PHP retorne o link para conversar com o atendente que estiver sempre online. Instrua-os a colocar "Ocupado" assim que receber um cliente no atendimento! 
*/
