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
        $__internal_250d61f9390da9ec6439fda0f6bed032ba78d7023db643267145ac3ae89c2467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250d61f9390da9ec6439fda0f6bed032ba78d7023db643267145ac3ae89c2467->enter($__internal_250d61f9390da9ec6439fda0f6bed032ba78d7023db643267145ac3ae89c2467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_17c7b7dde2781dac9875cf22db06ee4e2ddc9131cfe62d3d53f1721e2f5e02cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c7b7dde2781dac9875cf22db06ee4e2ddc9131cfe62d3d53f1721e2f5e02cb->enter($__internal_17c7b7dde2781dac9875cf22db06ee4e2ddc9131cfe62d3d53f1721e2f5e02cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250d61f9390da9ec6439fda0f6bed032ba78d7023db643267145ac3ae89c2467->leave($__internal_250d61f9390da9ec6439fda0f6bed032ba78d7023db643267145ac3ae89c2467_prof);

        
        $__internal_17c7b7dde2781dac9875cf22db06ee4e2ddc9131cfe62d3d53f1721e2f5e02cb->leave($__internal_17c7b7dde2781dac9875cf22db06ee4e2ddc9131cfe62d3d53f1721e2f5e02cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16f37af3e27852b0edb0a077fbcfc15d70385d911f91a8a7a27dd17ef64b7da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f37af3e27852b0edb0a077fbcfc15d70385d911f91a8a7a27dd17ef64b7da8->enter($__internal_16f37af3e27852b0edb0a077fbcfc15d70385d911f91a8a7a27dd17ef64b7da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d7fd9e0a182cf2ee05d67943493bcdee4e958a8df33cd91e195f10552bdab83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7fd9e0a182cf2ee05d67943493bcdee4e958a8df33cd91e195f10552bdab83->enter($__internal_5d7fd9e0a182cf2ee05d67943493bcdee4e958a8df33cd91e195f10552bdab83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5d7fd9e0a182cf2ee05d67943493bcdee4e958a8df33cd91e195f10552bdab83->leave($__internal_5d7fd9e0a182cf2ee05d67943493bcdee4e958a8df33cd91e195f10552bdab83_prof);

        
        $__internal_16f37af3e27852b0edb0a077fbcfc15d70385d911f91a8a7a27dd17ef64b7da8->leave($__internal_16f37af3e27852b0edb0a077fbcfc15d70385d911f91a8a7a27dd17ef64b7da8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_771753a48e0bbb8f96f020f3d44340eb94495d00017b001ef248da98d831f2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771753a48e0bbb8f96f020f3d44340eb94495d00017b001ef248da98d831f2c0->enter($__internal_771753a48e0bbb8f96f020f3d44340eb94495d00017b001ef248da98d831f2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9edbaa91b7d112b8541f5d2945e1926e29f8e0d761524526b2104226a84244ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edbaa91b7d112b8541f5d2945e1926e29f8e0d761524526b2104226a84244ef->enter($__internal_9edbaa91b7d112b8541f5d2945e1926e29f8e0d761524526b2104226a84244ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9edbaa91b7d112b8541f5d2945e1926e29f8e0d761524526b2104226a84244ef->leave($__internal_9edbaa91b7d112b8541f5d2945e1926e29f8e0d761524526b2104226a84244ef_prof);

        
        $__internal_771753a48e0bbb8f96f020f3d44340eb94495d00017b001ef248da98d831f2c0->leave($__internal_771753a48e0bbb8f96f020f3d44340eb94495d00017b001ef248da98d831f2c0_prof);

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
