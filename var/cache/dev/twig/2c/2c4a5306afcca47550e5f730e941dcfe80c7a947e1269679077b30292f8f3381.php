<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_366a5eaef6665039e5b78df7fa6c11b43f78354d4c6ceda097b1582506390929 extends Twig_Template
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
        $__internal_87bd25d4899d602ee3eba81fe1cf64d0384c94cd31cef1e58261f11a09c78b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bd25d4899d602ee3eba81fe1cf64d0384c94cd31cef1e58261f11a09c78b88->enter($__internal_87bd25d4899d602ee3eba81fe1cf64d0384c94cd31cef1e58261f11a09c78b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_afeba779c28e9fc79a6d8a3d573ac860f3e61be6ee5f64b4a01331f23fa135b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afeba779c28e9fc79a6d8a3d573ac860f3e61be6ee5f64b4a01331f23fa135b0->enter($__internal_afeba779c28e9fc79a6d8a3d573ac860f3e61be6ee5f64b4a01331f23fa135b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_87bd25d4899d602ee3eba81fe1cf64d0384c94cd31cef1e58261f11a09c78b88->leave($__internal_87bd25d4899d602ee3eba81fe1cf64d0384c94cd31cef1e58261f11a09c78b88_prof);

        
        $__internal_afeba779c28e9fc79a6d8a3d573ac860f3e61be6ee5f64b4a01331f23fa135b0->leave($__internal_afeba779c28e9fc79a6d8a3d573ac860f3e61be6ee5f64b4a01331f23fa135b0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
