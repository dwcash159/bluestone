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
        $__internal_8b281e1fe82703614a1969e88b6ff6507fff5f2f538962019cd44979abe59ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b281e1fe82703614a1969e88b6ff6507fff5f2f538962019cd44979abe59ebd->enter($__internal_8b281e1fe82703614a1969e88b6ff6507fff5f2f538962019cd44979abe59ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_855efc5b340c9c2f3e50ca931f27e5edddf9a0f4020eaa37a78e6ec798227156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855efc5b340c9c2f3e50ca931f27e5edddf9a0f4020eaa37a78e6ec798227156->enter($__internal_855efc5b340c9c2f3e50ca931f27e5edddf9a0f4020eaa37a78e6ec798227156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8b281e1fe82703614a1969e88b6ff6507fff5f2f538962019cd44979abe59ebd->leave($__internal_8b281e1fe82703614a1969e88b6ff6507fff5f2f538962019cd44979abe59ebd_prof);

        
        $__internal_855efc5b340c9c2f3e50ca931f27e5edddf9a0f4020eaa37a78e6ec798227156->leave($__internal_855efc5b340c9c2f3e50ca931f27e5edddf9a0f4020eaa37a78e6ec798227156_prof);

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
