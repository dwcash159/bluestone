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
        $__internal_225b33590d18d53347ed23e218ee280e151456a02d65d4dfbad31c3023516090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_225b33590d18d53347ed23e218ee280e151456a02d65d4dfbad31c3023516090->enter($__internal_225b33590d18d53347ed23e218ee280e151456a02d65d4dfbad31c3023516090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f377744c85feb3bcd1fa502363aba1927b7ac65e719e16f14d78e4559edf424b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f377744c85feb3bcd1fa502363aba1927b7ac65e719e16f14d78e4559edf424b->enter($__internal_f377744c85feb3bcd1fa502363aba1927b7ac65e719e16f14d78e4559edf424b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_225b33590d18d53347ed23e218ee280e151456a02d65d4dfbad31c3023516090->leave($__internal_225b33590d18d53347ed23e218ee280e151456a02d65d4dfbad31c3023516090_prof);

        
        $__internal_f377744c85feb3bcd1fa502363aba1927b7ac65e719e16f14d78e4559edf424b->leave($__internal_f377744c85feb3bcd1fa502363aba1927b7ac65e719e16f14d78e4559edf424b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe81f88ce874cb4665ecca46b259bca4313a71f273da3963dd3b47d2515cd1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe81f88ce874cb4665ecca46b259bca4313a71f273da3963dd3b47d2515cd1fd->enter($__internal_fe81f88ce874cb4665ecca46b259bca4313a71f273da3963dd3b47d2515cd1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b156af14c45a5c7405ae96a7e5a3e00c0ab528fabc735f43a882f0ff99ba451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b156af14c45a5c7405ae96a7e5a3e00c0ab528fabc735f43a882f0ff99ba451->enter($__internal_0b156af14c45a5c7405ae96a7e5a3e00c0ab528fabc735f43a882f0ff99ba451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0b156af14c45a5c7405ae96a7e5a3e00c0ab528fabc735f43a882f0ff99ba451->leave($__internal_0b156af14c45a5c7405ae96a7e5a3e00c0ab528fabc735f43a882f0ff99ba451_prof);

        
        $__internal_fe81f88ce874cb4665ecca46b259bca4313a71f273da3963dd3b47d2515cd1fd->leave($__internal_fe81f88ce874cb4665ecca46b259bca4313a71f273da3963dd3b47d2515cd1fd_prof);

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
