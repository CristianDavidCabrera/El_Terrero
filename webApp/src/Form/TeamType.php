<?php

namespace App\Form;

use App\Entity\Club;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('division')
            ->add('id_fighter')
            ->add('name') // Other fields
            ->add('id_club', EntityType::class, [
                'class' => Club::class,
                'choices' => [$options['user_club']],
                'choice_label' => 'name',
                'placeholder' => 'Select your club',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
            'user_club' => null, // Add a custom option to pass the user's club
        ]);
    }
}
