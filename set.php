<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '742428754:AAEAk_2Uld2bpBkw0eTx3SADkLfASczMc_c';
$bot_username = 'BeKre01_bot';
$hook_url     = 'https://be-kre-bot.herokuapp.com/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}
