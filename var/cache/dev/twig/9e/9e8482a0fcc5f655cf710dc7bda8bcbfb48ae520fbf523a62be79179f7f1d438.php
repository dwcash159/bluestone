<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_934178d853b6d6959eedee2416233920a59ae759d5f3d58bcec448ad2c1359d6 extends Twig_Template
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
        $__internal_14e2355156c2e782387dfb71c54532624324f6be2bbf3307cc9578c22a609af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e2355156c2e782387dfb71c54532624324f6be2bbf3307cc9578c22a609af6->enter($__internal_14e2355156c2e782387dfb71c54532624324f6be2bbf3307cc9578c22a609af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_75b1433b644829bfa1ce81343a3f1504702e197bc1df7cee261411a0b6a3c26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b1433b644829bfa1ce81343a3f1504702e197bc1df7cee261411a0b6a3c26a->enter($__internal_75b1433b644829bfa1ce81343a3f1504702e197bc1df7cee261411a0b6a3c26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_14e2355156c2e782387dfb71c54532624324f6be2bbf3307cc9578c22a609af6->leave($__internal_14e2355156c2e782387dfb71c54532624324f6be2bbf3307cc9578c22a609af6_prof);

        
        $__internal_75b1433b644829bfa1ce81343a3f1504702e197bc1df7cee261411a0b6a3c26a->leave($__internal_75b1433b644829bfa1ce81343a3f1504702e197bc1df7cee261411a0b6a3c26a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
