<?php

function isChecked($inputName, $value){
    if(isset($_POST[$inputName]) && is_array($_POST[$inputName]) && in_array($value, $_POST[$inputName])){
        echo "Checked";
    }
}

function displayOptions($options, $selectedValues){
foreach($options as $option){
    $option = strtolower($option);
    $selected = '';
    if(in_array($option, $selectedValues)){
        $selected = 'selected';
    }
    printf("<option value='%s' %s>%s</option>",$option,$selected,ucwords($option));
}
}