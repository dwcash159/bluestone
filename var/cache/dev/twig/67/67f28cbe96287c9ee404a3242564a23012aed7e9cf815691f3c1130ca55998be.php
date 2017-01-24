<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_231d0e90c411fb05993a4c89da6c4ad3f97a5e1099c566c366176c89646c3657 extends Twig_Template
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
        $__internal_5b023ff13d947bac86d07cc6054e2725418bf94f17a8f7cb6ba28918e2dc180a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b023ff13d947bac86d07cc6054e2725418bf94f17a8f7cb6ba28918e2dc180a->enter($__internal_5b023ff13d947bac86d07cc6054e2725418bf94f17a8f7cb6ba28918e2dc180a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_67d05a6ea82293d6a27fd80aa7318ec4cc6c783f619f6c5a1265476898951544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d05a6ea82293d6a27fd80aa7318ec4cc6c783f619f6c5a1265476898951544->enter($__internal_67d05a6ea82293d6a27fd80aa7318ec4cc6c783f619f6c5a1265476898951544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5b023ff13d947bac86d07cc6054e2725418bf94f17a8f7cb6ba28918e2dc180a->leave($__internal_5b023ff13d947bac86d07cc6054e2725418bf94f17a8f7cb6ba28918e2dc180a_prof);

        
        $__internal_67d05a6ea82293d6a27fd80aa7318ec4cc6c783f619f6c5a1265476898951544->leave($__internal_67d05a6ea82293d6a27fd80aa7318ec4cc6c783f619f6c5a1265476898951544_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
