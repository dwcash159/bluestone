<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_21efa291d45206a4b14384c8272d1e720cc1967cb7b8e640302031040eff3c5c extends Twig_Template
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
        $__internal_ff648f0f61a6fc3200fb5bee42f719a76c3c7dd2f17821070c1406cbdcb8715a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff648f0f61a6fc3200fb5bee42f719a76c3c7dd2f17821070c1406cbdcb8715a->enter($__internal_ff648f0f61a6fc3200fb5bee42f719a76c3c7dd2f17821070c1406cbdcb8715a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d47ce04e568c77ee548f7a3dc0f50ea0356bcb0fb4376169c4e8358cf7b0c294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47ce04e568c77ee548f7a3dc0f50ea0356bcb0fb4376169c4e8358cf7b0c294->enter($__internal_d47ce04e568c77ee548f7a3dc0f50ea0356bcb0fb4376169c4e8358cf7b0c294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ff648f0f61a6fc3200fb5bee42f719a76c3c7dd2f17821070c1406cbdcb8715a->leave($__internal_ff648f0f61a6fc3200fb5bee42f719a76c3c7dd2f17821070c1406cbdcb8715a_prof);

        
        $__internal_d47ce04e568c77ee548f7a3dc0f50ea0356bcb0fb4376169c4e8358cf7b0c294->leave($__internal_d47ce04e568c77ee548f7a3dc0f50ea0356bcb0fb4376169c4e8358cf7b0c294_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
