<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_c030c9ad09068fb6e3136adceb5c0537057731e39466caa2df8aca0cb3b98bce extends Twig_Template
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
        $__internal_eb7f2cdd198b8251ee6b96c1065d952a6c0edc8bed27c5f2dbc6afb28ac07fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7f2cdd198b8251ee6b96c1065d952a6c0edc8bed27c5f2dbc6afb28ac07fd1->enter($__internal_eb7f2cdd198b8251ee6b96c1065d952a6c0edc8bed27c5f2dbc6afb28ac07fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_b69f22df6ae9171dfcdc70d64bdb4cfaf27708529c403dd7083f91ee32efa3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69f22df6ae9171dfcdc70d64bdb4cfaf27708529c403dd7083f91ee32efa3d1->enter($__internal_b69f22df6ae9171dfcdc70d64bdb4cfaf27708529c403dd7083f91ee32efa3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_eb7f2cdd198b8251ee6b96c1065d952a6c0edc8bed27c5f2dbc6afb28ac07fd1->leave($__internal_eb7f2cdd198b8251ee6b96c1065d952a6c0edc8bed27c5f2dbc6afb28ac07fd1_prof);

        
        $__internal_b69f22df6ae9171dfcdc70d64bdb4cfaf27708529c403dd7083f91ee32efa3d1->leave($__internal_b69f22df6ae9171dfcdc70d64bdb4cfaf27708529c403dd7083f91ee32efa3d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
