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
        $__internal_71b3aea9c1e85cc0734d9f6425e901357b2a293f688c58b0792fad61c9d8885b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b3aea9c1e85cc0734d9f6425e901357b2a293f688c58b0792fad61c9d8885b->enter($__internal_71b3aea9c1e85cc0734d9f6425e901357b2a293f688c58b0792fad61c9d8885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_3dc9fc9d04e17cdc41af89c72842a55c60f78306ed789ccf1129f69ce786fa98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc9fc9d04e17cdc41af89c72842a55c60f78306ed789ccf1129f69ce786fa98->enter($__internal_3dc9fc9d04e17cdc41af89c72842a55c60f78306ed789ccf1129f69ce786fa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_71b3aea9c1e85cc0734d9f6425e901357b2a293f688c58b0792fad61c9d8885b->leave($__internal_71b3aea9c1e85cc0734d9f6425e901357b2a293f688c58b0792fad61c9d8885b_prof);

        
        $__internal_3dc9fc9d04e17cdc41af89c72842a55c60f78306ed789ccf1129f69ce786fa98->leave($__internal_3dc9fc9d04e17cdc41af89c72842a55c60f78306ed789ccf1129f69ce786fa98_prof);

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
