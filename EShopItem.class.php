<?php

//Прообраз товара. Из корзины, из каталога, уцененный и прочее
class EShopItem
{
    private $title;
    private $category;
    private $img;
    private $price;
    private $currency;
    private $description;

    function __construct(
        string $title,
        string $category,
        ?string $img,
        float $price,
        string $currency,
        ?string $description
    ) {
        $this->title = $title;
        $this->category = $category;
        $this->img = $img;
        $this->price = $price;
        $this->currency = $currency;
        $this->description = $description;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getImg(): string
    {
        if ($this->img == null) {
            return "https://via.placeholder.com/150";
        } else {
            return $this->img;
        }
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getDescription(): string
    {
        if ($this->description == null) {
            return "";
        }
        return $this->description;
    }

    public function render(): string
    {
        return "<hr> <img width=\"150\" height=\"150\"  src= \"" . $this->getImg() . " \">" .
            "Title: $this->title <br>" .
            "Category: $this->category <br>" .
            "Price: $this->price $this->currency <br>" .
            "Additional info: " . $this->getDescription() . "<br>";
    }
}
