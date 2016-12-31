<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_72e60c60028611e131ab1527b17147114c4421fc30b96dadd3e71d01bf8a1c9a extends Twig_Template
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
        $__internal_7afac87600d625cdb0af117735ddeeac958863215416b828af50b0296456942f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afac87600d625cdb0af117735ddeeac958863215416b828af50b0296456942f->enter($__internal_7afac87600d625cdb0af117735ddeeac958863215416b828af50b0296456942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1e109a5d820da7ad057e3db5dc2ce584e0259a1050565f303edd33223cbf3f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e109a5d820da7ad057e3db5dc2ce584e0259a1050565f303edd33223cbf3f47->enter($__internal_1e109a5d820da7ad057e3db5dc2ce584e0259a1050565f303edd33223cbf3f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7afac87600d625cdb0af117735ddeeac958863215416b828af50b0296456942f->leave($__internal_7afac87600d625cdb0af117735ddeeac958863215416b828af50b0296456942f_prof);

        
        $__internal_1e109a5d820da7ad057e3db5dc2ce584e0259a1050565f303edd33223cbf3f47->leave($__internal_1e109a5d820da7ad057e3db5dc2ce584e0259a1050565f303edd33223cbf3f47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
