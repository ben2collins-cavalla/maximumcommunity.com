<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/mcss_theme/templates/_includes/global/header.html.twig */
class __TwigTemplate_a349669ec2896edf849d0985f4fafd8dd6a2887e38466d8efc5dd1e38b5e43c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 1
        echo "<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\">
 ";
        // line 15
        echo "  <nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
        echo "\" alt=\"logo\" /></a>
      <div id=\"showMenu\" class=\"d-block d-lg-none\">
        <div class=\"menu px-4\">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class=\"d-none d-lg-block\">
        ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
      </div>

      <div class=\"menu-wrap d-block d-lg-none\">
        <div class=\"icon-list\">
          ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
        <div>
      </div>
    </div>
  </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/mcss_theme/templates/_includes/global/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  74 => 26,  62 => 17,  58 => 15,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\">
 {#  <nav class=\"secondary-nav nav\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-8\">
            <div class=\"col-4\"><i class=\"fas fa-map-marker-alt\"></i> 49 Street, Los Angeles</div>
            <div class=\"col-4\">(222) 400-6301</div>
            <div class=\"col-4\">contact@etalon.com</div>
          </div>
          <div class=\"col-4\">
          </div>
        </div>
      </div>
    </nav> #}
  <nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ logo }}\" alt=\"logo\" /></a>
      <div id=\"showMenu\" class=\"d-block d-lg-none\">
        <div class=\"menu px-4\">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class=\"d-none d-lg-block\">
        {{ page.primary_menu }}
      </div>

      <div class=\"menu-wrap d-block d-lg-none\">
        <div class=\"icon-list\">
          {{ page.primary_menu }}
        <div>
      </div>
    </div>
  </nav>
</header>", "themes/contrib/mcss_theme/templates/_includes/global/header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/maximumcommunity.com/themes/contrib/mcss_theme/templates/_includes/global/header.html.twig");
    }
}
