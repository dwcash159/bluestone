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
        $__internal_6fddf6274d681a8a79d75ac6a8f3c51713ae398a8e317d2fcc021dacfaed797e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fddf6274d681a8a79d75ac6a8f3c51713ae398a8e317d2fcc021dacfaed797e->enter($__internal_6fddf6274d681a8a79d75ac6a8f3c51713ae398a8e317d2fcc021dacfaed797e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2267d2d0bb4a4e83e62711b153ec987c5c72d2eeed47df45b6d7e61490c65d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2267d2d0bb4a4e83e62711b153ec987c5c72d2eeed47df45b6d7e61490c65d6e->enter($__internal_2267d2d0bb4a4e83e62711b153ec987c5c72d2eeed47df45b6d7e61490c65d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6fddf6274d681a8a79d75ac6a8f3c51713ae398a8e317d2fcc021dacfaed797e->leave($__internal_6fddf6274d681a8a79d75ac6a8f3c51713ae398a8e317d2fcc021dacfaed797e_prof);

        
        $__internal_2267d2d0bb4a4e83e62711b153ec987c5c72d2eeed47df45b6d7e61490c65d6e->leave($__internal_2267d2d0bb4a4e83e62711b153ec987c5c72d2eeed47df45b6d7e61490c65d6e_prof);

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
