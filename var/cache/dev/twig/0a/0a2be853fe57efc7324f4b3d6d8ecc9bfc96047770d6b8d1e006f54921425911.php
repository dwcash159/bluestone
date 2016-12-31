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
        $__internal_951a557989143e4d6be1743c20294c32caa051f97929ad6b6011aaf885a40111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951a557989143e4d6be1743c20294c32caa051f97929ad6b6011aaf885a40111->enter($__internal_951a557989143e4d6be1743c20294c32caa051f97929ad6b6011aaf885a40111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e682fd924080b71b3e2a9dc7ff38b4b38217936c3050a30e6faf5de7fdd8502c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e682fd924080b71b3e2a9dc7ff38b4b38217936c3050a30e6faf5de7fdd8502c->enter($__internal_e682fd924080b71b3e2a9dc7ff38b4b38217936c3050a30e6faf5de7fdd8502c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_951a557989143e4d6be1743c20294c32caa051f97929ad6b6011aaf885a40111->leave($__internal_951a557989143e4d6be1743c20294c32caa051f97929ad6b6011aaf885a40111_prof);

        
        $__internal_e682fd924080b71b3e2a9dc7ff38b4b38217936c3050a30e6faf5de7fdd8502c->leave($__internal_e682fd924080b71b3e2a9dc7ff38b4b38217936c3050a30e6faf5de7fdd8502c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f966d392a5f2b0682ae37b62d2c4a3248f04fcf344b1af244dceed91a6a4ab4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f966d392a5f2b0682ae37b62d2c4a3248f04fcf344b1af244dceed91a6a4ab4c->enter($__internal_f966d392a5f2b0682ae37b62d2c4a3248f04fcf344b1af244dceed91a6a4ab4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2bc75af66639b38b66fbc2783d771e305ca7f9d67283fbcc25b925e6c317122f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc75af66639b38b66fbc2783d771e305ca7f9d67283fbcc25b925e6c317122f->enter($__internal_2bc75af66639b38b66fbc2783d771e305ca7f9d67283fbcc25b925e6c317122f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2bc75af66639b38b66fbc2783d771e305ca7f9d67283fbcc25b925e6c317122f->leave($__internal_2bc75af66639b38b66fbc2783d771e305ca7f9d67283fbcc25b925e6c317122f_prof);

        
        $__internal_f966d392a5f2b0682ae37b62d2c4a3248f04fcf344b1af244dceed91a6a4ab4c->leave($__internal_f966d392a5f2b0682ae37b62d2c4a3248f04fcf344b1af244dceed91a6a4ab4c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a47bf74c384cc3c8b6cc160eb1fcc51355a889132616f50e9828a3afb8188758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47bf74c384cc3c8b6cc160eb1fcc51355a889132616f50e9828a3afb8188758->enter($__internal_a47bf74c384cc3c8b6cc160eb1fcc51355a889132616f50e9828a3afb8188758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6b1f1afbc9f5cb0f3412692eea9b59c588976b04568fd69c7dd8d91954cd1681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1f1afbc9f5cb0f3412692eea9b59c588976b04568fd69c7dd8d91954cd1681->enter($__internal_6b1f1afbc9f5cb0f3412692eea9b59c588976b04568fd69c7dd8d91954cd1681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b1f1afbc9f5cb0f3412692eea9b59c588976b04568fd69c7dd8d91954cd1681->leave($__internal_6b1f1afbc9f5cb0f3412692eea9b59c588976b04568fd69c7dd8d91954cd1681_prof);

        
        $__internal_a47bf74c384cc3c8b6cc160eb1fcc51355a889132616f50e9828a3afb8188758->leave($__internal_a47bf74c384cc3c8b6cc160eb1fcc51355a889132616f50e9828a3afb8188758_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36d3b9ba93e0321c6dcf49755621776a0e966d80ba87a41316611406c8834ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d3b9ba93e0321c6dcf49755621776a0e966d80ba87a41316611406c8834ba6->enter($__internal_36d3b9ba93e0321c6dcf49755621776a0e966d80ba87a41316611406c8834ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc7524ae4549e9c421d961c25bc714377df36719677020e264653854e793fa9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7524ae4549e9c421d961c25bc714377df36719677020e264653854e793fa9b->enter($__internal_bc7524ae4549e9c421d961c25bc714377df36719677020e264653854e793fa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc7524ae4549e9c421d961c25bc714377df36719677020e264653854e793fa9b->leave($__internal_bc7524ae4549e9c421d961c25bc714377df36719677020e264653854e793fa9b_prof);

        
        $__internal_36d3b9ba93e0321c6dcf49755621776a0e966d80ba87a41316611406c8834ba6->leave($__internal_36d3b9ba93e0321c6dcf49755621776a0e966d80ba87a41316611406c8834ba6_prof);

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
