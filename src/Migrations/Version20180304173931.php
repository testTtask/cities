<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180304173931 extends AbstractMigration
{
    public function up(Schema $schema)
    {

        $options = array(
            'enable'        => true, // Скрипт работает только если значение TRUE
            /* Настройки CSV */
            'filename'      => 'c:\OSPanel\domains\cities\public\csv\cities.php', // Имя файла CSV. Находиться должен в одной папке со скриптом
            'delimiter'     => ',', // Какой разделитель используется

        );




        $this->addSql("SET NAMES 'utf8'");
        $this->addSql("SET CHARACTER SET 'utf8'");
        $this->addSql("SET SESSION collation_connection = 'utf8_general_ci'");




        foreach ($this->csv_to_array($options['filename']) as $val) {
            $city = $val['city'];
            $city_ascii = $val['city_ascii'];
            $lat = $val['lat'];
            $lng = $val['lng'];
            $pop = $val['pop'];
            $country = $val['country'];
            $iso2 = $val['iso2'];
            $iso3 = $val['iso3'];
            $province = $val['province'];

            $this->addSql("INSERT INTO app_cities (city, city_ascii, lat, lng, pop, country, iso2, iso3, province) VALUE ('$city', '$city_ascii', '$lat', '$lng', '$pop', '$country', '$iso2', '$iso3', '$province')");

        }



    }

    private function csv_to_array($filename=''){

       var_dump( getcwd ());

            if(!file_exists($filename) || !is_readable($filename)){
                var_dump(file_exists($filename));
                var_dump($filename);
                die();
                return FALSE;
            }
            global $options;
            $header = NULL;
            $data = array();
            if (($handle = fopen($filename, 'r')) !== FALSE) {
                while (($row = fgetcsv($handle, 1000, $options['delimiter'])) !== FALSE) {
                    if(!$header)
                        $header = $row;
                    else
                        $data[] = array_combine($header, $row);
                }
                fclose($handle);
            }
            return $data;

    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
