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
        $__internal_dd88867b76b0084b8d7d23a373d6ad2c90a5759911dce513adbf018724765b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd88867b76b0084b8d7d23a373d6ad2c90a5759911dce513adbf018724765b05->enter($__internal_dd88867b76b0084b8d7d23a373d6ad2c90a5759911dce513adbf018724765b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8cdaac7dfdc6ef0f9d2e6444594000dd11f94661820e5094c9168655205909d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdaac7dfdc6ef0f9d2e6444594000dd11f94661820e5094c9168655205909d9->enter($__internal_8cdaac7dfdc6ef0f9d2e6444594000dd11f94661820e5094c9168655205909d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_dd88867b76b0084b8d7d23a373d6ad2c90a5759911dce513adbf018724765b05->leave($__internal_dd88867b76b0084b8d7d23a373d6ad2c90a5759911dce513adbf018724765b05_prof);

        
        $__internal_8cdaac7dfdc6ef0f9d2e6444594000dd11f94661820e5094c9168655205909d9->leave($__internal_8cdaac7dfdc6ef0f9d2e6444594000dd11f94661820e5094c9168655205909d9_prof);

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
