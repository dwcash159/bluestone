<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5a07e3e4a46ba8d08a79e6cd74de8f7ab588c6bcc6a1101d8e319cd6f8c0499b extends Twig_Template
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
        $__internal_6564358dd7feec9c7b7ca1fccaf9bbd6c3579ab981d2718c5fb8aec926eda8f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6564358dd7feec9c7b7ca1fccaf9bbd6c3579ab981d2718c5fb8aec926eda8f6->enter($__internal_6564358dd7feec9c7b7ca1fccaf9bbd6c3579ab981d2718c5fb8aec926eda8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_38d3506c821e4a708fb4af5bb1b5b5c4eaa6b1c6d50900d3ccaf5cea3820557e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d3506c821e4a708fb4af5bb1b5b5c4eaa6b1c6d50900d3ccaf5cea3820557e->enter($__internal_38d3506c821e4a708fb4af5bb1b5b5c4eaa6b1c6d50900d3ccaf5cea3820557e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6564358dd7feec9c7b7ca1fccaf9bbd6c3579ab981d2718c5fb8aec926eda8f6->leave($__internal_6564358dd7feec9c7b7ca1fccaf9bbd6c3579ab981d2718c5fb8aec926eda8f6_prof);

        
        $__internal_38d3506c821e4a708fb4af5bb1b5b5c4eaa6b1c6d50900d3ccaf5cea3820557e->leave($__internal_38d3506c821e4a708fb4af5bb1b5b5c4eaa6b1c6d50900d3ccaf5cea3820557e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
