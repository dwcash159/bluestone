<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6f65ba6cbd334586800cca9f69f38849ea51aaa9ecf655adbae06865a4eef7d5 extends Twig_Template
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
        $__internal_b23dbeb7fbcfff962fe4ab89fadd943877ede28bf7be03edcb2e35d29f31bf75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23dbeb7fbcfff962fe4ab89fadd943877ede28bf7be03edcb2e35d29f31bf75->enter($__internal_b23dbeb7fbcfff962fe4ab89fadd943877ede28bf7be03edcb2e35d29f31bf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1a72013d030d130d5aec58a7aa985c84f149093c8e2182503136c179380cd7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a72013d030d130d5aec58a7aa985c84f149093c8e2182503136c179380cd7bc->enter($__internal_1a72013d030d130d5aec58a7aa985c84f149093c8e2182503136c179380cd7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b23dbeb7fbcfff962fe4ab89fadd943877ede28bf7be03edcb2e35d29f31bf75->leave($__internal_b23dbeb7fbcfff962fe4ab89fadd943877ede28bf7be03edcb2e35d29f31bf75_prof);

        
        $__internal_1a72013d030d130d5aec58a7aa985c84f149093c8e2182503136c179380cd7bc->leave($__internal_1a72013d030d130d5aec58a7aa985c84f149093c8e2182503136c179380cd7bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
