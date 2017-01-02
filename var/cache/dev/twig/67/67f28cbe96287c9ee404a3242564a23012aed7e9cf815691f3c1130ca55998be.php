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
        $__internal_c6eb0c6ec0713c8f851b6ea057de1d34f8ea89da4cf7c0c8953a2add7bbacb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6eb0c6ec0713c8f851b6ea057de1d34f8ea89da4cf7c0c8953a2add7bbacb6c->enter($__internal_c6eb0c6ec0713c8f851b6ea057de1d34f8ea89da4cf7c0c8953a2add7bbacb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1c3a6b50210f0ea7206c1f300e191e00c09862ba4ebd514173a66016e19ae9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3a6b50210f0ea7206c1f300e191e00c09862ba4ebd514173a66016e19ae9ed->enter($__internal_1c3a6b50210f0ea7206c1f300e191e00c09862ba4ebd514173a66016e19ae9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c6eb0c6ec0713c8f851b6ea057de1d34f8ea89da4cf7c0c8953a2add7bbacb6c->leave($__internal_c6eb0c6ec0713c8f851b6ea057de1d34f8ea89da4cf7c0c8953a2add7bbacb6c_prof);

        
        $__internal_1c3a6b50210f0ea7206c1f300e191e00c09862ba4ebd514173a66016e19ae9ed->leave($__internal_1c3a6b50210f0ea7206c1f300e191e00c09862ba4ebd514173a66016e19ae9ed_prof);

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
