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
        $__internal_9f56b2b5c61f1a83a9462f6a99556f4cf85b640877b278091822c5c4b144fe0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f56b2b5c61f1a83a9462f6a99556f4cf85b640877b278091822c5c4b144fe0f->enter($__internal_9f56b2b5c61f1a83a9462f6a99556f4cf85b640877b278091822c5c4b144fe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_32ed720c5cd0cc98768a9c8b284363d7ab00ebac3764138d2e13b8e9a36fa938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ed720c5cd0cc98768a9c8b284363d7ab00ebac3764138d2e13b8e9a36fa938->enter($__internal_32ed720c5cd0cc98768a9c8b284363d7ab00ebac3764138d2e13b8e9a36fa938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9f56b2b5c61f1a83a9462f6a99556f4cf85b640877b278091822c5c4b144fe0f->leave($__internal_9f56b2b5c61f1a83a9462f6a99556f4cf85b640877b278091822c5c4b144fe0f_prof);

        
        $__internal_32ed720c5cd0cc98768a9c8b284363d7ab00ebac3764138d2e13b8e9a36fa938->leave($__internal_32ed720c5cd0cc98768a9c8b284363d7ab00ebac3764138d2e13b8e9a36fa938_prof);

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
