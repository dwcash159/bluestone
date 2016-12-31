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
        $__internal_d371456b72f24c8ebc7c03c3a1096e2b985ec249a8de0d4610b031ec9006e6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d371456b72f24c8ebc7c03c3a1096e2b985ec249a8de0d4610b031ec9006e6b0->enter($__internal_d371456b72f24c8ebc7c03c3a1096e2b985ec249a8de0d4610b031ec9006e6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_187b4d1e547db128f64c516b9ae9eae15dfedce6612683ba57296cb1fa8ed574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187b4d1e547db128f64c516b9ae9eae15dfedce6612683ba57296cb1fa8ed574->enter($__internal_187b4d1e547db128f64c516b9ae9eae15dfedce6612683ba57296cb1fa8ed574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d371456b72f24c8ebc7c03c3a1096e2b985ec249a8de0d4610b031ec9006e6b0->leave($__internal_d371456b72f24c8ebc7c03c3a1096e2b985ec249a8de0d4610b031ec9006e6b0_prof);

        
        $__internal_187b4d1e547db128f64c516b9ae9eae15dfedce6612683ba57296cb1fa8ed574->leave($__internal_187b4d1e547db128f64c516b9ae9eae15dfedce6612683ba57296cb1fa8ed574_prof);

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
