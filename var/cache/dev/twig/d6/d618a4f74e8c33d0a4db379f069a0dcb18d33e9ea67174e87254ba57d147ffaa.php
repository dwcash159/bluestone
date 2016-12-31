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
        $__internal_1894eab35c969f63f02b0031b2c868ddfd785906b7cd2f8fcdfaf1e19ec0b6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1894eab35c969f63f02b0031b2c868ddfd785906b7cd2f8fcdfaf1e19ec0b6ef->enter($__internal_1894eab35c969f63f02b0031b2c868ddfd785906b7cd2f8fcdfaf1e19ec0b6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a503aa5f7c4f4138802962e1da49048a64c01bc8707aec68d1e6bf720374a5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a503aa5f7c4f4138802962e1da49048a64c01bc8707aec68d1e6bf720374a5d8->enter($__internal_a503aa5f7c4f4138802962e1da49048a64c01bc8707aec68d1e6bf720374a5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1894eab35c969f63f02b0031b2c868ddfd785906b7cd2f8fcdfaf1e19ec0b6ef->leave($__internal_1894eab35c969f63f02b0031b2c868ddfd785906b7cd2f8fcdfaf1e19ec0b6ef_prof);

        
        $__internal_a503aa5f7c4f4138802962e1da49048a64c01bc8707aec68d1e6bf720374a5d8->leave($__internal_a503aa5f7c4f4138802962e1da49048a64c01bc8707aec68d1e6bf720374a5d8_prof);

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
