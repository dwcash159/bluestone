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
        $__internal_50ed269b838788fbfc4aed12430dd7f05655a96ceeaf15315e6e51d6accc932b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ed269b838788fbfc4aed12430dd7f05655a96ceeaf15315e6e51d6accc932b->enter($__internal_50ed269b838788fbfc4aed12430dd7f05655a96ceeaf15315e6e51d6accc932b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1322fd4ad9dc6c697f81161aec58a3749841132df41c143e62aa18bbe250ff87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1322fd4ad9dc6c697f81161aec58a3749841132df41c143e62aa18bbe250ff87->enter($__internal_1322fd4ad9dc6c697f81161aec58a3749841132df41c143e62aa18bbe250ff87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_50ed269b838788fbfc4aed12430dd7f05655a96ceeaf15315e6e51d6accc932b->leave($__internal_50ed269b838788fbfc4aed12430dd7f05655a96ceeaf15315e6e51d6accc932b_prof);

        
        $__internal_1322fd4ad9dc6c697f81161aec58a3749841132df41c143e62aa18bbe250ff87->leave($__internal_1322fd4ad9dc6c697f81161aec58a3749841132df41c143e62aa18bbe250ff87_prof);

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
