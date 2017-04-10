<?php
/**
 * Created by PhpStorm.
 * User: generalchbil
 * Date: 06/04/2017
 * Time: 12:07
 */

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class UserAdmin
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="daily_sweet_users")
 *
 */
class UserAdmin extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     *
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string")
     *
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string")
     *
     */
    protected $address;

    /**
     * @ORM\Column(type="string")
     *
     */
    protected $digicode;

    /**
     * @ORM\Column(type="string")
     *
     */
    protected $etage;

    /**
     * @ORM\Column(type="string")
     *
     */
    protected $phonenumber;

    /**
     * @ORM\Column(type="string")
     *
     */
    protected $city;

    /**
     * @ORM\Column(type="integer")
     *
     */
    protected $zipcode;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return UserAdmin
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return UserAdmin
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return UserAdmin
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return UserAdmin
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return UserAdmin
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipcode
     *
     * @param integer $zipcode
     *
     * @return UserAdmin
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return integer
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set digicode
     *
     * @param string $digicode
     *
     * @return UserAdmin
     */
    public function setDigicode($digicode)
    {
        $this->digicode = $digicode;

        return $this;
    }

    /**
     * Get digicode
     *
     * @return string
     */
    public function getDigicode()
    {
        return $this->digicode;
    }

    /**
     * Set etage
     *
     * @param string $etage
     *
     * @return UserAdmin
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return string
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return UserAdmin
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }
}
