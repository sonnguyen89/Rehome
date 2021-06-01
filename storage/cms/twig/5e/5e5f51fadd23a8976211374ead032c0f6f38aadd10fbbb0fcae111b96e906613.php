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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/why-choose-us.htm */
class __TwigTemplate_28f29af8189b567a73fa239f7856a3c6e1a26601d05490e5e46f9763c8265dc3 extends \Twig\Template
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
        echo "<section class=\"rehomes-choose-us-area section-padding-100-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading text-center wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2><span>Why</span> Choose Us?</h2>
                    <p>We have over 8 years of experience and knowledge on how to sell more.</p>
                </div>
            </div>

            <!-- Single choose us content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-choose-us-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Choose us Icon -->
                    <div class=\"choose-us-icon\">
                        <i class=\"icon_search\"></i>
                    </div>
                    <h5>Find Your Home</h5>
                    <p>Quis ipsum suspendisse ultrices, risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>

            <!-- Single choose us content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-choose-us-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Choose us Icon -->
                    <div class=\"choose-us-icon\">
                        <i class=\"icon_building\"></i>
                    </div>
                    <h5>Transportation support</h5>
                    <p>Quis ipsum suspendisse ultrices, risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>

            <!-- Single choose us content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-choose-us-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Choose us Icon -->
                    <div class=\"choose-us-icon\">
                        <i class=\"icon_creditcard\"></i>
                    </div>
                    <h5>Save Your Money</h5>
                    <p>Quis ipsum suspendisse ultrices, risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/why-choose-us.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"rehomes-choose-us-area section-padding-100-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading text-center wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2><span>Why</span> Choose Us?</h2>
                    <p>We have over 8 years of experience and knowledge on how to sell more.</p>
                </div>
            </div>

            <!-- Single choose us content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-choose-us-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Choose us Icon -->
                    <div class=\"choose-us-icon\">
                        <i class=\"icon_search\"></i>
                    </div>
                    <h5>Find Your Home</h5>
                    <p>Quis ipsum suspendisse ultrices, risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>

            <!-- Single choose us content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-choose-us-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Choose us Icon -->
                    <div class=\"choose-us-icon\">
                        <i class=\"icon_building\"></i>
                    </div>
                    <h5>Transportation support</h5>
                    <p>Quis ipsum suspendisse ultrices, risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>

            <!-- Single choose us content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-choose-us-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Choose us Icon -->
                    <div class=\"choose-us-icon\">
                        <i class=\"icon_creditcard\"></i>
                    </div>
                    <h5>Save Your Money</h5>
                    <p>Quis ipsum suspendisse ultrices, risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/why-choose-us.htm", "");
    }
}
