<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_49f0e2b35aa9bb69d26a34473a6ef9a041a3a6dd9672e769a4a295cadd999eb8 extends Twig_Template
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
        $__internal_101e9db99c118998f0fee5f025ec4a5d99600c6ed173e517efb2f11462986323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101e9db99c118998f0fee5f025ec4a5d99600c6ed173e517efb2f11462986323->enter($__internal_101e9db99c118998f0fee5f025ec4a5d99600c6ed173e517efb2f11462986323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_48fcab7fa927212630de29a9767aa276720afcabef61c45927a66e3f27cc9e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fcab7fa927212630de29a9767aa276720afcabef61c45927a66e3f27cc9e88->enter($__internal_48fcab7fa927212630de29a9767aa276720afcabef61c45927a66e3f27cc9e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_101e9db99c118998f0fee5f025ec4a5d99600c6ed173e517efb2f11462986323->leave($__internal_101e9db99c118998f0fee5f025ec4a5d99600c6ed173e517efb2f11462986323_prof);

        
        $__internal_48fcab7fa927212630de29a9767aa276720afcabef61c45927a66e3f27cc9e88->leave($__internal_48fcab7fa927212630de29a9767aa276720afcabef61c45927a66e3f27cc9e88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
