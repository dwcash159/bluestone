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
        $__internal_076a3c6fa7f8573aa4ec4efa408de14647734adf3097202592a2818bf328e480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076a3c6fa7f8573aa4ec4efa408de14647734adf3097202592a2818bf328e480->enter($__internal_076a3c6fa7f8573aa4ec4efa408de14647734adf3097202592a2818bf328e480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_1a08f85767dd5c76d653745aea5193c7ad051ae47856b4de773058b4f9b61082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a08f85767dd5c76d653745aea5193c7ad051ae47856b4de773058b4f9b61082->enter($__internal_1a08f85767dd5c76d653745aea5193c7ad051ae47856b4de773058b4f9b61082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_076a3c6fa7f8573aa4ec4efa408de14647734adf3097202592a2818bf328e480->leave($__internal_076a3c6fa7f8573aa4ec4efa408de14647734adf3097202592a2818bf328e480_prof);

        
        $__internal_1a08f85767dd5c76d653745aea5193c7ad051ae47856b4de773058b4f9b61082->leave($__internal_1a08f85767dd5c76d653745aea5193c7ad051ae47856b4de773058b4f9b61082_prof);

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
