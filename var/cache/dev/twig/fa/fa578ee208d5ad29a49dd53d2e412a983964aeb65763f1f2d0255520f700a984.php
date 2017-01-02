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
        $__internal_cac14787bd4ff02ccefff7fb326a3a466768544f5fd59d88f45224608a1f5a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac14787bd4ff02ccefff7fb326a3a466768544f5fd59d88f45224608a1f5a06->enter($__internal_cac14787bd4ff02ccefff7fb326a3a466768544f5fd59d88f45224608a1f5a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0aae5ecc52340eb92101e17d84920dc7ba422c6d4e51ff23ed356b6908d2eb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aae5ecc52340eb92101e17d84920dc7ba422c6d4e51ff23ed356b6908d2eb37->enter($__internal_0aae5ecc52340eb92101e17d84920dc7ba422c6d4e51ff23ed356b6908d2eb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cac14787bd4ff02ccefff7fb326a3a466768544f5fd59d88f45224608a1f5a06->leave($__internal_cac14787bd4ff02ccefff7fb326a3a466768544f5fd59d88f45224608a1f5a06_prof);

        
        $__internal_0aae5ecc52340eb92101e17d84920dc7ba422c6d4e51ff23ed356b6908d2eb37->leave($__internal_0aae5ecc52340eb92101e17d84920dc7ba422c6d4e51ff23ed356b6908d2eb37_prof);

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
