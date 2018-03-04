<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_cities")
 * @ORM\Entity("App\Repository\CitiesRepository")
 */
class Cities
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @var string
     * @ORM\Column(name="city_ascii", type="string", length=255)
     */
    private $cityAscii;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $lat;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $lng;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $pop;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $iso2;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $iso3;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $province;


    /**
     * @return integer
     */
    public function getId(): integer
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(?string $city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCityAscii(): ?string
    {
        return $this->cityAscii;
    }

    /**
     * @param string $cityAscii
     */
    public function setCityAscii(?String $cityAscii)
    {
        $this->cityAscii = $cityAscii;
    }

    /**
     * @return string
     */
    public function getLat(): ?string
    {
        return $this->lat;
    }

    /**
     * @param string $lat
     */
    public function setLat(?string $lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return string
     */
    public function getLng(): ?string
    {
        return $this->lng;
    }

    /**
     * @param string $lng
     */
    public function setLng(?string $lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return string
     */
    public function getPop(): ?string
    {
        return $this->pop;
    }

    /**
     * @param string $pop
     */
    public function setPop(?string $pop)
    {
        $this->pop = $pop;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(?string $country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getIso2(): ?string
    {
        return $this->iso2;
    }

    /**
     * @param string $iso2
     */
    public function setIso2(?string $iso2)
    {
        $this->iso2 = $iso2;
    }

    /**
     * @return string
     */
    public function getIso3(): ?string
    {
        return $this->iso3;
    }

    /**
     * @param string $iso3
     */
    public function setIso3(?string $iso3)
    {
        $this->iso3 = $iso3;
    }

    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @param string $province
     */
    public function setProvince(?string $province)
    {
        $this->province = $province;
    }


}