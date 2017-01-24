<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4aca9f989d643d7278614d3ace26135b0e90f00585a4fb663ce7c7db6972fcaf extends Twig_Template
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
        $__internal_b6eee21c5779bfecf629a7518ae7c6f1212a50918233feafe81127ee49b9f1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6eee21c5779bfecf629a7518ae7c6f1212a50918233feafe81127ee49b9f1c9->enter($__internal_b6eee21c5779bfecf629a7518ae7c6f1212a50918233feafe81127ee49b9f1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_423b6b288c16e75ba734a5ce813b1c1c11e26f524c05ed3b78a4239442a5e15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423b6b288c16e75ba734a5ce813b1c1c11e26f524c05ed3b78a4239442a5e15a->enter($__internal_423b6b288c16e75ba734a5ce813b1c1c11e26f524c05ed3b78a4239442a5e15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b6eee21c5779bfecf629a7518ae7c6f1212a50918233feafe81127ee49b9f1c9->leave($__internal_b6eee21c5779bfecf629a7518ae7c6f1212a50918233feafe81127ee49b9f1c9_prof);

        
        $__internal_423b6b288c16e75ba734a5ce813b1c1c11e26f524c05ed3b78a4239442a5e15a->leave($__internal_423b6b288c16e75ba734a5ce813b1c1c11e26f524c05ed3b78a4239442a5e15a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
