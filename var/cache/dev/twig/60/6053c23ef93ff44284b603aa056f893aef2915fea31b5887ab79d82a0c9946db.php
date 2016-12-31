<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_f7d5f2ba8c750ee5b801b815c722425301fe0ac97bbe01d6adf7cc2895e346e0 extends Twig_Template
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
        $__internal_676b05bebb68caef49350d6f33a00f47dbf8434652598ab0e6b247934ec63948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676b05bebb68caef49350d6f33a00f47dbf8434652598ab0e6b247934ec63948->enter($__internal_676b05bebb68caef49350d6f33a00f47dbf8434652598ab0e6b247934ec63948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_d0fec54f358e4c8689dae9d75bc498ffe324f6893598b8747a4ce835883d1682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fec54f358e4c8689dae9d75bc498ffe324f6893598b8747a4ce835883d1682->enter($__internal_d0fec54f358e4c8689dae9d75bc498ffe324f6893598b8747a4ce835883d1682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_676b05bebb68caef49350d6f33a00f47dbf8434652598ab0e6b247934ec63948->leave($__internal_676b05bebb68caef49350d6f33a00f47dbf8434652598ab0e6b247934ec63948_prof);

        
        $__internal_d0fec54f358e4c8689dae9d75bc498ffe324f6893598b8747a4ce835883d1682->leave($__internal_d0fec54f358e4c8689dae9d75bc498ffe324f6893598b8747a4ce835883d1682_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
