<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ba62a218672615d6c312b178aee1856fb9c49e4b10e42db547ec0e6a3bfe1a3e extends Twig_Template
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
        $__internal_ed39b8094975e0aa128217c67f5f5dcc0737782ff643f10297e4c97f75b88313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed39b8094975e0aa128217c67f5f5dcc0737782ff643f10297e4c97f75b88313->enter($__internal_ed39b8094975e0aa128217c67f5f5dcc0737782ff643f10297e4c97f75b88313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_8daea3a7bd8c8b77dcb6cd0ac33d0def9804129c27945dfe4c2e23967d93aa90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8daea3a7bd8c8b77dcb6cd0ac33d0def9804129c27945dfe4c2e23967d93aa90->enter($__internal_8daea3a7bd8c8b77dcb6cd0ac33d0def9804129c27945dfe4c2e23967d93aa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ed39b8094975e0aa128217c67f5f5dcc0737782ff643f10297e4c97f75b88313->leave($__internal_ed39b8094975e0aa128217c67f5f5dcc0737782ff643f10297e4c97f75b88313_prof);

        
        $__internal_8daea3a7bd8c8b77dcb6cd0ac33d0def9804129c27945dfe4c2e23967d93aa90->leave($__internal_8daea3a7bd8c8b77dcb6cd0ac33d0def9804129c27945dfe4c2e23967d93aa90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
