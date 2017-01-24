<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_556e355c72ebc853d320ee94b3881a2777dbecaaf328b2333492f4cc55f4882b extends Twig_Template
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
        $__internal_aecebc7b81942ab629954a730a5569253604b96c9db57dbcfdd772f9c5eb3994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aecebc7b81942ab629954a730a5569253604b96c9db57dbcfdd772f9c5eb3994->enter($__internal_aecebc7b81942ab629954a730a5569253604b96c9db57dbcfdd772f9c5eb3994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c7c8605cceafe8b6a4519308237a0ed7250e615a5c9ca46ac52b7eee29d30474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c8605cceafe8b6a4519308237a0ed7250e615a5c9ca46ac52b7eee29d30474->enter($__internal_c7c8605cceafe8b6a4519308237a0ed7250e615a5c9ca46ac52b7eee29d30474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_aecebc7b81942ab629954a730a5569253604b96c9db57dbcfdd772f9c5eb3994->leave($__internal_aecebc7b81942ab629954a730a5569253604b96c9db57dbcfdd772f9c5eb3994_prof);

        
        $__internal_c7c8605cceafe8b6a4519308237a0ed7250e615a5c9ca46ac52b7eee29d30474->leave($__internal_c7c8605cceafe8b6a4519308237a0ed7250e615a5c9ca46ac52b7eee29d30474_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
