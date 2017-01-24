<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_31616894c44433dc2d61eda866f72ae17828172057d572706835740134ae5c07 extends Twig_Template
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
        $__internal_8ba905aed27b83b8da59a430ecc12c8d5f1e91c248ce47605bb6c5f2faf61274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba905aed27b83b8da59a430ecc12c8d5f1e91c248ce47605bb6c5f2faf61274->enter($__internal_8ba905aed27b83b8da59a430ecc12c8d5f1e91c248ce47605bb6c5f2faf61274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_e7e02eabb839a8ff56f6d0c96d8bd53d29816c418527f2c1ff8ccd8eb607fcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e02eabb839a8ff56f6d0c96d8bd53d29816c418527f2c1ff8ccd8eb607fcee->enter($__internal_e7e02eabb839a8ff56f6d0c96d8bd53d29816c418527f2c1ff8ccd8eb607fcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8ba905aed27b83b8da59a430ecc12c8d5f1e91c248ce47605bb6c5f2faf61274->leave($__internal_8ba905aed27b83b8da59a430ecc12c8d5f1e91c248ce47605bb6c5f2faf61274_prof);

        
        $__internal_e7e02eabb839a8ff56f6d0c96d8bd53d29816c418527f2c1ff8ccd8eb607fcee->leave($__internal_e7e02eabb839a8ff56f6d0c96d8bd53d29816c418527f2c1ff8ccd8eb607fcee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
