<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_934178d853b6d6959eedee2416233920a59ae759d5f3d58bcec448ad2c1359d6 extends Twig_Template
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
        $__internal_3019ab8681b7e774dad1f83d499dbf6585ae48b7a8a9475ad5bba5e4589530da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3019ab8681b7e774dad1f83d499dbf6585ae48b7a8a9475ad5bba5e4589530da->enter($__internal_3019ab8681b7e774dad1f83d499dbf6585ae48b7a8a9475ad5bba5e4589530da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_87fa4c3cf1bb648f7d297f99803d033471939674be043a8acc0ac9f54c0340fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fa4c3cf1bb648f7d297f99803d033471939674be043a8acc0ac9f54c0340fe->enter($__internal_87fa4c3cf1bb648f7d297f99803d033471939674be043a8acc0ac9f54c0340fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3019ab8681b7e774dad1f83d499dbf6585ae48b7a8a9475ad5bba5e4589530da->leave($__internal_3019ab8681b7e774dad1f83d499dbf6585ae48b7a8a9475ad5bba5e4589530da_prof);

        
        $__internal_87fa4c3cf1bb648f7d297f99803d033471939674be043a8acc0ac9f54c0340fe->leave($__internal_87fa4c3cf1bb648f7d297f99803d033471939674be043a8acc0ac9f54c0340fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
