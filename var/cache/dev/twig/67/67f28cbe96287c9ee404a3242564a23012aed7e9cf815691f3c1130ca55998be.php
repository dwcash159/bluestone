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
        $__internal_c2c0db7b6a2fff6b89520f725f426a86fbf68d3e01b84f4f6e33392d57ede69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c0db7b6a2fff6b89520f725f426a86fbf68d3e01b84f4f6e33392d57ede69a->enter($__internal_c2c0db7b6a2fff6b89520f725f426a86fbf68d3e01b84f4f6e33392d57ede69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2c60eae49ceebe464524d5ca021de6ab944b8c1cad5b873e2daa559a62d46f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c60eae49ceebe464524d5ca021de6ab944b8c1cad5b873e2daa559a62d46f62->enter($__internal_2c60eae49ceebe464524d5ca021de6ab944b8c1cad5b873e2daa559a62d46f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c2c0db7b6a2fff6b89520f725f426a86fbf68d3e01b84f4f6e33392d57ede69a->leave($__internal_c2c0db7b6a2fff6b89520f725f426a86fbf68d3e01b84f4f6e33392d57ede69a_prof);

        
        $__internal_2c60eae49ceebe464524d5ca021de6ab944b8c1cad5b873e2daa559a62d46f62->leave($__internal_2c60eae49ceebe464524d5ca021de6ab944b8c1cad5b873e2daa559a62d46f62_prof);

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
