<?php

namespace src\Models\Form;

class Form {
    public function __construct() { }

    public function getInputText($name, $type, $id,$label,$placeholder = ""){
        return '<div class="form-group">
    <label for="'.$id.'">'.$label.'</label>
    <input type="'.$type.'" class="form-control" id="'.$id.'" name="'.$name.'" placeholder="'.$placeholder.'">
        </div>';
    }

    public function getTextArea($id,$row,$label){
        return '<div class="form-group">
    <label for="'.$id.'">'.$label.'</label>
    <textarea class="form-control" id="'.$id.'" rows="'.$row.'" ></textarea></div>';
    }

    public function getButton($type, $value, $class){
        return '<button type="'.$type.'" class="'.$class.'">'.$value.'</button>';
    }

}

//$form = new Form();
//echo $form->getInputText("email", "email", "email", "Email : ");
//echo $form->getInputText("password", "password", "password","Mot de passe : ");
//echo $form->getButton("button", "Enregistrer", "btn btn-success");
