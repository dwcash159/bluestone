<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6d608d61bbd904ceaa533265000687aca34bf735062e9b339d2639f6e567ecb1 extends Twig_Template
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
        $__internal_01481d97d8fd2face48944bbe9f8a6bc089ec29cdbe458b74220ddc70e9abe6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01481d97d8fd2face48944bbe9f8a6bc089ec29cdbe458b74220ddc70e9abe6e->enter($__internal_01481d97d8fd2face48944bbe9f8a6bc089ec29cdbe458b74220ddc70e9abe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_79fb0e1dab8d9fd06a45321cb296e074827b332c5fe44b5f224b0a83a01fa5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fb0e1dab8d9fd06a45321cb296e074827b332c5fe44b5f224b0a83a01fa5db->enter($__internal_79fb0e1dab8d9fd06a45321cb296e074827b332c5fe44b5f224b0a83a01fa5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_01481d97d8fd2face48944bbe9f8a6bc089ec29cdbe458b74220ddc70e9abe6e->leave($__internal_01481d97d8fd2face48944bbe9f8a6bc089ec29cdbe458b74220ddc70e9abe6e_prof);

        
        $__internal_79fb0e1dab8d9fd06a45321cb296e074827b332c5fe44b5f224b0a83a01fa5db->leave($__internal_79fb0e1dab8d9fd06a45321cb296e074827b332c5fe44b5f224b0a83a01fa5db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
