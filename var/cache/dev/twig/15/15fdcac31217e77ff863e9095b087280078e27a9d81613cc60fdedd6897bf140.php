<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d9b928cd43dbe3fc3cf01ffa26f62a0dd2cf12b5670c9fc5a14894359edb7e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14d3c9b0250f1d93ca46fa9fc341aef79abe2efa9ac505a16697bda395be8d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d3c9b0250f1d93ca46fa9fc341aef79abe2efa9ac505a16697bda395be8d88->enter($__internal_14d3c9b0250f1d93ca46fa9fc341aef79abe2efa9ac505a16697bda395be8d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c8fa6c60ab545afafe5bb97259cdf3b64fb0695bddaa892f421482db99bb259a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fa6c60ab545afafe5bb97259cdf3b64fb0695bddaa892f421482db99bb259a->enter($__internal_c8fa6c60ab545afafe5bb97259cdf3b64fb0695bddaa892f421482db99bb259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_14d3c9b0250f1d93ca46fa9fc341aef79abe2efa9ac505a16697bda395be8d88->leave($__internal_14d3c9b0250f1d93ca46fa9fc341aef79abe2efa9ac505a16697bda395be8d88_prof);

        
        $__internal_c8fa6c60ab545afafe5bb97259cdf3b64fb0695bddaa892f421482db99bb259a->leave($__internal_c8fa6c60ab545afafe5bb97259cdf3b64fb0695bddaa892f421482db99bb259a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
