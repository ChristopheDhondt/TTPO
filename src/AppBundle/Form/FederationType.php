<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\Common\AdressType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Federation;

class FederationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameFr', TextType::class)
            ->add('nameDe', TextType::class)
            ->add('nameNl', TextType::class)
            ->add('officialAdress', AdressType::class)
            ->add('postalAdress', AdressType::class)
            ->add('save', SubmitType::class);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Federation::class,
            'name' => "Generalties"
        ));
    }
}