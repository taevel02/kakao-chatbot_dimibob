<?php
$data = json_decode(file_get_contents('php://input'),true);
$content = $data["content"];


if ($content == "오늘 급식") {
echo <<< EOD
    {
        "message": {
            "text": "오늘 급식은 {meal_today}입니다."
        }
    }
EOD;
}


elseif ($content == "내일 급식") {
echo <<< EOD
    {
        "message": {
            "text": "내일 급식은 {meal_tomorrow}입니다."
        }
    }
EOD;
}
?>
