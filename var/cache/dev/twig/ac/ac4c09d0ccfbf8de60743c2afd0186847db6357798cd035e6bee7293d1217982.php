<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5c53e42b4db184ee433de692bf1e8f3fb6abbd50c13e10575595981d4ee81c85 extends Twig_Template
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
        $__internal_078a1e1d67dfe5c00ea7edb0e758087bad41f53341523d158ba28ea5c1de967b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078a1e1d67dfe5c00ea7edb0e758087bad41f53341523d158ba28ea5c1de967b->enter($__internal_078a1e1d67dfe5c00ea7edb0e758087bad41f53341523d158ba28ea5c1de967b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1bc05228853e1fb159e361b1180078370c79c24e07d1dab6ecadc0c1f14a85ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc05228853e1fb159e361b1180078370c79c24e07d1dab6ecadc0c1f14a85ab->enter($__internal_1bc05228853e1fb159e361b1180078370c79c24e07d1dab6ecadc0c1f14a85ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_078a1e1d67dfe5c00ea7edb0e758087bad41f53341523d158ba28ea5c1de967b->leave($__internal_078a1e1d67dfe5c00ea7edb0e758087bad41f53341523d158ba28ea5c1de967b_prof);

        
        $__internal_1bc05228853e1fb159e361b1180078370c79c24e07d1dab6ecadc0c1f14a85ab->leave($__internal_1bc05228853e1fb159e361b1180078370c79c24e07d1dab6ecadc0c1f14a85ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
