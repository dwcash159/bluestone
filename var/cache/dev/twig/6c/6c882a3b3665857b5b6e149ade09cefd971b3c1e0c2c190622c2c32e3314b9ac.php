<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5a4a98caf8686541014c99dc7f196f0148a568adb6fbf50dd8f44593814b227f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b3b08e0107b8e12f62ac1802412c0569e49c867f05b7c584cb075fd81452037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3b08e0107b8e12f62ac1802412c0569e49c867f05b7c584cb075fd81452037->enter($__internal_9b3b08e0107b8e12f62ac1802412c0569e49c867f05b7c584cb075fd81452037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2fe5d27d6fcf75df439dfb4ac5a8c538bf929678906befa27c953ea8d5877893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe5d27d6fcf75df439dfb4ac5a8c538bf929678906befa27c953ea8d5877893->enter($__internal_2fe5d27d6fcf75df439dfb4ac5a8c538bf929678906befa27c953ea8d5877893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b3b08e0107b8e12f62ac1802412c0569e49c867f05b7c584cb075fd81452037->leave($__internal_9b3b08e0107b8e12f62ac1802412c0569e49c867f05b7c584cb075fd81452037_prof);

        
        $__internal_2fe5d27d6fcf75df439dfb4ac5a8c538bf929678906befa27c953ea8d5877893->leave($__internal_2fe5d27d6fcf75df439dfb4ac5a8c538bf929678906befa27c953ea8d5877893_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_039239fc3010c1eb95791f38ca799b0354f585624f149404aed6cf309e7addfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039239fc3010c1eb95791f38ca799b0354f585624f149404aed6cf309e7addfe->enter($__internal_039239fc3010c1eb95791f38ca799b0354f585624f149404aed6cf309e7addfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f02cf6d2186ee2b9c8dd3416fee6720ffb38d46a1efa97bbc9cfd2c11c5a954c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02cf6d2186ee2b9c8dd3416fee6720ffb38d46a1efa97bbc9cfd2c11c5a954c->enter($__internal_f02cf6d2186ee2b9c8dd3416fee6720ffb38d46a1efa97bbc9cfd2c11c5a954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f02cf6d2186ee2b9c8dd3416fee6720ffb38d46a1efa97bbc9cfd2c11c5a954c->leave($__internal_f02cf6d2186ee2b9c8dd3416fee6720ffb38d46a1efa97bbc9cfd2c11c5a954c_prof);

        
        $__internal_039239fc3010c1eb95791f38ca799b0354f585624f149404aed6cf309e7addfe->leave($__internal_039239fc3010c1eb95791f38ca799b0354f585624f149404aed6cf309e7addfe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
