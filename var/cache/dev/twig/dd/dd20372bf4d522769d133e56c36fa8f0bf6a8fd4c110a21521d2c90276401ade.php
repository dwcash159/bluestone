<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_041247594afdb21d86e57d00bd9f455c2950d682146f9760b59ec9767fc1cc29 extends Twig_Template
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
        $__internal_4803897cb65ac4a98e64fc23473d5cd6a922cfdbe24708ee54d4f7c232c4007c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4803897cb65ac4a98e64fc23473d5cd6a922cfdbe24708ee54d4f7c232c4007c->enter($__internal_4803897cb65ac4a98e64fc23473d5cd6a922cfdbe24708ee54d4f7c232c4007c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3e2befea5e261dc1b6ffa97d60a472b0067069cac718e2342fed9550a80b0120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2befea5e261dc1b6ffa97d60a472b0067069cac718e2342fed9550a80b0120->enter($__internal_3e2befea5e261dc1b6ffa97d60a472b0067069cac718e2342fed9550a80b0120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4803897cb65ac4a98e64fc23473d5cd6a922cfdbe24708ee54d4f7c232c4007c->leave($__internal_4803897cb65ac4a98e64fc23473d5cd6a922cfdbe24708ee54d4f7c232c4007c_prof);

        
        $__internal_3e2befea5e261dc1b6ffa97d60a472b0067069cac718e2342fed9550a80b0120->leave($__internal_3e2befea5e261dc1b6ffa97d60a472b0067069cac718e2342fed9550a80b0120_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
