<?php

namespace lib\Models;

/**
 * DTO списка товаров каталога
*/
class ProductListModel
{
    public int $Id;
    public string|bool $Name;
    public int|bool $Price;
    public string|bool $Text;
    public string|bool $Picture;
    public bool $ProductDay;

    /**
     * Конструктор
     * @param int $Id
     * @param string|bool $Name
     * @param int|bool $Price
     * @param string|bool $Text
     * @param string|bool $Picture
     * @param bool $ProductDay
     */
    public function __construct(int $Id, string|bool $Name, int|bool $Price, string|bool $Text, string|bool $Picture, bool $ProductDay)
    {
        $this->Id = $Id;
        $this->Name = $Name;
        $this->Price = $Price;
        $this->Text = $Text;
        $this->Picture = $Picture;
        $this->ProductDay = $ProductDay;
    }
}