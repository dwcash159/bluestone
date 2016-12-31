<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e2a5a3909aa3fb1362ca96717fc73e9cffc9dbaf951c846060c03b7045bbfc06 extends Twig_Template
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
        $__internal_ed3b24ff3d870736bfa96ebddf284c1832e354abfbb89033550db5fedaaa4386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3b24ff3d870736bfa96ebddf284c1832e354abfbb89033550db5fedaaa4386->enter($__internal_ed3b24ff3d870736bfa96ebddf284c1832e354abfbb89033550db5fedaaa4386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_31308230ab96539d84772dcb1304267e44c7ff6018346eec809cdcb846ea26b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31308230ab96539d84772dcb1304267e44c7ff6018346eec809cdcb846ea26b3->enter($__internal_31308230ab96539d84772dcb1304267e44c7ff6018346eec809cdcb846ea26b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ed3b24ff3d870736bfa96ebddf284c1832e354abfbb89033550db5fedaaa4386->leave($__internal_ed3b24ff3d870736bfa96ebddf284c1832e354abfbb89033550db5fedaaa4386_prof);

        
        $__internal_31308230ab96539d84772dcb1304267e44c7ff6018346eec809cdcb846ea26b3->leave($__internal_31308230ab96539d84772dcb1304267e44c7ff6018346eec809cdcb846ea26b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
