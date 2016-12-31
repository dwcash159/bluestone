<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7b42b20b50026cf60cfa5150e3d2bb4541e554aeafceb05031a858a917fb0d3f extends Twig_Template
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
        $__internal_0d6435eff6e3a63ef9741963d28f59915ccda8c626797773de4e867216c80716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6435eff6e3a63ef9741963d28f59915ccda8c626797773de4e867216c80716->enter($__internal_0d6435eff6e3a63ef9741963d28f59915ccda8c626797773de4e867216c80716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_9881507632fff8bde1ec764f3d46b14103dd1f1c2c81526898d90f7aa02f2eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9881507632fff8bde1ec764f3d46b14103dd1f1c2c81526898d90f7aa02f2eed->enter($__internal_9881507632fff8bde1ec764f3d46b14103dd1f1c2c81526898d90f7aa02f2eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0d6435eff6e3a63ef9741963d28f59915ccda8c626797773de4e867216c80716->leave($__internal_0d6435eff6e3a63ef9741963d28f59915ccda8c626797773de4e867216c80716_prof);

        
        $__internal_9881507632fff8bde1ec764f3d46b14103dd1f1c2c81526898d90f7aa02f2eed->leave($__internal_9881507632fff8bde1ec764f3d46b14103dd1f1c2c81526898d90f7aa02f2eed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
