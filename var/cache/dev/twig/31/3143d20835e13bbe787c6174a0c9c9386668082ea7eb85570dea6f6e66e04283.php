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
        $__internal_89d9f33eed144fd31adaad347ee8e5407e17b2a9eadfc9c80a8254d7bba84101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d9f33eed144fd31adaad347ee8e5407e17b2a9eadfc9c80a8254d7bba84101->enter($__internal_89d9f33eed144fd31adaad347ee8e5407e17b2a9eadfc9c80a8254d7bba84101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_af714d384ac04dc5730084d292cf1a93af83841514a525b53058b2960c11cd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af714d384ac04dc5730084d292cf1a93af83841514a525b53058b2960c11cd59->enter($__internal_af714d384ac04dc5730084d292cf1a93af83841514a525b53058b2960c11cd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_89d9f33eed144fd31adaad347ee8e5407e17b2a9eadfc9c80a8254d7bba84101->leave($__internal_89d9f33eed144fd31adaad347ee8e5407e17b2a9eadfc9c80a8254d7bba84101_prof);

        
        $__internal_af714d384ac04dc5730084d292cf1a93af83841514a525b53058b2960c11cd59->leave($__internal_af714d384ac04dc5730084d292cf1a93af83841514a525b53058b2960c11cd59_prof);

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
