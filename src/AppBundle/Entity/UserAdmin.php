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
 * @ORM\Table(name="user_admin")
 *
 */
class UserAdmin extends BaseUser
{
    /**
     * @var integre
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }


}