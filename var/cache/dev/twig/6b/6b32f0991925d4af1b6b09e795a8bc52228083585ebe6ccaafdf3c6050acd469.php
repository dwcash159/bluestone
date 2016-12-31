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
        $__internal_4d125a8c348c5ba153d5b627dbfbaa9236e3dbf99a99e684b90e5d1bbc9b0ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d125a8c348c5ba153d5b627dbfbaa9236e3dbf99a99e684b90e5d1bbc9b0ecc->enter($__internal_4d125a8c348c5ba153d5b627dbfbaa9236e3dbf99a99e684b90e5d1bbc9b0ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_239794d002b14613ef7bc804f1345bda5f24fb8eb9437e70e07bcf9746c54e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239794d002b14613ef7bc804f1345bda5f24fb8eb9437e70e07bcf9746c54e7c->enter($__internal_239794d002b14613ef7bc804f1345bda5f24fb8eb9437e70e07bcf9746c54e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_4d125a8c348c5ba153d5b627dbfbaa9236e3dbf99a99e684b90e5d1bbc9b0ecc->leave($__internal_4d125a8c348c5ba153d5b627dbfbaa9236e3dbf99a99e684b90e5d1bbc9b0ecc_prof);

        
        $__internal_239794d002b14613ef7bc804f1345bda5f24fb8eb9437e70e07bcf9746c54e7c->leave($__internal_239794d002b14613ef7bc804f1345bda5f24fb8eb9437e70e07bcf9746c54e7c_prof);

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
