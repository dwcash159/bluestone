<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a3eaa0f5214292b6165297a6a941120e0088bf4d9b604d8950e2c910286ad108 extends Twig_Template
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
        $__internal_b59417a8d84687b194ee0f29a8924e2b7d81af59f1e7ed2c2cb1a3badc267ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59417a8d84687b194ee0f29a8924e2b7d81af59f1e7ed2c2cb1a3badc267ee4->enter($__internal_b59417a8d84687b194ee0f29a8924e2b7d81af59f1e7ed2c2cb1a3badc267ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_30fe38b4be133ae3bb509e720beb2d4527e8438bacd7e5759f45679d5119aa2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fe38b4be133ae3bb509e720beb2d4527e8438bacd7e5759f45679d5119aa2a->enter($__internal_30fe38b4be133ae3bb509e720beb2d4527e8438bacd7e5759f45679d5119aa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b59417a8d84687b194ee0f29a8924e2b7d81af59f1e7ed2c2cb1a3badc267ee4->leave($__internal_b59417a8d84687b194ee0f29a8924e2b7d81af59f1e7ed2c2cb1a3badc267ee4_prof);

        
        $__internal_30fe38b4be133ae3bb509e720beb2d4527e8438bacd7e5759f45679d5119aa2a->leave($__internal_30fe38b4be133ae3bb509e720beb2d4527e8438bacd7e5759f45679d5119aa2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
