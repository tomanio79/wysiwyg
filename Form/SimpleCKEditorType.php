<?php

namespace Webmanagement\CkeditorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * CKEditor type
 */
class SimpleCKEditorType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->setAttribute('toolbar', $options['toolbar'])
                ->setAttribute('ui_color', $options['ui_color']);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options) {
        $view->vars = array_replace($view->vars, array(
            'toolbar' => $form->getConfig()->getAttribute('toolbar'),
            'ui_color' => $form->getConfig()->getAttribute('ui_color'),
        ));
    }

    /**
     * {@inheritdoc}
     */
   public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'required' => false,
            'toolbar' => array(
                array(
                    'name' => 'basicstyles',
                    'items' => array('Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat')
                ),
                array(
                    'name' => 'paragraph',
                    'items' => array('NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl')
                ),

                array(
                    'name' => 'colors',
                    'items' => array('TextColor')
                ),

            ),
            'ui_color' => null
        ));

        $resolver->addAllowedValues(array('required' => array(false)));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent() {
        return 'textarea';
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return 'simple_ckeditor';
    }

}
