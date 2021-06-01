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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/cta.htm */
class __TwigTemplate_177b8bf804a9f93241601eaa8bfb50959aa44ef9526b62286c52bf4570054e5a extends \Twig\Template
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
        $filters = array("theme" => 2);
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
        echo "<section class=\"rehome-call-to-action-area bg-overlay bg-img jarallax section-padding-100\"
    style=\"background-image: url(";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/11.jpg");
        echo ");\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-7\">
                <!-- Call to Action Content -->
                <div class=\"call-to-action-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Download app &amp; join now!</h2>
                    <p>Download and sign up to receive all the latest real estate news.</p>
                    <!-- Button -->
                    <div class=\"download-btn\">
                        <a class=\"mr-2\" href=\"#\"><img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/12.png");
        echo "\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/13.png");
        echo "\" alt=\"\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  78 => 12,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"rehome-call-to-action-area bg-overlay bg-img jarallax section-padding-100\"
    style=\"background-image: url({{ 'assets/img/bg-img/11.jpg'|theme }});\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-7\">
                <!-- Call to Action Content -->
                <div class=\"call-to-action-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Download app &amp; join now!</h2>
                    <p>Download and sign up to receive all the latest real estate news.</p>
                    <!-- Button -->
                    <div class=\"download-btn\">
                        <a class=\"mr-2\" href=\"#\"><img src=\"{{ 'assets/img/bg-img/12.png'|theme }}\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"{{ 'assets/img/bg-img/13.png'|theme }}\" alt=\"\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/cta.htm", "");
    }
}
