<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5f881dd3fb88ef0f6664e6eaa7753bf61f4527f6a93809ff36bd8fe361d3a92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_98795ceb3eef8ce72fdaefad5c4bd3dfdc56f91550e9bcd4d2c861ecfc29e034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98795ceb3eef8ce72fdaefad5c4bd3dfdc56f91550e9bcd4d2c861ecfc29e034->enter($__internal_98795ceb3eef8ce72fdaefad5c4bd3dfdc56f91550e9bcd4d2c861ecfc29e034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e9083f6cf4688488403ee50ceaccecc6927cce02522ca82eeefc442b328a46f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9083f6cf4688488403ee50ceaccecc6927cce02522ca82eeefc442b328a46f9->enter($__internal_e9083f6cf4688488403ee50ceaccecc6927cce02522ca82eeefc442b328a46f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98795ceb3eef8ce72fdaefad5c4bd3dfdc56f91550e9bcd4d2c861ecfc29e034->leave($__internal_98795ceb3eef8ce72fdaefad5c4bd3dfdc56f91550e9bcd4d2c861ecfc29e034_prof);

        
        $__internal_e9083f6cf4688488403ee50ceaccecc6927cce02522ca82eeefc442b328a46f9->leave($__internal_e9083f6cf4688488403ee50ceaccecc6927cce02522ca82eeefc442b328a46f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cb79f5a92c22ac57674e1594e2520edd1924494f04195c61fb50ddfbcb1af7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb79f5a92c22ac57674e1594e2520edd1924494f04195c61fb50ddfbcb1af7f->enter($__internal_9cb79f5a92c22ac57674e1594e2520edd1924494f04195c61fb50ddfbcb1af7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7336e7f502f72a57eeeb1b6f064441c30e9e9131e00d1fb6c9eae7a99d8dc4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7336e7f502f72a57eeeb1b6f064441c30e9e9131e00d1fb6c9eae7a99d8dc4a6->enter($__internal_7336e7f502f72a57eeeb1b6f064441c30e9e9131e00d1fb6c9eae7a99d8dc4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7336e7f502f72a57eeeb1b6f064441c30e9e9131e00d1fb6c9eae7a99d8dc4a6->leave($__internal_7336e7f502f72a57eeeb1b6f064441c30e9e9131e00d1fb6c9eae7a99d8dc4a6_prof);

        
        $__internal_9cb79f5a92c22ac57674e1594e2520edd1924494f04195c61fb50ddfbcb1af7f->leave($__internal_9cb79f5a92c22ac57674e1594e2520edd1924494f04195c61fb50ddfbcb1af7f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6091f6d2384a2f655a6db11d18f0395c969167715ae14cffb3007ca4d5f34788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6091f6d2384a2f655a6db11d18f0395c969167715ae14cffb3007ca4d5f34788->enter($__internal_6091f6d2384a2f655a6db11d18f0395c969167715ae14cffb3007ca4d5f34788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_808cd0fde992f8d170c1342411bdb1c4fdc4b7652fc7598d15666f61dbed5a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808cd0fde992f8d170c1342411bdb1c4fdc4b7652fc7598d15666f61dbed5a48->enter($__internal_808cd0fde992f8d170c1342411bdb1c4fdc4b7652fc7598d15666f61dbed5a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_808cd0fde992f8d170c1342411bdb1c4fdc4b7652fc7598d15666f61dbed5a48->leave($__internal_808cd0fde992f8d170c1342411bdb1c4fdc4b7652fc7598d15666f61dbed5a48_prof);

        
        $__internal_6091f6d2384a2f655a6db11d18f0395c969167715ae14cffb3007ca4d5f34788->leave($__internal_6091f6d2384a2f655a6db11d18f0395c969167715ae14cffb3007ca4d5f34788_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
