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
        $__internal_17ec369a80462e4504a248ca587cb4196790600533c0638f43a0003ed0a9d9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ec369a80462e4504a248ca587cb4196790600533c0638f43a0003ed0a9d9a3->enter($__internal_17ec369a80462e4504a248ca587cb4196790600533c0638f43a0003ed0a9d9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c0ae6f212f3dbddd751accdcc47fe603727abaa235096f1c639cdec6a3f5a597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ae6f212f3dbddd751accdcc47fe603727abaa235096f1c639cdec6a3f5a597->enter($__internal_c0ae6f212f3dbddd751accdcc47fe603727abaa235096f1c639cdec6a3f5a597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_17ec369a80462e4504a248ca587cb4196790600533c0638f43a0003ed0a9d9a3->leave($__internal_17ec369a80462e4504a248ca587cb4196790600533c0638f43a0003ed0a9d9a3_prof);

        
        $__internal_c0ae6f212f3dbddd751accdcc47fe603727abaa235096f1c639cdec6a3f5a597->leave($__internal_c0ae6f212f3dbddd751accdcc47fe603727abaa235096f1c639cdec6a3f5a597_prof);

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
