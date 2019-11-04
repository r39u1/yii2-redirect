<?php


namespace r39u1\redirect\source;


use Yii;

class CsvRedirectSource extends AbstractRedirectSource
{
    public $csvPath;

    public function findUrl(string $currentUrl)
    {
        $result = false;
        $currentUrl = trim($currentUrl, ' /');

        if (file_exists(Yii::getAlias($this->csvPath)) &&
            ($scv = fopen(Yii::getAlias($this->csvPath), 'r')) !== false) {
            while (false !== ($row = fgetcsv($scv, 1000, ','))) {
                $beforeUrl = trim($row[0], ' /');
                if (isset($row[1]) && fnmatch($currentUrl, $beforeUrl)) {
                    $this->redirectUrl = $row[1];
                    $this->statusCode = $row[2];
                    $result = true;
                    break;
                }
            }

            fclose($scv);
        }

        return $result;
    }
}