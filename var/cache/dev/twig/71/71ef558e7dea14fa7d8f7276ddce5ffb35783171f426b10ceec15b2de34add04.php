<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8dcd8744225ee74c61152363aad54a3876d4778b3f6ed2d35b1615d3cfb6b821 extends Twig_Template
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
        $__internal_f0ca30a70de72f5ede66499a42a1432acd62d882353db157bcadab2f6a6c9d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ca30a70de72f5ede66499a42a1432acd62d882353db157bcadab2f6a6c9d99->enter($__internal_f0ca30a70de72f5ede66499a42a1432acd62d882353db157bcadab2f6a6c9d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_9acfa263ea5f470ad0d7836630f233e1e21c987c5183caaa83dff2b9973ee512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acfa263ea5f470ad0d7836630f233e1e21c987c5183caaa83dff2b9973ee512->enter($__internal_9acfa263ea5f470ad0d7836630f233e1e21c987c5183caaa83dff2b9973ee512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_f0ca30a70de72f5ede66499a42a1432acd62d882353db157bcadab2f6a6c9d99->leave($__internal_f0ca30a70de72f5ede66499a42a1432acd62d882353db157bcadab2f6a6c9d99_prof);

        
        $__internal_9acfa263ea5f470ad0d7836630f233e1e21c987c5183caaa83dff2b9973ee512->leave($__internal_9acfa263ea5f470ad0d7836630f233e1e21c987c5183caaa83dff2b9973ee512_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
