<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4aca9f989d643d7278614d3ace26135b0e90f00585a4fb663ce7c7db6972fcaf extends Twig_Template
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
        $__internal_8896da2d4a05992fc6f1ff2c6f55e2a37d4238b03b9f78ff60a6ea31099960ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8896da2d4a05992fc6f1ff2c6f55e2a37d4238b03b9f78ff60a6ea31099960ff->enter($__internal_8896da2d4a05992fc6f1ff2c6f55e2a37d4238b03b9f78ff60a6ea31099960ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f1e1965d431d126c12a380835e58e33be1b87b66d0bc6c852a1caff42fd99157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e1965d431d126c12a380835e58e33be1b87b66d0bc6c852a1caff42fd99157->enter($__internal_f1e1965d431d126c12a380835e58e33be1b87b66d0bc6c852a1caff42fd99157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8896da2d4a05992fc6f1ff2c6f55e2a37d4238b03b9f78ff60a6ea31099960ff->leave($__internal_8896da2d4a05992fc6f1ff2c6f55e2a37d4238b03b9f78ff60a6ea31099960ff_prof);

        
        $__internal_f1e1965d431d126c12a380835e58e33be1b87b66d0bc6c852a1caff42fd99157->leave($__internal_f1e1965d431d126c12a380835e58e33be1b87b66d0bc6c852a1caff42fd99157_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
