<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9ab99efd3743c9cf6c8dd7b5a214b8e095b9dc9afdd72673c1d9a2ff7a7a5c0c extends Twig_Template
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
        $__internal_5e51233ccc75195909ba2388397e4cf80f386d8a7a8de633fdb5c186162886c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e51233ccc75195909ba2388397e4cf80f386d8a7a8de633fdb5c186162886c7->enter($__internal_5e51233ccc75195909ba2388397e4cf80f386d8a7a8de633fdb5c186162886c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c5fd124ed6c652f7e305ae4c9218ad341bcdb84d2d923bc507f25586be54d282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fd124ed6c652f7e305ae4c9218ad341bcdb84d2d923bc507f25586be54d282->enter($__internal_c5fd124ed6c652f7e305ae4c9218ad341bcdb84d2d923bc507f25586be54d282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_5e51233ccc75195909ba2388397e4cf80f386d8a7a8de633fdb5c186162886c7->leave($__internal_5e51233ccc75195909ba2388397e4cf80f386d8a7a8de633fdb5c186162886c7_prof);

        
        $__internal_c5fd124ed6c652f7e305ae4c9218ad341bcdb84d2d923bc507f25586be54d282->leave($__internal_c5fd124ed6c652f7e305ae4c9218ad341bcdb84d2d923bc507f25586be54d282_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
