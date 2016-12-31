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
        $__internal_a0b9454696308216e5bcbdc053f304ceb36a65c7c489b1c328988f70a22846aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b9454696308216e5bcbdc053f304ceb36a65c7c489b1c328988f70a22846aa->enter($__internal_a0b9454696308216e5bcbdc053f304ceb36a65c7c489b1c328988f70a22846aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_75c8e2bda10fcb32424ff1d3ba004cb170846f0c031d5cf7f9eccd190d4f9898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c8e2bda10fcb32424ff1d3ba004cb170846f0c031d5cf7f9eccd190d4f9898->enter($__internal_75c8e2bda10fcb32424ff1d3ba004cb170846f0c031d5cf7f9eccd190d4f9898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a0b9454696308216e5bcbdc053f304ceb36a65c7c489b1c328988f70a22846aa->leave($__internal_a0b9454696308216e5bcbdc053f304ceb36a65c7c489b1c328988f70a22846aa_prof);

        
        $__internal_75c8e2bda10fcb32424ff1d3ba004cb170846f0c031d5cf7f9eccd190d4f9898->leave($__internal_75c8e2bda10fcb32424ff1d3ba004cb170846f0c031d5cf7f9eccd190d4f9898_prof);

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
