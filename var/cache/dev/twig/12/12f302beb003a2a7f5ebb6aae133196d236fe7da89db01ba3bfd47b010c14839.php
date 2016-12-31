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
        $__internal_f13eb5b9376606dc614e78ff4be6a20b13ffb2a0abca9e37873351f1116edb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13eb5b9376606dc614e78ff4be6a20b13ffb2a0abca9e37873351f1116edb9d->enter($__internal_f13eb5b9376606dc614e78ff4be6a20b13ffb2a0abca9e37873351f1116edb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6e49ad79c3ed0c003d24bb456a346a920437db1d0d4fff1580882de08bbf2aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e49ad79c3ed0c003d24bb456a346a920437db1d0d4fff1580882de08bbf2aa7->enter($__internal_6e49ad79c3ed0c003d24bb456a346a920437db1d0d4fff1580882de08bbf2aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f13eb5b9376606dc614e78ff4be6a20b13ffb2a0abca9e37873351f1116edb9d->leave($__internal_f13eb5b9376606dc614e78ff4be6a20b13ffb2a0abca9e37873351f1116edb9d_prof);

        
        $__internal_6e49ad79c3ed0c003d24bb456a346a920437db1d0d4fff1580882de08bbf2aa7->leave($__internal_6e49ad79c3ed0c003d24bb456a346a920437db1d0d4fff1580882de08bbf2aa7_prof);

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
