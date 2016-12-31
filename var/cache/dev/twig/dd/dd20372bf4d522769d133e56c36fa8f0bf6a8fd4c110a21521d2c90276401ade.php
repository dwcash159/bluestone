<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_041247594afdb21d86e57d00bd9f455c2950d682146f9760b59ec9767fc1cc29 extends Twig_Template
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
        $__internal_32bf901b19f6ab482e29ea2ed10f7cc2e03468df350250f2e210f0ca41a5d2bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bf901b19f6ab482e29ea2ed10f7cc2e03468df350250f2e210f0ca41a5d2bb->enter($__internal_32bf901b19f6ab482e29ea2ed10f7cc2e03468df350250f2e210f0ca41a5d2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5a9c70bc2303244c05f98de06192efa4cdef216a94bb4127e3254e86eaa558c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9c70bc2303244c05f98de06192efa4cdef216a94bb4127e3254e86eaa558c1->enter($__internal_5a9c70bc2303244c05f98de06192efa4cdef216a94bb4127e3254e86eaa558c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_32bf901b19f6ab482e29ea2ed10f7cc2e03468df350250f2e210f0ca41a5d2bb->leave($__internal_32bf901b19f6ab482e29ea2ed10f7cc2e03468df350250f2e210f0ca41a5d2bb_prof);

        
        $__internal_5a9c70bc2303244c05f98de06192efa4cdef216a94bb4127e3254e86eaa558c1->leave($__internal_5a9c70bc2303244c05f98de06192efa4cdef216a94bb4127e3254e86eaa558c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
