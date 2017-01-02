<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_657ff21f7b5a8fd70605aa25422f309603363e7a2f285e2fd3ead10b709e5f97 extends Twig_Template
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
        $__internal_24ce9cd9bde710c3098ac96003f27b32f157a196cd335b9079a94225e396a9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ce9cd9bde710c3098ac96003f27b32f157a196cd335b9079a94225e396a9d3->enter($__internal_24ce9cd9bde710c3098ac96003f27b32f157a196cd335b9079a94225e396a9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_ab094bb51d1cab947878a2cffd3f3857b79e0b07b59c938b04694684db8b053a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab094bb51d1cab947878a2cffd3f3857b79e0b07b59c938b04694684db8b053a->enter($__internal_ab094bb51d1cab947878a2cffd3f3857b79e0b07b59c938b04694684db8b053a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_24ce9cd9bde710c3098ac96003f27b32f157a196cd335b9079a94225e396a9d3->leave($__internal_24ce9cd9bde710c3098ac96003f27b32f157a196cd335b9079a94225e396a9d3_prof);

        
        $__internal_ab094bb51d1cab947878a2cffd3f3857b79e0b07b59c938b04694684db8b053a->leave($__internal_ab094bb51d1cab947878a2cffd3f3857b79e0b07b59c938b04694684db8b053a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
