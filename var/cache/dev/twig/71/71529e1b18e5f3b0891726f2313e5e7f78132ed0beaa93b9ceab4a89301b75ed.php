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
        $__internal_a6f18f0ec55cf07821c9985840c232a7d0d33681f8439134950a90b34e4b7a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f18f0ec55cf07821c9985840c232a7d0d33681f8439134950a90b34e4b7a0a->enter($__internal_a6f18f0ec55cf07821c9985840c232a7d0d33681f8439134950a90b34e4b7a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f8415e7612dc5a7f51d8053fd207a30b3f699193373ed27348f9017b794ab49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8415e7612dc5a7f51d8053fd207a30b3f699193373ed27348f9017b794ab49e->enter($__internal_f8415e7612dc5a7f51d8053fd207a30b3f699193373ed27348f9017b794ab49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a6f18f0ec55cf07821c9985840c232a7d0d33681f8439134950a90b34e4b7a0a->leave($__internal_a6f18f0ec55cf07821c9985840c232a7d0d33681f8439134950a90b34e4b7a0a_prof);

        
        $__internal_f8415e7612dc5a7f51d8053fd207a30b3f699193373ed27348f9017b794ab49e->leave($__internal_f8415e7612dc5a7f51d8053fd207a30b3f699193373ed27348f9017b794ab49e_prof);

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
