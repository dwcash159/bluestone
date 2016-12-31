<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bdf241645c4cf382ba511a98e963ea4b256d240ae44647916e03970b85063f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a117f0fb741783641466c8bcc9769062246b151da8de6f2d7dca580c190d2fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a117f0fb741783641466c8bcc9769062246b151da8de6f2d7dca580c190d2fdd->enter($__internal_a117f0fb741783641466c8bcc9769062246b151da8de6f2d7dca580c190d2fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0384fb2198b36625753e18b704ba01036b6c47a4f36619da5bb4da752d3875cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0384fb2198b36625753e18b704ba01036b6c47a4f36619da5bb4da752d3875cd->enter($__internal_0384fb2198b36625753e18b704ba01036b6c47a4f36619da5bb4da752d3875cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a117f0fb741783641466c8bcc9769062246b151da8de6f2d7dca580c190d2fdd->leave($__internal_a117f0fb741783641466c8bcc9769062246b151da8de6f2d7dca580c190d2fdd_prof);

        
        $__internal_0384fb2198b36625753e18b704ba01036b6c47a4f36619da5bb4da752d3875cd->leave($__internal_0384fb2198b36625753e18b704ba01036b6c47a4f36619da5bb4da752d3875cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe75d27fc7d2e48340dc4e2890c7b81b537a6eaf29a7bcd153be202c799bdbb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe75d27fc7d2e48340dc4e2890c7b81b537a6eaf29a7bcd153be202c799bdbb7->enter($__internal_fe75d27fc7d2e48340dc4e2890c7b81b537a6eaf29a7bcd153be202c799bdbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fbe8d26955e52f5ca80faa4b8216ee01159acbd5e17463086c72ddc11108d390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe8d26955e52f5ca80faa4b8216ee01159acbd5e17463086c72ddc11108d390->enter($__internal_fbe8d26955e52f5ca80faa4b8216ee01159acbd5e17463086c72ddc11108d390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fbe8d26955e52f5ca80faa4b8216ee01159acbd5e17463086c72ddc11108d390->leave($__internal_fbe8d26955e52f5ca80faa4b8216ee01159acbd5e17463086c72ddc11108d390_prof);

        
        $__internal_fe75d27fc7d2e48340dc4e2890c7b81b537a6eaf29a7bcd153be202c799bdbb7->leave($__internal_fe75d27fc7d2e48340dc4e2890c7b81b537a6eaf29a7bcd153be202c799bdbb7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f64a21fa14772b85ceed00416274b42d84664993971d4c222933cdbe57b86d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64a21fa14772b85ceed00416274b42d84664993971d4c222933cdbe57b86d33->enter($__internal_f64a21fa14772b85ceed00416274b42d84664993971d4c222933cdbe57b86d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f23da3b86433f1a3ddc0198afb49172464b7471c9e3aab710b277982c8424a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f23da3b86433f1a3ddc0198afb49172464b7471c9e3aab710b277982c8424a1->enter($__internal_6f23da3b86433f1a3ddc0198afb49172464b7471c9e3aab710b277982c8424a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6f23da3b86433f1a3ddc0198afb49172464b7471c9e3aab710b277982c8424a1->leave($__internal_6f23da3b86433f1a3ddc0198afb49172464b7471c9e3aab710b277982c8424a1_prof);

        
        $__internal_f64a21fa14772b85ceed00416274b42d84664993971d4c222933cdbe57b86d33->leave($__internal_f64a21fa14772b85ceed00416274b42d84664993971d4c222933cdbe57b86d33_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
