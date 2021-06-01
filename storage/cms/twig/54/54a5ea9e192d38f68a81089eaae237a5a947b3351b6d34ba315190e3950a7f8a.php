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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/search.htm */
class __TwigTemplate_c47d4731abed68a579d3ea5e4723146ccd46f41533fe674c3655750d927b6c88 extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"rehomes-search-form-area wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"container\">
        <div class=\"rehomes-search-form\">
            <form action=\"#\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-10\">
                        <div class=\"row\">
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"location\" id=\"location\" class=\"form-control\">
                                    <option value=\"location\">Location</option>
                                    <option value=\"armenia\">Armenia</option>
                                    <option value=\"argentina\">Argentina</option>
                                    <option value=\"australia\">Australia</option>
                                    <option value=\"belgium\">Belgium</option>
                                    <option value=\"botswana\">Botswana</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"types\" id=\"types\" class=\"form-control\">
                                    <option value=\"all-types\">All Types</option>
                                    <option value=\"commercial\">Commercial</option>
                                    <option value=\"office\">Office</option>
                                    <option value=\"villa\">Villa</option>
                                    <option value=\"apartment\">Apartment</option>
                                    <option value=\"condominium\">Condominium</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"city\" id=\"city\" class=\"form-control\">
                                    <option value=\"01\">All City</option>
                                    <option value=\"02\">London</option>
                                    <option value=\"03\">Dhaka</option>
                                    <option value=\"04\">Singapore</option>
                                    <option value=\"05\">Comilla</option>
                                    <option value=\"06\">Delhi</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"all\" id=\"all\" class=\"form-control\">
                                    <option value=\"01\">For All</option>
                                    <option value=\"02\">02</option>
                                    <option value=\"03\">03</option>
                                    <option value=\"04\">04</option>
                                    <option value=\"05\">05</option>
                                    <option value=\"06\">06</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"bedrooms\" id=\"bedrooms\" class=\"form-control\">
                                    <option value=\"bedrooms\">Bedrooms</option>
                                    <option value=\"01\">01</option>
                                    <option value=\"02\">02</option>
                                    <option value=\"03\">03</option>
                                    <option value=\"04\">04</option>
                                    <option value=\"05\">05</option>
                                    <option value=\"06\">06</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"bathroom\" id=\"bathroom\" class=\"form-control\">
                                    <option value=\"Bathroom\">Bathroom</option>
                                    <option value=\"01\">01</option>
                                    <option value=\"02\">02</option>
                                    <option value=\"03\">03</option>
                                    <option value=\"04\">04</option>
                                    <option value=\"05\">05</option>
                                    <option value=\"06\">06</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <div class=\"slider-range mb-15\">
                                    <div class=\"range-price text-white\">Price [30000 - 150000]\$</div>
                                    <div class=\"slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\"
                                        data-min=\"0\" data-max=\"200000\" data-unit=\"\$\" data-value-min=\"30000\"
                                        data-value-max=\"150000\" data-label-result=\"Price\">
                                        <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                            tabindex=\"0\"></span>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                            tabindex=\"0\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <div class=\"slider-range mb-15\">
                                    <div class=\"range-size text-white\">Size [9762 - 72063]sqFt</div>
                                    <div data-min=\"0\" data-max=\"98623\" data-unit=\"sqFt\"
                                        class=\"slider-range-size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\"
                                        data-value-min=\"9762\" data-value-max=\"72063\" data-label-result=\"Size\">
                                        <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                            tabindex=\"0\"></span>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                            tabindex=\"0\"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-lg-2\">
                        <button type=\"submit\" class=\"btn rehomes-search-btn\">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/search.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rehomes-search-form-area wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"container\">
        <div class=\"rehomes-search-form\">
            <form action=\"#\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-10\">
                        <div class=\"row\">
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"location\" id=\"location\" class=\"form-control\">
                                    <option value=\"location\">Location</option>
                                    <option value=\"armenia\">Armenia</option>
                                    <option value=\"argentina\">Argentina</option>
                                    <option value=\"australia\">Australia</option>
                                    <option value=\"belgium\">Belgium</option>
                                    <option value=\"botswana\">Botswana</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"types\" id=\"types\" class=\"form-control\">
                                    <option value=\"all-types\">All Types</option>
                                    <option value=\"commercial\">Commercial</option>
                                    <option value=\"office\">Office</option>
                                    <option value=\"villa\">Villa</option>
                                    <option value=\"apartment\">Apartment</option>
                                    <option value=\"condominium\">Condominium</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"city\" id=\"city\" class=\"form-control\">
                                    <option value=\"01\">All City</option>
                                    <option value=\"02\">London</option>
                                    <option value=\"03\">Dhaka</option>
                                    <option value=\"04\">Singapore</option>
                                    <option value=\"05\">Comilla</option>
                                    <option value=\"06\">Delhi</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"all\" id=\"all\" class=\"form-control\">
                                    <option value=\"01\">For All</option>
                                    <option value=\"02\">02</option>
                                    <option value=\"03\">03</option>
                                    <option value=\"04\">04</option>
                                    <option value=\"05\">05</option>
                                    <option value=\"06\">06</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"bedrooms\" id=\"bedrooms\" class=\"form-control\">
                                    <option value=\"bedrooms\">Bedrooms</option>
                                    <option value=\"01\">01</option>
                                    <option value=\"02\">02</option>
                                    <option value=\"03\">03</option>
                                    <option value=\"04\">04</option>
                                    <option value=\"05\">05</option>
                                    <option value=\"06\">06</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <select name=\"bathroom\" id=\"bathroom\" class=\"form-control\">
                                    <option value=\"Bathroom\">Bathroom</option>
                                    <option value=\"01\">01</option>
                                    <option value=\"02\">02</option>
                                    <option value=\"03\">03</option>
                                    <option value=\"04\">04</option>
                                    <option value=\"05\">05</option>
                                    <option value=\"06\">06</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <div class=\"slider-range mb-15\">
                                    <div class=\"range-price text-white\">Price [30000 - 150000]\$</div>
                                    <div class=\"slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\"
                                        data-min=\"0\" data-max=\"200000\" data-unit=\"\$\" data-value-min=\"30000\"
                                        data-value-max=\"150000\" data-label-result=\"Price\">
                                        <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                            tabindex=\"0\"></span>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                            tabindex=\"0\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <div class=\"slider-range mb-15\">
                                    <div class=\"range-size text-white\">Size [9762 - 72063]sqFt</div>
                                    <div data-min=\"0\" data-max=\"98623\" data-unit=\"sqFt\"
                                        class=\"slider-range-size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\"
                                        data-value-min=\"9762\" data-value-max=\"72063\" data-label-result=\"Size\">
                                        <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                            tabindex=\"0\"></span>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                            tabindex=\"0\"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-lg-2\">
                        <button type=\"submit\" class=\"btn rehomes-search-btn\">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/search.htm", "");
    }
}
