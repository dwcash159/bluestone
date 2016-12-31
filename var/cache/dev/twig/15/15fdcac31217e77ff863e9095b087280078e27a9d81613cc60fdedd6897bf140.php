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
        $__internal_331ba136b13e1888e9ffd8c04c7c8c5901076fdae0428631590ddf9831317ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331ba136b13e1888e9ffd8c04c7c8c5901076fdae0428631590ddf9831317ab2->enter($__internal_331ba136b13e1888e9ffd8c04c7c8c5901076fdae0428631590ddf9831317ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1e595f43a8f69d3fc237685eed435b1e6a51ed7cedb4745a4843df88827598a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e595f43a8f69d3fc237685eed435b1e6a51ed7cedb4745a4843df88827598a3->enter($__internal_1e595f43a8f69d3fc237685eed435b1e6a51ed7cedb4745a4843df88827598a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_331ba136b13e1888e9ffd8c04c7c8c5901076fdae0428631590ddf9831317ab2->leave($__internal_331ba136b13e1888e9ffd8c04c7c8c5901076fdae0428631590ddf9831317ab2_prof);

        
        $__internal_1e595f43a8f69d3fc237685eed435b1e6a51ed7cedb4745a4843df88827598a3->leave($__internal_1e595f43a8f69d3fc237685eed435b1e6a51ed7cedb4745a4843df88827598a3_prof);

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
