<?php
include "Telegram.php";
include "functions.php";

define("BOT_TOKEN", "YOUR TOKEN HERE");
$telegram = new Telegram(BOT_TOKEN);

$chat_id = $telegram->ChatID();
$text = $telegram->Text();
$first_name = $telegram->FirstName();

if ($text == "/start"){
    $sendText = startText($first_name);
    $content = ["chat_id"=>$chat_id, "text"=>$sendText, "parse_mode"=>"HTML"];
    $telegram->sendMessage($content);
}

if ($text == "/help"){
    $sendText = helpText();
    $content = ["chat_id"=>$chat_id, "text"=>$sendText, "parse_mode"=>"HTML"];
    $telegram->sendMessage($content);
}

if ($text == "/feedback"){
    $sendText = feedbackText();
    $content = ["chat_id"=>$chat_id, "text"=>$sendText, "parse_mode"=>"HTML"];
    $telegram->sendMessage($content);
}

if (anySymbol($text)){
    $wordCount = count(explode(" ", $text));
    $symbolCount = strlen($text);
    $symbolCountWithoutSpace = strlen(str_replace(" ", "", $text));

    $sendText = counting($wordCount, $symbolCount, $symbolCountWithoutSpace);
    $content = ["chat_id"=>$chat_id, "text"=>$sendText, "parse_mode"=>"HTML"];
    $telegram->sendMessage($content);
}