<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a0d602cf1542a66148e6055493e39b08d552a5d95201245edad34d82bb9a390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0d602cf1542a66148e6055493e39b08d552a5d95201245edad34d82bb9a390->enter($__internal_7a0d602cf1542a66148e6055493e39b08d552a5d95201245edad34d82bb9a390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bcffd37cbfe43fd3402485530ea89ae0c116f5c5221cba56fbc4096ee6a72240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcffd37cbfe43fd3402485530ea89ae0c116f5c5221cba56fbc4096ee6a72240->enter($__internal_bcffd37cbfe43fd3402485530ea89ae0c116f5c5221cba56fbc4096ee6a72240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a0d602cf1542a66148e6055493e39b08d552a5d95201245edad34d82bb9a390->leave($__internal_7a0d602cf1542a66148e6055493e39b08d552a5d95201245edad34d82bb9a390_prof);

        
        $__internal_bcffd37cbfe43fd3402485530ea89ae0c116f5c5221cba56fbc4096ee6a72240->leave($__internal_bcffd37cbfe43fd3402485530ea89ae0c116f5c5221cba56fbc4096ee6a72240_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54d013693ea4fe895450970674666bbcf3688b6227b7e494df548fc5095eca80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d013693ea4fe895450970674666bbcf3688b6227b7e494df548fc5095eca80->enter($__internal_54d013693ea4fe895450970674666bbcf3688b6227b7e494df548fc5095eca80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dc60d68028af7bea8afd6c238ebd2bba4454034f54d90c4ade05cb62ae473e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc60d68028af7bea8afd6c238ebd2bba4454034f54d90c4ade05cb62ae473e58->enter($__internal_dc60d68028af7bea8afd6c238ebd2bba4454034f54d90c4ade05cb62ae473e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_dc60d68028af7bea8afd6c238ebd2bba4454034f54d90c4ade05cb62ae473e58->leave($__internal_dc60d68028af7bea8afd6c238ebd2bba4454034f54d90c4ade05cb62ae473e58_prof);

        
        $__internal_54d013693ea4fe895450970674666bbcf3688b6227b7e494df548fc5095eca80->leave($__internal_54d013693ea4fe895450970674666bbcf3688b6227b7e494df548fc5095eca80_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_80df8b4d9b4925da83e5d441733b5fe55db2a478d65cb8f9877fffbaf92ec548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80df8b4d9b4925da83e5d441733b5fe55db2a478d65cb8f9877fffbaf92ec548->enter($__internal_80df8b4d9b4925da83e5d441733b5fe55db2a478d65cb8f9877fffbaf92ec548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75a9bff48d1c5c5d3626971d59c14cbf1d1789f22f9252b6417265af9bc3b54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a9bff48d1c5c5d3626971d59c14cbf1d1789f22f9252b6417265af9bc3b54c->enter($__internal_75a9bff48d1c5c5d3626971d59c14cbf1d1789f22f9252b6417265af9bc3b54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_75a9bff48d1c5c5d3626971d59c14cbf1d1789f22f9252b6417265af9bc3b54c->leave($__internal_75a9bff48d1c5c5d3626971d59c14cbf1d1789f22f9252b6417265af9bc3b54c_prof);

        
        $__internal_80df8b4d9b4925da83e5d441733b5fe55db2a478d65cb8f9877fffbaf92ec548->leave($__internal_80df8b4d9b4925da83e5d441733b5fe55db2a478d65cb8f9877fffbaf92ec548_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9877e7df421ed61fd65de75595867a8f2687156e2170c27aabd37e1b3843e324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9877e7df421ed61fd65de75595867a8f2687156e2170c27aabd37e1b3843e324->enter($__internal_9877e7df421ed61fd65de75595867a8f2687156e2170c27aabd37e1b3843e324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c73f393769a18d6d41dbd52965a909aae1eed2cbb6edf633ebd83f3d2fb95b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73f393769a18d6d41dbd52965a909aae1eed2cbb6edf633ebd83f3d2fb95b21->enter($__internal_c73f393769a18d6d41dbd52965a909aae1eed2cbb6edf633ebd83f3d2fb95b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c73f393769a18d6d41dbd52965a909aae1eed2cbb6edf633ebd83f3d2fb95b21->leave($__internal_c73f393769a18d6d41dbd52965a909aae1eed2cbb6edf633ebd83f3d2fb95b21_prof);

        
        $__internal_9877e7df421ed61fd65de75595867a8f2687156e2170c27aabd37e1b3843e324->leave($__internal_9877e7df421ed61fd65de75595867a8f2687156e2170c27aabd37e1b3843e324_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
