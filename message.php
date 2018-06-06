<?php
  $data = json_decode(file_get_contents('php://input'), true);
  $content = $data["content"];

  switch ($content) {
    case '오늘 급식':
      echo '
        {
          "message":
          {
            "text": "오늘 급식은 {meal_today}입니다."
          }
          "keyboard": {
              "type": "buttons",
              "buttons": [
                  "오늘 급식",
                  "내일 급식"
              ]
          }
        }
      ';
      break;

    case '내일 급식':
      echo '
        {
          "message":
          {
            "text": "내일 급식은 {meal_tomorrow}입니다."
          }
          "keyboard": {
              "type": "buttons",
              "buttons": [
                  "오늘 급식",
                  "내일 급식"
              ]
          }
        }
      ';
      break;

    default:
      echo '
        {
          "message":
          {
            "text": "오류!"
          }
          "keyboard": {
              "type": "buttons",
              "buttons": [
                  "오늘 급식",
                  "내일 급식"
              ]
          }
        }
      ';
      break;
  }

?>
