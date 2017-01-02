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
        $__internal_644be8b3b8d00b65b2b88d34453c70f37295722588dd0f375362ba7bb74a0459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644be8b3b8d00b65b2b88d34453c70f37295722588dd0f375362ba7bb74a0459->enter($__internal_644be8b3b8d00b65b2b88d34453c70f37295722588dd0f375362ba7bb74a0459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_67c1b481f54677f0939edb254c7b136ff5f7c8ff456f0ca5c6d71887238ad705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c1b481f54677f0939edb254c7b136ff5f7c8ff456f0ca5c6d71887238ad705->enter($__internal_67c1b481f54677f0939edb254c7b136ff5f7c8ff456f0ca5c6d71887238ad705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_644be8b3b8d00b65b2b88d34453c70f37295722588dd0f375362ba7bb74a0459->leave($__internal_644be8b3b8d00b65b2b88d34453c70f37295722588dd0f375362ba7bb74a0459_prof);

        
        $__internal_67c1b481f54677f0939edb254c7b136ff5f7c8ff456f0ca5c6d71887238ad705->leave($__internal_67c1b481f54677f0939edb254c7b136ff5f7c8ff456f0ca5c6d71887238ad705_prof);

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
