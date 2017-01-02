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
        $__internal_8d99bf87d58562edd93c660f67843b261985803b77ca0e87497f6b58fc519435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d99bf87d58562edd93c660f67843b261985803b77ca0e87497f6b58fc519435->enter($__internal_8d99bf87d58562edd93c660f67843b261985803b77ca0e87497f6b58fc519435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2174a8c44c0529e4ef755d1e0eb132a6502f37fde27ad8a0aee0a24a6820759b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2174a8c44c0529e4ef755d1e0eb132a6502f37fde27ad8a0aee0a24a6820759b->enter($__internal_2174a8c44c0529e4ef755d1e0eb132a6502f37fde27ad8a0aee0a24a6820759b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8d99bf87d58562edd93c660f67843b261985803b77ca0e87497f6b58fc519435->leave($__internal_8d99bf87d58562edd93c660f67843b261985803b77ca0e87497f6b58fc519435_prof);

        
        $__internal_2174a8c44c0529e4ef755d1e0eb132a6502f37fde27ad8a0aee0a24a6820759b->leave($__internal_2174a8c44c0529e4ef755d1e0eb132a6502f37fde27ad8a0aee0a24a6820759b_prof);

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
