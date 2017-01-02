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
        $__internal_0537bca3928b7d16bdb3061478b1141960a5cbf8bfc5fa9bd0f827a0e6cb6f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0537bca3928b7d16bdb3061478b1141960a5cbf8bfc5fa9bd0f827a0e6cb6f97->enter($__internal_0537bca3928b7d16bdb3061478b1141960a5cbf8bfc5fa9bd0f827a0e6cb6f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f36cd0524885a1558df3a447e9b665e8281d5927ab32a852b7e07f4089b2ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f36cd0524885a1558df3a447e9b665e8281d5927ab32a852b7e07f4089b2ddf->enter($__internal_1f36cd0524885a1558df3a447e9b665e8281d5927ab32a852b7e07f4089b2ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0537bca3928b7d16bdb3061478b1141960a5cbf8bfc5fa9bd0f827a0e6cb6f97->leave($__internal_0537bca3928b7d16bdb3061478b1141960a5cbf8bfc5fa9bd0f827a0e6cb6f97_prof);

        
        $__internal_1f36cd0524885a1558df3a447e9b665e8281d5927ab32a852b7e07f4089b2ddf->leave($__internal_1f36cd0524885a1558df3a447e9b665e8281d5927ab32a852b7e07f4089b2ddf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b906f4c027270639a3ee6f47d1358cc4d474a676fa67db13d6cfb133fd531b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b906f4c027270639a3ee6f47d1358cc4d474a676fa67db13d6cfb133fd531b37->enter($__internal_b906f4c027270639a3ee6f47d1358cc4d474a676fa67db13d6cfb133fd531b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10d2b498723a62004b48a466af9dcd8d1c9b8ed80648717dfb41f1c7958b8b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d2b498723a62004b48a466af9dcd8d1c9b8ed80648717dfb41f1c7958b8b98->enter($__internal_10d2b498723a62004b48a466af9dcd8d1c9b8ed80648717dfb41f1c7958b8b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_10d2b498723a62004b48a466af9dcd8d1c9b8ed80648717dfb41f1c7958b8b98->leave($__internal_10d2b498723a62004b48a466af9dcd8d1c9b8ed80648717dfb41f1c7958b8b98_prof);

        
        $__internal_b906f4c027270639a3ee6f47d1358cc4d474a676fa67db13d6cfb133fd531b37->leave($__internal_b906f4c027270639a3ee6f47d1358cc4d474a676fa67db13d6cfb133fd531b37_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2797176565f4d891d645f11f916817ec1796bdd545e6b666828f67b380c4344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2797176565f4d891d645f11f916817ec1796bdd545e6b666828f67b380c4344->enter($__internal_c2797176565f4d891d645f11f916817ec1796bdd545e6b666828f67b380c4344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5463b8de11597650b2dff5e53bdda294d904b7e5cd92d4bc292678e41fe5a4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5463b8de11597650b2dff5e53bdda294d904b7e5cd92d4bc292678e41fe5a4bc->enter($__internal_5463b8de11597650b2dff5e53bdda294d904b7e5cd92d4bc292678e41fe5a4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5463b8de11597650b2dff5e53bdda294d904b7e5cd92d4bc292678e41fe5a4bc->leave($__internal_5463b8de11597650b2dff5e53bdda294d904b7e5cd92d4bc292678e41fe5a4bc_prof);

        
        $__internal_c2797176565f4d891d645f11f916817ec1796bdd545e6b666828f67b380c4344->leave($__internal_c2797176565f4d891d645f11f916817ec1796bdd545e6b666828f67b380c4344_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8473b7c30e0c9129c1e4856352048ba9684bbfe0871a87cead1c58d01e7f5293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8473b7c30e0c9129c1e4856352048ba9684bbfe0871a87cead1c58d01e7f5293->enter($__internal_8473b7c30e0c9129c1e4856352048ba9684bbfe0871a87cead1c58d01e7f5293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_462609794022d6e32a9ef92acef942025413f51c88661ba5ec4daa003f89b94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462609794022d6e32a9ef92acef942025413f51c88661ba5ec4daa003f89b94f->enter($__internal_462609794022d6e32a9ef92acef942025413f51c88661ba5ec4daa003f89b94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_462609794022d6e32a9ef92acef942025413f51c88661ba5ec4daa003f89b94f->leave($__internal_462609794022d6e32a9ef92acef942025413f51c88661ba5ec4daa003f89b94f_prof);

        
        $__internal_8473b7c30e0c9129c1e4856352048ba9684bbfe0871a87cead1c58d01e7f5293->leave($__internal_8473b7c30e0c9129c1e4856352048ba9684bbfe0871a87cead1c58d01e7f5293_prof);

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
