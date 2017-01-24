<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_244a7ddbd92de401991200af6db6192090d24cf9b92dea2625a79e0ce972e1fc extends Twig_Template
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
        $__internal_6814901f4397972408478b0a55125a322597ed1812cda4e18236b3bf58d43195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6814901f4397972408478b0a55125a322597ed1812cda4e18236b3bf58d43195->enter($__internal_6814901f4397972408478b0a55125a322597ed1812cda4e18236b3bf58d43195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_06159736993064b13e29f748fb3c5891ca2090215b8770f0f9b5ac05380beab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06159736993064b13e29f748fb3c5891ca2090215b8770f0f9b5ac05380beab6->enter($__internal_06159736993064b13e29f748fb3c5891ca2090215b8770f0f9b5ac05380beab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6814901f4397972408478b0a55125a322597ed1812cda4e18236b3bf58d43195->leave($__internal_6814901f4397972408478b0a55125a322597ed1812cda4e18236b3bf58d43195_prof);

        
        $__internal_06159736993064b13e29f748fb3c5891ca2090215b8770f0f9b5ac05380beab6->leave($__internal_06159736993064b13e29f748fb3c5891ca2090215b8770f0f9b5ac05380beab6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
