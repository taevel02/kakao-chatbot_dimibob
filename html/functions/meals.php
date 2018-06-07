<?php
    function getmeal1($days) {
      $date = date("Y-m-d", strtotime("+$days days"));

      header("Content-type: application/json; charset=UTF-8");        // json type and UTF-8 encoding
      $URL = "https://api.dimigo.in/dimibobs/" . $date; // DOMDocument
      // url 생성

      $json = file_get_contents($URL);
      $result_json = json_decode($json, true);

      $bf = $result_json[breakfast];
      // $ln = $result_json[lunch];
      // $dn = $result_json[dinner];
      // $sn = $result_json[snack];

      if ( strcmp($bf, '') == false ){
        $bf = "급식 정보가 없습니다."; // 급식이 없을 경우
      }

      $return = $bf;
      return $return;
    }

    function getmeal2($days) {
      $date = date("Y-m-d", strtotime("+$days days"));

      header("Content-type: application/json; charset=UTF-8");        // json type and UTF-8 encoding
      $URL = "https://api.dimigo.in/dimibobs/" . $date; // DOMDocument
      // url 생성

      $json = file_get_contents($URL);
      $result_json = json_decode($json, true);

      // $bf = $result_json[breakfast];
      $ln = $result_json[lunch];
      // $dn = $result_json[dinner];
      // $sn = $result_json[snack];

      if ( strcmp($ln, '') == false ){
        $final = "급식 정보가 없습니다."; // 급식이 없을 경우
      }

      $return = $ln;
      return $return;
    }

    function getmeal3($days) {
      $date = date("Y-m-d", strtotime("+$days days"));

      header("Content-type: application/json; charset=UTF-8");        // json type and UTF-8 encoding
      $URL = "https://api.dimigo.in/dimibobs/" . $date; // DOMDocument
      // url 생성

      $json = file_get_contents($URL);
      $result_json = json_decode($json, true);

      // $bf = $result_json[breakfast];
      // $ln = $result_json[lunch];
      $dn = $result_json[dinner];
      // $sn = $result_json[snack];

      if ( strcmp($dn, '') == false ){
        $dn = "급식 정보가 없습니다."; // 급식이 없을 경우
      }

      $return = $dn;
      return $return;
    }

    function getmeal4($days) {
      $date = date("Y-m-d", strtotime("+$days days"));

      header("Content-type: application/json; charset=UTF-8");        // json type and UTF-8 encoding
      $URL = "https://api.dimigo.in/dimibobs/" . $date; // DOMDocument
      // url 생성

      $json = file_get_contents($URL);
      $result_json = json_decode($json, true);

      // $bf = $result_json[breakfast];
      // $ln = $result_json[lunch];
      // $dn = $result_json[dinner];
      $sn = $result_json[snack];

      if ( strcmp($sn, '') == false ){
        $sn = "급식 정보가 없습니다."; // 급식이 없을 경우
      }

      $return = $sn;
      return $return;
    }
?>
