<?php

    namespace App\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
    use App\Entity\Pack;
    
    /**
 *
 *
 * @author linux
 */
class PackType extends AbstractType
{
    /**
     * 
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('id', null, [
                'attr' => ['autofocus' => true],
                'label' => 'id',
                'attr'=>[ 
                        ]
            ])
            ->add('employeeid', null, [
                'label' => 'employeeid',
                'required' => false,
                'attr'=>[ 
                        ]
            ])
                   ->add('name', null, [
                'attr' => ['autofocus' => true],
                'label' => 'name',
                'attr'=>[ 
                        ]
            ])
            ->add('create_date', DateTimeType::class, [
                'label' => 'Published at',
                'widget'=>'single_text',
                'attr'=>[ 
                        ]
            ])
  
                ->add('Signup', SubmitType::class,
                            ['label'=>'Save',
                                'attr'=>[ 
                        ]]);
    }

    /**
     * 
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pack::class,
        ]);
    }
}
