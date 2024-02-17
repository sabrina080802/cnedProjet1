<?php

namespace App\Form;

use App\Entity\Playlist;
use App\Entity\Formation;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('publishedAt', DateTimeType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'La date de publication est obligatoire.']),
                ],
            ])
            ->add('title', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le titre est obligatoire.']),
                ],
            ])
            ->add('description', TextareaType::class)
            ->add('videoId', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'L\'identifiant de la vidéo est obligatoire.']),
                ],
            ])
            ->add('playlist', EntityType::class, [
                'class' => Playlist::class,
                'choice_label' => 'name',
                'multiple' => false,
                'constraints' => [
                    new NotBlank(['message' => 'La sélection d\'une playlist est obligatoire.']),
                ],
            ])
            ->add('categories', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true
            ])
            ->add('submit', SubmitType::class, ['label' => 'Valider']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
