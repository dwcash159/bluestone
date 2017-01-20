<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8d0dece0ba5e9c0339f21201a6fb83895fc50c6b7472dff93220210e7ed736f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d0dece0ba5e9c0339f21201a6fb83895fc50c6b7472dff93220210e7ed736f->enter($__internal_e8d0dece0ba5e9c0339f21201a6fb83895fc50c6b7472dff93220210e7ed736f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_aa6954138c13457dd7b9cc3a589a12303f054b7e1af8cd6effa29be7276f53f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6954138c13457dd7b9cc3a589a12303f054b7e1af8cd6effa29be7276f53f3->enter($__internal_aa6954138c13457dd7b9cc3a589a12303f054b7e1af8cd6effa29be7276f53f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8d0dece0ba5e9c0339f21201a6fb83895fc50c6b7472dff93220210e7ed736f->leave($__internal_e8d0dece0ba5e9c0339f21201a6fb83895fc50c6b7472dff93220210e7ed736f_prof);

        
        $__internal_aa6954138c13457dd7b9cc3a589a12303f054b7e1af8cd6effa29be7276f53f3->leave($__internal_aa6954138c13457dd7b9cc3a589a12303f054b7e1af8cd6effa29be7276f53f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8cd4982aaa2874ca9294b3b0126d0823411e8ecf4c628de2c8642e90eae41200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd4982aaa2874ca9294b3b0126d0823411e8ecf4c628de2c8642e90eae41200->enter($__internal_8cd4982aaa2874ca9294b3b0126d0823411e8ecf4c628de2c8642e90eae41200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dd131ff1bb4b7dddb6944239818ec82b36b612f01b13385e675eb611d76c170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd131ff1bb4b7dddb6944239818ec82b36b612f01b13385e675eb611d76c170->enter($__internal_2dd131ff1bb4b7dddb6944239818ec82b36b612f01b13385e675eb611d76c170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2dd131ff1bb4b7dddb6944239818ec82b36b612f01b13385e675eb611d76c170->leave($__internal_2dd131ff1bb4b7dddb6944239818ec82b36b612f01b13385e675eb611d76c170_prof);

        
        $__internal_8cd4982aaa2874ca9294b3b0126d0823411e8ecf4c628de2c8642e90eae41200->leave($__internal_8cd4982aaa2874ca9294b3b0126d0823411e8ecf4c628de2c8642e90eae41200_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d8830615797a0bb732aad62e97238a980650ba60725e040d174739a8356722b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8830615797a0bb732aad62e97238a980650ba60725e040d174739a8356722b->enter($__internal_1d8830615797a0bb732aad62e97238a980650ba60725e040d174739a8356722b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a9470d83a3f9f8cb025620e04e84ca625e60c3a29239a1c415ca77c9af6ffc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9470d83a3f9f8cb025620e04e84ca625e60c3a29239a1c415ca77c9af6ffc5f->enter($__internal_a9470d83a3f9f8cb025620e04e84ca625e60c3a29239a1c415ca77c9af6ffc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a9470d83a3f9f8cb025620e04e84ca625e60c3a29239a1c415ca77c9af6ffc5f->leave($__internal_a9470d83a3f9f8cb025620e04e84ca625e60c3a29239a1c415ca77c9af6ffc5f_prof);

        
        $__internal_1d8830615797a0bb732aad62e97238a980650ba60725e040d174739a8356722b->leave($__internal_1d8830615797a0bb732aad62e97238a980650ba60725e040d174739a8356722b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6546b662a2c48b12405abd3982d5b6daac98ce84d27cb66ff1aad07ae824ad43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6546b662a2c48b12405abd3982d5b6daac98ce84d27cb66ff1aad07ae824ad43->enter($__internal_6546b662a2c48b12405abd3982d5b6daac98ce84d27cb66ff1aad07ae824ad43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3d62f1f24019d145e3e99f148bb627b2757b7ee595670675a7bcb3af29a0b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d62f1f24019d145e3e99f148bb627b2757b7ee595670675a7bcb3af29a0b8a->enter($__internal_c3d62f1f24019d145e3e99f148bb627b2757b7ee595670675a7bcb3af29a0b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c3d62f1f24019d145e3e99f148bb627b2757b7ee595670675a7bcb3af29a0b8a->leave($__internal_c3d62f1f24019d145e3e99f148bb627b2757b7ee595670675a7bcb3af29a0b8a_prof);

        
        $__internal_6546b662a2c48b12405abd3982d5b6daac98ce84d27cb66ff1aad07ae824ad43->leave($__internal_6546b662a2c48b12405abd3982d5b6daac98ce84d27cb66ff1aad07ae824ad43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
