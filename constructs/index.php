<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\05\\";
require_once $basePath . "functions.php";

class CampaignMonitor {

    /**
     * Subscribe the user using CampaignMonitor.
     *
     * @param string $email The email address to subscribe.
     */
    public function subscribe($email) {
        dd('subscribe with CampaignMonitor');
    }
}

class Drip {

    /**
     * Subscribe the user using Drip.
     *
     * @param string $email The email address to subscribe.
     */
    public function subscribe($email) {
        dd('subscribe with drip');
    }

}

class NewsLetterSubscriptionsController {

    /**
     * Store the subscription using the provided class reference.
     *
     * @param object $newsLetter An instance of a subscription service class.
     */
    public function store($newsLetter) {
        $email = 'victor@gmail.com';
        $newsLetter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionsController();

$controller->store(new Drip());

