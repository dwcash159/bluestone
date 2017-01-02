<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8dcd8744225ee74c61152363aad54a3876d4778b3f6ed2d35b1615d3cfb6b821 extends Twig_Template
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
        $__internal_e638afe38d3c6c18187ed9203aa8ef15213cac063324918abb81f260f2dbedd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e638afe38d3c6c18187ed9203aa8ef15213cac063324918abb81f260f2dbedd7->enter($__internal_e638afe38d3c6c18187ed9203aa8ef15213cac063324918abb81f260f2dbedd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_f72530f966f567f8b0d5fb22f5ada9a4fc079739e6434b923bf9b3bc78e0335d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72530f966f567f8b0d5fb22f5ada9a4fc079739e6434b923bf9b3bc78e0335d->enter($__internal_f72530f966f567f8b0d5fb22f5ada9a4fc079739e6434b923bf9b3bc78e0335d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_e638afe38d3c6c18187ed9203aa8ef15213cac063324918abb81f260f2dbedd7->leave($__internal_e638afe38d3c6c18187ed9203aa8ef15213cac063324918abb81f260f2dbedd7_prof);

        
        $__internal_f72530f966f567f8b0d5fb22f5ada9a4fc079739e6434b923bf9b3bc78e0335d->leave($__internal_f72530f966f567f8b0d5fb22f5ada9a4fc079739e6434b923bf9b3bc78e0335d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
