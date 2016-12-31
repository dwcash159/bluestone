<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_94992de7421f7ede9adfc484308a4528d30e6921064e0b307ffc625918b8836b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7679347dc98657664a246187286c5087af260f96b3ea2c4a7212b4384e23683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7679347dc98657664a246187286c5087af260f96b3ea2c4a7212b4384e23683->enter($__internal_c7679347dc98657664a246187286c5087af260f96b3ea2c4a7212b4384e23683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_650f9d2424a99f576f7cf23547c731754329c9af2a1b9647829e853a9e061e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650f9d2424a99f576f7cf23547c731754329c9af2a1b9647829e853a9e061e8f->enter($__internal_650f9d2424a99f576f7cf23547c731754329c9af2a1b9647829e853a9e061e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c7679347dc98657664a246187286c5087af260f96b3ea2c4a7212b4384e23683->leave($__internal_c7679347dc98657664a246187286c5087af260f96b3ea2c4a7212b4384e23683_prof);

        
        $__internal_650f9d2424a99f576f7cf23547c731754329c9af2a1b9647829e853a9e061e8f->leave($__internal_650f9d2424a99f576f7cf23547c731754329c9af2a1b9647829e853a9e061e8f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cd76a850e692c84957c9db40b7ffb8e304eaeb70532a77fc6da4eef24ce0538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd76a850e692c84957c9db40b7ffb8e304eaeb70532a77fc6da4eef24ce0538->enter($__internal_9cd76a850e692c84957c9db40b7ffb8e304eaeb70532a77fc6da4eef24ce0538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_afb32155a26b9e0284f186efe3573cb000f887a0e11805922f937d2186898291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb32155a26b9e0284f186efe3573cb000f887a0e11805922f937d2186898291->enter($__internal_afb32155a26b9e0284f186efe3573cb000f887a0e11805922f937d2186898291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_afb32155a26b9e0284f186efe3573cb000f887a0e11805922f937d2186898291->leave($__internal_afb32155a26b9e0284f186efe3573cb000f887a0e11805922f937d2186898291_prof);

        
        $__internal_9cd76a850e692c84957c9db40b7ffb8e304eaeb70532a77fc6da4eef24ce0538->leave($__internal_9cd76a850e692c84957c9db40b7ffb8e304eaeb70532a77fc6da4eef24ce0538_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
