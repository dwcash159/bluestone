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
        $__internal_1450acb44a4d3c364e47e2013684d3abf75c96912864f4afe616ce4d4c1ab910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1450acb44a4d3c364e47e2013684d3abf75c96912864f4afe616ce4d4c1ab910->enter($__internal_1450acb44a4d3c364e47e2013684d3abf75c96912864f4afe616ce4d4c1ab910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7ee10b53e52c89ef638434596e9ac525b435638d1adf50a6a00db573deaa6835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee10b53e52c89ef638434596e9ac525b435638d1adf50a6a00db573deaa6835->enter($__internal_7ee10b53e52c89ef638434596e9ac525b435638d1adf50a6a00db573deaa6835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1450acb44a4d3c364e47e2013684d3abf75c96912864f4afe616ce4d4c1ab910->leave($__internal_1450acb44a4d3c364e47e2013684d3abf75c96912864f4afe616ce4d4c1ab910_prof);

        
        $__internal_7ee10b53e52c89ef638434596e9ac525b435638d1adf50a6a00db573deaa6835->leave($__internal_7ee10b53e52c89ef638434596e9ac525b435638d1adf50a6a00db573deaa6835_prof);

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
