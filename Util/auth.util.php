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
        'data' => $processedData,
        'errors' => $errors
    ];

}