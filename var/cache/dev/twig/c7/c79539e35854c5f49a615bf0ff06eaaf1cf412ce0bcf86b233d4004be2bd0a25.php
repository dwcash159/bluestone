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
        $__internal_bb4ddd1e9a86ea98a7147d3d6d8f83ea6ab6c875be99c81a05c3a508cac40ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4ddd1e9a86ea98a7147d3d6d8f83ea6ab6c875be99c81a05c3a508cac40ae8->enter($__internal_bb4ddd1e9a86ea98a7147d3d6d8f83ea6ab6c875be99c81a05c3a508cac40ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_37004afc40b1313b94589797ed00629f84da81776fde9e9df4f5c1f7a63d02bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37004afc40b1313b94589797ed00629f84da81776fde9e9df4f5c1f7a63d02bf->enter($__internal_37004afc40b1313b94589797ed00629f84da81776fde9e9df4f5c1f7a63d02bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_bb4ddd1e9a86ea98a7147d3d6d8f83ea6ab6c875be99c81a05c3a508cac40ae8->leave($__internal_bb4ddd1e9a86ea98a7147d3d6d8f83ea6ab6c875be99c81a05c3a508cac40ae8_prof);

        
        $__internal_37004afc40b1313b94589797ed00629f84da81776fde9e9df4f5c1f7a63d02bf->leave($__internal_37004afc40b1313b94589797ed00629f84da81776fde9e9df4f5c1f7a63d02bf_prof);

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
