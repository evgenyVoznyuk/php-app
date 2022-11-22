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

/* Articles/Views/v_add.twig */
class __TwigTemplate_eb9d29dc7936fa2698bb8d3e43696907462188e063bed3a6015c1c3758d7682f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "<form method=\"post\">
\t<div>
\t\t<div>Title</div>
\t\t<div><input name=\"title\" value=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, false, 7);
        echo "\"></div>
\t\t<div>";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 8);
        echo "</div>
\t</div>
\t<div>
\t\t<div>Content</div>
\t\t<div><textarea name=\"content\">";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "content", [], "any", false, false, false, 12);
        echo "</textarea></div>
\t\t<div>";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 13);
        echo "</div>
\t</div>
\t<button>Send</button>
</form>";
    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<h1>Add article</h1>
";
    }

    public function getTemplateName()
    {
        return "Articles/Views/v_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 2,  68 => 1,  60 => 13,  56 => 12,  49 => 8,  45 => 7,  40 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Articles/Views/v_add.twig", "D:\\xampp-v8\\htdocs\\php-oop\\l8\\Modules\\Articles\\Views\\v_add.twig");
    }
}
