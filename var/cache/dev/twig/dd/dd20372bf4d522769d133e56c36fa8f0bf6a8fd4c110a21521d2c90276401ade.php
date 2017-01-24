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
        $__internal_c016bb262feb818439d7ae43a6cacf4aa497ce2f53dafdd29b0cfa68077bbd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c016bb262feb818439d7ae43a6cacf4aa497ce2f53dafdd29b0cfa68077bbd2b->enter($__internal_c016bb262feb818439d7ae43a6cacf4aa497ce2f53dafdd29b0cfa68077bbd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e80c7c6a5ce58419f5079755d96bb36e16469345212c4e5134bebd0b6f2d5d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80c7c6a5ce58419f5079755d96bb36e16469345212c4e5134bebd0b6f2d5d8b->enter($__internal_e80c7c6a5ce58419f5079755d96bb36e16469345212c4e5134bebd0b6f2d5d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c016bb262feb818439d7ae43a6cacf4aa497ce2f53dafdd29b0cfa68077bbd2b->leave($__internal_c016bb262feb818439d7ae43a6cacf4aa497ce2f53dafdd29b0cfa68077bbd2b_prof);

        
        $__internal_e80c7c6a5ce58419f5079755d96bb36e16469345212c4e5134bebd0b6f2d5d8b->leave($__internal_e80c7c6a5ce58419f5079755d96bb36e16469345212c4e5134bebd0b6f2d5d8b_prof);

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
