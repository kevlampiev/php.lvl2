<?php

require_once "EShopItem.class.php";

//Товар, который будет отображаться в общем каталоге
//добавлен массив с дополнительными изображениями и соответствующий геттер, функция добавления, переписан рендер
class CatalogItem extends EShopItem
{
    private $extraImgs;
    function __construct(
        string $title,
        string $category,
        ?string $img,
        array $extraImgs,
        float $price,
        string $currency,
        ?string $description
    ) {
        parent::__construct(
            $title,
            $category,
            $img,
            $price,
            $currency,
            $description
        );
        $this->extraImgs = $extraImgs;
    }

    public function getExtraImgs(): array
    {
        return $this->extraImgs;
    }

    public function addImage(string $imgPath)
    {
        //тут еще надо кучу проверок поставить 
        $this->extraImgs[] = $imgPath;
    }

    public function render(): string
    {
        $res = parent::render();
        foreach ($this->extraImgs as $img) {
            $res .= "<img src=\"$img\" alt=\"additional image\" width=\"100\" height=\"100\">";
        }
        return $res . "<br>";
    }
}
