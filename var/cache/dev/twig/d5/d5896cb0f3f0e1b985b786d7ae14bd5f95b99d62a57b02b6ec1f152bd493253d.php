<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_582436cbb3040bbe1c4860200b0951d3b02f5df80b578332003758c7759b92b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b80bcccc15e43de04907aee80ebd720e9d6859ae2e68f3225334ac7374334841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80bcccc15e43de04907aee80ebd720e9d6859ae2e68f3225334ac7374334841->enter($__internal_b80bcccc15e43de04907aee80ebd720e9d6859ae2e68f3225334ac7374334841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_07038e828a48405ebe0e053e601a9924fbdfea17afaed545c894586434de2f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07038e828a48405ebe0e053e601a9924fbdfea17afaed545c894586434de2f35->enter($__internal_07038e828a48405ebe0e053e601a9924fbdfea17afaed545c894586434de2f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80bcccc15e43de04907aee80ebd720e9d6859ae2e68f3225334ac7374334841->leave($__internal_b80bcccc15e43de04907aee80ebd720e9d6859ae2e68f3225334ac7374334841_prof);

        
        $__internal_07038e828a48405ebe0e053e601a9924fbdfea17afaed545c894586434de2f35->leave($__internal_07038e828a48405ebe0e053e601a9924fbdfea17afaed545c894586434de2f35_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cd9d4c4e430a3e720267ad604ac717d5ccdbe57a19686ebe0900a121cffa64f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9d4c4e430a3e720267ad604ac717d5ccdbe57a19686ebe0900a121cffa64f3->enter($__internal_cd9d4c4e430a3e720267ad604ac717d5ccdbe57a19686ebe0900a121cffa64f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ac82147bb99589631bc178043e04cf194b8f68f14039c65a74a5c1fddb14753a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac82147bb99589631bc178043e04cf194b8f68f14039c65a74a5c1fddb14753a->enter($__internal_ac82147bb99589631bc178043e04cf194b8f68f14039c65a74a5c1fddb14753a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ac82147bb99589631bc178043e04cf194b8f68f14039c65a74a5c1fddb14753a->leave($__internal_ac82147bb99589631bc178043e04cf194b8f68f14039c65a74a5c1fddb14753a_prof);

        
        $__internal_cd9d4c4e430a3e720267ad604ac717d5ccdbe57a19686ebe0900a121cffa64f3->leave($__internal_cd9d4c4e430a3e720267ad604ac717d5ccdbe57a19686ebe0900a121cffa64f3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81abe63aa5914734293ab3e75ef4ad0c08954db2060090a6b691cf6caadcf940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81abe63aa5914734293ab3e75ef4ad0c08954db2060090a6b691cf6caadcf940->enter($__internal_81abe63aa5914734293ab3e75ef4ad0c08954db2060090a6b691cf6caadcf940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fb89efacbe0fb3d49b73b7437873faa48b0fd5745df95f640dd6fee8fc02b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb89efacbe0fb3d49b73b7437873faa48b0fd5745df95f640dd6fee8fc02b1d->enter($__internal_6fb89efacbe0fb3d49b73b7437873faa48b0fd5745df95f640dd6fee8fc02b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6fb89efacbe0fb3d49b73b7437873faa48b0fd5745df95f640dd6fee8fc02b1d->leave($__internal_6fb89efacbe0fb3d49b73b7437873faa48b0fd5745df95f640dd6fee8fc02b1d_prof);

        
        $__internal_81abe63aa5914734293ab3e75ef4ad0c08954db2060090a6b691cf6caadcf940->leave($__internal_81abe63aa5914734293ab3e75ef4ad0c08954db2060090a6b691cf6caadcf940_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
