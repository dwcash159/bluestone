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
        $__internal_d1fdca252ab32efa3e705839d7b81ed51ccc96213325cb07d9360ab245713fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fdca252ab32efa3e705839d7b81ed51ccc96213325cb07d9360ab245713fe6->enter($__internal_d1fdca252ab32efa3e705839d7b81ed51ccc96213325cb07d9360ab245713fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fe509894af506623147e22c45e22dc0eaac139538ec0ee1b51c7da40c41d328b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe509894af506623147e22c45e22dc0eaac139538ec0ee1b51c7da40c41d328b->enter($__internal_fe509894af506623147e22c45e22dc0eaac139538ec0ee1b51c7da40c41d328b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d1fdca252ab32efa3e705839d7b81ed51ccc96213325cb07d9360ab245713fe6->leave($__internal_d1fdca252ab32efa3e705839d7b81ed51ccc96213325cb07d9360ab245713fe6_prof);

        
        $__internal_fe509894af506623147e22c45e22dc0eaac139538ec0ee1b51c7da40c41d328b->leave($__internal_fe509894af506623147e22c45e22dc0eaac139538ec0ee1b51c7da40c41d328b_prof);

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
