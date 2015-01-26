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
class StandardCKEditorType extends AbstractType {

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
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'required' => false,
            'toolbar' => array(
                array('Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'),
                array('Scayt'),
                array('Link', 'Unlink', 'Anchor'),
                array('Image', 'Table', 'HorizontalRule', 'SpecialChar'),
                array('Maximize'),
                array('Source'),
                '/',
                array('Bold', 'Italic', 'Strike', '-', 'RemoveFormat'),
                array('NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'),
                array('Styles', 'Format', 'About'),
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
        return 'standard_ckeditor';
    }

}
