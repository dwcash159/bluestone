<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_94992de7421f7ede9adfc484308a4528d30e6921064e0b307ffc625918b8836b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5b0dc93d57bff79f375f0e60f971a93a6a7cf838ca7541b36a622326c3d2e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b0dc93d57bff79f375f0e60f971a93a6a7cf838ca7541b36a622326c3d2e8a->enter($__internal_e5b0dc93d57bff79f375f0e60f971a93a6a7cf838ca7541b36a622326c3d2e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_245f426d5d3efb48e1c0aac2b80beaca589dcdb1beaf903f73470ea1daaf92d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245f426d5d3efb48e1c0aac2b80beaca589dcdb1beaf903f73470ea1daaf92d0->enter($__internal_245f426d5d3efb48e1c0aac2b80beaca589dcdb1beaf903f73470ea1daaf92d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e5b0dc93d57bff79f375f0e60f971a93a6a7cf838ca7541b36a622326c3d2e8a->leave($__internal_e5b0dc93d57bff79f375f0e60f971a93a6a7cf838ca7541b36a622326c3d2e8a_prof);

        
        $__internal_245f426d5d3efb48e1c0aac2b80beaca589dcdb1beaf903f73470ea1daaf92d0->leave($__internal_245f426d5d3efb48e1c0aac2b80beaca589dcdb1beaf903f73470ea1daaf92d0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f106b6cc962660bb412d8843e52c90dca65a2a93515bdba93085671109df3098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f106b6cc962660bb412d8843e52c90dca65a2a93515bdba93085671109df3098->enter($__internal_f106b6cc962660bb412d8843e52c90dca65a2a93515bdba93085671109df3098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a76130414fd108194b17f1c46c7b28f0db122f1473ae7b83b2982ef850019dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76130414fd108194b17f1c46c7b28f0db122f1473ae7b83b2982ef850019dc9->enter($__internal_a76130414fd108194b17f1c46c7b28f0db122f1473ae7b83b2982ef850019dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a76130414fd108194b17f1c46c7b28f0db122f1473ae7b83b2982ef850019dc9->leave($__internal_a76130414fd108194b17f1c46c7b28f0db122f1473ae7b83b2982ef850019dc9_prof);

        
        $__internal_f106b6cc962660bb412d8843e52c90dca65a2a93515bdba93085671109df3098->leave($__internal_f106b6cc962660bb412d8843e52c90dca65a2a93515bdba93085671109df3098_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
