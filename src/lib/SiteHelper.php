<?php

namespace lib;

/**
 * Вспомогательный класс для работы с сайтом
*/
class SiteHelper
{

    /**
     * Подключить файл с включаемой областью
     * @param string $filePath
     * @return bool
     */
    public static function includeArea(string $filePath): bool
    {
        if (!file_exists($_SERVER["DOCUMENT_ROOT"] . $filePath)) {
            echo "The file $filePath does not exist";
            return false;
        }
        include $_SERVER["DOCUMENT_ROOT"] . $filePath;
        return true;
    }

    /**
     * Обрезать текст
     * @param string $text
     * @param int $chars
     * @return string
     */
    public static function truncateString(string $text, int $chars = 50): string
    {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        return $text."...";
    }
}