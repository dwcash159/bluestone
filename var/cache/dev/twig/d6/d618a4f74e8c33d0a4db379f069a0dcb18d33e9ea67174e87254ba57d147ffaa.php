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
        $__internal_8bfda2ff2772ee42668e70517a6a702363d7ef1c442c20ff2ac089fffe607c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfda2ff2772ee42668e70517a6a702363d7ef1c442c20ff2ac089fffe607c4a->enter($__internal_8bfda2ff2772ee42668e70517a6a702363d7ef1c442c20ff2ac089fffe607c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ec82e0098f9c20e75a84bfb6164badfe00d7140c31c4139c5fb57d3874f9a906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec82e0098f9c20e75a84bfb6164badfe00d7140c31c4139c5fb57d3874f9a906->enter($__internal_ec82e0098f9c20e75a84bfb6164badfe00d7140c31c4139c5fb57d3874f9a906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8bfda2ff2772ee42668e70517a6a702363d7ef1c442c20ff2ac089fffe607c4a->leave($__internal_8bfda2ff2772ee42668e70517a6a702363d7ef1c442c20ff2ac089fffe607c4a_prof);

        
        $__internal_ec82e0098f9c20e75a84bfb6164badfe00d7140c31c4139c5fb57d3874f9a906->leave($__internal_ec82e0098f9c20e75a84bfb6164badfe00d7140c31c4139c5fb57d3874f9a906_prof);

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
