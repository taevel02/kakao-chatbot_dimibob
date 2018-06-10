<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data["content"];


    $date = date("Y.m.d");


    header("Content-type: application/json; charset=UTF-8"); // json type and UTF-8 encoding
    $URL = "https://api.dimigo.in/dimibobs/" . $date; // DOMDocument

    $json = file_get_contents($URL); // json 파싱
    $result_json = json_decode($json);

    $bf = $result_json->breakfast; // 아침 파싱
    $ln = $result_json->lunch; // 점심 파싱
    $dn = $result_json->dinner; // 저녁 파싱
    $sn = $result_json->snack; // 간식 파싱

    if ( strcmp($bf, '') == false ) {
      $bf = "급식 정보가 없습니다."; // 급식이 없을 경우
    }

    if ( strcmp($ln, '') == false ) {
      $ln = "급식 정보가 없습니다."; // 급식이 없을 경우
    }

    if ( strcmp($dn, '') == false ) {
      $dn = "급식 정보가 없습니다."; // 급식이 없을 경우
    }

    if ( strcmp($sn, '') == false ) {
      $sn = "급식 정보가 없습니다."; // 급식이 없을 경우
    }


    if( $content == "아침" ) {
      $meal = substr(json_encode($bf), 1, -1);
      echo '{
        "message": {
             "text": "$meal"
        }
      }';
    }

    elseif( $content == "점심" ) {
      $meal = substr(json_encode($ln), 1, -1);
      echo '{
        "message": {
             "text": "$meal"
        }
      }';
    }

    elseif( $content == "저녁" ) {
      $meal = substr(json_encode($dn), 1, -1);
      echo '{
        "message": {
             "text": "$meal"
        }
      }';
    }

    elseif( $content == "간식" ) {
      $meal = substr(json_encode($sn), 1, -1);
      echo '{
        "message": {
             "text": "$meal"
        }
      }';
    }
?>
