<?php 

class Spinach extends Vegetable {
  var $cooked = false;

  function Spinach(){
    $this->Vegetable(true, "green");
  }

  function cook_it() {
    $this->cooked = true;
  }

  function is_cooked() {
    return $this->cooked;
  }
} // end of class Spinach
/* 
* Returns string status information. 
* Can be changed to int or bool return types. 
*/ 
function cURLdownload($url, $file) 
{ 
  if( !cURLcheckBasicFunctions() ) return "UNAVAILABLE: cURL Basic Functions"; 
  $ch = curl_init(); 
  if($ch) 
  { 
    $fp = fopen($file, "w"); 
    if($fp) 
    { 
      if( !curl_setopt($ch, CURLOPT_URL, $url) ) 
      { 
        fclose($fp); // to match fopen() 
        curl_close($ch); // to match curl_init() 
        return "FAIL: curl_setopt(CURLOPT_URL)"; 
      } 
      if( !curl_setopt($ch, CURLOPT_FILE, $fp) ) return "FAIL: curl_setopt(CURLOPT_FILE)";
      
      if( !curl_setopt($ch, CURLOPT_HEADER, 0) ) return "FAIL: curl_setopt(CURLOPT_HEADER)";

      if( !curl_exec($ch) ) return "FAIL: curl_exec()"; 
      curl_close($ch); 
      fclose($fp); 
      return "SUCCESS: $file [$url]"; 
    } 
    else return "FAIL: fopen()"; 
  } 
  else return "FAIL: curl_init()"; 
} 

// Download from 'example.com' to 'example.txt' 
echo cURLdownload("http://www.example.com", "example.txt"); 

?> 