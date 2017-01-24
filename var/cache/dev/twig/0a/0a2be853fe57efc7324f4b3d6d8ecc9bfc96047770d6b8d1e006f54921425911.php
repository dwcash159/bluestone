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
        $__internal_48281cc0fe54249fb73d425a23e9fe349ad2462f05f66cb35e125e170210727a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48281cc0fe54249fb73d425a23e9fe349ad2462f05f66cb35e125e170210727a->enter($__internal_48281cc0fe54249fb73d425a23e9fe349ad2462f05f66cb35e125e170210727a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_19f80444e38ade17ec9d835f5ea067b43d76ea28163e67795b9ab7ad28036681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f80444e38ade17ec9d835f5ea067b43d76ea28163e67795b9ab7ad28036681->enter($__internal_19f80444e38ade17ec9d835f5ea067b43d76ea28163e67795b9ab7ad28036681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48281cc0fe54249fb73d425a23e9fe349ad2462f05f66cb35e125e170210727a->leave($__internal_48281cc0fe54249fb73d425a23e9fe349ad2462f05f66cb35e125e170210727a_prof);

        
        $__internal_19f80444e38ade17ec9d835f5ea067b43d76ea28163e67795b9ab7ad28036681->leave($__internal_19f80444e38ade17ec9d835f5ea067b43d76ea28163e67795b9ab7ad28036681_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e29636c4964520f7046e12ca62cccfe862ea2b407ab1d9cc868acaf82ecc4212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29636c4964520f7046e12ca62cccfe862ea2b407ab1d9cc868acaf82ecc4212->enter($__internal_e29636c4964520f7046e12ca62cccfe862ea2b407ab1d9cc868acaf82ecc4212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c66f6013f4961c03a1aa65fb72eba5ff2a11609fab85bff4b9ff3dcccc4506c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c66f6013f4961c03a1aa65fb72eba5ff2a11609fab85bff4b9ff3dcccc4506c->enter($__internal_8c66f6013f4961c03a1aa65fb72eba5ff2a11609fab85bff4b9ff3dcccc4506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c66f6013f4961c03a1aa65fb72eba5ff2a11609fab85bff4b9ff3dcccc4506c->leave($__internal_8c66f6013f4961c03a1aa65fb72eba5ff2a11609fab85bff4b9ff3dcccc4506c_prof);

        
        $__internal_e29636c4964520f7046e12ca62cccfe862ea2b407ab1d9cc868acaf82ecc4212->leave($__internal_e29636c4964520f7046e12ca62cccfe862ea2b407ab1d9cc868acaf82ecc4212_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad8ed7cb73bd590b10f3b1b9487fa9104abaadc26dfea5c549620ebaadac08bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8ed7cb73bd590b10f3b1b9487fa9104abaadc26dfea5c549620ebaadac08bd->enter($__internal_ad8ed7cb73bd590b10f3b1b9487fa9104abaadc26dfea5c549620ebaadac08bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce06648d632ee3f3bc82e502121e4ba2df6776c07d091d09cc13ad1adfff13d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce06648d632ee3f3bc82e502121e4ba2df6776c07d091d09cc13ad1adfff13d0->enter($__internal_ce06648d632ee3f3bc82e502121e4ba2df6776c07d091d09cc13ad1adfff13d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce06648d632ee3f3bc82e502121e4ba2df6776c07d091d09cc13ad1adfff13d0->leave($__internal_ce06648d632ee3f3bc82e502121e4ba2df6776c07d091d09cc13ad1adfff13d0_prof);

        
        $__internal_ad8ed7cb73bd590b10f3b1b9487fa9104abaadc26dfea5c549620ebaadac08bd->leave($__internal_ad8ed7cb73bd590b10f3b1b9487fa9104abaadc26dfea5c549620ebaadac08bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7107ff8a1eb65e088150e6087d403003bc13703202cdbabf7b29f4dac99f5daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7107ff8a1eb65e088150e6087d403003bc13703202cdbabf7b29f4dac99f5daf->enter($__internal_7107ff8a1eb65e088150e6087d403003bc13703202cdbabf7b29f4dac99f5daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e42a8aed59f9b35bde6e1f9ae5fe40510962b1817ab104c23ca55a572096e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e42a8aed59f9b35bde6e1f9ae5fe40510962b1817ab104c23ca55a572096e3f->enter($__internal_4e42a8aed59f9b35bde6e1f9ae5fe40510962b1817ab104c23ca55a572096e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e42a8aed59f9b35bde6e1f9ae5fe40510962b1817ab104c23ca55a572096e3f->leave($__internal_4e42a8aed59f9b35bde6e1f9ae5fe40510962b1817ab104c23ca55a572096e3f_prof);

        
        $__internal_7107ff8a1eb65e088150e6087d403003bc13703202cdbabf7b29f4dac99f5daf->leave($__internal_7107ff8a1eb65e088150e6087d403003bc13703202cdbabf7b29f4dac99f5daf_prof);

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
