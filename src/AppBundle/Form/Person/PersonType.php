<?php

namespace AppBundle\Form\Person;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use AppBundle\Form\Common\AdressType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Person;

class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class) 
            ->add('lastname', TextType::class)
            ->add('officialAdress', AdressType::class)
            ->add('postalAdress', AdressType::class)
            ->add('emailAdress', RepeatedType::class, array(
                  'type' => TextType::class,
                  'invalid_message' => 'The emails fields must match.',
                  'required' => true,
                  'first_options'  => array('label' => 'Email'),
                  'second_options' => array('label' => 'Repeat Email')))
            ->add('password', RepeatedType::class, array(
                  'type' => PasswordType::class,
                  'invalid_message' => 'The password fields must match.',
                  'options' => array('attr' => array('class' => 'password-field')),
                  'required' => true,
                  'first_options'  => array('label' => 'Password'),
                  'second_options' => array('label' => 'Repeat Password')))
            ->add('save', SubmitType::class);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Person::class,
            'name' => "person_type"
        ));
    }
}