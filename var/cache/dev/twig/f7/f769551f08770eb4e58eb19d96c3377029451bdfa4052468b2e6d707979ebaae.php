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
        $__internal_380a589de020a83319df05866314a4dea2393e53d93269370013ec14c6e9ddb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_380a589de020a83319df05866314a4dea2393e53d93269370013ec14c6e9ddb9->enter($__internal_380a589de020a83319df05866314a4dea2393e53d93269370013ec14c6e9ddb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_60359711d39e3855919e492d2a9fbd1fe0bbfe11174464e47e1096863f5204b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60359711d39e3855919e492d2a9fbd1fe0bbfe11174464e47e1096863f5204b9->enter($__internal_60359711d39e3855919e492d2a9fbd1fe0bbfe11174464e47e1096863f5204b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_380a589de020a83319df05866314a4dea2393e53d93269370013ec14c6e9ddb9->leave($__internal_380a589de020a83319df05866314a4dea2393e53d93269370013ec14c6e9ddb9_prof);

        
        $__internal_60359711d39e3855919e492d2a9fbd1fe0bbfe11174464e47e1096863f5204b9->leave($__internal_60359711d39e3855919e492d2a9fbd1fe0bbfe11174464e47e1096863f5204b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fda7ccd86e99762d127f7630f3e796ae17deb22da2c134214c8d0e19f26ed38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fda7ccd86e99762d127f7630f3e796ae17deb22da2c134214c8d0e19f26ed38->enter($__internal_7fda7ccd86e99762d127f7630f3e796ae17deb22da2c134214c8d0e19f26ed38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d6bfb9765d0ff3ee6e470a9a28cd4034a0ce0174f18a277b009631bb852749b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6bfb9765d0ff3ee6e470a9a28cd4034a0ce0174f18a277b009631bb852749b->enter($__internal_4d6bfb9765d0ff3ee6e470a9a28cd4034a0ce0174f18a277b009631bb852749b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4d6bfb9765d0ff3ee6e470a9a28cd4034a0ce0174f18a277b009631bb852749b->leave($__internal_4d6bfb9765d0ff3ee6e470a9a28cd4034a0ce0174f18a277b009631bb852749b_prof);

        
        $__internal_7fda7ccd86e99762d127f7630f3e796ae17deb22da2c134214c8d0e19f26ed38->leave($__internal_7fda7ccd86e99762d127f7630f3e796ae17deb22da2c134214c8d0e19f26ed38_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcb948aa89a6b5691d953ccad1ef363b8bdd9cfcfee1782fdb747d80c1a4e420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb948aa89a6b5691d953ccad1ef363b8bdd9cfcfee1782fdb747d80c1a4e420->enter($__internal_bcb948aa89a6b5691d953ccad1ef363b8bdd9cfcfee1782fdb747d80c1a4e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3da0e3cf80f1b4f9cb28784bc7106383b1feef24ef6732c0ca2e07e5d1a1c360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da0e3cf80f1b4f9cb28784bc7106383b1feef24ef6732c0ca2e07e5d1a1c360->enter($__internal_3da0e3cf80f1b4f9cb28784bc7106383b1feef24ef6732c0ca2e07e5d1a1c360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3da0e3cf80f1b4f9cb28784bc7106383b1feef24ef6732c0ca2e07e5d1a1c360->leave($__internal_3da0e3cf80f1b4f9cb28784bc7106383b1feef24ef6732c0ca2e07e5d1a1c360_prof);

        
        $__internal_bcb948aa89a6b5691d953ccad1ef363b8bdd9cfcfee1782fdb747d80c1a4e420->leave($__internal_bcb948aa89a6b5691d953ccad1ef363b8bdd9cfcfee1782fdb747d80c1a4e420_prof);

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
