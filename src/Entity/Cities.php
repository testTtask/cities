<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_cities")
 * @ORM\Entity()
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
     * @ORM\Column(type="string", length=50)
     */
    private $city;

    /**
     * @var string
     * @ORM\Column(name="city_ascii", type="string", length=50)
     */
    private $cityAscii;

    /**
     * @var float
     * @ORM\Column(type="float", length=12, scale=9)
     */
    private $lat;

    /**
     * @var float
     * @ORM\Column(type="float", length=12, scale=9)
     */
    private $lng;

    /**
     * @var float
     * @ORM\Column(type="float", length=10, scale=2)
     */
    private $pop;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $country;

    /**
     * @var string
     * @ORM\Column(type="string", length=4)
     */
    private $iso2;

    /**
     * @var string
     * @ORM\Column(type="string", length=4)
     */
    private $iso3;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
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
     * @return float
     */
    public function getLat(): ?float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat(?float $lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLng(): ?float
    {
        return $this->lng;
    }

    /**
     * @param float $lng
     */
    public function setLng(?float $lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return float
     */
    public function getPop(): ?float
    {
        return $this->pop;
    }

    /**
     * @param float $pop
     */
    public function setPop(?float $pop)
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