<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_49e2e01c203e3a17a2d500d264792b3bb3f8b16312fe6b68b5a3826e11dd1178 extends Twig_Template
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
        $__internal_3201a11be70151fd4b913f374ada8ff8b9fa71728113e38d20b6e46863d7cf7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3201a11be70151fd4b913f374ada8ff8b9fa71728113e38d20b6e46863d7cf7c->enter($__internal_3201a11be70151fd4b913f374ada8ff8b9fa71728113e38d20b6e46863d7cf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_06220a2c5cd1358d6ae4e1d6f9cd2a867c984ede2fd29668917518cab1a71b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06220a2c5cd1358d6ae4e1d6f9cd2a867c984ede2fd29668917518cab1a71b37->enter($__internal_06220a2c5cd1358d6ae4e1d6f9cd2a867c984ede2fd29668917518cab1a71b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3201a11be70151fd4b913f374ada8ff8b9fa71728113e38d20b6e46863d7cf7c->leave($__internal_3201a11be70151fd4b913f374ada8ff8b9fa71728113e38d20b6e46863d7cf7c_prof);

        
        $__internal_06220a2c5cd1358d6ae4e1d6f9cd2a867c984ede2fd29668917518cab1a71b37->leave($__internal_06220a2c5cd1358d6ae4e1d6f9cd2a867c984ede2fd29668917518cab1a71b37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
