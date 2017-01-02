<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6a8281ff99aa7048bac40208dd68f1aef2318ce03a04354a8eeb090fa7e4e3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8281ff99aa7048bac40208dd68f1aef2318ce03a04354a8eeb090fa7e4e3e5->enter($__internal_6a8281ff99aa7048bac40208dd68f1aef2318ce03a04354a8eeb090fa7e4e3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bad53dcd3b9351f6a01da29a034f2810396caaaf5fd76275a5f1faf700d197af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad53dcd3b9351f6a01da29a034f2810396caaaf5fd76275a5f1faf700d197af->enter($__internal_bad53dcd3b9351f6a01da29a034f2810396caaaf5fd76275a5f1faf700d197af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a8281ff99aa7048bac40208dd68f1aef2318ce03a04354a8eeb090fa7e4e3e5->leave($__internal_6a8281ff99aa7048bac40208dd68f1aef2318ce03a04354a8eeb090fa7e4e3e5_prof);

        
        $__internal_bad53dcd3b9351f6a01da29a034f2810396caaaf5fd76275a5f1faf700d197af->leave($__internal_bad53dcd3b9351f6a01da29a034f2810396caaaf5fd76275a5f1faf700d197af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_89023ab88628fe7053c02cf0dfa4551b84faa47315c7ffd22e08ff985b87e3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89023ab88628fe7053c02cf0dfa4551b84faa47315c7ffd22e08ff985b87e3cd->enter($__internal_89023ab88628fe7053c02cf0dfa4551b84faa47315c7ffd22e08ff985b87e3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bcc35a86a0f48d455d61b30d1fde799504de85f6ea50e6ccdac0897e91fcd651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc35a86a0f48d455d61b30d1fde799504de85f6ea50e6ccdac0897e91fcd651->enter($__internal_bcc35a86a0f48d455d61b30d1fde799504de85f6ea50e6ccdac0897e91fcd651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bcc35a86a0f48d455d61b30d1fde799504de85f6ea50e6ccdac0897e91fcd651->leave($__internal_bcc35a86a0f48d455d61b30d1fde799504de85f6ea50e6ccdac0897e91fcd651_prof);

        
        $__internal_89023ab88628fe7053c02cf0dfa4551b84faa47315c7ffd22e08ff985b87e3cd->leave($__internal_89023ab88628fe7053c02cf0dfa4551b84faa47315c7ffd22e08ff985b87e3cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f37f5ccd17f91939e74cb3caf225acd184c8cd59e2605cad3e25c1a3d322c920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37f5ccd17f91939e74cb3caf225acd184c8cd59e2605cad3e25c1a3d322c920->enter($__internal_f37f5ccd17f91939e74cb3caf225acd184c8cd59e2605cad3e25c1a3d322c920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7a401affab453bcae73c27d3f638281da4905bec49d98621c7d8675aaa87fb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a401affab453bcae73c27d3f638281da4905bec49d98621c7d8675aaa87fb97->enter($__internal_7a401affab453bcae73c27d3f638281da4905bec49d98621c7d8675aaa87fb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a401affab453bcae73c27d3f638281da4905bec49d98621c7d8675aaa87fb97->leave($__internal_7a401affab453bcae73c27d3f638281da4905bec49d98621c7d8675aaa87fb97_prof);

        
        $__internal_f37f5ccd17f91939e74cb3caf225acd184c8cd59e2605cad3e25c1a3d322c920->leave($__internal_f37f5ccd17f91939e74cb3caf225acd184c8cd59e2605cad3e25c1a3d322c920_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13848f2e66bc9904a7d977764168cbcfa1636a61dee05fcf4a861ecfa4e2b5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13848f2e66bc9904a7d977764168cbcfa1636a61dee05fcf4a861ecfa4e2b5c6->enter($__internal_13848f2e66bc9904a7d977764168cbcfa1636a61dee05fcf4a861ecfa4e2b5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6e4b50318e8d86645a2a05bf40de4296f84c4cca0ff51bc62f5344679bee735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e4b50318e8d86645a2a05bf40de4296f84c4cca0ff51bc62f5344679bee735->enter($__internal_d6e4b50318e8d86645a2a05bf40de4296f84c4cca0ff51bc62f5344679bee735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6e4b50318e8d86645a2a05bf40de4296f84c4cca0ff51bc62f5344679bee735->leave($__internal_d6e4b50318e8d86645a2a05bf40de4296f84c4cca0ff51bc62f5344679bee735_prof);

        
        $__internal_13848f2e66bc9904a7d977764168cbcfa1636a61dee05fcf4a861ecfa4e2b5c6->leave($__internal_13848f2e66bc9904a7d977764168cbcfa1636a61dee05fcf4a861ecfa4e2b5c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
