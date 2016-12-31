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
        $__internal_06be5d7509b2b9288694a3f3eb3c082b11ec83a3b8552a189450d5f533f060d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06be5d7509b2b9288694a3f3eb3c082b11ec83a3b8552a189450d5f533f060d4->enter($__internal_06be5d7509b2b9288694a3f3eb3c082b11ec83a3b8552a189450d5f533f060d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_49290011e60fdea94e6d62532a190b2ccac9db63a6599a1f7fe02418e5899967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49290011e60fdea94e6d62532a190b2ccac9db63a6599a1f7fe02418e5899967->enter($__internal_49290011e60fdea94e6d62532a190b2ccac9db63a6599a1f7fe02418e5899967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_06be5d7509b2b9288694a3f3eb3c082b11ec83a3b8552a189450d5f533f060d4->leave($__internal_06be5d7509b2b9288694a3f3eb3c082b11ec83a3b8552a189450d5f533f060d4_prof);

        
        $__internal_49290011e60fdea94e6d62532a190b2ccac9db63a6599a1f7fe02418e5899967->leave($__internal_49290011e60fdea94e6d62532a190b2ccac9db63a6599a1f7fe02418e5899967_prof);

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
