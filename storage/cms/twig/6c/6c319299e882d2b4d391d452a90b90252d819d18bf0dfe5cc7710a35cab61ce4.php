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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/latest-news.htm */
class __TwigTemplate_c57da6c8e1b1e0f501f11b8acf7a6b8ed2c841c2bf83f9cb051f12c4c5c3a7fb extends \Twig\Template
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
        $filters = array("theme" => 17);
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
        echo "<section class=\"rehome-blog-area section-padding-100-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Section Heading -->
                <div class=\"section-heading text-center wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Latest <span>News</span></h2>
                    <p>Sign up for the latest real estate information and more.</p>
                </div>
            </div>

            <!-- Single blog content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-post-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Post Thumb -->
                    <div class=\"post-thumb\">
                        <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/14.jpg");
        echo "\" alt=\"\">
                    </div>
                    <a class=\"post-title\" href=\"#\">Benjamin Franklin S Method Of Habit Formation</a>
                    <!-- Post Meta -->
                    <div class=\"post-meta\">
                        <a class=\"post-author\" href=\"#\">By Polly Williams</a>
                        <a class=\"post-date\" href=\"#\">Dec 19, 2018</a>
                        <a class=\"post-comment\" href=\"#\">3 Comment</a>
                    </div>
                </div>
            </div>

            <!-- Single blog content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-post-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Post Thumb -->
                    <div class=\"post-thumb\">
                        <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/15.jpg");
        echo "\" alt=\"\">
                    </div>
                    <a class=\"post-title\" href=\"#\">How To Set Intentions That Energize You</a>
                    <!-- Post Meta -->
                    <div class=\"post-meta\">
                        <a class=\"post-author\" href=\"#\">By Mattie Ramirez </a>
                        <a class=\"post-date\" href=\"#\">Dec 19, 2018</a>
                        <a class=\"post-comment\" href=\"#\">3 Comment</a>
                    </div>
                </div>
            </div>

            <!-- Single blog content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-post-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Post Thumb -->
                    <div class=\"post-thumb\">
                        <img src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/16.jpg");
        echo "\" alt=\"\">
                    </div>
                    <a class=\"post-title\" href=\"#\">Burning Desire Golden Key Or Red Herring</a>
                    <!-- Post Meta -->
                    <div class=\"post-meta\">
                        <a class=\"post-author\" href=\"#\">By Nicholas Brewer</a>
                        <a class=\"post-date\" href=\"#\">Dec 19, 2018</a>
                        <a class=\"post-comment\" href=\"#\">3 Comment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/latest-news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 51,  100 => 34,  80 => 17,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"rehome-blog-area section-padding-100-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Section Heading -->
                <div class=\"section-heading text-center wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Latest <span>News</span></h2>
                    <p>Sign up for the latest real estate information and more.</p>
                </div>
            </div>

            <!-- Single blog content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-post-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Post Thumb -->
                    <div class=\"post-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/14.jpg'|theme }}\" alt=\"\">
                    </div>
                    <a class=\"post-title\" href=\"#\">Benjamin Franklin S Method Of Habit Formation</a>
                    <!-- Post Meta -->
                    <div class=\"post-meta\">
                        <a class=\"post-author\" href=\"#\">By Polly Williams</a>
                        <a class=\"post-date\" href=\"#\">Dec 19, 2018</a>
                        <a class=\"post-comment\" href=\"#\">3 Comment</a>
                    </div>
                </div>
            </div>

            <!-- Single blog content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-post-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Post Thumb -->
                    <div class=\"post-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/15.jpg'|theme }}\" alt=\"\">
                    </div>
                    <a class=\"post-title\" href=\"#\">How To Set Intentions That Energize You</a>
                    <!-- Post Meta -->
                    <div class=\"post-meta\">
                        <a class=\"post-author\" href=\"#\">By Mattie Ramirez </a>
                        <a class=\"post-date\" href=\"#\">Dec 19, 2018</a>
                        <a class=\"post-comment\" href=\"#\">3 Comment</a>
                    </div>
                </div>
            </div>

            <!-- Single blog content -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-post-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Post Thumb -->
                    <div class=\"post-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/16.jpg'|theme }}\" alt=\"\">
                    </div>
                    <a class=\"post-title\" href=\"#\">Burning Desire Golden Key Or Red Herring</a>
                    <!-- Post Meta -->
                    <div class=\"post-meta\">
                        <a class=\"post-author\" href=\"#\">By Nicholas Brewer</a>
                        <a class=\"post-date\" href=\"#\">Dec 19, 2018</a>
                        <a class=\"post-comment\" href=\"#\">3 Comment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/latest-news.htm", "");
    }
}
