<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9ab99efd3743c9cf6c8dd7b5a214b8e095b9dc9afdd72673c1d9a2ff7a7a5c0c extends Twig_Template
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
        $__internal_d6172286fe3304325bc97e3e4afc0a37f7e78d0f2a64ec0fa3738c55069cf2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6172286fe3304325bc97e3e4afc0a37f7e78d0f2a64ec0fa3738c55069cf2d2->enter($__internal_d6172286fe3304325bc97e3e4afc0a37f7e78d0f2a64ec0fa3738c55069cf2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1473ccceb816e3af77db8e1587d8170bea4793c375e17182741361fd3d2b5909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1473ccceb816e3af77db8e1587d8170bea4793c375e17182741361fd3d2b5909->enter($__internal_1473ccceb816e3af77db8e1587d8170bea4793c375e17182741361fd3d2b5909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d6172286fe3304325bc97e3e4afc0a37f7e78d0f2a64ec0fa3738c55069cf2d2->leave($__internal_d6172286fe3304325bc97e3e4afc0a37f7e78d0f2a64ec0fa3738c55069cf2d2_prof);

        
        $__internal_1473ccceb816e3af77db8e1587d8170bea4793c375e17182741361fd3d2b5909->leave($__internal_1473ccceb816e3af77db8e1587d8170bea4793c375e17182741361fd3d2b5909_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
