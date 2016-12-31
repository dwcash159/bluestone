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
        $__internal_4a67d94033a4a65ffdcc47f0721fa7a522945e4190bbe643e54f0c05692d253d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a67d94033a4a65ffdcc47f0721fa7a522945e4190bbe643e54f0c05692d253d->enter($__internal_4a67d94033a4a65ffdcc47f0721fa7a522945e4190bbe643e54f0c05692d253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_136fde11238695b147128180131214590112a188d10bbcfe3cf5898901f73a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136fde11238695b147128180131214590112a188d10bbcfe3cf5898901f73a93->enter($__internal_136fde11238695b147128180131214590112a188d10bbcfe3cf5898901f73a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a67d94033a4a65ffdcc47f0721fa7a522945e4190bbe643e54f0c05692d253d->leave($__internal_4a67d94033a4a65ffdcc47f0721fa7a522945e4190bbe643e54f0c05692d253d_prof);

        
        $__internal_136fde11238695b147128180131214590112a188d10bbcfe3cf5898901f73a93->leave($__internal_136fde11238695b147128180131214590112a188d10bbcfe3cf5898901f73a93_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a8c055c151d0a0862feac1acc818db5500f4944a05fecae6b65fdd2cde2ade2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8c055c151d0a0862feac1acc818db5500f4944a05fecae6b65fdd2cde2ade2->enter($__internal_4a8c055c151d0a0862feac1acc818db5500f4944a05fecae6b65fdd2cde2ade2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77016aa4186f2053cadbec43b8acf14e1c18b6d63d416cf26438838b97899a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77016aa4186f2053cadbec43b8acf14e1c18b6d63d416cf26438838b97899a0d->enter($__internal_77016aa4186f2053cadbec43b8acf14e1c18b6d63d416cf26438838b97899a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_77016aa4186f2053cadbec43b8acf14e1c18b6d63d416cf26438838b97899a0d->leave($__internal_77016aa4186f2053cadbec43b8acf14e1c18b6d63d416cf26438838b97899a0d_prof);

        
        $__internal_4a8c055c151d0a0862feac1acc818db5500f4944a05fecae6b65fdd2cde2ade2->leave($__internal_4a8c055c151d0a0862feac1acc818db5500f4944a05fecae6b65fdd2cde2ade2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05f2a6cf1e4fed0ef4e9cd20f130048c2ba0e80c3d0146a548b88288ed516669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f2a6cf1e4fed0ef4e9cd20f130048c2ba0e80c3d0146a548b88288ed516669->enter($__internal_05f2a6cf1e4fed0ef4e9cd20f130048c2ba0e80c3d0146a548b88288ed516669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c45bff7654e58c007bd47aa9e28119baeed51894e62ce5081b233683a08261e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c45bff7654e58c007bd47aa9e28119baeed51894e62ce5081b233683a08261e->enter($__internal_2c45bff7654e58c007bd47aa9e28119baeed51894e62ce5081b233683a08261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c45bff7654e58c007bd47aa9e28119baeed51894e62ce5081b233683a08261e->leave($__internal_2c45bff7654e58c007bd47aa9e28119baeed51894e62ce5081b233683a08261e_prof);

        
        $__internal_05f2a6cf1e4fed0ef4e9cd20f130048c2ba0e80c3d0146a548b88288ed516669->leave($__internal_05f2a6cf1e4fed0ef4e9cd20f130048c2ba0e80c3d0146a548b88288ed516669_prof);

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
