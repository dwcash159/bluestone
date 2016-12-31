<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8032492f7383c6ed291ffbc2f48c31f706773200fcdacff0903dee90d809845e extends Twig_Template
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
        $__internal_ce2cd5a9257baee50fb99e5c3ce67e22ec2e27051be6bad7b7a2ef668951d5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2cd5a9257baee50fb99e5c3ce67e22ec2e27051be6bad7b7a2ef668951d5f0->enter($__internal_ce2cd5a9257baee50fb99e5c3ce67e22ec2e27051be6bad7b7a2ef668951d5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a33955401c3e91f632324818eb1468a0fa8d2a810114be4c174fa3ba8b095976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33955401c3e91f632324818eb1468a0fa8d2a810114be4c174fa3ba8b095976->enter($__internal_a33955401c3e91f632324818eb1468a0fa8d2a810114be4c174fa3ba8b095976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ce2cd5a9257baee50fb99e5c3ce67e22ec2e27051be6bad7b7a2ef668951d5f0->leave($__internal_ce2cd5a9257baee50fb99e5c3ce67e22ec2e27051be6bad7b7a2ef668951d5f0_prof);

        
        $__internal_a33955401c3e91f632324818eb1468a0fa8d2a810114be4c174fa3ba8b095976->leave($__internal_a33955401c3e91f632324818eb1468a0fa8d2a810114be4c174fa3ba8b095976_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
