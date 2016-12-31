<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3bcb6526f794aa83b95019bb890a2987df7050a487b335ad25c31eb56a02cbf extends Twig_Template
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
        $__internal_88e5c0f6bf1d8366b0ef555aa36ba2062abd708a55f8d7c51a0419427c7a449a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e5c0f6bf1d8366b0ef555aa36ba2062abd708a55f8d7c51a0419427c7a449a->enter($__internal_88e5c0f6bf1d8366b0ef555aa36ba2062abd708a55f8d7c51a0419427c7a449a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_acdee5a6d9c85affd63408480c023965d380bab081a3e88fee6875eec0aff44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdee5a6d9c85affd63408480c023965d380bab081a3e88fee6875eec0aff44c->enter($__internal_acdee5a6d9c85affd63408480c023965d380bab081a3e88fee6875eec0aff44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_88e5c0f6bf1d8366b0ef555aa36ba2062abd708a55f8d7c51a0419427c7a449a->leave($__internal_88e5c0f6bf1d8366b0ef555aa36ba2062abd708a55f8d7c51a0419427c7a449a_prof);

        
        $__internal_acdee5a6d9c85affd63408480c023965d380bab081a3e88fee6875eec0aff44c->leave($__internal_acdee5a6d9c85affd63408480c023965d380bab081a3e88fee6875eec0aff44c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
