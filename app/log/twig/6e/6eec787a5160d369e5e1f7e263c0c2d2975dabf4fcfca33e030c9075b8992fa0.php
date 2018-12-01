<?php

/* ipIndex.html */
class __TwigTemplate_1404e19c1f33eb8df6f7fd0376cbe285e5bd9e77e9e75ce6efcb05971169c72c extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title>ip地址查询</title>
    <link rel=\"stylesheet\" href=\"./static/css/bootstrap.min.css\"/>
    <script src=\"./static/js/jquery.min.js\"></script>
    <script src=\"./static/js/base.js\"></script>
    <style>
        .container {
            width: 300px;
        }
        #ipInfo {
            display: none;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"form-group\">
            <label for=\"\">请输入ip地址</label>
            <div class=\"input-group\">
                <input type=\"text\" id=\"ipText\" class=\"form-control\" required/>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" id=\"subIp\">查询</button>
                </span>
            </div>
        </div>
        <table class=\"table\" id=\"ipInfo\">
            <tr>
                <td>ip</td>
                <td id=\"ipNumber\"></td>
            </tr>
            <tr>
                <td>国家</td>
                <td id=\"ipCountry\"></td>
            </tr>
            <tr>
                <td>省份</td>
                <td id=\"ipProvince\"></td>
            </tr>
            <tr>
                <td>城市</td>
                <td id=\"ipCity\"></td>
            </tr>
            <tr>
                <td>运营商</td>
                <td id=\"ipCatName\"></td>
            </tr>
            <tr>
                <td>其他</td>
                <td id=\"ipMsg\"></td>
            </tr>
        </table>
    </div>
</body>
<script>
    \$(document).ready(function(){
        \$('#subIp').click(function(){
            var ip = \$('#ipText').val();
            IMOOC.GLOBAL.ajax('/queryIp/query', 'post', {ip: ip}, 'json', IMOOC.APPS.QUERYIP.dataCallback);
        });
    });
</script>
</html>";
    }

    public function getTemplateName()
    {
        return "ipIndex.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title>ip地址查询</title>
    <link rel=\"stylesheet\" href=\"./static/css/bootstrap.min.css\"/>
    <script src=\"./static/js/jquery.min.js\"></script>
    <script src=\"./static/js/base.js\"></script>
    <style>
        .container {
            width: 300px;
        }
        #ipInfo {
            display: none;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"form-group\">
            <label for=\"\">请输入ip地址</label>
            <div class=\"input-group\">
                <input type=\"text\" id=\"ipText\" class=\"form-control\" required/>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" id=\"subIp\">查询</button>
                </span>
            </div>
        </div>
        <table class=\"table\" id=\"ipInfo\">
            <tr>
                <td>ip</td>
                <td id=\"ipNumber\"></td>
            </tr>
            <tr>
                <td>国家</td>
                <td id=\"ipCountry\"></td>
            </tr>
            <tr>
                <td>省份</td>
                <td id=\"ipProvince\"></td>
            </tr>
            <tr>
                <td>城市</td>
                <td id=\"ipCity\"></td>
            </tr>
            <tr>
                <td>运营商</td>
                <td id=\"ipCatName\"></td>
            </tr>
            <tr>
                <td>其他</td>
                <td id=\"ipMsg\"></td>
            </tr>
        </table>
    </div>
</body>
<script>
    \$(document).ready(function(){
        \$('#subIp').click(function(){
            var ip = \$('#ipText').val();
            IMOOC.GLOBAL.ajax('/queryIp/query', 'post', {ip: ip}, 'json', IMOOC.APPS.QUERYIP.dataCallback);
        });
    });
</script>
</html>", "ipIndex.html", "E:\\phpStudy\\WWW\\imos\\app\\views\\ipIndex.html");
    }
}
