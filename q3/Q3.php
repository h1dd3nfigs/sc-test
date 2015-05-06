<?php
/*
$url = 'http://dbiweb.sfgov.org/dbipts/default.aspx?page=AddressData2&ShowPanel=EID';
$data = array(
              '__EVENTTARGET'		     => 'InfoReq1$btnEidShowAll',
      			  '__EVENTARGUMENT' 	   => '',
      			  '__VIEWSTATE' 		     => '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',
      			  '__VIEWSTATEGENERATOR' => 'EBE5C146',
      			  '__EVENTVALIDATION' 	 => '/wEWDAKW1ZWRCgKa0cYuAprRui4CmtG+LgKa0bIuAprRti4CmtGqLgKa0a4uAprRoi4CmtGmLgKb0cIuAuuI3OkLU8JAarijk+2vNoASz3ow2OybaVc=',
			  );

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

//$start_flag = 'EW20150501982</a>';
//$result_substr = substr($result, strpos($result, $start_flag) + strlen($start_flag));

$position_entry_4 = strpos($result,'EW20140313641');
var_dump($position_entry_4);
echo $result;
*/
// Attempt to programmatically submit first form with block & lot #
$url = 'http://dbiweb.sfgov.org/dbipts/Default2.aspx?page=addressquery';
$data = array(
          '__EVENTTARGET'           => '', // or should it be the value from the dopostback onclick event
          '__EVENTARGUMENT'         => '', // or should it be the value from the dopostback onclick event
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

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$result_up_to_electrical_permit = strstr($result, '" id="InfoReq1_lnkElectrical"', true);

$electrical_link_pos = strrpos($result_up_to_electrical_permit, '<a href="', -1);

$elec_permit_link = substr($result_up_to_electrical_permit, $electrical_link_pos + strlen('<a href="'));
var_dump($elec_permit_link);

// Now click 'Electrical Permits' link from first response's returned webpage
//$url2 = 'http://dbiweb.sfgov.org/dbipts/'.$elec_permit_link;
$url2 = 'http://dbiweb.sfgov.org/dbipts/default.aspx?page=AddressData2&ShowPanel=EID';
$data2 = array(
          '__VIEWSTATE'             => '/wEPDwUKLTE3MTc5MzE3Mg9kFgICAw9kFgICAQ9kFgJmD2QWDAIBDw8WAh4EVGV4dAURNTU1IENBTElGT1JOSUEgU1RkZAIDDw8WAh8ABQowMjU5IC8gMDI2ZGQCDw9kFgICAQ88KwALAGQCEQ9kFgICAQ88KwALAGQCEw9kFgICAQ88KwALAGQCFQ9kFgICAQ88KwALAGRkF/Z3iGbOqi6Avi1HMiwqQO3qn2M=',
          '__VIEWSTATEGENERATOR'    => 'EBE5C146',
        );

// use key 'http' even if you send the request to https://...
$options2 = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n".
               "Cookie: ".session_name()."=".session_id()."\r\n" ,
        'method'  => 'POST',
        'content' => http_build_query($data2),
        // Set-Cookie: ASP.NET_SessionId=w0fkg1rsu4knlznd0qiy51uo;
        //1vt4le45blt2v545hhbtgo55
    ),
);
$context2  = stream_context_create($options2);
$result2 = file_get_contents($url2, false, $context2);

print_r(get_headers($url2));
echo $result2;