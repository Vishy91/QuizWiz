<?php

if(isset($_GET["quizid"])) {

//
    $quiz_question = fetch_question_for_quiz($_GET["quizid"]);
    if(mysqli_num_rows($quiz_question)>0){
        print_r("yes");
    }
    for ($i = 1; $i <= mysqli_num_rows($quiz_question); $i++) {

        while ($rows = mysqli_fetch_array($quiz_question)) {
            echo $rows['question_text'];
            ?>
            <br><br>
<!--            --><?php //$quiz_options = fetch_questionoptions_for_question($rows['question_id']);
//            while ($rows = mysqli_fetch_array($quiz_options)) { ?>
<!--                <input type="radio" checked="checked" name="quizcheck[--><?php //echo $rows['questionoption_question_id']; ?><!--]"-->
<!--                       value="--><?php //echo $rows['questionoption_id']; ?><!--">-->
<!---->
<!--                --><?php //echo $rows['questionoption_text'];
//                ?>
<!--                <br>-->
<!--                <br>--><?php
//            }
        }
    }
}
?>