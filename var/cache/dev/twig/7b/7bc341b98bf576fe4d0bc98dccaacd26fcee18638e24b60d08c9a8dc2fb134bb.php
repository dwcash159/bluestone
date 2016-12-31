<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a3eaa0f5214292b6165297a6a941120e0088bf4d9b604d8950e2c910286ad108 extends Twig_Template
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
        $__internal_5c2d746f40d11b10591418efb8a1a5852a7e17dc3242a7fceb27211a5aef82f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2d746f40d11b10591418efb8a1a5852a7e17dc3242a7fceb27211a5aef82f0->enter($__internal_5c2d746f40d11b10591418efb8a1a5852a7e17dc3242a7fceb27211a5aef82f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c4172c6e6eac457ea9a2028afcd8a3abafb7f5f0ff38a63b804776403e28bd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4172c6e6eac457ea9a2028afcd8a3abafb7f5f0ff38a63b804776403e28bd4f->enter($__internal_c4172c6e6eac457ea9a2028afcd8a3abafb7f5f0ff38a63b804776403e28bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5c2d746f40d11b10591418efb8a1a5852a7e17dc3242a7fceb27211a5aef82f0->leave($__internal_5c2d746f40d11b10591418efb8a1a5852a7e17dc3242a7fceb27211a5aef82f0_prof);

        
        $__internal_c4172c6e6eac457ea9a2028afcd8a3abafb7f5f0ff38a63b804776403e28bd4f->leave($__internal_c4172c6e6eac457ea9a2028afcd8a3abafb7f5f0ff38a63b804776403e28bd4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
