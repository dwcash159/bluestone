<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a6f3caae244258fc49cf361366d780f21bc37b49ea7a03c98cec00df65b9b9e3 extends Twig_Template
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
        $__internal_c7bf35b82365fa7f20c5cd180eac9558930d18cc4325ad013f58e17e84cbac16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bf35b82365fa7f20c5cd180eac9558930d18cc4325ad013f58e17e84cbac16->enter($__internal_c7bf35b82365fa7f20c5cd180eac9558930d18cc4325ad013f58e17e84cbac16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7994526909efd97395b05aac78313920ac0c4a4c1af8269e38cadb695e744670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7994526909efd97395b05aac78313920ac0c4a4c1af8269e38cadb695e744670->enter($__internal_7994526909efd97395b05aac78313920ac0c4a4c1af8269e38cadb695e744670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c7bf35b82365fa7f20c5cd180eac9558930d18cc4325ad013f58e17e84cbac16->leave($__internal_c7bf35b82365fa7f20c5cd180eac9558930d18cc4325ad013f58e17e84cbac16_prof);

        
        $__internal_7994526909efd97395b05aac78313920ac0c4a4c1af8269e38cadb695e744670->leave($__internal_7994526909efd97395b05aac78313920ac0c4a4c1af8269e38cadb695e744670_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
