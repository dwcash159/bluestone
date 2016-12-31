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
        $__internal_35adadd7a0e88500c055a11caa7fe7744429d2edb9b9d128a7115af0efa75dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35adadd7a0e88500c055a11caa7fe7744429d2edb9b9d128a7115af0efa75dd8->enter($__internal_35adadd7a0e88500c055a11caa7fe7744429d2edb9b9d128a7115af0efa75dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_785b402dde9e41ec66f2de4e2e5fc464e53018803e84d790c0de45c874f23860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785b402dde9e41ec66f2de4e2e5fc464e53018803e84d790c0de45c874f23860->enter($__internal_785b402dde9e41ec66f2de4e2e5fc464e53018803e84d790c0de45c874f23860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_35adadd7a0e88500c055a11caa7fe7744429d2edb9b9d128a7115af0efa75dd8->leave($__internal_35adadd7a0e88500c055a11caa7fe7744429d2edb9b9d128a7115af0efa75dd8_prof);

        
        $__internal_785b402dde9e41ec66f2de4e2e5fc464e53018803e84d790c0de45c874f23860->leave($__internal_785b402dde9e41ec66f2de4e2e5fc464e53018803e84d790c0de45c874f23860_prof);

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
