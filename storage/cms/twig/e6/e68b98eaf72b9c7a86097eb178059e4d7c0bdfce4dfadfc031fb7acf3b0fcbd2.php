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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/home.htm */
class __TwigTemplate_122f8b6fa222505319c1058ff5eb2f6e591384679e850abb72447616655b40cd extends \Twig\Template
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
        $tags = array("partial" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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
        echo "<!-- **** Welcome Maps Area Start **** -->
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/welcome"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "<!-- **** Welcome Maps Area End **** -->

<!-- **** Location Search Form Area **** -->
";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/search"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "<!-- **** Location Search Form Area **** -->

<!-- **** Property Latest Showcase Start **** -->
";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/latest-showcase"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "<!-- **** Property Latest Showcase End **** -->

<!-- **** Why Choose Us Area Start **** -->
";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/why-choose-us"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "<!-- **** Why Choose Us Area End **** -->

<!-- **** Categories By Property Area Start **** -->
";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/category-showcase"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "<!-- **** Categories By Property Area End **** -->

<!-- **** Call to Action Area Start **** -->
";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/cta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "<!-- **** Call to Action Area End **** -->

<!-- **** Latest News - Blog area Start **** -->
";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/latest-news"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "<!-- **** Latest News - Blog area End **** -->

<!-- **** Partner Area Start **** -->
";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/partner-logo"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "<!-- **** Partner Area End **** -->";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 31,  128 => 30,  123 => 27,  119 => 26,  114 => 23,  110 => 22,  105 => 19,  101 => 18,  96 => 15,  92 => 14,  87 => 11,  83 => 10,  78 => 7,  74 => 6,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- **** Welcome Maps Area Start **** -->
{% partial 'sections/welcome' %}
<!-- **** Welcome Maps Area End **** -->

<!-- **** Location Search Form Area **** -->
{% partial 'sections/search' %}
<!-- **** Location Search Form Area **** -->

<!-- **** Property Latest Showcase Start **** -->
{% partial 'sections/latest-showcase' %}
<!-- **** Property Latest Showcase End **** -->

<!-- **** Why Choose Us Area Start **** -->
{% partial 'sections/why-choose-us' %}
<!-- **** Why Choose Us Area End **** -->

<!-- **** Categories By Property Area Start **** -->
{% partial 'sections/category-showcase' %}
<!-- **** Categories By Property Area End **** -->

<!-- **** Call to Action Area Start **** -->
{% partial 'sections/cta' %}
<!-- **** Call to Action Area End **** -->

<!-- **** Latest News - Blog area Start **** -->
{% partial 'sections/latest-news' %}
<!-- **** Latest News - Blog area End **** -->

<!-- **** Partner Area Start **** -->
{% partial 'sections/partner-logo' %}
<!-- **** Partner Area End **** -->", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/home.htm", "");
    }
}
