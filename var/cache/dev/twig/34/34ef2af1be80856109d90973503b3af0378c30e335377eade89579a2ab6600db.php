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
        $__internal_7117af088e2a840762f26fc3c75fe0073ea03d4760e778283358e6e6117be732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7117af088e2a840762f26fc3c75fe0073ea03d4760e778283358e6e6117be732->enter($__internal_7117af088e2a840762f26fc3c75fe0073ea03d4760e778283358e6e6117be732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_3b370ccc2e4aecdf82ebb750f50098dc6a54f54249449b8f4eed567a35c9626e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b370ccc2e4aecdf82ebb750f50098dc6a54f54249449b8f4eed567a35c9626e->enter($__internal_3b370ccc2e4aecdf82ebb750f50098dc6a54f54249449b8f4eed567a35c9626e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7117af088e2a840762f26fc3c75fe0073ea03d4760e778283358e6e6117be732->leave($__internal_7117af088e2a840762f26fc3c75fe0073ea03d4760e778283358e6e6117be732_prof);

        
        $__internal_3b370ccc2e4aecdf82ebb750f50098dc6a54f54249449b8f4eed567a35c9626e->leave($__internal_3b370ccc2e4aecdf82ebb750f50098dc6a54f54249449b8f4eed567a35c9626e_prof);

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
