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
        $__internal_fe86838ea9065ff2ccaf08f62a26a2762a1027987b12348461b18b215771bcb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe86838ea9065ff2ccaf08f62a26a2762a1027987b12348461b18b215771bcb1->enter($__internal_fe86838ea9065ff2ccaf08f62a26a2762a1027987b12348461b18b215771bcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_03a68eee52d9f876ea7cdfd9d8f4a9ab02f71b3738919623185f83525dc8f956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a68eee52d9f876ea7cdfd9d8f4a9ab02f71b3738919623185f83525dc8f956->enter($__internal_03a68eee52d9f876ea7cdfd9d8f4a9ab02f71b3738919623185f83525dc8f956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe86838ea9065ff2ccaf08f62a26a2762a1027987b12348461b18b215771bcb1->leave($__internal_fe86838ea9065ff2ccaf08f62a26a2762a1027987b12348461b18b215771bcb1_prof);

        
        $__internal_03a68eee52d9f876ea7cdfd9d8f4a9ab02f71b3738919623185f83525dc8f956->leave($__internal_03a68eee52d9f876ea7cdfd9d8f4a9ab02f71b3738919623185f83525dc8f956_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_558536cd0d5dbb7c11eef5118263f9b21934e3626d619383f06e4bf0e5016544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558536cd0d5dbb7c11eef5118263f9b21934e3626d619383f06e4bf0e5016544->enter($__internal_558536cd0d5dbb7c11eef5118263f9b21934e3626d619383f06e4bf0e5016544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1596ed4c0a4b0eeb4b58c6357fbc80d78b34d40be4c5723a8063364e0b4428f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1596ed4c0a4b0eeb4b58c6357fbc80d78b34d40be4c5723a8063364e0b4428f3->enter($__internal_1596ed4c0a4b0eeb4b58c6357fbc80d78b34d40be4c5723a8063364e0b4428f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1596ed4c0a4b0eeb4b58c6357fbc80d78b34d40be4c5723a8063364e0b4428f3->leave($__internal_1596ed4c0a4b0eeb4b58c6357fbc80d78b34d40be4c5723a8063364e0b4428f3_prof);

        
        $__internal_558536cd0d5dbb7c11eef5118263f9b21934e3626d619383f06e4bf0e5016544->leave($__internal_558536cd0d5dbb7c11eef5118263f9b21934e3626d619383f06e4bf0e5016544_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2fb00e0345462b8eb3dd3d59f39372bd960f2bea0e87cc692ad6867e1876ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2fb00e0345462b8eb3dd3d59f39372bd960f2bea0e87cc692ad6867e1876ab9->enter($__internal_f2fb00e0345462b8eb3dd3d59f39372bd960f2bea0e87cc692ad6867e1876ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1652ccb1fe58f6829310e79208d14b33a5a0028eea993ad8ea4f5d8dd87d3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1652ccb1fe58f6829310e79208d14b33a5a0028eea993ad8ea4f5d8dd87d3e8->enter($__internal_b1652ccb1fe58f6829310e79208d14b33a5a0028eea993ad8ea4f5d8dd87d3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b1652ccb1fe58f6829310e79208d14b33a5a0028eea993ad8ea4f5d8dd87d3e8->leave($__internal_b1652ccb1fe58f6829310e79208d14b33a5a0028eea993ad8ea4f5d8dd87d3e8_prof);

        
        $__internal_f2fb00e0345462b8eb3dd3d59f39372bd960f2bea0e87cc692ad6867e1876ab9->leave($__internal_f2fb00e0345462b8eb3dd3d59f39372bd960f2bea0e87cc692ad6867e1876ab9_prof);

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
