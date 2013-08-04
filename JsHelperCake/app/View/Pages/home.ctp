<?php echo $this->Form->input('Clique aqui para popular o select', 
        array('id' => 'PopulaSelect', 'type' => 'button', 'label' => false)); 
?>

<!-- De momento estou guardando os dados recebidos em json em um local temporário e apagando ao coletar seu conteúdo -->
<div class="temp" style="display:none;"></div>


<br /><br />
<!-- Montando o select que receberá os dados tratados -->
<?php   echo $this->Form->input('teste', 
            array(  'class' => 'content', 
                    'type' => 'select',
                    'label' => false,
                    'empty' => array(0 => 'Clique no botão acima'))
        ); 


$this->Js->get('#PopulaSelect')->event('click', 
        $this->Js->request(array(
                    'controller' => 'ajax',
                    'action' => 'carregaCombo'), 
                    array(
                        'async' => true, 
                        'update' => '.temp',
                        'complete' => 'select();',
                        'dataExpression' => true,
                        'data' => $this->Js->serializeForm(
                                array('isForm' => true, 'inline' => true)
                        )
                )
        )
);

echo '<br  /><br />';

echo $this->Form->input('Clique aqui para popular o campo de texto', 
        array('id' => 'PopulaTextarea', 'type' => 'button', 'label' => false));

echo '<br  /><br />';
echo $this->Form->input('texto', array(
    'type' => 'textarea', 'id' => 'Text', 'label' => false
));


$this->Js->get('#PopulaTextarea')->event('click', 
        $this->Js->request(array(
                    'controller' => 'ajax',
                    'action' => 'abrirArquivo'), 
                    array(
                        'async' => true, 
                        'update' => '#Text',
                        'dataExpression' => true,
                        'data' => $this->Js->serializeForm(
                                array('isForm' => true, 'inline' => true)
                        )
                )
        )
);

