<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7b42b20b50026cf60cfa5150e3d2bb4541e554aeafceb05031a858a917fb0d3f extends Twig_Template
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
        $__internal_63b3e1d55705a875567ed03d5e45baa77e8a5b9b6db5838043b143ed5ffed244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b3e1d55705a875567ed03d5e45baa77e8a5b9b6db5838043b143ed5ffed244->enter($__internal_63b3e1d55705a875567ed03d5e45baa77e8a5b9b6db5838043b143ed5ffed244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_dc0b26b7313933843370c655ca7b07f603cf56b9f82bea44fda4aea0d3a6fb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0b26b7313933843370c655ca7b07f603cf56b9f82bea44fda4aea0d3a6fb44->enter($__internal_dc0b26b7313933843370c655ca7b07f603cf56b9f82bea44fda4aea0d3a6fb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_63b3e1d55705a875567ed03d5e45baa77e8a5b9b6db5838043b143ed5ffed244->leave($__internal_63b3e1d55705a875567ed03d5e45baa77e8a5b9b6db5838043b143ed5ffed244_prof);

        
        $__internal_dc0b26b7313933843370c655ca7b07f603cf56b9f82bea44fda4aea0d3a6fb44->leave($__internal_dc0b26b7313933843370c655ca7b07f603cf56b9f82bea44fda4aea0d3a6fb44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
