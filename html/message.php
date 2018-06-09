<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data["content"];

    $date = date("Y.m.d");

    include 'functions/meals.php';

    if ( $content == "아침" ) {
      $meal = getmeal1();
      echo '{
        "message": {
             "text": "'$date' . 아침\\n . '$meal'";
        }
      }';
    }

    else if ( $content == "점심" ) {
      $meal = getmeal2();
      echo '{
        "message": {
             "text": "'$date' . 점심\\n . '$meal'";
        }
      }';
    }

    else if ( $content == "저녁" ) {
      $meal = getmeal3();
      echo '{
        "message": {
             "text": "'$date' . 저녁\\n . '$meal'";
        }
      }';
    }

    else if ( $content == "간식" ) {
      $meal = getmeal4();
      echo '{
        "message": {
             "text": "'$date' . 간식\\n . '$meal'";
        }
      }';
    }
?>
