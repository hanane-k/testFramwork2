<?php

function insertMsg() {
    session_start();
    if (!empty($_POST)) {
        $recipient = getVolonteerByName($_POST["recipient"]);
        addMessage($_POST, $_SESSION["user"]["ID"], $recipient);
        redirectTo("listeMsg");
    }
    require "view/insertMsgView.php";
}

function listeMsg() {
    require "view/listeMsgView.php";
}

function deleteMsg() {
    $id = htmlspecialchars($_GET["id"]);
    deleteMessage($id);
    redirectTo("listeMsg");
}   

function toReplayMsg() {
    if (!empty($_POST)) {
        addReplayMessage($_POST, $_SESSION["user"]["ID"]);
        redirectTo("listeMsg");
    }
    require "view/msgReplayView.php";
}


?>