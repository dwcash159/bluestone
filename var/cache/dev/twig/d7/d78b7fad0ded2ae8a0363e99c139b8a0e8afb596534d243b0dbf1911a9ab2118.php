<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b86b1472cccccf0970487c0e74436bc1b111a5b326779d76bd197ee72cfad98d extends Twig_Template
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
        $__internal_85879493c7ffb68037d1d1eb1dc9690ded0656625a132494573c25b0d9b99de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85879493c7ffb68037d1d1eb1dc9690ded0656625a132494573c25b0d9b99de8->enter($__internal_85879493c7ffb68037d1d1eb1dc9690ded0656625a132494573c25b0d9b99de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_53b8a59ab3b779b9e6c743b29db3900e61ca088c7e9c97a776f9f0b905d86d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b8a59ab3b779b9e6c743b29db3900e61ca088c7e9c97a776f9f0b905d86d5b->enter($__internal_53b8a59ab3b779b9e6c743b29db3900e61ca088c7e9c97a776f9f0b905d86d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_85879493c7ffb68037d1d1eb1dc9690ded0656625a132494573c25b0d9b99de8->leave($__internal_85879493c7ffb68037d1d1eb1dc9690ded0656625a132494573c25b0d9b99de8_prof);

        
        $__internal_53b8a59ab3b779b9e6c743b29db3900e61ca088c7e9c97a776f9f0b905d86d5b->leave($__internal_53b8a59ab3b779b9e6c743b29db3900e61ca088c7e9c97a776f9f0b905d86d5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
