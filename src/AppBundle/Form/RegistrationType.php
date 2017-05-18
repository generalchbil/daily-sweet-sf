<?php
/**
 * Created by PhpStorm.
 * User: generalchbil
 * Date: 07/04/2017
 * Time: 17:06
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Util\LegacyFormHelper;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lastname', null, array('label' => 'form.lastname', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('firstname',null, array('label' => 'form.firstname', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('address',LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\TextareaType'), array('label' => 'form.address', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('digicode',null, array('label' => 'form.digicode', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('etage',null, array('label' => 'form.etage', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('phonenumber',null, array('label' => 'form.phonenumber', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('city',null, array('label' => 'form.city', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('zipcode',null, array('label' => 'form.zipcode', 'translation_domain' => 'FOSUserBundle'));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}