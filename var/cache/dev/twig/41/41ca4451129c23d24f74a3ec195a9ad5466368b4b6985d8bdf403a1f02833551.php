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
        $__internal_c7825244eade632516a5f8036d37cefbf578b5b97f331e9fa8ace015fa82cca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7825244eade632516a5f8036d37cefbf578b5b97f331e9fa8ace015fa82cca9->enter($__internal_c7825244eade632516a5f8036d37cefbf578b5b97f331e9fa8ace015fa82cca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8bae2454a7b21d471516244bad8f7943f7a0d3d38f654a3bbaeff31109bbb48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bae2454a7b21d471516244bad8f7943f7a0d3d38f654a3bbaeff31109bbb48e->enter($__internal_8bae2454a7b21d471516244bad8f7943f7a0d3d38f654a3bbaeff31109bbb48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c7825244eade632516a5f8036d37cefbf578b5b97f331e9fa8ace015fa82cca9->leave($__internal_c7825244eade632516a5f8036d37cefbf578b5b97f331e9fa8ace015fa82cca9_prof);

        
        $__internal_8bae2454a7b21d471516244bad8f7943f7a0d3d38f654a3bbaeff31109bbb48e->leave($__internal_8bae2454a7b21d471516244bad8f7943f7a0d3d38f654a3bbaeff31109bbb48e_prof);

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
