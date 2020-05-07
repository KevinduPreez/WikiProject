<?php


namespace App\Controller\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use function Sodium\add;

class ArticleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('Search', TextType::class, [
                'attr' => ['class' => 'form-control-lg'],
            ])
            ->add('save', SubmitType::class,
                ['label' => 'Search', 'attr' => ['class'=>'btn btn-primary']]);

        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
    }

}