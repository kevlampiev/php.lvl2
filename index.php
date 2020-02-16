<?php
// require_once "EShopItem.class.php";
require_once "CatalogItem.class.php";
require_once "CartItem.class.php";


$goods = [];

$goods[] = new EShopItem(
    "Кофеварка",
    "Кухонная техника",
    "https://st45.stblizko.ru/images/product/300/686/303_medium.jpg",
    100,
    "EUR",
    "Хорошая вещь"
);

$goods[] = new EShopItem(
    "Асфальтоукладчик",
    "Спецтехника",
    null,
    30000,
    "EUR",
    "Картинка должна из плейсхолдера вылезти"
);

$goods[] = new CatalogItem(
    "Асфальтоукладчик 2",
    "Спецтехника для каталога",
    "https://st25.stpulscen.ru/images/product/157/008/008_thumb.jpg",
    [
        "http://www.spectexno.ru/images/tech/yellow/asfaltoukl-logo.png",
        "https://st24.stpulscen.ru/images/product/220/271/244_medium.jpg"
    ],
    30000,
    "EUR",
    "Картинка должна из плейсхолдера вылезти"
);

$goods[] = new CartItem(
    "Кофеварка",
    "Кухонная техника",
    "https://st45.stblizko.ru/images/product/300/686/303_medium.jpg",
    100,
    "EUR",
    "Хорошая вещь",
    2
);


foreach ($goods as $good) {
    echo $good->render();
}
