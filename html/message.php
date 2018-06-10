<?php
$data = json_decode(file_get_contents('php://input'), true);
$content = $data["content"];

$header = array(
  'Content-type: application/json',
);

$url = "'https://api.dimigo.in/dimibobs/today'";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);
curl_close($ch);

$result_arr = json_decode($result, true);

$breakfast = $result_arr['breakfast'];
#if ($breakfast == null) $breakfast_show = "급식 정보가 없습니다.";
#else $breakfast_show = "오늘 아침은 $breakfast 입니다.";

$lunch = $result_arr['lunch'];
#if ($lunch == null) $lunch_show = "급식 정보가 없습니다.";
#else $lunch_show = "오늘 점심은 $lunch 입니다.";

$dinner = $result_arr['dinner'];
#if ($dinner == null) $dinner_show = "급식 정보가 없습니다.";
#else $dinner_show = "오늘 저녁은 $dinner 입니다.";

$snack = $result_arr['snack'];
#if ($snack == null) $snack_show = "간식 정보가 없습니다.";
#else $snack_show = "오늘 간식은 $snack 입니다."


if ($content == "아침") {
echo <<< EOD
  {
    "message": {
         "text": "'$breakfast'"
    }
  }
EOD;
}

else if ($content == "점심")  {
echo <<< EOD
  {
    "message": {
         "text": "$lunch"
    }
  }
EOD;
}

else if ($content == "저녁") {
echo <<< EOD
  {
    "message": {
         "text": "$dinner"
    }
  }
EOD;
}

else if ($content == "간식") {
echo <<< EOD
  {
    "message": {
         "text": "$snack"
    }
  }
EOD;
}
?>
