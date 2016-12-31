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
        $__internal_4d070c4b80c108364460c1f36a60de7ff5a5324f865bd1a66a37bdd93d7f44ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d070c4b80c108364460c1f36a60de7ff5a5324f865bd1a66a37bdd93d7f44ad->enter($__internal_4d070c4b80c108364460c1f36a60de7ff5a5324f865bd1a66a37bdd93d7f44ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ca8e82c5e948d5079b23a6fd8a3e7272c157f46b50068ed2106d5d659cb4464f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8e82c5e948d5079b23a6fd8a3e7272c157f46b50068ed2106d5d659cb4464f->enter($__internal_ca8e82c5e948d5079b23a6fd8a3e7272c157f46b50068ed2106d5d659cb4464f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4d070c4b80c108364460c1f36a60de7ff5a5324f865bd1a66a37bdd93d7f44ad->leave($__internal_4d070c4b80c108364460c1f36a60de7ff5a5324f865bd1a66a37bdd93d7f44ad_prof);

        
        $__internal_ca8e82c5e948d5079b23a6fd8a3e7272c157f46b50068ed2106d5d659cb4464f->leave($__internal_ca8e82c5e948d5079b23a6fd8a3e7272c157f46b50068ed2106d5d659cb4464f_prof);

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
