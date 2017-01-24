<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_685a31bf74dcb54664a0b209c927e27e98baf7d517c7779ec75e1b39ccfffeb2 extends Twig_Template
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
        $__internal_b1eccdac3852a9d0b56403deed3e2dbdfa0869a36c750b0d9265a6d2e1e089d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1eccdac3852a9d0b56403deed3e2dbdfa0869a36c750b0d9265a6d2e1e089d4->enter($__internal_b1eccdac3852a9d0b56403deed3e2dbdfa0869a36c750b0d9265a6d2e1e089d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_fec235156d3741af943ce275789d6c478c6f3535597f040ab585b4953996c151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec235156d3741af943ce275789d6c478c6f3535597f040ab585b4953996c151->enter($__internal_fec235156d3741af943ce275789d6c478c6f3535597f040ab585b4953996c151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b1eccdac3852a9d0b56403deed3e2dbdfa0869a36c750b0d9265a6d2e1e089d4->leave($__internal_b1eccdac3852a9d0b56403deed3e2dbdfa0869a36c750b0d9265a6d2e1e089d4_prof);

        
        $__internal_fec235156d3741af943ce275789d6c478c6f3535597f040ab585b4953996c151->leave($__internal_fec235156d3741af943ce275789d6c478c6f3535597f040ab585b4953996c151_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
