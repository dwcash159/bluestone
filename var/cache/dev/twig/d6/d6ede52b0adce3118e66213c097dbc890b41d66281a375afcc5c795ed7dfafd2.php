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
        $__internal_d7c9d41dd49cb00651c823a4b7476fbb7843cf1b7cc6d75e6c2e5f40e61889a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c9d41dd49cb00651c823a4b7476fbb7843cf1b7cc6d75e6c2e5f40e61889a6->enter($__internal_d7c9d41dd49cb00651c823a4b7476fbb7843cf1b7cc6d75e6c2e5f40e61889a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5547c8c95ac008690814645d009c699f0d068039512a69058442d1f216dd9dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5547c8c95ac008690814645d009c699f0d068039512a69058442d1f216dd9dc8->enter($__internal_5547c8c95ac008690814645d009c699f0d068039512a69058442d1f216dd9dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d7c9d41dd49cb00651c823a4b7476fbb7843cf1b7cc6d75e6c2e5f40e61889a6->leave($__internal_d7c9d41dd49cb00651c823a4b7476fbb7843cf1b7cc6d75e6c2e5f40e61889a6_prof);

        
        $__internal_5547c8c95ac008690814645d009c699f0d068039512a69058442d1f216dd9dc8->leave($__internal_5547c8c95ac008690814645d009c699f0d068039512a69058442d1f216dd9dc8_prof);

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
