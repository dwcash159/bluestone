<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_74f8445234c56bf7dae2c0c2e09178f007033e81f90e853e0a082eaf362eb687 extends Twig_Template
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
        $__internal_6d3f175f0b1a78b6a6804da241096c5545d8fa9e23b412ea7722b3d9d03535c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3f175f0b1a78b6a6804da241096c5545d8fa9e23b412ea7722b3d9d03535c8->enter($__internal_6d3f175f0b1a78b6a6804da241096c5545d8fa9e23b412ea7722b3d9d03535c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_d36e583338b4c8e39d00f61dc7622e354b1077cab0dad3c39a659db75fa0b300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36e583338b4c8e39d00f61dc7622e354b1077cab0dad3c39a659db75fa0b300->enter($__internal_d36e583338b4c8e39d00f61dc7622e354b1077cab0dad3c39a659db75fa0b300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6d3f175f0b1a78b6a6804da241096c5545d8fa9e23b412ea7722b3d9d03535c8->leave($__internal_6d3f175f0b1a78b6a6804da241096c5545d8fa9e23b412ea7722b3d9d03535c8_prof);

        
        $__internal_d36e583338b4c8e39d00f61dc7622e354b1077cab0dad3c39a659db75fa0b300->leave($__internal_d36e583338b4c8e39d00f61dc7622e354b1077cab0dad3c39a659db75fa0b300_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
