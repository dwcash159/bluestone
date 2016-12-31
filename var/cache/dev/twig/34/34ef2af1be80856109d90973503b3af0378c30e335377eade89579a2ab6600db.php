<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d57d6624732a4f02e9d9abc52090638dd732522418836b74e709b9d64e6d10d1 extends Twig_Template
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
        $__internal_343ae61f0ebca6777a8e622ea28287e9f9f8310556f6a3754440d4028404b9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343ae61f0ebca6777a8e622ea28287e9f9f8310556f6a3754440d4028404b9d9->enter($__internal_343ae61f0ebca6777a8e622ea28287e9f9f8310556f6a3754440d4028404b9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_a87eb00da9bf92cc13cf9ddc912f62fe51adc12357b5649d09735fedd0c80577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87eb00da9bf92cc13cf9ddc912f62fe51adc12357b5649d09735fedd0c80577->enter($__internal_a87eb00da9bf92cc13cf9ddc912f62fe51adc12357b5649d09735fedd0c80577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_343ae61f0ebca6777a8e622ea28287e9f9f8310556f6a3754440d4028404b9d9->leave($__internal_343ae61f0ebca6777a8e622ea28287e9f9f8310556f6a3754440d4028404b9d9_prof);

        
        $__internal_a87eb00da9bf92cc13cf9ddc912f62fe51adc12357b5649d09735fedd0c80577->leave($__internal_a87eb00da9bf92cc13cf9ddc912f62fe51adc12357b5649d09735fedd0c80577_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
