<?php
$data = json_decode(file_get_contents('php://input'),true);
$content = $data["content"];


if ($content == "아침") {
echo <<< EOD
    {
        "message": {
            "text": "오늘 아침은 {meal}입니다."
        }
    }
EOD;
}


elseif ($content == "점심") {
echo <<< EOD
    {
        "message": {
            "text": "오늘 점심은 {meal}입니다."
        }
    }
EOD;
}

elseif ($content == "저녁") {
echo <<< EDO
  {
      "message": {
          "text": "오늘 저녁은 {meal}입니다."
      }
  }
EDO;
}
?>
