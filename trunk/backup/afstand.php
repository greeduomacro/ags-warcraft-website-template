<?php

function zipcodeCalc( $from, $to, $key)
{
  $data = array (
    'key=' . $key,
    'output=json',
    'gl=nl',
    'q=' . urlencode('from: '.$from.' to: '.$to)
  );
  $url = 'http://google.com/maps/nav?' . join( '&', $data);

  $ch = curl_init( $url);
  
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt( $ch, CURLOPT_MAXREDIRS, 3);
  curl_setopt( $ch, CURLOPT_REFERER, 'http://google.com');
  
  echo curl_getinfo( $ch, CURLINFO_HTTP_CODE );
  if( curl_getinfo( $ch, CURLINFO_HTTP_CODE ) == 200 )
    return $str;
  else
    return curl_error( $ch);
  

}

  $key = 'AIzaSyACXemPzBA_2xLdzsIhu3VkIEsEJ6UlOGU';
  $from = '2163BN';
  $to = '6511PP';

  $fetch = json_decode( zipcodeCalc( $from, $to, $key) );

    echo 'Afstand: '.round($fetch->Directions->Distance->meters/1000,2).' km<br />';
    echo 'Tijdsduur: ~'.round($fetch->Directions->Duration->seconds/60).' minuten<br />';



//wow ik kan php afsluiten :o
?>