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
        $__internal_b4b08cbd010109e6e2051c9131eaf3ac7b784a80ccf65401febcaa422faf0b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b08cbd010109e6e2051c9131eaf3ac7b784a80ccf65401febcaa422faf0b5b->enter($__internal_b4b08cbd010109e6e2051c9131eaf3ac7b784a80ccf65401febcaa422faf0b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b45d89fc2dbc1b02a9c51478600c584f19add0c2be059d4eb69696937b36cff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45d89fc2dbc1b02a9c51478600c584f19add0c2be059d4eb69696937b36cff6->enter($__internal_b45d89fc2dbc1b02a9c51478600c584f19add0c2be059d4eb69696937b36cff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b4b08cbd010109e6e2051c9131eaf3ac7b784a80ccf65401febcaa422faf0b5b->leave($__internal_b4b08cbd010109e6e2051c9131eaf3ac7b784a80ccf65401febcaa422faf0b5b_prof);

        
        $__internal_b45d89fc2dbc1b02a9c51478600c584f19add0c2be059d4eb69696937b36cff6->leave($__internal_b45d89fc2dbc1b02a9c51478600c584f19add0c2be059d4eb69696937b36cff6_prof);

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
