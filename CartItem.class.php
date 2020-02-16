<?php
require_once "EShopItem.class.php";

class CartItem extends EShopItem
{
    private $amount;

    function __construct(
        string $title,
        string $category,
        ?string $img,
        float $price,
        string $currency,
        ?string $description,
        int $amount
    ) {
        parent::__construct(
            $title,
            $category,
            $img,
            $price,
            $currency,
            $description
        );
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $val)
    {
        if ($val > 0) {
            $this->amount = $val;
        } else {
            $this->amount = 0;
        }
    }

    public function getTotalSum(): float
    {
        return $this->getAmount() * $this->getPrice();
    }

    public function render(): string
    {
        $res = parent::render();
        return $res . "Amount: $this->amount <br> Total summ: " . $this->getTotalSum() . "<br>";
    }
}
