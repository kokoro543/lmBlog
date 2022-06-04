<?php
declare(strict_types=1);

namespace Form\Form;

class FormElement extends Form {

    public function __construct(){
        parent::__construct();

        $fullname = new Element('fullname');
        $fullname->setLabel('Hello World!');
        $fullname->setLabelAttributes([
            'id' => 'fullname',
            'class' => 'control-label'
        ]);
        $fullname->setAttributes([
            'type'  => 'text',
            'class' => 'form-control',
            'id'    => 'fullname',
            'placeholder'   =>  'Hello World eingaben!'
        ]);

        $this->add($fullname);
    }
}
