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
        $__internal_2c016bd638f5f4a209a2593ef7600a451a4fd6344983b6e7dead1f967afee4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c016bd638f5f4a209a2593ef7600a451a4fd6344983b6e7dead1f967afee4fd->enter($__internal_2c016bd638f5f4a209a2593ef7600a451a4fd6344983b6e7dead1f967afee4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_202cac33970a7bdbb7b2e23e9354b25a33f2adc470a395f5da3a867070bffdcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202cac33970a7bdbb7b2e23e9354b25a33f2adc470a395f5da3a867070bffdcd->enter($__internal_202cac33970a7bdbb7b2e23e9354b25a33f2adc470a395f5da3a867070bffdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_2c016bd638f5f4a209a2593ef7600a451a4fd6344983b6e7dead1f967afee4fd->leave($__internal_2c016bd638f5f4a209a2593ef7600a451a4fd6344983b6e7dead1f967afee4fd_prof);

        
        $__internal_202cac33970a7bdbb7b2e23e9354b25a33f2adc470a395f5da3a867070bffdcd->leave($__internal_202cac33970a7bdbb7b2e23e9354b25a33f2adc470a395f5da3a867070bffdcd_prof);

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
