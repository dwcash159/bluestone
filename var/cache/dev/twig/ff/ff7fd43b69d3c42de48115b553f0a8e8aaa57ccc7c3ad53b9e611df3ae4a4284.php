<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d309c8bd7565076864a8185c845bde9443506653e76e18473f6882ac8447617b extends Twig_Template
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
        $__internal_9286d86a89388b7749a7a156fdade0d8aaf28d73f2ff280c2ae18470b755c006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9286d86a89388b7749a7a156fdade0d8aaf28d73f2ff280c2ae18470b755c006->enter($__internal_9286d86a89388b7749a7a156fdade0d8aaf28d73f2ff280c2ae18470b755c006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_98facf0843da8deec4a4350cadc276f2f212f82d535a561afb00f10a86dd45a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98facf0843da8deec4a4350cadc276f2f212f82d535a561afb00f10a86dd45a6->enter($__internal_98facf0843da8deec4a4350cadc276f2f212f82d535a561afb00f10a86dd45a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9286d86a89388b7749a7a156fdade0d8aaf28d73f2ff280c2ae18470b755c006->leave($__internal_9286d86a89388b7749a7a156fdade0d8aaf28d73f2ff280c2ae18470b755c006_prof);

        
        $__internal_98facf0843da8deec4a4350cadc276f2f212f82d535a561afb00f10a86dd45a6->leave($__internal_98facf0843da8deec4a4350cadc276f2f212f82d535a561afb00f10a86dd45a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
