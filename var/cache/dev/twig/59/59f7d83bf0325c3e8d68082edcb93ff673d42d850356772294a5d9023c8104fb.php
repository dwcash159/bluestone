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
        $__internal_59641be5c17ab4847ab62836f75fdd504ee3d4e001bd8c4940d5d4e05157ae28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59641be5c17ab4847ab62836f75fdd504ee3d4e001bd8c4940d5d4e05157ae28->enter($__internal_59641be5c17ab4847ab62836f75fdd504ee3d4e001bd8c4940d5d4e05157ae28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_6e541971f49267a836aad64699bc6451118ceedaa6d35c5d8968f5327ebccba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e541971f49267a836aad64699bc6451118ceedaa6d35c5d8968f5327ebccba4->enter($__internal_6e541971f49267a836aad64699bc6451118ceedaa6d35c5d8968f5327ebccba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_59641be5c17ab4847ab62836f75fdd504ee3d4e001bd8c4940d5d4e05157ae28->leave($__internal_59641be5c17ab4847ab62836f75fdd504ee3d4e001bd8c4940d5d4e05157ae28_prof);

        
        $__internal_6e541971f49267a836aad64699bc6451118ceedaa6d35c5d8968f5327ebccba4->leave($__internal_6e541971f49267a836aad64699bc6451118ceedaa6d35c5d8968f5327ebccba4_prof);

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
