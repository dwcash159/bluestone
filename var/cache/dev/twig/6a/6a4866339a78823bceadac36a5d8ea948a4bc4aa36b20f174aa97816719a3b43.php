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
        $__internal_402ba2c94195d85f9f8a3065d2c3fb0aa73f1a1e8d0fb47ea3cc5de345ef5edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402ba2c94195d85f9f8a3065d2c3fb0aa73f1a1e8d0fb47ea3cc5de345ef5edc->enter($__internal_402ba2c94195d85f9f8a3065d2c3fb0aa73f1a1e8d0fb47ea3cc5de345ef5edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_14b1c39904fd2b1aa747c3785c1f8c505ad2cf6228b5daf0c403bf80cf9d240e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b1c39904fd2b1aa747c3785c1f8c505ad2cf6228b5daf0c403bf80cf9d240e->enter($__internal_14b1c39904fd2b1aa747c3785c1f8c505ad2cf6228b5daf0c403bf80cf9d240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_402ba2c94195d85f9f8a3065d2c3fb0aa73f1a1e8d0fb47ea3cc5de345ef5edc->leave($__internal_402ba2c94195d85f9f8a3065d2c3fb0aa73f1a1e8d0fb47ea3cc5de345ef5edc_prof);

        
        $__internal_14b1c39904fd2b1aa747c3785c1f8c505ad2cf6228b5daf0c403bf80cf9d240e->leave($__internal_14b1c39904fd2b1aa747c3785c1f8c505ad2cf6228b5daf0c403bf80cf9d240e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcbc52594634f87834c5e930b17252e2608a09fd2b3f8624f10f2d3800063c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbc52594634f87834c5e930b17252e2608a09fd2b3f8624f10f2d3800063c50->enter($__internal_bcbc52594634f87834c5e930b17252e2608a09fd2b3f8624f10f2d3800063c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_02119819059cf45fa947b7cfc584f5267d778e489886025e41ae1128396ca3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02119819059cf45fa947b7cfc584f5267d778e489886025e41ae1128396ca3d4->enter($__internal_02119819059cf45fa947b7cfc584f5267d778e489886025e41ae1128396ca3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_02119819059cf45fa947b7cfc584f5267d778e489886025e41ae1128396ca3d4->leave($__internal_02119819059cf45fa947b7cfc584f5267d778e489886025e41ae1128396ca3d4_prof);

        
        $__internal_bcbc52594634f87834c5e930b17252e2608a09fd2b3f8624f10f2d3800063c50->leave($__internal_bcbc52594634f87834c5e930b17252e2608a09fd2b3f8624f10f2d3800063c50_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c01bdd3033446ce31d646196e2450a013d015863c6138bb131633efec986899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c01bdd3033446ce31d646196e2450a013d015863c6138bb131633efec986899->enter($__internal_8c01bdd3033446ce31d646196e2450a013d015863c6138bb131633efec986899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2532579620fb4cb1dea9f3b8f7938103e4595700b4d21ea074a5399ff44ee25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2532579620fb4cb1dea9f3b8f7938103e4595700b4d21ea074a5399ff44ee25->enter($__internal_e2532579620fb4cb1dea9f3b8f7938103e4595700b4d21ea074a5399ff44ee25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e2532579620fb4cb1dea9f3b8f7938103e4595700b4d21ea074a5399ff44ee25->leave($__internal_e2532579620fb4cb1dea9f3b8f7938103e4595700b4d21ea074a5399ff44ee25_prof);

        
        $__internal_8c01bdd3033446ce31d646196e2450a013d015863c6138bb131633efec986899->leave($__internal_8c01bdd3033446ce31d646196e2450a013d015863c6138bb131633efec986899_prof);

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
