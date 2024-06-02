<?php

/**
 * Function: send HTTP response of $data variable. 
 * @param array $data
 * 
 * @return [type]
 */
function send_http_response($data)
{

   $data_response = [
      "results" => $data,
      "success" => true
   ];

   $data_json = json_encode($data_response, JSON_PRETTY_PRINT); // json string

   header("Content-Type: application/json"); // alert the browser of json string in coming

   echo $data_json; // send response

};