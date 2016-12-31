<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dd8d53c04a2f9be7ca9ea478ed56fef27450d676d2145dde6bb64a3e0f10a554 extends Twig_Template
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
        $__internal_39f6140b3ce88085e71525df84b71efafcc7c2387d568312054b2377e7bbf840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f6140b3ce88085e71525df84b71efafcc7c2387d568312054b2377e7bbf840->enter($__internal_39f6140b3ce88085e71525df84b71efafcc7c2387d568312054b2377e7bbf840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4d82f4288f9a709bae98f024ba1a804a7d28eb8ea8ea938fe4df7897ff7310ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d82f4288f9a709bae98f024ba1a804a7d28eb8ea8ea938fe4df7897ff7310ce->enter($__internal_4d82f4288f9a709bae98f024ba1a804a7d28eb8ea8ea938fe4df7897ff7310ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_39f6140b3ce88085e71525df84b71efafcc7c2387d568312054b2377e7bbf840->leave($__internal_39f6140b3ce88085e71525df84b71efafcc7c2387d568312054b2377e7bbf840_prof);

        
        $__internal_4d82f4288f9a709bae98f024ba1a804a7d28eb8ea8ea938fe4df7897ff7310ce->leave($__internal_4d82f4288f9a709bae98f024ba1a804a7d28eb8ea8ea938fe4df7897ff7310ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
