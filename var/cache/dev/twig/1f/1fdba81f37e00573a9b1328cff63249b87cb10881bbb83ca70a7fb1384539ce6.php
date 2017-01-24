<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d31f42cae4c18e9762e5e8b820d5a9863e25a09e068713c420a73f3f07008866 extends Twig_Template
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
        $__internal_c08552601a6366f8c253002a6f5331d060ba01164aaadba96d02f35ee7d7e242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08552601a6366f8c253002a6f5331d060ba01164aaadba96d02f35ee7d7e242->enter($__internal_c08552601a6366f8c253002a6f5331d060ba01164aaadba96d02f35ee7d7e242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_80f3f894044e06d7746449f50f955231184c0472ccc6771f9aeecb32f7f5e506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f3f894044e06d7746449f50f955231184c0472ccc6771f9aeecb32f7f5e506->enter($__internal_80f3f894044e06d7746449f50f955231184c0472ccc6771f9aeecb32f7f5e506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c08552601a6366f8c253002a6f5331d060ba01164aaadba96d02f35ee7d7e242->leave($__internal_c08552601a6366f8c253002a6f5331d060ba01164aaadba96d02f35ee7d7e242_prof);

        
        $__internal_80f3f894044e06d7746449f50f955231184c0472ccc6771f9aeecb32f7f5e506->leave($__internal_80f3f894044e06d7746449f50f955231184c0472ccc6771f9aeecb32f7f5e506_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
