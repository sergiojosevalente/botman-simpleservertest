<?php

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Telegram\TelegramDriver;

require_once "vendor/autoload.php";

$config = [
    // Your driver-specific configuration
    "telegram" => [
        "token" => '6031252865:AAEfnpiK0vk5nkqbXIPQn-C5apTtycxqxEU'
    ]
];

DriverManager::loadDriver(TelegramDriver::class);

$botman = BotManFactory::create($config);

$botman->hears('/hello', function (BotMan $bot) {
    $bot->reply('Hello yourself.');
});

$botman->listen();
