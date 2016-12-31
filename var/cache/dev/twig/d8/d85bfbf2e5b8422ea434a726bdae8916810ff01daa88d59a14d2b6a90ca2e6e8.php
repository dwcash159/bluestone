<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4b3cbd3ae86ada776cf4766a55bb32f5277455c8db5310ccb1c64e9e2755e09c extends Twig_Template
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
        $__internal_53b3ac4f6e672900a80f48aea0f49a8779acba51033df78c5e42a2822f18e79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b3ac4f6e672900a80f48aea0f49a8779acba51033df78c5e42a2822f18e79b->enter($__internal_53b3ac4f6e672900a80f48aea0f49a8779acba51033df78c5e42a2822f18e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_68d7263d1c17ed00b79a3b548f68d8908444cfd9c7b0dbde5d0e0fc980e2840e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d7263d1c17ed00b79a3b548f68d8908444cfd9c7b0dbde5d0e0fc980e2840e->enter($__internal_68d7263d1c17ed00b79a3b548f68d8908444cfd9c7b0dbde5d0e0fc980e2840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_53b3ac4f6e672900a80f48aea0f49a8779acba51033df78c5e42a2822f18e79b->leave($__internal_53b3ac4f6e672900a80f48aea0f49a8779acba51033df78c5e42a2822f18e79b_prof);

        
        $__internal_68d7263d1c17ed00b79a3b548f68d8908444cfd9c7b0dbde5d0e0fc980e2840e->leave($__internal_68d7263d1c17ed00b79a3b548f68d8908444cfd9c7b0dbde5d0e0fc980e2840e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
