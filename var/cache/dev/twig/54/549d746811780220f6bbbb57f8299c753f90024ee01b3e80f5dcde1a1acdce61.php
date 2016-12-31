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
        $__internal_64c5605265329f1d1601243d5e2bcd61c46c0cc19c7015d6f76e98614f60767b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c5605265329f1d1601243d5e2bcd61c46c0cc19c7015d6f76e98614f60767b->enter($__internal_64c5605265329f1d1601243d5e2bcd61c46c0cc19c7015d6f76e98614f60767b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0f8f59892d0395e35f34fb1dbcb0b13bcd311bf01218eb905dd4ca893f4fbecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8f59892d0395e35f34fb1dbcb0b13bcd311bf01218eb905dd4ca893f4fbecb->enter($__internal_0f8f59892d0395e35f34fb1dbcb0b13bcd311bf01218eb905dd4ca893f4fbecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_64c5605265329f1d1601243d5e2bcd61c46c0cc19c7015d6f76e98614f60767b->leave($__internal_64c5605265329f1d1601243d5e2bcd61c46c0cc19c7015d6f76e98614f60767b_prof);

        
        $__internal_0f8f59892d0395e35f34fb1dbcb0b13bcd311bf01218eb905dd4ca893f4fbecb->leave($__internal_0f8f59892d0395e35f34fb1dbcb0b13bcd311bf01218eb905dd4ca893f4fbecb_prof);

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
