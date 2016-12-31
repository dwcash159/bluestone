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
        $__internal_643a69102f060b97e6858df19ec31addbb3eb78b5ed02ff3e8e210348c65fcfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643a69102f060b97e6858df19ec31addbb3eb78b5ed02ff3e8e210348c65fcfc->enter($__internal_643a69102f060b97e6858df19ec31addbb3eb78b5ed02ff3e8e210348c65fcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_29e0151e27eaf4fffa341a21592db5679479a39358b81cfc5bbbfb1aa9b7c3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e0151e27eaf4fffa341a21592db5679479a39358b81cfc5bbbfb1aa9b7c3a3->enter($__internal_29e0151e27eaf4fffa341a21592db5679479a39358b81cfc5bbbfb1aa9b7c3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_643a69102f060b97e6858df19ec31addbb3eb78b5ed02ff3e8e210348c65fcfc->leave($__internal_643a69102f060b97e6858df19ec31addbb3eb78b5ed02ff3e8e210348c65fcfc_prof);

        
        $__internal_29e0151e27eaf4fffa341a21592db5679479a39358b81cfc5bbbfb1aa9b7c3a3->leave($__internal_29e0151e27eaf4fffa341a21592db5679479a39358b81cfc5bbbfb1aa9b7c3a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90f29861e7c6a4e4c2d22cb1bcfa4f3d0d9d54e4e4c45902749bf0fb67d4a478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f29861e7c6a4e4c2d22cb1bcfa4f3d0d9d54e4e4c45902749bf0fb67d4a478->enter($__internal_90f29861e7c6a4e4c2d22cb1bcfa4f3d0d9d54e4e4c45902749bf0fb67d4a478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e8c99ece496760c99c67b1090279bbbfa892928d0c822d38689b20e19b2c948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8c99ece496760c99c67b1090279bbbfa892928d0c822d38689b20e19b2c948->enter($__internal_1e8c99ece496760c99c67b1090279bbbfa892928d0c822d38689b20e19b2c948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1e8c99ece496760c99c67b1090279bbbfa892928d0c822d38689b20e19b2c948->leave($__internal_1e8c99ece496760c99c67b1090279bbbfa892928d0c822d38689b20e19b2c948_prof);

        
        $__internal_90f29861e7c6a4e4c2d22cb1bcfa4f3d0d9d54e4e4c45902749bf0fb67d4a478->leave($__internal_90f29861e7c6a4e4c2d22cb1bcfa4f3d0d9d54e4e4c45902749bf0fb67d4a478_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1bf975f66cabe5231a61c6fb43542a77b1d8dbcdd0e7bcccdd8956718b4533ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf975f66cabe5231a61c6fb43542a77b1d8dbcdd0e7bcccdd8956718b4533ce->enter($__internal_1bf975f66cabe5231a61c6fb43542a77b1d8dbcdd0e7bcccdd8956718b4533ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cd9278a00a18557117b5bd06db6e0212f57ff80c48bb10551b879cd9908c13be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9278a00a18557117b5bd06db6e0212f57ff80c48bb10551b879cd9908c13be->enter($__internal_cd9278a00a18557117b5bd06db6e0212f57ff80c48bb10551b879cd9908c13be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cd9278a00a18557117b5bd06db6e0212f57ff80c48bb10551b879cd9908c13be->leave($__internal_cd9278a00a18557117b5bd06db6e0212f57ff80c48bb10551b879cd9908c13be_prof);

        
        $__internal_1bf975f66cabe5231a61c6fb43542a77b1d8dbcdd0e7bcccdd8956718b4533ce->leave($__internal_1bf975f66cabe5231a61c6fb43542a77b1d8dbcdd0e7bcccdd8956718b4533ce_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2faf27785727c8ce6ffe97a408843f3cad6cf236d1ce84657b81fc9807859cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2faf27785727c8ce6ffe97a408843f3cad6cf236d1ce84657b81fc9807859cf9->enter($__internal_2faf27785727c8ce6ffe97a408843f3cad6cf236d1ce84657b81fc9807859cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_354accd25912edc7309fff604eeaf980f3bdcc50202d8364c1c1c7903e03cc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354accd25912edc7309fff604eeaf980f3bdcc50202d8364c1c1c7903e03cc7b->enter($__internal_354accd25912edc7309fff604eeaf980f3bdcc50202d8364c1c1c7903e03cc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_354accd25912edc7309fff604eeaf980f3bdcc50202d8364c1c1c7903e03cc7b->leave($__internal_354accd25912edc7309fff604eeaf980f3bdcc50202d8364c1c1c7903e03cc7b_prof);

        
        $__internal_2faf27785727c8ce6ffe97a408843f3cad6cf236d1ce84657b81fc9807859cf9->leave($__internal_2faf27785727c8ce6ffe97a408843f3cad6cf236d1ce84657b81fc9807859cf9_prof);

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
