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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/partner-logo.htm */
class __TwigTemplate_5a146330cc53fafda97dae12ff109b574f4e2c98030b112ab5c35bf1c2da90d9 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("theme" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"partner-area wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"partner-logo-slide owl-carousel\">
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"100ms\"><img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/1.png");
        echo "\"
                            alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"300ms\"><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/2.png");
        echo "\"
                            alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"500ms\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/3.png");
        echo "\"
                            alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"700ms\"><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/4.png");
        echo "\"
                            alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"900ms\"><img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/5.png");
        echo "\"
                            alt=\"\"></a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/partner-logo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  88 => 16,  82 => 13,  76 => 10,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"partner-area wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"partner-logo-slide owl-carousel\">
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"100ms\"><img src=\"{{ 'assets/img/core-img/1.png'|theme }}\"
                            alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"300ms\"><img src=\"{{ 'assets/img/core-img/2.png'|theme }}\"
                            alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"500ms\"><img src=\"{{ 'assets/img/core-img/3.png'|theme }}\"
                            alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"700ms\"><img src=\"{{ 'assets/img/core-img/4.png'|theme }}\"
                            alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"900ms\"><img src=\"{{ 'assets/img/core-img/5.png'|theme }}\"
                            alt=\"\"></a>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/partner-logo.htm", "");
    }
}
