<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_aef0a7109e4fa39b74220aaa3ef104c7c63f77e7622c670cad074fe677b05ab8 extends Twig_Template
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
        $__internal_47b8406663ba22458633ed944def0590823e5617ab50501362da91aec4be130f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b8406663ba22458633ed944def0590823e5617ab50501362da91aec4be130f->enter($__internal_47b8406663ba22458633ed944def0590823e5617ab50501362da91aec4be130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3c4b1da2f6b47ae8fe00ecc1426ab3d6f43e3885b99ad8e85fc4f4b6dd709ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4b1da2f6b47ae8fe00ecc1426ab3d6f43e3885b99ad8e85fc4f4b6dd709ab8->enter($__internal_3c4b1da2f6b47ae8fe00ecc1426ab3d6f43e3885b99ad8e85fc4f4b6dd709ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_47b8406663ba22458633ed944def0590823e5617ab50501362da91aec4be130f->leave($__internal_47b8406663ba22458633ed944def0590823e5617ab50501362da91aec4be130f_prof);

        
        $__internal_3c4b1da2f6b47ae8fe00ecc1426ab3d6f43e3885b99ad8e85fc4f4b6dd709ab8->leave($__internal_3c4b1da2f6b47ae8fe00ecc1426ab3d6f43e3885b99ad8e85fc4f4b6dd709ab8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
