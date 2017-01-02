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
        $__internal_6b4679be222834fda0924b07cc1a1215c1d2663e58ad63fd41adf6e8aca2ec25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4679be222834fda0924b07cc1a1215c1d2663e58ad63fd41adf6e8aca2ec25->enter($__internal_6b4679be222834fda0924b07cc1a1215c1d2663e58ad63fd41adf6e8aca2ec25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_30bc823c9a85b7b77e636d96ec9cd5d5f60b8705782ed23175bd5c9e6d121e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bc823c9a85b7b77e636d96ec9cd5d5f60b8705782ed23175bd5c9e6d121e05->enter($__internal_30bc823c9a85b7b77e636d96ec9cd5d5f60b8705782ed23175bd5c9e6d121e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_6b4679be222834fda0924b07cc1a1215c1d2663e58ad63fd41adf6e8aca2ec25->leave($__internal_6b4679be222834fda0924b07cc1a1215c1d2663e58ad63fd41adf6e8aca2ec25_prof);

        
        $__internal_30bc823c9a85b7b77e636d96ec9cd5d5f60b8705782ed23175bd5c9e6d121e05->leave($__internal_30bc823c9a85b7b77e636d96ec9cd5d5f60b8705782ed23175bd5c9e6d121e05_prof);

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
