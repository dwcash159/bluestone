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
        $__internal_8849f2f86f59ade15f919cc66e5422d8833f2280f521b5e882b555a27fd36615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8849f2f86f59ade15f919cc66e5422d8833f2280f521b5e882b555a27fd36615->enter($__internal_8849f2f86f59ade15f919cc66e5422d8833f2280f521b5e882b555a27fd36615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_183614eb5cf445608a14ec20c6ab87657538e3c574abb6b402ed95b0eeebd24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183614eb5cf445608a14ec20c6ab87657538e3c574abb6b402ed95b0eeebd24c->enter($__internal_183614eb5cf445608a14ec20c6ab87657538e3c574abb6b402ed95b0eeebd24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8849f2f86f59ade15f919cc66e5422d8833f2280f521b5e882b555a27fd36615->leave($__internal_8849f2f86f59ade15f919cc66e5422d8833f2280f521b5e882b555a27fd36615_prof);

        
        $__internal_183614eb5cf445608a14ec20c6ab87657538e3c574abb6b402ed95b0eeebd24c->leave($__internal_183614eb5cf445608a14ec20c6ab87657538e3c574abb6b402ed95b0eeebd24c_prof);

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
