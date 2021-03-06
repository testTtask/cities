<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

// Миграция на парсинг данных с файла .CSV в БД
class Version20180304173931 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $filename = getcwd() . '\src\Data\csv\cities.csv';

        $header = NULL;
        $data   = [];
        if (($handle = fopen($filename, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ',')) !== FALSE) {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        foreach ($data as $val) {
            $city       = addslashes($val['city']);
            $city_ascii = addslashes($val['city_ascii']);
            $lat        = addslashes($val['lat']);
            $lng        = addslashes($val['lng']);
            $pop        = addslashes($val['pop']);
            $country    = addslashes($val['country']);
            $iso2       = addslashes($val['iso2']);
            $iso3       = addslashes($val['iso3']);
            $province   = addslashes($val['province']);

            $this->addSql(
                "INSERT INTO app_cities (city, city_ascii, lat, lng, pop, country, iso2, iso3, province) 
                    VALUE ('$city', '$city_ascii', '$lat', '$lng', '$pop', '$country', '$iso2', '$iso3', '$province')"
            );
        }
    }

    public function down(Schema $schema)
    {
        $this->addSql(
            "DELETE FROM app_cities WHERE 1 = 1"
        );
    }
}
