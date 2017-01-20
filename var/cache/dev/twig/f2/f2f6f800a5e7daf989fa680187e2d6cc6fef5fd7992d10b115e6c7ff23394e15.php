<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1920e96498a3c169f977e2197f130d2961dfb5f804c708222b8a97d99118f58a extends Twig_Template
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
        $__internal_9e216c7618957361481910b938661d54eaef87b7a67adece95f0489b5a8ba693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e216c7618957361481910b938661d54eaef87b7a67adece95f0489b5a8ba693->enter($__internal_9e216c7618957361481910b938661d54eaef87b7a67adece95f0489b5a8ba693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ecf1ffc005839c41983444c60b60522fde822e60e718b70cd5ddafc56afd9cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf1ffc005839c41983444c60b60522fde822e60e718b70cd5ddafc56afd9cef->enter($__internal_ecf1ffc005839c41983444c60b60522fde822e60e718b70cd5ddafc56afd9cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_9e216c7618957361481910b938661d54eaef87b7a67adece95f0489b5a8ba693->leave($__internal_9e216c7618957361481910b938661d54eaef87b7a67adece95f0489b5a8ba693_prof);

        
        $__internal_ecf1ffc005839c41983444c60b60522fde822e60e718b70cd5ddafc56afd9cef->leave($__internal_ecf1ffc005839c41983444c60b60522fde822e60e718b70cd5ddafc56afd9cef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
