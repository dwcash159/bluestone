<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7dfafbefa54ea410a4dc6e03ad05fd07bcc7d40e25716e9064bdafba9625473f extends Twig_Template
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
        $__internal_e529b7924b59699cc1206f1c320fccefcf8ada2a485096df6c71498372e5c532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e529b7924b59699cc1206f1c320fccefcf8ada2a485096df6c71498372e5c532->enter($__internal_e529b7924b59699cc1206f1c320fccefcf8ada2a485096df6c71498372e5c532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_265bbd027ac794b419055693277fd64d0687df20dfe875fec0b196dbbe1867f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265bbd027ac794b419055693277fd64d0687df20dfe875fec0b196dbbe1867f7->enter($__internal_265bbd027ac794b419055693277fd64d0687df20dfe875fec0b196dbbe1867f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e529b7924b59699cc1206f1c320fccefcf8ada2a485096df6c71498372e5c532->leave($__internal_e529b7924b59699cc1206f1c320fccefcf8ada2a485096df6c71498372e5c532_prof);

        
        $__internal_265bbd027ac794b419055693277fd64d0687df20dfe875fec0b196dbbe1867f7->leave($__internal_265bbd027ac794b419055693277fd64d0687df20dfe875fec0b196dbbe1867f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
