<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0b26d9c1acbe377f365782e2df0eaebe925ae1f70eead067349f7c8f67cd2976 extends Twig_Template
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
        $__internal_e897ff61364d7e8b9be93f489db887bfd8ef529e18c72435fc7ec04034a4209c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e897ff61364d7e8b9be93f489db887bfd8ef529e18c72435fc7ec04034a4209c->enter($__internal_e897ff61364d7e8b9be93f489db887bfd8ef529e18c72435fc7ec04034a4209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ec5b49f7e1771cd19d1f0fb8a277f854a0d6cc2855fc3a897c3e9cb4aea48af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5b49f7e1771cd19d1f0fb8a277f854a0d6cc2855fc3a897c3e9cb4aea48af6->enter($__internal_ec5b49f7e1771cd19d1f0fb8a277f854a0d6cc2855fc3a897c3e9cb4aea48af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e897ff61364d7e8b9be93f489db887bfd8ef529e18c72435fc7ec04034a4209c->leave($__internal_e897ff61364d7e8b9be93f489db887bfd8ef529e18c72435fc7ec04034a4209c_prof);

        
        $__internal_ec5b49f7e1771cd19d1f0fb8a277f854a0d6cc2855fc3a897c3e9cb4aea48af6->leave($__internal_ec5b49f7e1771cd19d1f0fb8a277f854a0d6cc2855fc3a897c3e9cb4aea48af6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
