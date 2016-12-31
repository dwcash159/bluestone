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
        $__internal_a9ccba333469948cc72f31328f2854c7cbe3c8551e5d441badd6ae5a43f0c8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ccba333469948cc72f31328f2854c7cbe3c8551e5d441badd6ae5a43f0c8e7->enter($__internal_a9ccba333469948cc72f31328f2854c7cbe3c8551e5d441badd6ae5a43f0c8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_925e25698bb6a9e39428cfb62d481fe61c1d1a7ce5539db4a3ebfdde0c853b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925e25698bb6a9e39428cfb62d481fe61c1d1a7ce5539db4a3ebfdde0c853b71->enter($__internal_925e25698bb6a9e39428cfb62d481fe61c1d1a7ce5539db4a3ebfdde0c853b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a9ccba333469948cc72f31328f2854c7cbe3c8551e5d441badd6ae5a43f0c8e7->leave($__internal_a9ccba333469948cc72f31328f2854c7cbe3c8551e5d441badd6ae5a43f0c8e7_prof);

        
        $__internal_925e25698bb6a9e39428cfb62d481fe61c1d1a7ce5539db4a3ebfdde0c853b71->leave($__internal_925e25698bb6a9e39428cfb62d481fe61c1d1a7ce5539db4a3ebfdde0c853b71_prof);

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
