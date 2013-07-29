<?php

    echo $this->Session->flash();
    echo $this->Session->flash('auth');
    
    echo $this->Form->create('User');
    echo $this->Form->inputs(array('legend' => 'Realize seu login', 'username', 'password'));
    echo $this->Form->end('Login');