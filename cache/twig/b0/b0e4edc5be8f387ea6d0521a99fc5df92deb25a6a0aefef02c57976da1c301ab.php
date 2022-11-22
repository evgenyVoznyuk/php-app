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

/* _base/v_main.twig */
class __TwigTemplate_b01432881f4ae4d1fd7a2a81517eda17f01f8f6c7cb0c765bc74e5a69e52afde extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body>
\thead
\t<hr>
\t<a href=\"";
        // line 12
        echo ($context["baseUrl"] ?? null);
        echo "\">Home</a> | 
\t<a href=\"";
        // line 13
        echo ($context["baseUrl"] ?? null);
        echo "article/add\">Add article</a>
\t<hr>
\t";
        // line 15
        echo ($context["content"] ?? null);
        echo "
\t<hr>
\tfooter
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "_base/v_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  57 => 13,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_base/v_main.twig", "D:\\xampp-v8\\htdocs\\php-oop\\l7\\Modules\\_base\\v_main.twig");
    }
}
