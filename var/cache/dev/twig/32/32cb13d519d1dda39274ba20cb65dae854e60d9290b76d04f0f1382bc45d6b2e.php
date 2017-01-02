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
        $__internal_43c472ef215756212f273ae662a33252bd1fa3875afc3826140616f27b0b9146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c472ef215756212f273ae662a33252bd1fa3875afc3826140616f27b0b9146->enter($__internal_43c472ef215756212f273ae662a33252bd1fa3875afc3826140616f27b0b9146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_324aea5619b9cb26b5350365f0dc7fc3be9afeddcfd38e6a1bc748add28e328d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324aea5619b9cb26b5350365f0dc7fc3be9afeddcfd38e6a1bc748add28e328d->enter($__internal_324aea5619b9cb26b5350365f0dc7fc3be9afeddcfd38e6a1bc748add28e328d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_43c472ef215756212f273ae662a33252bd1fa3875afc3826140616f27b0b9146->leave($__internal_43c472ef215756212f273ae662a33252bd1fa3875afc3826140616f27b0b9146_prof);

        
        $__internal_324aea5619b9cb26b5350365f0dc7fc3be9afeddcfd38e6a1bc748add28e328d->leave($__internal_324aea5619b9cb26b5350365f0dc7fc3be9afeddcfd38e6a1bc748add28e328d_prof);

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
