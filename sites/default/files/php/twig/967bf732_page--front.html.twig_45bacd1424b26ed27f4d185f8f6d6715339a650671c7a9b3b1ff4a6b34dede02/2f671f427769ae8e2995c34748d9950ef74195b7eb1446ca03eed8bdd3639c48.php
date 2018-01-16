<?php

/* themes/cincinnati/templates/page--front.html.twig */
class __TwigTemplate_905244cae01c2be895882321be2e9959bad1fcda7cf342c3a4ccfc30c7eacf1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/cincinnati/templates/page--front.html.twig", 1)->display($context);
        // line 2
        echo "   <div class = \"container-fluid login_bg\">
  <main role=\"main\">
    <div class=\"layout-content\">
      <div class=\"article-list\">
        ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
    </div>
  </main>
<html lang=\"en\">

<head>
    <title>CINCINNATI PUBLIC SCHOOLS</title>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"css/main.css\">
</head>

<body>
    <div class=\"container-fluid login_bg\">
        <div class=\"login-wrapper text-center\">
            <h1 class=\"logo\">CINCINNATI PUBLIC SCHOOLS</h1>
            <div class=\"input-group\">
                <span class=\"input-group-addon gplus-icns\" id=\"basic-addon2\"><i><img src=\"http://localhost/iamharshendrabaghel/sites/default/files/Gplus-icn.png\"></i></span>
                <button class=\"form-control gplus-login-btn\">Sign in with Google</button>

            </div>

            <span class=\"gplus-login\">OR LOGIN WITH</span>
            <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">
                <div class=\"input-group\">

                    <input type=\"text\" class=\"form-control\" name=\"Username\" placeholder=\"Username\" required=\"\" autofocus=\"\" />
                    <span class=\"input-group-addon input-icns\" id=\"basic-addon2\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></span>
                </div>
                <div class=\"input-group\">

                    <input type=\"password\" class=\"form-control\" name=\"Password\" placeholder=\"Password\" required=\"\" />
                    <span class=\"input-group-addon input-icns\" id=\"basic-addon2\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span>
                </div>



                <button class=\"btn btn-lg btn-login btn-block\" name=\"Submit\" value=\"Login\" type=\"Submit\">Login</button>
                <a href=\"javascript:void(0);\" title=\"Forgot your password?\">Forgot your password?</a>



            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    <script src=\"js/custom.js\"></script>
</body>

</html>
";
        // line 68
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/cincinnati/templates/page--front.html.twig", 68)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/cincinnati/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 68,  51 => 6,  45 => 2,  43 => 1,);
    }
}
/* {% include directory ~ '/partials/header.html.twig' %}*/
/*    <div class = "container-fluid login_bg">*/
/*   <main role="main">*/
/*     <div class="layout-content">*/
/*       <div class="article-list">*/
/*         {{ page.content }}*/
/*         </div>*/
/*     </div>*/
/*   </main>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <title>CINCINNATI PUBLIC SCHOOLS</title>*/
/*     <!-- Required meta tags -->*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/* */
/*     <!-- Bootstrap CSS -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">*/
/*     <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">*/
/*     <link rel="stylesheet" href="css/main.css">*/
/* </head>*/
/* */
/* <body>*/
/*     <div class="container-fluid login_bg">*/
/*         <div class="login-wrapper text-center">*/
/*             <h1 class="logo">CINCINNATI PUBLIC SCHOOLS</h1>*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon gplus-icns" id="basic-addon2"><i><img src="http://localhost/iamharshendrabaghel/sites/default/files/Gplus-icn.png"></i></span>*/
/*                 <button class="form-control gplus-login-btn">Sign in with Google</button>*/
/* */
/*             </div>*/
/* */
/*             <span class="gplus-login">OR LOGIN WITH</span>*/
/*             <form action="" method="post" name="Login_Form" class="form-signin">*/
/*                 <div class="input-group">*/
/* */
/*                     <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />*/
/*                     <span class="input-group-addon input-icns" id="basic-addon2"><i class="fa fa-user" aria-hidden="true"></i></span>*/
/*                 </div>*/
/*                 <div class="input-group">*/
/* */
/*                     <input type="password" class="form-control" name="Password" placeholder="Password" required="" />*/
/*                     <span class="input-group-addon input-icns" id="basic-addon2"><i class="fa fa-lock" aria-hidden="true"></i></span>*/
/*                 </div>*/
/* */
/* */
/* */
/*                 <button class="btn btn-lg btn-login btn-block" name="Submit" value="Login" type="Submit">Login</button>*/
/*                 <a href="javascript:void(0);" title="Forgot your password?">Forgot your password?</a>*/
/* */
/* */
/* */
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Optional JavaScript -->*/
/*     <!-- jQuery first, then Popper.js, then Bootstrap JS -->*/
/*     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>*/
/*     <script src="js/custom.js"></script>*/
/* </body>*/
/* */
/* </html>*/
/* {% include directory ~ '/partials/footer.html.twig' %}*/
/* */
