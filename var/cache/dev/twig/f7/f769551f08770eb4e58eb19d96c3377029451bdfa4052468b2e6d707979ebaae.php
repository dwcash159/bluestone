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
        $__internal_26072a9948f5a660cb53ecef44f28c325a8772ad37dbaf66c9b037f8300c49dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26072a9948f5a660cb53ecef44f28c325a8772ad37dbaf66c9b037f8300c49dd->enter($__internal_26072a9948f5a660cb53ecef44f28c325a8772ad37dbaf66c9b037f8300c49dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_02da50a0040aaedd1a46bca3d0a5aa164bc1cafb3bae032209658f6618b6940a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02da50a0040aaedd1a46bca3d0a5aa164bc1cafb3bae032209658f6618b6940a->enter($__internal_02da50a0040aaedd1a46bca3d0a5aa164bc1cafb3bae032209658f6618b6940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26072a9948f5a660cb53ecef44f28c325a8772ad37dbaf66c9b037f8300c49dd->leave($__internal_26072a9948f5a660cb53ecef44f28c325a8772ad37dbaf66c9b037f8300c49dd_prof);

        
        $__internal_02da50a0040aaedd1a46bca3d0a5aa164bc1cafb3bae032209658f6618b6940a->leave($__internal_02da50a0040aaedd1a46bca3d0a5aa164bc1cafb3bae032209658f6618b6940a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5217dbc6574de2343a818668fd663c8c521890843d623a8bbed756e983a4bc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5217dbc6574de2343a818668fd663c8c521890843d623a8bbed756e983a4bc0c->enter($__internal_5217dbc6574de2343a818668fd663c8c521890843d623a8bbed756e983a4bc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd78f128394c8bda69a90f35ffcf35e5f639b7b13cccffb2c34556759bd14e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd78f128394c8bda69a90f35ffcf35e5f639b7b13cccffb2c34556759bd14e26->enter($__internal_bd78f128394c8bda69a90f35ffcf35e5f639b7b13cccffb2c34556759bd14e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bd78f128394c8bda69a90f35ffcf35e5f639b7b13cccffb2c34556759bd14e26->leave($__internal_bd78f128394c8bda69a90f35ffcf35e5f639b7b13cccffb2c34556759bd14e26_prof);

        
        $__internal_5217dbc6574de2343a818668fd663c8c521890843d623a8bbed756e983a4bc0c->leave($__internal_5217dbc6574de2343a818668fd663c8c521890843d623a8bbed756e983a4bc0c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af2b07d479f21f6bd908b1008bcf96919f45b5f133dfef10b51fb1fcd94676bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2b07d479f21f6bd908b1008bcf96919f45b5f133dfef10b51fb1fcd94676bc->enter($__internal_af2b07d479f21f6bd908b1008bcf96919f45b5f133dfef10b51fb1fcd94676bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aef8146e9c65b3bcbc37595290d3459d543cc98e8b65472c270263cc6cbe1202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef8146e9c65b3bcbc37595290d3459d543cc98e8b65472c270263cc6cbe1202->enter($__internal_aef8146e9c65b3bcbc37595290d3459d543cc98e8b65472c270263cc6cbe1202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aef8146e9c65b3bcbc37595290d3459d543cc98e8b65472c270263cc6cbe1202->leave($__internal_aef8146e9c65b3bcbc37595290d3459d543cc98e8b65472c270263cc6cbe1202_prof);

        
        $__internal_af2b07d479f21f6bd908b1008bcf96919f45b5f133dfef10b51fb1fcd94676bc->leave($__internal_af2b07d479f21f6bd908b1008bcf96919f45b5f133dfef10b51fb1fcd94676bc_prof);

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
