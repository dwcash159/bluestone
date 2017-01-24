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
        $__internal_ea80fd2bbd5eb4d2bc94ffbeefa04f3ff626a9d40740d7a698369d02a1602ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea80fd2bbd5eb4d2bc94ffbeefa04f3ff626a9d40740d7a698369d02a1602ab5->enter($__internal_ea80fd2bbd5eb4d2bc94ffbeefa04f3ff626a9d40740d7a698369d02a1602ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f078fec05ec4f4f696ea090bc041cdda86d5c7f9508b1f89a75e3617694ab3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f078fec05ec4f4f696ea090bc041cdda86d5c7f9508b1f89a75e3617694ab3b5->enter($__internal_f078fec05ec4f4f696ea090bc041cdda86d5c7f9508b1f89a75e3617694ab3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea80fd2bbd5eb4d2bc94ffbeefa04f3ff626a9d40740d7a698369d02a1602ab5->leave($__internal_ea80fd2bbd5eb4d2bc94ffbeefa04f3ff626a9d40740d7a698369d02a1602ab5_prof);

        
        $__internal_f078fec05ec4f4f696ea090bc041cdda86d5c7f9508b1f89a75e3617694ab3b5->leave($__internal_f078fec05ec4f4f696ea090bc041cdda86d5c7f9508b1f89a75e3617694ab3b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1b605ac42acd7d6d6a136fc6751c901c025153fc06091f54ef63a334ba523b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b605ac42acd7d6d6a136fc6751c901c025153fc06091f54ef63a334ba523b5->enter($__internal_c1b605ac42acd7d6d6a136fc6751c901c025153fc06091f54ef63a334ba523b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd301fa6104e7f6e42cba5037419334b063da8cff2e9cf4a1f0e0bc0d6929246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd301fa6104e7f6e42cba5037419334b063da8cff2e9cf4a1f0e0bc0d6929246->enter($__internal_cd301fa6104e7f6e42cba5037419334b063da8cff2e9cf4a1f0e0bc0d6929246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cd301fa6104e7f6e42cba5037419334b063da8cff2e9cf4a1f0e0bc0d6929246->leave($__internal_cd301fa6104e7f6e42cba5037419334b063da8cff2e9cf4a1f0e0bc0d6929246_prof);

        
        $__internal_c1b605ac42acd7d6d6a136fc6751c901c025153fc06091f54ef63a334ba523b5->leave($__internal_c1b605ac42acd7d6d6a136fc6751c901c025153fc06091f54ef63a334ba523b5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7202f6e74851038dfebedb1ff7422823593730636731ea4ede3e259927f05864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7202f6e74851038dfebedb1ff7422823593730636731ea4ede3e259927f05864->enter($__internal_7202f6e74851038dfebedb1ff7422823593730636731ea4ede3e259927f05864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8e8a2f5fd817baef1012273e3a71fc0d0236ecbd8bff4098f503a3248fa962c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e8a2f5fd817baef1012273e3a71fc0d0236ecbd8bff4098f503a3248fa962c->enter($__internal_f8e8a2f5fd817baef1012273e3a71fc0d0236ecbd8bff4098f503a3248fa962c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f8e8a2f5fd817baef1012273e3a71fc0d0236ecbd8bff4098f503a3248fa962c->leave($__internal_f8e8a2f5fd817baef1012273e3a71fc0d0236ecbd8bff4098f503a3248fa962c_prof);

        
        $__internal_7202f6e74851038dfebedb1ff7422823593730636731ea4ede3e259927f05864->leave($__internal_7202f6e74851038dfebedb1ff7422823593730636731ea4ede3e259927f05864_prof);

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
