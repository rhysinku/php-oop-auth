<?php


function validateInputs($inputData , $requiredFields){
    $processedData = [];
    $errors = [];

    foreach ($requiredFields as $field){
        if (empty($inputData[$field])){
            $errors[] = ucfirst($field) . ' is required';
        }else{
            $processedData[$field] = trim($inputData[$field]);
        }
    }

    return [
        'status'=> !empty($errors),
        'data' => $processedData,
        'errors' => $errors
    ];

}



    function isEmptyInput($inputFields){
        $errors  = [];
        foreach($inputFields as $input){
          if (empty($input))  {
            $errors[] = ucfirst($input) . ' is required';
          }
        }    

        return [
            'status' => !empty($errors),
            'errors' => $errors
        ];
    }