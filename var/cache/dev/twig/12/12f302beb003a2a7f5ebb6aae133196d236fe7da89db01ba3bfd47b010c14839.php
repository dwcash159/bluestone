<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_75fc9020857920ac0a12c9851c221118387f6796821def3ba2fee4e9f8c0dcaa extends Twig_Template
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
        $__internal_c67720188830b539c051c7ef1157e8c01b149ed4d099b978b0914df8d6d5777c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67720188830b539c051c7ef1157e8c01b149ed4d099b978b0914df8d6d5777c->enter($__internal_c67720188830b539c051c7ef1157e8c01b149ed4d099b978b0914df8d6d5777c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a15da855ed4eaf5de78a84599a2cfe923e1a2620a43fb3eaa7d661600c36f8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15da855ed4eaf5de78a84599a2cfe923e1a2620a43fb3eaa7d661600c36f8b8->enter($__internal_a15da855ed4eaf5de78a84599a2cfe923e1a2620a43fb3eaa7d661600c36f8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c67720188830b539c051c7ef1157e8c01b149ed4d099b978b0914df8d6d5777c->leave($__internal_c67720188830b539c051c7ef1157e8c01b149ed4d099b978b0914df8d6d5777c_prof);

        
        $__internal_a15da855ed4eaf5de78a84599a2cfe923e1a2620a43fb3eaa7d661600c36f8b8->leave($__internal_a15da855ed4eaf5de78a84599a2cfe923e1a2620a43fb3eaa7d661600c36f8b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
