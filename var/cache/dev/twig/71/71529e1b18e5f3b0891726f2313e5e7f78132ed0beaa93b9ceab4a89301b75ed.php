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
        $__internal_de56c26f0fa855e641785ff75d9a75233d6caf3ee3d8d2b51199651935061be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de56c26f0fa855e641785ff75d9a75233d6caf3ee3d8d2b51199651935061be1->enter($__internal_de56c26f0fa855e641785ff75d9a75233d6caf3ee3d8d2b51199651935061be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_d5b7db6d8d7d68b7184c4e0a89517846ed7b9a3070e3c4295aa2a5cbfa7c7699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b7db6d8d7d68b7184c4e0a89517846ed7b9a3070e3c4295aa2a5cbfa7c7699->enter($__internal_d5b7db6d8d7d68b7184c4e0a89517846ed7b9a3070e3c4295aa2a5cbfa7c7699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_de56c26f0fa855e641785ff75d9a75233d6caf3ee3d8d2b51199651935061be1->leave($__internal_de56c26f0fa855e641785ff75d9a75233d6caf3ee3d8d2b51199651935061be1_prof);

        
        $__internal_d5b7db6d8d7d68b7184c4e0a89517846ed7b9a3070e3c4295aa2a5cbfa7c7699->leave($__internal_d5b7db6d8d7d68b7184c4e0a89517846ed7b9a3070e3c4295aa2a5cbfa7c7699_prof);

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
