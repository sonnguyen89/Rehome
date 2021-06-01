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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/category-showcase.htm */
class __TwigTemplate_f10c0576ad21d40c522d495a78dacdc01a30a5d2f33b9fdbd0d444a668d6c5a8 extends \Twig\Template
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
        $filters = array("theme" => 16);
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
        echo "<section class=\"rehomes-categories-property-area section-padding-100-70\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading text-center wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Categories By <span>Property</span></h2>
                    <p>We have over 8 years of experience and knowledge on how to sell more.</p>
                </div>
            </div>

            <!-- Single Categories and Property Content -->
            <div class=\"col-12 col-md-8\">
                <div class=\"single-categories-property-area bg-gradient-overlay wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <a href=\"#\"><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/7.jpg");
        echo "\" alt=\"\"></a>
                    </div>
                    <!-- Title -->
                    <a class=\"categories-title\" href=\"#\">25 Properties</a>
                    <!-- Property Name and Price -->
                    <div class=\"property-name-price-text\">
                        <a href=\"#\">Villa In Newyork</a>
                        <p>From \$28000</p>
                    </div>
                </div>
            </div>

            <!-- Single Categories and Property Content -->
            <div class=\"col-12 col-md-4\">
                <div class=\"single-categories-property-area bg-gradient-overlay wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <a href=\"#\"><img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/8.jpg");
        echo "\" alt=\"\"></a>
                    </div>
                    <!-- Title -->
                    <a class=\"categories-title\" href=\"#\">25 Properties</a>
                    <!-- Property Name and Price -->
                    <div class=\"property-name-price-text\">
                        <a href=\"#\">Home In LA</a>
                        <p>From \$10000</p>
                    </div>
                </div>
            </div>

            <!-- Single Categories and Property Content -->
            <div class=\"col-12 col-md-4\">
                <div class=\"single-categories-property-area bg-gradient-overlay wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <a href=\"#\"><img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/9.jpg");
        echo "\" alt=\"\"></a>
                    </div>
                    <!-- Title -->
                    <a class=\"categories-title\" href=\"#\">25 Properties</a>
                    <!-- Property Name and Price -->
                    <div class=\"property-name-price-text\">
                        <a href=\"#\">Home In Landport</a>
                        <p>From \$16000</p>
                    </div>
                </div>
            </div>

            <!-- Single Categories and Property Content -->
            <div class=\"col-12 col-md-8\">
                <div class=\"single-categories-property-area bg-gradient-overlay wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <a href=\"#\"><img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/10.jpg");
        echo "\" alt=\"\"></a>
                    </div>
                    <!-- Title -->
                    <a class=\"categories-title\" href=\"#\">25 Properties</a>
                    <!-- Property Name and Price -->
                    <div class=\"property-name-price-text\">
                        <a href=\"#\">Villa In Sysney</a>
                        <p>From \$36000</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/category-showcase.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 67,  119 => 50,  99 => 33,  79 => 16,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"rehomes-categories-property-area section-padding-100-70\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading text-center wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Categories By <span>Property</span></h2>
                    <p>We have over 8 years of experience and knowledge on how to sell more.</p>
                </div>
            </div>

            <!-- Single Categories and Property Content -->
            <div class=\"col-12 col-md-8\">
                <div class=\"single-categories-property-area bg-gradient-overlay wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/bg-img/7.jpg'|theme }}\" alt=\"\"></a>
                    </div>
                    <!-- Title -->
                    <a class=\"categories-title\" href=\"#\">25 Properties</a>
                    <!-- Property Name and Price -->
                    <div class=\"property-name-price-text\">
                        <a href=\"#\">Villa In Newyork</a>
                        <p>From \$28000</p>
                    </div>
                </div>
            </div>

            <!-- Single Categories and Property Content -->
            <div class=\"col-12 col-md-4\">
                <div class=\"single-categories-property-area bg-gradient-overlay wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/bg-img/8.jpg'|theme }}\" alt=\"\"></a>
                    </div>
                    <!-- Title -->
                    <a class=\"categories-title\" href=\"#\">25 Properties</a>
                    <!-- Property Name and Price -->
                    <div class=\"property-name-price-text\">
                        <a href=\"#\">Home In LA</a>
                        <p>From \$10000</p>
                    </div>
                </div>
            </div>

            <!-- Single Categories and Property Content -->
            <div class=\"col-12 col-md-4\">
                <div class=\"single-categories-property-area bg-gradient-overlay wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/bg-img/9.jpg'|theme }}\" alt=\"\"></a>
                    </div>
                    <!-- Title -->
                    <a class=\"categories-title\" href=\"#\">25 Properties</a>
                    <!-- Property Name and Price -->
                    <div class=\"property-name-price-text\">
                        <a href=\"#\">Home In Landport</a>
                        <p>From \$16000</p>
                    </div>
                </div>
            </div>

            <!-- Single Categories and Property Content -->
            <div class=\"col-12 col-md-8\">
                <div class=\"single-categories-property-area bg-gradient-overlay wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/bg-img/10.jpg'|theme }}\" alt=\"\"></a>
                    </div>
                    <!-- Title -->
                    <a class=\"categories-title\" href=\"#\">25 Properties</a>
                    <!-- Property Name and Price -->
                    <div class=\"property-name-price-text\">
                        <a href=\"#\">Villa In Sysney</a>
                        <p>From \$36000</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/category-showcase.htm", "");
    }
}
