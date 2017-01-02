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
        $__internal_0ae606eedc48f848c1f9014b9fdbd3397f26274fccf2dc089e0f1bf6d1f715ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae606eedc48f848c1f9014b9fdbd3397f26274fccf2dc089e0f1bf6d1f715ed->enter($__internal_0ae606eedc48f848c1f9014b9fdbd3397f26274fccf2dc089e0f1bf6d1f715ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ff4ce91891694959a1beafc7d01d480bf0e0e36468c57e7343e90e6aa9691bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4ce91891694959a1beafc7d01d480bf0e0e36468c57e7343e90e6aa9691bca->enter($__internal_ff4ce91891694959a1beafc7d01d480bf0e0e36468c57e7343e90e6aa9691bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0ae606eedc48f848c1f9014b9fdbd3397f26274fccf2dc089e0f1bf6d1f715ed->leave($__internal_0ae606eedc48f848c1f9014b9fdbd3397f26274fccf2dc089e0f1bf6d1f715ed_prof);

        
        $__internal_ff4ce91891694959a1beafc7d01d480bf0e0e36468c57e7343e90e6aa9691bca->leave($__internal_ff4ce91891694959a1beafc7d01d480bf0e0e36468c57e7343e90e6aa9691bca_prof);

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
