<?php
//Array copntenente le stringhe per la
//scelta multilingua del bot
$select[] = array(
    array(
        "text" => "English 🇬🇧",
        "callback_data" => "lan_english"),
    array(
        "text" => "Italiano 🇮🇹",
        "callback_data" => "lan_italian"),
        );
    $select[]=array(
    array(
        "text" => "Español 🇪🇸",
        "callback_data" => "lan_spanish"),
    array(
        "text" => "François 🇫🇷",
        "callback_data" => "lan_french"),
    );
    $select[]=array(
    array(
        "text" => "Русский 🇷🇺",
        "callback_data" => "lan_russian"),
    array(
        "text" => "🇦🇪 العَرَبِيَّة",
        "callback_data" => "lan_arabic"),
    );

//Array contenente le stringhe per la
//Home del bot
$menuITA[] = array(
    array(
          "text" => "Statistiche monete",
          "callback_data" => "/statistics"),
    array(
          "text" => "Calendario ICO",
          "callback_data" => "/calendar"),
         );
$menuITA[] = array(
    array(
          "text" => "Convertitore",
          "callback_data" => "/converter"),
    array(
          "text" => "Impostazioni",
          "callback_data" => "/settings"),
         );
$menuITA[] = array(
    array(
          "text" => "Contattaci",
          "callback_data" => "/feedback"),
          );

//Array contenente le stringhe per la
//Home del bot IN INGLESE
$menuENG[] = array(
      array(
            "text" => "Money Statistic",
            "callback_data" => "/statistics"),
      array(
            "text" => "ICO Calendar",
            "callback_data" => "/calendar"),
           );
$menuENG[] = array(
      array(
            "text" => "Convertor",
            "callback_data" => "/converter"),
      array(
            "text" => "Settings",
            "callback_data" => "/settings"),
           );
$menuENG[] = array(
   array(
         "text" => "Contact us",
         "callback_data" => "/feedback"),
         );

//Array contenente le stringhe per la
//Home del bot IN SPAGNOLO
$menuSPA[] = array(
     array(
           "text" => "Estadísticas de monedas",
           "callback_data" => "/statistics"),
     array(
           "text" => "ICO Calendario",
           "callback_data" => "/calendar"),
          );
$menuSPA[] = array(
     array(
           "text" => "Convertidor",
           "callback_data" => "/converter"),
     array(
           "text" => "Ajustes",
           "callback_data" => "/settings"),
          );
$menuSPA[] = array(
  array(
        "text" => "Contacto",
        "callback_data" => "/feedback"),
        );

//Array contenente le stringhe per la
//Home del bot IN FRANCESE
$menuFRA[] = array(
     array(
           "text" => "Statistiques relatives à la monnaie",
           "callback_data" => "/statistics"),
     array(
           "text" => "Calendrier ICO",
           "callback_data" => "/calendar"),
          );
$menuFRA[] = array(
     array(
           "text" => "Convertisseur",
           "callback_data" => "/converter"),
     array(
           "text" => "Configuration",
           "callback_data" => "/settings"),
          );
$menuFRA[] = array(
  array(
        "text" => "Contacte-nous",
        "callback_data" => "/feedback"),
        );

//Array contenente le stringhe per la
//Home del bot IN RUSSO
$menuRUS[] = array(
     array(
           "text" => "статистику монеты",
           "callback_data" => "/statistics"),
     array(
           "text" => "календарь ICO",
           "callback_data" => "/calendar"),
          );
$menuRUS[] = array(
     array(
           "text" => "Конвертер",
           "callback_data" => "/converter"),
     array(
           "text" => "Настройка",
           "callback_data" => "/settings"),
          );
$menuRUS[] = array(
  array(
        "text" => "Contacte-nous",
        "callback_data" => "/feedback"),
        );

//Array contenente le stringhe per le
//impostazioni del bot
$buttons[] = array(
    array(
        "text" => "Change Language",
        "callback_data" => "/test3"),
    array(
        "text" => "Edit Coin Section",
        "callback_data" => "/test3"),
        );
$buttons[] = array(
    array(
        "text" => "Edit Notification",
        "callback_data" => "/test3")
        );

//Array contenente le stringhe per le
//impostazioni del bot
$statisticMenu[] = array(
    array(
        "text" => "Ranking for value",
        "callback_data" => "/test3"),
    array(
        "text" => "Ranking for volume",
        "callback_data" => "/test3"),
        );
$statisticMenu[] = array(
    array(
        "text" => "Tranding gainers 24h",
        "callback_data" => "/test3"),
    array(
        "text" => "Tranding losers 24h",
        "callback_data" => "/test3"),
        );
