<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "role" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "user",
      "loginUser"
    ],
    "insertUser" => [
      "status" => "admin",
      "user",
      "insertUser"
    ],
    "listeUser" => [
      "status" => "admin",
      "user",
      "listeUser"
    ],
    "updateUser" => [
      "status" => "admin",
      "user",
      "update",
      ["id" => ["integer"]]
    ],
    "deleteUser" => [
      "status" => "admin",
      "user",
      "deleteUser",
      ["id" => ["integer"]]
    ],
    "logout" => [
      "user",
      "deconnectUser"
    ],
    "listeMsg" => [
      // "status" => "user",
      "msg",
      "listeMsg"
    ],
    "insertMsg" => [
      // "status" => "user",
      "msg",
      "insertMsg"
    ],
    "deleteMsg" =>[
    // "status" => "user",
    "msg",
    "deleteMsg",
    ["id" => ["integer"]]
    ]
  ];
}

 ?>
