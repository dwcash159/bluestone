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
        $__internal_81c319c31cd14d4717c9648f5c468a043fd935a623e4c424e133b8db32a19e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c319c31cd14d4717c9648f5c468a043fd935a623e4c424e133b8db32a19e93->enter($__internal_81c319c31cd14d4717c9648f5c468a043fd935a623e4c424e133b8db32a19e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_38c898ae1380c138cdd53840503249e8a6110ee03a11e0763a2883a273c69a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c898ae1380c138cdd53840503249e8a6110ee03a11e0763a2883a273c69a86->enter($__internal_38c898ae1380c138cdd53840503249e8a6110ee03a11e0763a2883a273c69a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_81c319c31cd14d4717c9648f5c468a043fd935a623e4c424e133b8db32a19e93->leave($__internal_81c319c31cd14d4717c9648f5c468a043fd935a623e4c424e133b8db32a19e93_prof);

        
        $__internal_38c898ae1380c138cdd53840503249e8a6110ee03a11e0763a2883a273c69a86->leave($__internal_38c898ae1380c138cdd53840503249e8a6110ee03a11e0763a2883a273c69a86_prof);

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
