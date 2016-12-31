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
        $__internal_c3f0a8642101330d054d50df250e62769ba25c3dd84909eb8b22184199217a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f0a8642101330d054d50df250e62769ba25c3dd84909eb8b22184199217a85->enter($__internal_c3f0a8642101330d054d50df250e62769ba25c3dd84909eb8b22184199217a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b9b947cfbc3c46c6cfb8b52b253ff2c6ca6b273ff0945b57b2b6570b861a013b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b947cfbc3c46c6cfb8b52b253ff2c6ca6b273ff0945b57b2b6570b861a013b->enter($__internal_b9b947cfbc3c46c6cfb8b52b253ff2c6ca6b273ff0945b57b2b6570b861a013b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f0a8642101330d054d50df250e62769ba25c3dd84909eb8b22184199217a85->leave($__internal_c3f0a8642101330d054d50df250e62769ba25c3dd84909eb8b22184199217a85_prof);

        
        $__internal_b9b947cfbc3c46c6cfb8b52b253ff2c6ca6b273ff0945b57b2b6570b861a013b->leave($__internal_b9b947cfbc3c46c6cfb8b52b253ff2c6ca6b273ff0945b57b2b6570b861a013b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_430469e66c59c95ef61b7cd4c8447a6a32df8891bac99da72ad4ef10a4794c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430469e66c59c95ef61b7cd4c8447a6a32df8891bac99da72ad4ef10a4794c3d->enter($__internal_430469e66c59c95ef61b7cd4c8447a6a32df8891bac99da72ad4ef10a4794c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dfbd3bd6ed1a8a1b6cfd552adaf3df65a8e8b55d0586e29fbe76e2398cce3a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbd3bd6ed1a8a1b6cfd552adaf3df65a8e8b55d0586e29fbe76e2398cce3a4a->enter($__internal_dfbd3bd6ed1a8a1b6cfd552adaf3df65a8e8b55d0586e29fbe76e2398cce3a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_dfbd3bd6ed1a8a1b6cfd552adaf3df65a8e8b55d0586e29fbe76e2398cce3a4a->leave($__internal_dfbd3bd6ed1a8a1b6cfd552adaf3df65a8e8b55d0586e29fbe76e2398cce3a4a_prof);

        
        $__internal_430469e66c59c95ef61b7cd4c8447a6a32df8891bac99da72ad4ef10a4794c3d->leave($__internal_430469e66c59c95ef61b7cd4c8447a6a32df8891bac99da72ad4ef10a4794c3d_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b358b8462e70485f23d8cea66372d6f55fd9c36723beff283becb880f43a95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b358b8462e70485f23d8cea66372d6f55fd9c36723beff283becb880f43a95b->enter($__internal_8b358b8462e70485f23d8cea66372d6f55fd9c36723beff283becb880f43a95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_413b240167329e3df694229d858ce5028bb367c2e570dce9f88acd291ca9d78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413b240167329e3df694229d858ce5028bb367c2e570dce9f88acd291ca9d78b->enter($__internal_413b240167329e3df694229d858ce5028bb367c2e570dce9f88acd291ca9d78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_413b240167329e3df694229d858ce5028bb367c2e570dce9f88acd291ca9d78b->leave($__internal_413b240167329e3df694229d858ce5028bb367c2e570dce9f88acd291ca9d78b_prof);

        
        $__internal_8b358b8462e70485f23d8cea66372d6f55fd9c36723beff283becb880f43a95b->leave($__internal_8b358b8462e70485f23d8cea66372d6f55fd9c36723beff283becb880f43a95b_prof);

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
