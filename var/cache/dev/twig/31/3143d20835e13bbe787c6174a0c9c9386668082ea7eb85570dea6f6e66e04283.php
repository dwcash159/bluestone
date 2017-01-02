<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5f562ad9d3df6584582699adea1cfe6dd771e1d8728aae90ae8af10d851fa849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbbe6a87a4902b69bf36b6e5edabf94e2c82c666b85fe0ecbb8c6e82cea679a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbe6a87a4902b69bf36b6e5edabf94e2c82c666b85fe0ecbb8c6e82cea679a7->enter($__internal_cbbe6a87a4902b69bf36b6e5edabf94e2c82c666b85fe0ecbb8c6e82cea679a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b33fdf333f5e4703fa426945c718055f352825991b595577b6fc9e6c7ef705ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33fdf333f5e4703fa426945c718055f352825991b595577b6fc9e6c7ef705ed->enter($__internal_b33fdf333f5e4703fa426945c718055f352825991b595577b6fc9e6c7ef705ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cbbe6a87a4902b69bf36b6e5edabf94e2c82c666b85fe0ecbb8c6e82cea679a7->leave($__internal_cbbe6a87a4902b69bf36b6e5edabf94e2c82c666b85fe0ecbb8c6e82cea679a7_prof);

        
        $__internal_b33fdf333f5e4703fa426945c718055f352825991b595577b6fc9e6c7ef705ed->leave($__internal_b33fdf333f5e4703fa426945c718055f352825991b595577b6fc9e6c7ef705ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
