<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2652a2c3822f97570cafdb732482fdcb01784a7239fe92c7adc2dd546f19b87d extends Twig_Template
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
        $__internal_6f4c72a502744153cf128e5e250ce7f7c90467ffc1598bdbc65f8f080190c2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4c72a502744153cf128e5e250ce7f7c90467ffc1598bdbc65f8f080190c2dc->enter($__internal_6f4c72a502744153cf128e5e250ce7f7c90467ffc1598bdbc65f8f080190c2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2167614d165d74a64184f66739d13b4c6033918eccbf44704a780570498e353a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2167614d165d74a64184f66739d13b4c6033918eccbf44704a780570498e353a->enter($__internal_2167614d165d74a64184f66739d13b4c6033918eccbf44704a780570498e353a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6f4c72a502744153cf128e5e250ce7f7c90467ffc1598bdbc65f8f080190c2dc->leave($__internal_6f4c72a502744153cf128e5e250ce7f7c90467ffc1598bdbc65f8f080190c2dc_prof);

        
        $__internal_2167614d165d74a64184f66739d13b4c6033918eccbf44704a780570498e353a->leave($__internal_2167614d165d74a64184f66739d13b4c6033918eccbf44704a780570498e353a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
