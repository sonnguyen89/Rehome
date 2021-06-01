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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/welcome.htm */
class __TwigTemplate_ed4c04bcfc4288639a16b58e3668604eca93120f4a0a4f1d1a48a3d156561bcc extends \Twig\Template
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
        echo "<div class=\"welcome-area wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"google-maps\">
        <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17107.2892861271!2d-74.01626372475907!3d40.714272545051664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1551762805743\"
            allowfullscreen></iframe>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/welcome.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"welcome-area wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"google-maps\">
        <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17107.2892861271!2d-74.01626372475907!3d40.714272545051664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1551762805743\"
            allowfullscreen></iframe>
    </div>
</div>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/welcome.htm", "");
    }
}
