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

/* /include/navigation.twig */
class __TwigTemplate_0a9b14a54bc1146dd80356ee77dbf1cd2bd486e98a0182246b83863ecc49fd4d extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggle\" aria-controls=\"navbarToggle\" aria-expanded=\"false\" aria-label=\"Navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
   <a class=\"navbar-brand\" href=\"#\">
    Slim
  </a>
    <div class=\"collapse navbar-collapse\" id=\"navbarToggle\">
    <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Link</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </nav>

  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/include/navigation.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggle\" aria-controls=\"navbarToggle\" aria-expanded=\"false\" aria-label=\"Navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
   <a class=\"navbar-brand\" href=\"#\">
    Slim
  </a>
    <div class=\"collapse navbar-collapse\" id=\"navbarToggle\">
    <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Link</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </nav>

  </div>
</nav>", "/include/navigation.twig", "C:\\xampp\\htdocs\\magazine\\app\\templates\\include\\navigation.twig");
    }
}
