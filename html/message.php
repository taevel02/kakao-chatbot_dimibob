<?php
include("functions/meals.js");

$data = json_decode(file_get_contents('php://input'), true);
$content = $data["content"];


/*
breakfast()
  .then(() => console.log('Done.') || process.exit(0))
  .catch(err => console.error(err) || process.exit(1))

lunch()
  .then(() => console.log('Done.') || process.exit(0))
  .catch(err => console.error(err) || process.exit(1))

dinner()
  .then(() => console.log('Done.') || process.exit(0))
  .catch(err => console.error(err) || process.exit(1))

snack()
  .then(() => console.log('Done.') || process.exit(0))
  .catch(err => console.error(err) || process.exit(1))
*/


/*if ($content == "아침") {
echo <<< EOD
    {
        "message": {
            "text": "오늘 아침은" + breakfast() + "입니다."
        }
    }
EOD;
}


elseif ($content == "점심") {
echo <<< EOD
    {
        "message": {
            "text": "오늘 점심은" + lunch() + "입니다."
        }
    }
EOD;
}

elseif ($content == "저녁") {
echo <<< EDO
  {
      "message": {
          "text": "오늘 저녁은" + dinner() + "입니다."
      }
  }
EDO;
}

elseif ($content == "간식") {
echo <<< EDO
  {
      "message": {
          "text": "오늘 간식은" + snack() + "입니다."
      }
  }
EDO;
}*/

if ($content == "아침") {
echo <<< EOD
    {
        "message": {
            "text": "테스트입니다."
        }
    }
EOD;
}

?>
