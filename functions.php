<?php

function startText ($firstName){
    return "<b>Assalomu alaykum, ".$firstName.".</b>\n\nBelgi sanovchi botimizga xush kelibsiz! 😊";
}

function helpText (){
    return "<b>Istalgan matndagi belgilar va so'zlar sonini hisoblab beraman 😎🤏\n\n👨‍💻 Dasturchi:</b> @xfeusw (Kamron Khamrakulov)";
}

function feedbackText () {
    return "<b>👨‍💻 Dasturchi:</b> @xfeusw (Kamron Khamrakulov)";
}

function anySymbol ($text) {
    if ($text != "/start" && $text != "/help" && $text != "/feedback"){
        return true;
    }else{
        return false;
    }
}

function counting ($wordCount, $symbolCount, $symbolCountWithoutSpace) {
    $text = "<b>So'zlar soni:</b> {$wordCount}
<b>Belgilar soni:</b> {$symbolCount} (Space'lar bilan)
<b>Belgilar soni:</b> {$symbolCountWithoutSpace} (Space'larsiz)";
    return $text."\n\n".feedbackText();
}