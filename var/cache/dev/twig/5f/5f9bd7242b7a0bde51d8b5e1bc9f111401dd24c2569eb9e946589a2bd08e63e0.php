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
        $__internal_b6989663f2a992e1d531ba36c80577d6fbf74ca883cc71d7a4463a2530561139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6989663f2a992e1d531ba36c80577d6fbf74ca883cc71d7a4463a2530561139->enter($__internal_b6989663f2a992e1d531ba36c80577d6fbf74ca883cc71d7a4463a2530561139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f7cf58efc46c361f85ab33ae0245c47f6a46ff20750175703a4786c0744d872d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cf58efc46c361f85ab33ae0245c47f6a46ff20750175703a4786c0744d872d->enter($__internal_f7cf58efc46c361f85ab33ae0245c47f6a46ff20750175703a4786c0744d872d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b6989663f2a992e1d531ba36c80577d6fbf74ca883cc71d7a4463a2530561139->leave($__internal_b6989663f2a992e1d531ba36c80577d6fbf74ca883cc71d7a4463a2530561139_prof);

        
        $__internal_f7cf58efc46c361f85ab33ae0245c47f6a46ff20750175703a4786c0744d872d->leave($__internal_f7cf58efc46c361f85ab33ae0245c47f6a46ff20750175703a4786c0744d872d_prof);

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
