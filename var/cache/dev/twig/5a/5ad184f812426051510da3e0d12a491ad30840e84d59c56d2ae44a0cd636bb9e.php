<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d7b6425f97b1c37b8b9302d151dc2bd38f648c74b742c6deb76eb4617ac5de94 extends Twig_Template
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
        $__internal_6c9bf27b9a2e0199af7d3d4d578f06b060e1d7dbe20e8cd33000e0687a0e9b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9bf27b9a2e0199af7d3d4d578f06b060e1d7dbe20e8cd33000e0687a0e9b19->enter($__internal_6c9bf27b9a2e0199af7d3d4d578f06b060e1d7dbe20e8cd33000e0687a0e9b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_323ac65867dc197cde74f7f46ee49bc0b50caabeac8f63c7c23a3a67631e76f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323ac65867dc197cde74f7f46ee49bc0b50caabeac8f63c7c23a3a67631e76f8->enter($__internal_323ac65867dc197cde74f7f46ee49bc0b50caabeac8f63c7c23a3a67631e76f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6c9bf27b9a2e0199af7d3d4d578f06b060e1d7dbe20e8cd33000e0687a0e9b19->leave($__internal_6c9bf27b9a2e0199af7d3d4d578f06b060e1d7dbe20e8cd33000e0687a0e9b19_prof);

        
        $__internal_323ac65867dc197cde74f7f46ee49bc0b50caabeac8f63c7c23a3a67631e76f8->leave($__internal_323ac65867dc197cde74f7f46ee49bc0b50caabeac8f63c7c23a3a67631e76f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
