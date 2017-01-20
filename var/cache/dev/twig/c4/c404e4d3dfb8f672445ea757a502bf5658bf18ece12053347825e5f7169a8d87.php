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
        $__internal_f3babfb1b9da56b96799537218159cc76dd8a9e6eb6ec8664df932e36ada47cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3babfb1b9da56b96799537218159cc76dd8a9e6eb6ec8664df932e36ada47cb->enter($__internal_f3babfb1b9da56b96799537218159cc76dd8a9e6eb6ec8664df932e36ada47cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_333d6e892bf4d87a0a8cb3c901af0802e67d2ae44586f47dfa694b8493bd6c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333d6e892bf4d87a0a8cb3c901af0802e67d2ae44586f47dfa694b8493bd6c3f->enter($__internal_333d6e892bf4d87a0a8cb3c901af0802e67d2ae44586f47dfa694b8493bd6c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f3babfb1b9da56b96799537218159cc76dd8a9e6eb6ec8664df932e36ada47cb->leave($__internal_f3babfb1b9da56b96799537218159cc76dd8a9e6eb6ec8664df932e36ada47cb_prof);

        
        $__internal_333d6e892bf4d87a0a8cb3c901af0802e67d2ae44586f47dfa694b8493bd6c3f->leave($__internal_333d6e892bf4d87a0a8cb3c901af0802e67d2ae44586f47dfa694b8493bd6c3f_prof);

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
