<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f432b023e901e3b263acd0e630d45a06a2c4e3603051238ef54a805a64b2c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f432b023e901e3b263acd0e630d45a06a2c4e3603051238ef54a805a64b2c41->enter($__internal_0f432b023e901e3b263acd0e630d45a06a2c4e3603051238ef54a805a64b2c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_12e3bce326d790fec1ef2aaf306cb8abb49b669ce089dcd63347d9aa3368e0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e3bce326d790fec1ef2aaf306cb8abb49b669ce089dcd63347d9aa3368e0d1->enter($__internal_12e3bce326d790fec1ef2aaf306cb8abb49b669ce089dcd63347d9aa3368e0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f432b023e901e3b263acd0e630d45a06a2c4e3603051238ef54a805a64b2c41->leave($__internal_0f432b023e901e3b263acd0e630d45a06a2c4e3603051238ef54a805a64b2c41_prof);

        
        $__internal_12e3bce326d790fec1ef2aaf306cb8abb49b669ce089dcd63347d9aa3368e0d1->leave($__internal_12e3bce326d790fec1ef2aaf306cb8abb49b669ce089dcd63347d9aa3368e0d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b4a2a9e699d68874c2c165f6d30a003b657bbc3bc19ff9e812fbc7dc35286497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a2a9e699d68874c2c165f6d30a003b657bbc3bc19ff9e812fbc7dc35286497->enter($__internal_b4a2a9e699d68874c2c165f6d30a003b657bbc3bc19ff9e812fbc7dc35286497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3ddb932723ae9e7569b73d9c55c85607b0e0c0e48be18a9456e4b49730890811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddb932723ae9e7569b73d9c55c85607b0e0c0e48be18a9456e4b49730890811->enter($__internal_3ddb932723ae9e7569b73d9c55c85607b0e0c0e48be18a9456e4b49730890811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ddb932723ae9e7569b73d9c55c85607b0e0c0e48be18a9456e4b49730890811->leave($__internal_3ddb932723ae9e7569b73d9c55c85607b0e0c0e48be18a9456e4b49730890811_prof);

        
        $__internal_b4a2a9e699d68874c2c165f6d30a003b657bbc3bc19ff9e812fbc7dc35286497->leave($__internal_b4a2a9e699d68874c2c165f6d30a003b657bbc3bc19ff9e812fbc7dc35286497_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_759762bad81a0d4c25393e344e9c7cc7b36dccc2ef1280b3f5a7ce2de62d3f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759762bad81a0d4c25393e344e9c7cc7b36dccc2ef1280b3f5a7ce2de62d3f0a->enter($__internal_759762bad81a0d4c25393e344e9c7cc7b36dccc2ef1280b3f5a7ce2de62d3f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d82afb2f855c0f3ee710e7314759eac38c3c2c11d22ec49fcb4bc2bdb22b914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d82afb2f855c0f3ee710e7314759eac38c3c2c11d22ec49fcb4bc2bdb22b914->enter($__internal_6d82afb2f855c0f3ee710e7314759eac38c3c2c11d22ec49fcb4bc2bdb22b914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d82afb2f855c0f3ee710e7314759eac38c3c2c11d22ec49fcb4bc2bdb22b914->leave($__internal_6d82afb2f855c0f3ee710e7314759eac38c3c2c11d22ec49fcb4bc2bdb22b914_prof);

        
        $__internal_759762bad81a0d4c25393e344e9c7cc7b36dccc2ef1280b3f5a7ce2de62d3f0a->leave($__internal_759762bad81a0d4c25393e344e9c7cc7b36dccc2ef1280b3f5a7ce2de62d3f0a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0822b286b8799a753f6a0af4a3f3679cec3881628b2247d61192cdcfa6d8e551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0822b286b8799a753f6a0af4a3f3679cec3881628b2247d61192cdcfa6d8e551->enter($__internal_0822b286b8799a753f6a0af4a3f3679cec3881628b2247d61192cdcfa6d8e551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d62037fd8478bca49d574b0372ab8be05f9b47cf8ba9c969e63c8a04f476b86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62037fd8478bca49d574b0372ab8be05f9b47cf8ba9c969e63c8a04f476b86a->enter($__internal_d62037fd8478bca49d574b0372ab8be05f9b47cf8ba9c969e63c8a04f476b86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d62037fd8478bca49d574b0372ab8be05f9b47cf8ba9c969e63c8a04f476b86a->leave($__internal_d62037fd8478bca49d574b0372ab8be05f9b47cf8ba9c969e63c8a04f476b86a_prof);

        
        $__internal_0822b286b8799a753f6a0af4a3f3679cec3881628b2247d61192cdcfa6d8e551->leave($__internal_0822b286b8799a753f6a0af4a3f3679cec3881628b2247d61192cdcfa6d8e551_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
