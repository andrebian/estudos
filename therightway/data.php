<?php

$andre = '05. 09. 1986';
$fabiane = '24. 10. 1988';

$hoje = (string)date('d. m. Y');
$hoje = \DateTime::createFromFormat('d. m. Y', $hoje);


$andre = \DateTime::createFromFormat('d. m. Y', $andre);
$fabiane = \DateTime::createFromFormat('d. m. Y', $fabiane);

// cria uma cópia de $start e adiciona um mês e 6 dias
$end = clone $hoje;

$andreDays = $end->diff($andre);
$fabianeDays = $end->diff($fabiane);

echo $andreDays->format('Andre Voce possui %y ano(s), %m mes(es), %d dias (total: %a dias) de vida') . "<br />";
echo $fabianeDays->format('Fabiane Voce possui %y ano(s), %m mes(es), %d dias (total: %a dias) de vida') . "<br />";

echo 'Fabiane voce eh '.((int)$andreDays->format('%a') - (int)$fabianeDays->format('%a')).' dias mais nova que o Andre';

if ($andre < $fabiane) {
    echo "<br />Andre é mais velho que Fabiane<br /><br />";
}

// mostra todas as quintas-feiras entre $start e $end
$periodInterval = \DateInterval::createFromDateString('first thursday');
$periodIterator = new \DatePeriod($andre, $periodInterval, $end, \DatePeriod::EXCLUDE_START_DATE);

$dias = '';
$totalDias = 0;
foreach($periodIterator as $date)
{
    //mostra cada data no período
    $dias .= $date->format('d/m/Y') . " | ";
    $totalDias++;
}

echo 'Exibindo todas as quintas-feiras da vida de Andre (Total de '.$totalDias.')<br />';
echo $dias;

?>
