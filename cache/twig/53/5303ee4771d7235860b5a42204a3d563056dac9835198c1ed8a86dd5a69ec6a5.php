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

/* Articles/Views/v_item.twig */
class __TwigTemplate_954dea8f611e15865eeead6e6b7093ce2e073aab651773fe8fcc071717d9f79b extends Template
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
        echo "<div class=\"article-item\">
\t<h2>";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 2);
        echo "</h2>
\t<div>";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 3);
        echo "</div>
\t<a href=\"";
        // line 4
        echo ($context["baseUrl"] ?? null);
        echo "article/edit/";
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id_article", [], "any", false, false, false, 4);
        echo "\">Edit it</a>
</div>";
    }

    public function getTemplateName()
    {
        return "Articles/Views/v_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Articles/Views/v_item.twig", "D:\\xampp-v8\\htdocs\\php-oop\\l8\\Modules\\Articles\\Views\\v_item.twig");
    }
}
