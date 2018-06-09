<?php
    function getmeal1() {
      $date = date("Y-m-d");
      header("Content-type: application/json; charset=UTF-8"); // json type and UTF-8 encoding
      $URL = "https://api.dimigo.in/dimibobs/" . $date; // DOMDocument

      $json = file_get_contents($URL);
      $result_json = json_decode($json);

      $bf = $result_json->breakfast; // 아침 파싱

      if ( strcmp($bf, '') == false ) {
        $bf = "급식 정보가 없습니다."; // 급식이 없을 경우
      }

      return $bf;
    }


    function getmeal2() {
      $date = date("Y-m-d");
      header("Content-type: application/json; charset=UTF-8"); // json type and UTF-8 encoding
      $URL = "https://api.dimigo.in/dimibobs/" . $date; // DOMDocument

      $json = file_get_contents($URL);
      $result_json = json_decode($json);

      $ln = $result_json->lunch; // 점심 파싱

      if ( strcmp($ln, '') == false ) {
        $final = "급식 정보가 없습니다."; // 급식이 없을 경우
      }

      return $ln;
    }


    function getmeal3() {
      $date = date("Y-m-d");
      header("Content-type: application/json; charset=UTF-8"); // json type and UTF-8 encoding
      $URL = "https://api.dimigo.in/dimibobs/" . $date; // DOMDocument

      $json = file_get_contents($URL);
      $result_json = json_decode($json);

      $dn = $result_json->dinner; // 저녁 파싱

      if ( strcmp($dn, '') == false ) {
        $dn = "급식 정보가 없습니다."; // 급식이 없을 경우
      }

      return $dn;
    }


    function getmeal4() {
      $date = date("Y-m-d");
      header("Content-type: application/json; charset=UTF-8"); // json type and UTF-8 encoding
      $URL = "https://api.dimigo.in/dimibobs/" . $date; // DOMDocument

      $json = file_get_contents($URL);
      $result_json = json_decode($json);

      $sn = $result_json->snack; // 간식 파싱

      if ( strcmp($sn, '') == false ) {
        $sn = "급식 정보가 없습니다."; // 급식이 없을 경우
      }

      return $sn;
    }
?>
