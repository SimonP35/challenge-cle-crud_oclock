<?php

namespace App\Form;

use App\Entity\Car;
use App\Entity\Brand;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('model', TextType::class, [
                'label' => 'Modèle',
            ])
            ->add('year', DateType::class, [
                'label' => 'Date de mise en circulation ',
                'widget' => 'single_text', 
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix',
                'html5' => true,
            ])
            ->add('color', TextType::class, [
                'label' => 'Couleur du véhicule',
            ])
            ->add('brand', EntityType::class, [
                'class' => Brand::class,
                'label' => 'Sélection de la marque',
                'choice_label' => 'name',
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}
