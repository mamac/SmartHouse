<?php

/* LljmAdminBundle:User:useradd.html.twig */
class __TwigTemplate_5e023dc15261be8df68834cb7964b9d3b67d1a06847a8395bfd465f3220e1a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmAdminBundle::layout.html.twig", "LljmAdminBundle:User:useradd.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lljm_admin_body' => array($this, 'block_lljm_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25f449a7aa551ca624d1662dfcf99f4583947e434576c5d650a7c67c66cd4f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f449a7aa551ca624d1662dfcf99f4583947e434576c5d650a7c67c66cd4f98->enter($__internal_25f449a7aa551ca624d1662dfcf99f4583947e434576c5d650a7c67c66cd4f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:useradd.html.twig"));

        $__internal_c756337fd3095b50882fee265ca8b17d916bd12c8d26f478a596c09420cc3933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c756337fd3095b50882fee265ca8b17d916bd12c8d26f478a596c09420cc3933->enter($__internal_c756337fd3095b50882fee265ca8b17d916bd12c8d26f478a596c09420cc3933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:useradd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25f449a7aa551ca624d1662dfcf99f4583947e434576c5d650a7c67c66cd4f98->leave($__internal_25f449a7aa551ca624d1662dfcf99f4583947e434576c5d650a7c67c66cd4f98_prof);

        
        $__internal_c756337fd3095b50882fee265ca8b17d916bd12c8d26f478a596c09420cc3933->leave($__internal_c756337fd3095b50882fee265ca8b17d916bd12c8d26f478a596c09420cc3933_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1fab7a38b162675ec788d97a799e2798805afc25a60507408436e31add8a959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fab7a38b162675ec788d97a799e2798805afc25a60507408436e31add8a959->enter($__internal_f1fab7a38b162675ec788d97a799e2798805afc25a60507408436e31add8a959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf97504786c09e278177b684cdedd5908ffc167f5700a2ba5e3d09d35c60af3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf97504786c09e278177b684cdedd5908ffc167f5700a2ba5e3d09d35c60af3a->enter($__internal_bf97504786c09e278177b684cdedd5908ffc167f5700a2ba5e3d09d35c60af3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Users - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bf97504786c09e278177b684cdedd5908ffc167f5700a2ba5e3d09d35c60af3a->leave($__internal_bf97504786c09e278177b684cdedd5908ffc167f5700a2ba5e3d09d35c60af3a_prof);

        
        $__internal_f1fab7a38b162675ec788d97a799e2798805afc25a60507408436e31add8a959->leave($__internal_f1fab7a38b162675ec788d97a799e2798805afc25a60507408436e31add8a959_prof);

    }

    // line 9
    public function block_lljm_admin_body($context, array $blocks = array())
    {
        $__internal_f62626b14afd7242b769f1b45ad07e10beeccd219309fc9cb3be2f6bf7326c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62626b14afd7242b769f1b45ad07e10beeccd219309fc9cb3be2f6bf7326c78->enter($__internal_f62626b14afd7242b769f1b45ad07e10beeccd219309fc9cb3be2f6bf7326c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_admin_body"));

        $__internal_3aa8bd005939aac70181a5c416911f0382cbd9c3bc5b6036c7f60260b80a7c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa8bd005939aac70181a5c416911f0382cbd9c3bc5b6036c7f60260b80a7c63->enter($__internal_3aa8bd005939aac70181a5c416911f0382cbd9c3bc5b6036c7f60260b80a7c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_admin_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a user"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmAdminBundle:User:useraddform.html.twig", "LljmAdminBundle:User:useradd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_3aa8bd005939aac70181a5c416911f0382cbd9c3bc5b6036c7f60260b80a7c63->leave($__internal_3aa8bd005939aac70181a5c416911f0382cbd9c3bc5b6036c7f60260b80a7c63_prof);

        
        $__internal_f62626b14afd7242b769f1b45ad07e10beeccd219309fc9cb3be2f6bf7326c78->leave($__internal_f62626b14afd7242b769f1b45ad07e10beeccd219309fc9cb3be2f6bf7326c78_prof);

    }

    public function getTemplateName()
    {
        return "LljmAdminBundle:User:useradd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  80 => 13,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"LljmAdminBundle::layout.html.twig\" %}


{% block title %}
  Users - {{ parent() }}
{% endblock %}

{% block lljm_admin_body %}

  <h2>{{ 'Add a user' | trans }}</h2>
<ul>
  {% include \"LljmAdminBundle:User:useraddform.html.twig\" %}
</ul>
{% endblock %}

", "LljmAdminBundle:User:useradd.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/AdminBundle/Resources/views/User/useradd.html.twig");
    }
}
