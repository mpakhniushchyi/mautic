<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\CoreBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class SlotVmlButtonType.
 */
class SlotVmlButtonType extends SlotType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('vmlbutton-text', 'text', [
            'label'      => 'mautic.core.vmlbutton.text',
            'label_attr' => ['class' => 'control-label'],
            'required'   => false,
            'attr'       => [
                'class'           => 'form-control',
                'data-slot-param' => 'vmlbutton-text',
            ],
        ]);

        $builder->add('vmlbutton-href', 'text', [
            'label'      => 'mautic.core.vmlbutton.link',
            'label_attr' => ['class' => 'control-label'],
            'required'   => false,
            'attr'       => [
                'class'           => 'form-control',
                'data-slot-param' => 'vmlbutton-href',
            ],
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'slot_vmlbutton';
    }
}
