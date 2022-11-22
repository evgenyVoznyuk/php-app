<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Articles/Views/v_all.twig */
class __TwigTemplate_ad714f69a596d089ab1d18beccb2c54df02ab0b6d06124dbf2ced893c14f604c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>Home</h1>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "<div class=\"article-item\">
\t<h2>";
            // line 4
            echo twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 4);
            echo "</h2>
\t<div class=\"dt\">";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["article"], "dt", [], "any", false, false, false, 5);
            echo "</div>
\t<div class=\"link\">
\t\t<a href=\"";
            // line 7
            echo ($context["baseUrl"] ?? null);
            echo "article/";
            echo twig_get_attribute($this->env, $this->source, $context["article"], "id_article", [], "any", false, false, false, 7);
            echo "\">Read more...</a>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Articles/Views/v_all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  51 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Articles/Views/v_all.twig", "D:\\xampp-v8\\htdocs\\php-oop\\l7\\Modules\\Articles\\Views\\v_all.twig");
    }
}
