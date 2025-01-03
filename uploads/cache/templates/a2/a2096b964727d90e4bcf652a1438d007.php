<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* footer.twig.html */
class __TwigTemplate_0e62dcc551fb27b98b03a311c585716f extends Template
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
        // line 25
        yield "
<span class=\"inline-block font-bold\">
    ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Powered by"), "html", null, true);
        yield " <a class=\"text-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://mapeline.co.id/'>Mapeline</a> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["versionName"] ?? null), "html", null, true);
        yield "<br/>
</span> 
<br/>
<span class=\"text-xs\">
    Copyright © <a class=\"text-";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://mapeline.co.id/'>Mapeline Foundation</a> 2010-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " | Mapeline™ of Mapeline Education Ltd. (Depok)<br/>
    ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Created under the"), "html", null, true);
        yield " <a class=\"text-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://www.gnu.org/licenses/gpl.html'>GNU GPL</a> |
    <a class=\"text-";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://gibbonedu.org/about/#ourTeam'>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Credits"), "html", null, true);
        yield "</a> | 
    <a class=\"text-";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://gibbonedu.org/about/#translators'>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Translators"), "html", null, true);
        yield "</a> | 
    <a class=\"text-";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
        yield "-800\" target='_blank' href='https://gibbonedu.org/support/'>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Support"), "html", null, true);
        yield "</a>
    <br/>
    ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["footerThemeAuthor"] ?? null), "html", null, true);
        yield "<br/>
</span>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.twig.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  84 => 37,  77 => 35,  71 => 34,  65 => 33,  59 => 32,  53 => 31,  42 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.twig.html", "/var/www/html/gibbon/resources/templates/footer.twig.html");
    }
}
