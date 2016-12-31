<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b786961ca3bdfd67e59e927be8a626923fbec9c29b9206e87d4306621306d1b5 extends Twig_Template
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
        $__internal_e015868ae12e99e5c52bdca496c2d73fca58dfc3c5197622bb66f0c8462322f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e015868ae12e99e5c52bdca496c2d73fca58dfc3c5197622bb66f0c8462322f5->enter($__internal_e015868ae12e99e5c52bdca496c2d73fca58dfc3c5197622bb66f0c8462322f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6482d3637f57781fe2954037893d635a33899c5b48f0e297503ee00a86ada23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6482d3637f57781fe2954037893d635a33899c5b48f0e297503ee00a86ada23d->enter($__internal_6482d3637f57781fe2954037893d635a33899c5b48f0e297503ee00a86ada23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e015868ae12e99e5c52bdca496c2d73fca58dfc3c5197622bb66f0c8462322f5->leave($__internal_e015868ae12e99e5c52bdca496c2d73fca58dfc3c5197622bb66f0c8462322f5_prof);

        
        $__internal_6482d3637f57781fe2954037893d635a33899c5b48f0e297503ee00a86ada23d->leave($__internal_6482d3637f57781fe2954037893d635a33899c5b48f0e297503ee00a86ada23d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
