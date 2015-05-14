<?php

function getHttpResponse($path, $data){  
  $options = array(
      'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data),
      ),
  );
  $context  = stream_context_create($options);
  $result = file_get_contents('http://dbiweb.sfgov.org/dbipts/'.$path,
                               false, $context);
  return $result;
}

function getResourcePath($start, $end, $result){
  $substr_html_body = strstr($result, $end, true);

  $start_pos = strrpos($substr_html_body, $start, -1);

  $path = substr($substr_html_body, $start_pos + strlen($start));

  return $path;
}

$path = 'Default2.aspx?page=addressquery';
$data = array(
            '__EVENTTARGET'           => '', // or should it be the value from the dopostback onclick event?
            '__EVENTARGUMENT'         => '', // or should it be the value from the dopostback onclick event?
            '__VIEWSTATE'             => '/wEPDwUKLTE3MTc5MzE3Mg9kFgICAw9kFgICAQ9kFgJmD2QWAgIJDw9kFgIeB29uY2xpY2sFJndpbmRvdy5vcGVuKCcvRGJpcHRzL3Nmc3RyZWV0cy5hc3B4Jyk7ZGQ42ekWHlzDbrWot8Nbrkt9Rmw5cg==',
            '__VIEWSTATEGENERATOR'    => 'EBE5C146',
            '__EVENTVALIDATION'       => "/wEWPQLnz/3jAQLzu/YXAu3SzZ8LAor9kOMJAvrbkdwJApe0y6wFAqW0w6wFApS0i6wFAvrbkdwJAqW0q6wFAqW086wFAqS0q6wFAqS0+6wFAqS026wFAqS086wFAqe0l60FAqe0h6wFAqe086wFAqe0p6wFAqe0y6wFAqe0w6wFAqe0z6wFAqe0n6wFAqa086wFAqG0m60FAqC0l60FAqO0i6wFApK0l60FApK0q6wFAp60t6wFAp60+6wFApm0o6wFApm0l60FApu0w6wFApu0+6wFAoq0r6wFAoq036wFAoq0z6wFAoq0t6wFAoq0q6wFAoq0k60FAoq0y6wFApS0t6wFApS036wFApe0r6wFApe096wFApe036wFApe0+6wFApa0h6wFApa0q6wFApa0x6wFApG0+6wFApC0t6wFApO0r6wFArO0r7MFApO0r6wFApO0l60FAvjRwJwEAo2J+JwMAp69taMJAtuf6KoPs58y/5eLcxo7fgH+NVgwT/i97fw=",
            'InfoReq1$txtStreetNumber' => '',
            'InfoReq1$txtStreetName'  => '',
            
            'InfoReq1$btnStreetList'  => 'Listing Of Valid Street Names In San Francisco',
            'InfoReq1$txtUnit'        => '',
            
            'InfoReq1$txtBlock'       => '0259',
            'InfoReq1$txtLot'         => '026',
            'InfoReq1$cmdSearch'      => 'Search', 
          );
// submit first form with block & lot #
$result =  getHttpResponse($path, $data);



$start = '<a href="';
$end = '" id="InfoReq1_lnkElectrical"';
$path2 = getResourcePath($start, $end, $result);
$data2 = array(
          '__VIEWSTATE'             => '/wEPDwUKLTE3MTc5MzE3Mg9kFgICAw9kFgICAQ9kFgJmD2QWDAIBDw8WAh4EVGV4dAURNTU1IENBTElGT1JOSUEgU1RkZAIDDw8WAh8ABQowMjU5IC8gMDI2ZGQCDw9kFgICAQ88KwALAGQCEQ9kFgICAQ88KwALAGQCEw9kFgICAQ88KwALAGQCFQ9kFgICAQ88KwALAGRkF/Z3iGbOqi6Avi1HMiwqQO3qn2M=',
          '__VIEWSTATEGENERATOR'    => 'EBE5C146',
        );
// click 'Electrical Permits' link from first returned resource
// not sure if I should set cookie values or use the AsyncHttpClient request header?? 
$result2 =  getHttpResponse($path2, $data2); 

/*
* Function to parse HTML and grab table data

* Assign each row of electrical permits table to a numeric array 
* containing an associative array of table_header=>row_value pairs

*Convert the numeric array to a json object and return it 

*/

