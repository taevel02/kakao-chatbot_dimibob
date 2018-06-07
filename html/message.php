<?php
    include("functions/echoKakao.php");
    include("functions/meals.php");
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data["content"];

    if ( strcmp($content, "아침") == false ) {
        $final = getmeal1(0);
        $date = date("Y-m-d", strtotime("+$days days"));
        start_echo();
            start_msg();
                echo_text($date . "아침\\n" . $final, 0);
            end_msg(1);
        end_echo();
    }
    else if ( strcmp($content, "점심") == false ) {
        $final = getmeal2(0);
        $date = date("Y-m-d", strtotime("+$days days"));
        start_echo();
            start_msg();
                echo_text($date . "점심\\n" . $final, 0);
            end_msg(1);
        end_echo();
    }
    else if ( strcmp($content, "저녁") == false ) {
        $final = getmeal3(0);
        $date = date("Y-m-d", strtotime("+$days days"));
        start_echo();
            start_msg();
                echo_text($date . "저녁\\n" . $final, 0);
            end_msg(1);
        end_echo();
    }
    else if ( strcmp($content, "간식") == false ) {
        $final = getmeal4(0);
        $date = date("Y-m-d", strtotime("+$days days"));
        start_echo();
            start_msg();
                echo_text($date . "간식\\n" . $final, 0);
            end_msg(1);
        end_echo();
    }
?>
