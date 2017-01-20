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
        $__internal_337c00dc7828c985588a08de11e1185b1caa210dfa5a02cc646847cfa0733077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337c00dc7828c985588a08de11e1185b1caa210dfa5a02cc646847cfa0733077->enter($__internal_337c00dc7828c985588a08de11e1185b1caa210dfa5a02cc646847cfa0733077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e12a1db95ae7d3cb3e639510a9bb70e232ea19dd021825713cb90af8884ded04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12a1db95ae7d3cb3e639510a9bb70e232ea19dd021825713cb90af8884ded04->enter($__internal_e12a1db95ae7d3cb3e639510a9bb70e232ea19dd021825713cb90af8884ded04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_337c00dc7828c985588a08de11e1185b1caa210dfa5a02cc646847cfa0733077->leave($__internal_337c00dc7828c985588a08de11e1185b1caa210dfa5a02cc646847cfa0733077_prof);

        
        $__internal_e12a1db95ae7d3cb3e639510a9bb70e232ea19dd021825713cb90af8884ded04->leave($__internal_e12a1db95ae7d3cb3e639510a9bb70e232ea19dd021825713cb90af8884ded04_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_48fcee61b4c83eb5223e6d90d56b4cbf4de0872c0ae4188f9146bef142827591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48fcee61b4c83eb5223e6d90d56b4cbf4de0872c0ae4188f9146bef142827591->enter($__internal_48fcee61b4c83eb5223e6d90d56b4cbf4de0872c0ae4188f9146bef142827591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_222b3c1e9fcf4c5cfafb3e4b424e5564533177bb68d476f06b9b5c6146291742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222b3c1e9fcf4c5cfafb3e4b424e5564533177bb68d476f06b9b5c6146291742->enter($__internal_222b3c1e9fcf4c5cfafb3e4b424e5564533177bb68d476f06b9b5c6146291742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_222b3c1e9fcf4c5cfafb3e4b424e5564533177bb68d476f06b9b5c6146291742->leave($__internal_222b3c1e9fcf4c5cfafb3e4b424e5564533177bb68d476f06b9b5c6146291742_prof);

        
        $__internal_48fcee61b4c83eb5223e6d90d56b4cbf4de0872c0ae4188f9146bef142827591->leave($__internal_48fcee61b4c83eb5223e6d90d56b4cbf4de0872c0ae4188f9146bef142827591_prof);

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
