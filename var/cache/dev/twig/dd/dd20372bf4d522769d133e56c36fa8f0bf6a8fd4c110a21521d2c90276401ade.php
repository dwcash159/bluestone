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
        $__internal_508ba05d0ad254fd7bbb8c982720388daaddffb94e3aa470816c7a018ddb4afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_508ba05d0ad254fd7bbb8c982720388daaddffb94e3aa470816c7a018ddb4afb->enter($__internal_508ba05d0ad254fd7bbb8c982720388daaddffb94e3aa470816c7a018ddb4afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_28a81e70ffa6349eecb234649cc4089f2683391c7293467cbeef4dd7cdeaa68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a81e70ffa6349eecb234649cc4089f2683391c7293467cbeef4dd7cdeaa68c->enter($__internal_28a81e70ffa6349eecb234649cc4089f2683391c7293467cbeef4dd7cdeaa68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_508ba05d0ad254fd7bbb8c982720388daaddffb94e3aa470816c7a018ddb4afb->leave($__internal_508ba05d0ad254fd7bbb8c982720388daaddffb94e3aa470816c7a018ddb4afb_prof);

        
        $__internal_28a81e70ffa6349eecb234649cc4089f2683391c7293467cbeef4dd7cdeaa68c->leave($__internal_28a81e70ffa6349eecb234649cc4089f2683391c7293467cbeef4dd7cdeaa68c_prof);

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
