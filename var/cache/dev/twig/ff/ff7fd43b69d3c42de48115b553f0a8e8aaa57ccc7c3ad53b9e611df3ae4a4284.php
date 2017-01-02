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
        $__internal_36d67dc52ca0b1bf94ec1ff3b72e04d3a262f5d37274dd590e4a0d411750a63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d67dc52ca0b1bf94ec1ff3b72e04d3a262f5d37274dd590e4a0d411750a63f->enter($__internal_36d67dc52ca0b1bf94ec1ff3b72e04d3a262f5d37274dd590e4a0d411750a63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f8209de9ecdeb58a8414811fcd3fe6cb29cba65392878f4fc06c88126666c8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8209de9ecdeb58a8414811fcd3fe6cb29cba65392878f4fc06c88126666c8fb->enter($__internal_f8209de9ecdeb58a8414811fcd3fe6cb29cba65392878f4fc06c88126666c8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_36d67dc52ca0b1bf94ec1ff3b72e04d3a262f5d37274dd590e4a0d411750a63f->leave($__internal_36d67dc52ca0b1bf94ec1ff3b72e04d3a262f5d37274dd590e4a0d411750a63f_prof);

        
        $__internal_f8209de9ecdeb58a8414811fcd3fe6cb29cba65392878f4fc06c88126666c8fb->leave($__internal_f8209de9ecdeb58a8414811fcd3fe6cb29cba65392878f4fc06c88126666c8fb_prof);

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
