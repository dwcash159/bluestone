<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0ded2a43f6c8e3eb0c4400d29773651adac4c72d49c786561abc3b9cfedca806 extends Twig_Template
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
        $__internal_9228107a5b20e057965fd2b7f0f6a6d00916a9b0f2c3a5f899ff7a2c5b57e1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9228107a5b20e057965fd2b7f0f6a6d00916a9b0f2c3a5f899ff7a2c5b57e1e9->enter($__internal_9228107a5b20e057965fd2b7f0f6a6d00916a9b0f2c3a5f899ff7a2c5b57e1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0726d5c4813faac77af9da532b8a3ad164f4cf4fe319ef638079f5f00685c015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0726d5c4813faac77af9da532b8a3ad164f4cf4fe319ef638079f5f00685c015->enter($__internal_0726d5c4813faac77af9da532b8a3ad164f4cf4fe319ef638079f5f00685c015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9228107a5b20e057965fd2b7f0f6a6d00916a9b0f2c3a5f899ff7a2c5b57e1e9->leave($__internal_9228107a5b20e057965fd2b7f0f6a6d00916a9b0f2c3a5f899ff7a2c5b57e1e9_prof);

        
        $__internal_0726d5c4813faac77af9da532b8a3ad164f4cf4fe319ef638079f5f00685c015->leave($__internal_0726d5c4813faac77af9da532b8a3ad164f4cf4fe319ef638079f5f00685c015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
