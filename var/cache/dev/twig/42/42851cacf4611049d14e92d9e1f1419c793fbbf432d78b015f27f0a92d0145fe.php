<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3aa8fc0854bc54cc97853286dbc752a952199a9f9e4842ba4594a2dccc8a10d3 extends Twig_Template
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
        $__internal_8c60ca8f5dda40f00597f1dcb2c8576c3e01c9a7405e8e8638be68805f58ae5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c60ca8f5dda40f00597f1dcb2c8576c3e01c9a7405e8e8638be68805f58ae5a->enter($__internal_8c60ca8f5dda40f00597f1dcb2c8576c3e01c9a7405e8e8638be68805f58ae5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_29afa7e4667d8f3ac481ccacd7e3e7cb4e78f179068d41418ef870046f8f6760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29afa7e4667d8f3ac481ccacd7e3e7cb4e78f179068d41418ef870046f8f6760->enter($__internal_29afa7e4667d8f3ac481ccacd7e3e7cb4e78f179068d41418ef870046f8f6760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8c60ca8f5dda40f00597f1dcb2c8576c3e01c9a7405e8e8638be68805f58ae5a->leave($__internal_8c60ca8f5dda40f00597f1dcb2c8576c3e01c9a7405e8e8638be68805f58ae5a_prof);

        
        $__internal_29afa7e4667d8f3ac481ccacd7e3e7cb4e78f179068d41418ef870046f8f6760->leave($__internal_29afa7e4667d8f3ac481ccacd7e3e7cb4e78f179068d41418ef870046f8f6760_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/button_attributes.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
