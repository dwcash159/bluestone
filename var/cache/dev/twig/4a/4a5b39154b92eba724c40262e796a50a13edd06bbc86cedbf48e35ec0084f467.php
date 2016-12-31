<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7dfafbefa54ea410a4dc6e03ad05fd07bcc7d40e25716e9064bdafba9625473f extends Twig_Template
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
        $__internal_25545881f76cda1e3df3ce57113465e7f5a147858da26a080b7fcfc42fa8d140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25545881f76cda1e3df3ce57113465e7f5a147858da26a080b7fcfc42fa8d140->enter($__internal_25545881f76cda1e3df3ce57113465e7f5a147858da26a080b7fcfc42fa8d140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f3a1985ff4e24054e1630b19c33930f77fc631e0c7821095bd67f1643d29d1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a1985ff4e24054e1630b19c33930f77fc631e0c7821095bd67f1643d29d1f0->enter($__internal_f3a1985ff4e24054e1630b19c33930f77fc631e0c7821095bd67f1643d29d1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_25545881f76cda1e3df3ce57113465e7f5a147858da26a080b7fcfc42fa8d140->leave($__internal_25545881f76cda1e3df3ce57113465e7f5a147858da26a080b7fcfc42fa8d140_prof);

        
        $__internal_f3a1985ff4e24054e1630b19c33930f77fc631e0c7821095bd67f1643d29d1f0->leave($__internal_f3a1985ff4e24054e1630b19c33930f77fc631e0c7821095bd67f1643d29d1f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
