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
        $__internal_560bc22a7059e8eb1b7701265e97742d7890562e69af7aa4b33e60813967f9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560bc22a7059e8eb1b7701265e97742d7890562e69af7aa4b33e60813967f9b0->enter($__internal_560bc22a7059e8eb1b7701265e97742d7890562e69af7aa4b33e60813967f9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6300e8dbd40260bfb22a65e209d04fe0d3b29d942dc58749ee08fb7f88676e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6300e8dbd40260bfb22a65e209d04fe0d3b29d942dc58749ee08fb7f88676e2b->enter($__internal_6300e8dbd40260bfb22a65e209d04fe0d3b29d942dc58749ee08fb7f88676e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_560bc22a7059e8eb1b7701265e97742d7890562e69af7aa4b33e60813967f9b0->leave($__internal_560bc22a7059e8eb1b7701265e97742d7890562e69af7aa4b33e60813967f9b0_prof);

        
        $__internal_6300e8dbd40260bfb22a65e209d04fe0d3b29d942dc58749ee08fb7f88676e2b->leave($__internal_6300e8dbd40260bfb22a65e209d04fe0d3b29d942dc58749ee08fb7f88676e2b_prof);

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
