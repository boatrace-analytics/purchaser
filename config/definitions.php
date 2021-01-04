<?php

return [
    'Purchaser' => \DI\create('\Boatrace\Analytics\Purchaser')->constructor(
        \DI\get('MainPurchaser')
    ),
    'MainPurchaser' => function ($container) {
        return $container->get('\Boatrace\Analytics\MainPurchaser');
    },
    'ChromeOptions' => function ($container) {
        return $container->get('\Facebook\WebDriver\Chrome\ChromeOptions');
    },
];
