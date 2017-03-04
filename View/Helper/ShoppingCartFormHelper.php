<?php

App::uses('FormHelper', 'View/Helper');

class ShoppingCartFormHelper extends FormHelper
{
    public function inputDefaults($defaults = null, $merge = false) {
        $_defaults = array(
            'div' => array('class' => 'form-group'),
            'class' => array('form-control'),
            'label' => array('class' => 'control-label'),
            'error' => array(
                'attributes' => array('wrap' => 'span', 'class' => 'help-inline'),
                'class' => 'has-error'
            )
        );

        $_defaults += $defaults;

        parent::inputDefaults($_defaults, $merge);
    }
}