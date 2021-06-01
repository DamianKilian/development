<?php

declare(strict_types=1);

namespace SwagShopFinder\Core\Content\ShopFinder;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class ShopFinderEntity extends Entity
{
    use EntityIdTrait;

    // * IdField $id
    // * BoolField $active
    // * StringField $name
    // * StringField $street
    // * StringField $postCode
    // * StringField $city
    // * StringField $url
    // * StringField $telephone
    // * StringField $openTimes
    // * 
    // * FkField countryId
    // * MenyToOneAssociation country to CountryDefinition


    /**
     * @var bool
     */
    protected $active;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $street;
    /**
     * @var string|null
     */
    protected $postCode;
    /**
     * @var string|null
     */
    protected $city;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $telephone;
    /**
     * @var string|null
     */
    protected $openTimes;
    /**
     * @var CountryEntity|null
     */
    protected $country;



    // /**
    //  * @var string|null
    //  */
    // protected $name;

    // /**
    //  * @var string|null
    //  */
    // protected $description;

    // /**
    //  * @var bool
    //  */
    // protected $active;

    // public function getName(): ?string
    // {
    //     return $this->name;
    // }

    // public function setName(?string $name): void
    // {
    //     $this->name = $name;
    // }

    // public function getDescription(): ?string
    // {
    //     return $this->description;
    // }

    // public function setDescription(?string $description): void
    // {
    //     $this->description = $description;
    // }

    // public function isActive(): bool
    // {
    //     return $this->active;
    // }

    // public function setActive(bool $active): void
    // {
    //     $this->active = $active;
    // }



    /**
     * Get the value of active
     *
     * @return  bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @param  bool  $active
     *
     * @return  self
     */
    public function setActive(bool $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string|null  $name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of street
     *
     * @return  string|null
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @param  string|null  $street
     *
     * @return  self
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postCode
     *
     * @return  string|null
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set the value of postCode
     *
     * @param  string|null  $postCode
     *
     * @return  self
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get the value of city
     *
     * @return  string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @param  string|null  $city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of url
     *
     * @return  string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @param  string|null  $url
     *
     * @return  self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of telephone
     *
     * @return  string|null
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param  string|null  $telephone
     *
     * @return  self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of openTimes
     *
     * @return  string|null
     */
    public function getOpenTimes()
    {
        return $this->openTimes;
    }

    /**
     * Set the value of openTimes
     *
     * @param  string|null  $openTimes
     *
     * @return  self
     */
    public function setOpenTimes($openTimes)
    {
        $this->openTimes = $openTimes;

        return $this;
    }

    /**
     * Get the value of country
     *
     * @return  CountryEntity|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @param  CountryEntity|null  $country
     *
     * @return  self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}
