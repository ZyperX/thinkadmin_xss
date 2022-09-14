<?php
header("HTTP/1.1 404 Not Found");
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <script>alert(document.domain)</script>
    <title>系统发生错误</title>
    <meta name="robots" content="noindex,nofollow"/>
    <style>
        /* Base */
        body {
            color: #333;
            font: 16px Verdana, "Helvetica Neue", helvetica, Arial, 'Microsoft YaHei', sans-serif;
            margin: 0;
            padding: 0 20px 20px;
        }

        h1 {
            margin: 10px 0 0;
            font-size: 28px;
            font-weight: 500;
            line-height: 32px;
        }

        h2 {
            color: #4288ce;
            font-weight: 400;
            padding: 6px 0;
            margin: 6px 0 0;
            font-size: 18px;
            border-bottom: 1px solid #eee;
        }

        h3 {
            margin: 12px;
            font-size: 16px;
            font-weight: bold;
        }

        abbr {
            cursor: help;
            text-decoration: underline;
            text-decoration-style: dotted;
        }

        a {
            color: #868686;
            cursor: pointer;
        }

        a:hover {
            text-decoration: underline;
        }

        .line-error {
            background: #f8cbcb;
        }

        .echo table {
            width: 100%;
        }

        .echo pre {
            padding: 16px;
            overflow: auto;
            font-size: 85%;
            line-height: 1.45;
            background-color: #f7f7f7;
            border: 0;
            border-radius: 3px;
            font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;
        }

        .echo pre > pre {
            padding: 0;
            margin: 0;
        }

        /* Exception Info */
        .exception {
            margin-top: 20px;
        }

        .exception .message {
            padding: 12px;
            border: 1px solid #ddd;
            border-bottom: 0 none;
            line-height: 18px;
            font-size: 16px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            font-family: Consolas, "Liberation Mono", Courier, Verdana, "微软雅黑", serif;
        }

        .exception .code {
            float: left;
            text-align: center;
            color: #fff;
            margin-right: 12px;
            padding: 16px;
            border-radius: 4px;
            background: #999;
        }

        .exception .source-code {
            padding: 6px;
            border: 1px solid #ddd;

            background: #f9f9f9;
            overflow-x: auto;

        }

        .exception .source-code pre {
            margin: 0;
        }

        .exception .source-code pre ol {
            margin: 0;
            color: #4288ce;
            display: inline-block;
            min-width: 100%;
            box-sizing: border-box;
            font-size: 14px;
            font-family: "Century Gothic", Consolas, "Liberation Mono", Courier, Verdana, serif;
            padding-left: < ? php echo (isset($ source) & & ! empty($ source)) ? parse_padding($ source): 40;
            ? > px;
        }

        .exception .source-code pre li {
            border-left: 1px solid #ddd;
            height: 18px;
            line-height: 18px;
        }

        .exception .source-code pre code {
            color: #333;
            height: 100%;
            display: inline-block;
            border-left: 1px solid #fff;
            font-size: 14px;
            font-family: Consolas, "Liberation Mono", Courier, Verdana, "微软雅黑", serif;
        }

        .exception .trace {
            padding: 6px;
            border: 1px solid #ddd;
            border-top: 0 none;
            line-height: 16px;
            font-size: 14px;
            font-family: Consolas, "Liberation Mono", Courier, Verdana, "微软雅黑", serif;
        }

        .exception .trace h2:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        .exception .trace ol {
            margin: 12px;
        }

        .exception .trace ol li {
            padding: 2px 4px;
        }

        .exception div:last-child {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        /* Exception Variables */
        .exception-var table {
            width: 100%;
            margin: 12px 0;
            box-sizing: border-box;
            table-layout: fixed;
            word-wrap: break-word;
        }

        .exception-var table caption {
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            padding: 6px 0;
        }

        .exception-var table caption small {
            font-weight: 300;
            display: inline-block;
            margin-left: 10px;
            color: #ccc;
        }

        .exception-var table tbody {
            font-size: 13px;
            font-family: Consolas, "Liberation Mono", Courier, "微软雅黑", serif;
        }

        .exception-var table td {
            padding: 0 6px;
            vertical-align: top;
            word-break: break-all;
        }

        .exception-var table td:first-child {
            width: 28%;
            font-weight: bold;
            white-space: nowrap;
        }

        .exception-var table td pre {
            margin: 0;
        }

        /* Copyright Info */
        .copyright {
            margin-top: 24px;
            padding: 12px 0;
            border-top: 1px solid #eee;
        }

        /* SPAN elements with the classes below are added by prettyprint. */
        pre.prettyprint .pln {
            color: #000
        }

        /* plain text */
        pre.prettyprint .str {
            color: #080
        }

        /* string content */
        pre.prettyprint .kwd {
            color: #008
        }

        /* a keyword */
        pre.prettyprint .com {
            color: #800
        }

        /* a comment */
        pre.prettyprint .typ {
            color: #606
        }

        /* a type name */
        pre.prettyprint .lit {
            color: #066
        }

        /* a literal value */
        /* punctuation, lisp open bracket, lisp close bracket */
        pre.prettyprint .pun, pre.prettyprint .opn, pre.prettyprint .clo {
            color: #660
        }

        pre.prettyprint .tag {
            color: #008
        }

        /* a markup tag name */
        pre.prettyprint .atn {
            color: #606
        }

        /* a markup attribute name */
        pre.prettyprint .atv {
            color: #080
        }

        /* a markup attribute value */
        pre.prettyprint .dec, pre.prettyprint .var {
            color: #606
        }

        /* a declaration; a variable name */
        pre.prettyprint .fun {
            color: red
        }

        /* a function name */
    </style>
</head>
<body>
            <div class="exception">
            <div class="message">
                <div class="info">
                    <div>
                        <h2>#0 [0]<abbr title="think\exception\HttpException">HttpException</abbr> in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/route/dispatch/Controller.php line 76">Controller.php line 76</a></h2>
                    </div>
                    <div><h1>控制器不存在:app\admin\controller\Lel</h1></div>
                </div>
            </div>
                            <div class="source-code">
                    <pre class="prettyprint lang-php"><ol start="67"><li class="line- 0-67"><code>            -&gt;setAction($this-&gt;actionName);
</code></li><li class="line- 0-68"><code>    }
</code></li><li class="line- 0-69"><code>
</code></li><li class="line- 0-70"><code>    public function exec()
</code></li><li class="line- 0-71"><code>    {
</code></li><li class="line- 0-72"><code>        try {
</code></li><li class="line- 0-73"><code>            // 实例化控制器
</code></li><li class="line- 0-74"><code>            $instance = $this-&gt;controller($this-&gt;controller);
</code></li><li class="line- 0-75"><code>        } catch (ClassNotFoundException $e) {
</code></li><li class="line- 0-76 line-error"><code>            throw new HttpException(404, 'controller not exists:' . $e-&gt;getClass());
</code></li><li class="line- 0-77"><code>        }
</code></li><li class="line- 0-78"><code>
</code></li><li class="line- 0-79"><code>        // 注册控制器中间件
</code></li><li class="line- 0-80"><code>        $this-&gt;registerControllerMiddleware($instance);
</code></li><li class="line- 0-81"><code>
</code></li><li class="line- 0-82"><code>        return $this-&gt;app-&gt;middleware-&gt;pipeline('controller')
</code></li><li class="line- 0-83"><code>            -&gt;send($this-&gt;request)
</code></li><li class="line- 0-84"><code>            -&gt;then(function () use ($instance) {
</code></li><li class="line- 0-85"><code>                // 获取当前操作名
</code></li></ol></pre>
                </div>
                        <div class="trace">
                <h2 data-expand="1">Call Stack</h2>
                <ol>
                    <li>in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/route/dispatch/Controller.php line 76">Controller.php line 76</a></li>
                                            <li>
                            at <abbr title="think\route\dispatch\Controller">Controller</abbr>->exec() in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/route/Dispatch.php line 89">Dispatch.php line 89</a>                        </li>
                                            <li>
                            at <abbr title="think\route\Dispatch">Dispatch</abbr>->run() in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Route.php line 772">Route.php line 772</a>                        </li>
                                            <li>
                            at <abbr title="think\Route">Route</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 59">Pipeline.php line 59</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/zoujingli/think-library/src/Library.php line 111">Library.php line 111</a>                        </li>
                                            <li>
                            at <abbr title="think\admin\Library">Library</abbr>->think\admin\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>))                        </li>
                                            <li>
                            at call_user_func(<em>object</em>(<abbr title="Closure">Closure</abbr>), <em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Middleware.php line 142">Middleware.php line 142</a>                        </li>
                                            <li>
                            at <abbr title="think\Middleware">Middleware</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 85">Pipeline.php line 85</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 66">Pipeline.php line 66</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->then(<em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Route.php line 773">Route.php line 773</a>                        </li>
                                            <li>
                            at <abbr title="think\Route">Route</abbr>->dispatch(<em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Http.php line 216">Http.php line 216</a>                        </li>
                                            <li>
                            at <abbr title="think\Http">Http</abbr>->dispatchToRoute(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Http.php line 206">Http.php line 206</a>                        </li>
                                            <li>
                            at <abbr title="think\Http">Http</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 59">Pipeline.php line 59</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/zoujingli/think-library/src/multiple/Multiple.php line 72">Multiple.php line 72</a>                        </li>
                                            <li>
                            at <abbr title="think\admin\multiple\Multiple">Multiple</abbr>->think\admin\multiple\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 59">Pipeline.php line 59</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 66">Pipeline.php line 66</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->then(<em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/zoujingli/think-library/src/multiple/Multiple.php line 73">Multiple.php line 73</a>                        </li>
                                            <li>
                            at <abbr title="think\admin\multiple\Multiple">Multiple</abbr>->handle(<em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>))                        </li>
                                            <li>
                            at call_user_func([<em>object</em>(<abbr title="think\admin\multiple\Multiple">Multiple</abbr>), 'handle'], <em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Middleware.php line 142">Middleware.php line 142</a>                        </li>
                                            <li>
                            at <abbr title="think\Middleware">Middleware</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 85">Pipeline.php line 85</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/middleware/LoadLangPack.php line 59">LoadLangPack.php line 59</a>                        </li>
                                            <li>
                            at <abbr title="think\middleware\LoadLangPack">LoadLangPack</abbr>->handle(<em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>))                        </li>
                                            <li>
                            at call_user_func([<em>object</em>(<abbr title="think\middleware\LoadLangPack">LoadLangPack</abbr>), 'handle'], <em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Middleware.php line 142">Middleware.php line 142</a>                        </li>
                                            <li>
                            at <abbr title="think\Middleware">Middleware</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 85">Pipeline.php line 85</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/middleware/SessionInit.php line 67">SessionInit.php line 67</a>                        </li>
                                            <li>
                            at <abbr title="think\middleware\SessionInit">SessionInit</abbr>->handle(<em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>))                        </li>
                                            <li>
                            at call_user_func([<em>object</em>(<abbr title="think\middleware\SessionInit">SessionInit</abbr>), 'handle'], <em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Middleware.php line 142">Middleware.php line 142</a>                        </li>
                                            <li>
                            at <abbr title="think\Middleware">Middleware</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 85">Pipeline.php line 85</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->think\{closure}(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Pipeline.php line 66">Pipeline.php line 66</a>                        </li>
                                            <li>
                            at <abbr title="think\Pipeline">Pipeline</abbr>->then(<em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Http.php line 207">Http.php line 207</a>                        </li>
                                            <li>
                            at <abbr title="think\Http">Http</abbr>->runWithRequest(<em>object</em>(<abbr title="think\Request">Request</abbr>)) in <a class="toggle" title="/home/service/app/webroot/vendor/topthink/framework/src/think/Http.php line 170">Http.php line 170</a>                        </li>
                                            <li>
                            at <abbr title="think\Http">Http</abbr>->run() in <a class="toggle" title="/home/service/app/webroot/vendor/zoujingli/think-library/src/service/SystemService.php line 372">SystemService.php line 372</a>                        </li>
                                            <li>
                            at <abbr title="think\admin\service\SystemService">SystemService</abbr>->doInit() in <a class="toggle" title="/home/service/app/webroot/public/index.php line 23">index.php line 23</a>                        </li>
                                    </ol>
            </div>
        </div>
    

    <div class="exception-var">
        <h2>Environment Variables</h2>
                    <table>
                                    <caption>GET Data</caption>
                    <tbody>
                                            <tr>
                            <td>raman</td>
                            <td>&lt;lol&gt;</td>
                        </tr>
                                        </tbody>
                            </table>
                    <table>
                                    <caption>POST Data<small>empty</small></caption>
                            </table>
                    <table>
                                    <caption>Files<small>empty</small></caption>
                            </table>
                    <table>
                                    <caption>Cookies</caption>
                    <tbody>
                                            <tr>
                            <td>lang</td>
                            <td>zh-cn</td>
                        </tr>
                                            <tr>
                            <td>PHPSESSID</td>
                            <td>&lt;lol&gt;</td>
                        </tr>
                                        </tbody>
                            </table>
                    <table>
                                    <caption>Session<small>empty</small></caption>
                            </table>
                    <table>
                                    <caption>Server/Request Data</caption>
                    <tbody>
                                            <tr>
                            <td>DOCUMENT_ROOT</td>
                            <td>/home/service/app/webroot/public</td>
                        </tr>
                                            <tr>
                            <td>REMOTE_ADDR</td>
                            <td>10.55.225.5</td>
                        </tr>
                                            <tr>
                            <td>REMOTE_PORT</td>
                            <td>60120</td>
                        </tr>
                                            <tr>
                            <td>SERVER_SOFTWARE</td>
                            <td>PHP 7.1.26 Development Server</td>
                        </tr>
                                            <tr>
                            <td>SERVER_PROTOCOL</td>
                            <td>HTTP/1.1</td>
                        </tr>
                                            <tr>
                            <td>SERVER_NAME</td>
                            <td>0.0.0.0</td>
                        </tr>
                                            <tr>
                            <td>SERVER_PORT</td>
                            <td>80</td>
                        </tr>
                                            <tr>
                            <td>REQUEST_URI</td>
                            <td>/admin/lel?raman=&lt;lol&gt;</td>
                        </tr>
                                            <tr>
                            <td>REQUEST_METHOD</td>
                            <td>GET</td>
                        </tr>
                                            <tr>
                            <td>SCRIPT_NAME</td>
                            <td>/index.php</td>
                        </tr>
                                            <tr>
                            <td>SCRIPT_FILENAME</td>
                            <td>/home/service/app/webroot/public/index.php</td>
                        </tr>
                                            <tr>
                            <td>PATH_INFO</td>
                            <td>/admin/lel</td>
                        </tr>
                                            <tr>
                            <td>PHP_SELF</td>
                            <td>/index.php/admin/lel</td>
                        </tr>
                                            <tr>
                            <td>QUERY_STRING</td>
                            <td>raman=&lt;lol&gt;</td>
                        </tr>
                                            <tr>
                            <td>HTTP_HOST</td>
                            <td>service-video.myoppo.com</td>
                        </tr>
                                            <tr>
                            <td>HTTP_X_FORWARDED_PROTO</td>
                            <td>https</td>
                        </tr>
                                            <tr>
                            <td>HTTP_X_PROTO</td>
                            <td>SSL</td>
                        </tr>
                                            <tr>
                            <td>CONTENT_LENGTH</td>
                            <td>5</td>
                        </tr>
                                            <tr>
                            <td>HTTP_CONTENT_LENGTH</td>
                            <td>5</td>
                        </tr>
                                            <tr>
                            <td>HTTP_COOKIE</td>
                            <td>lang=zh-cn; PHPSESSID=&lt;lol&gt;</td>
                        </tr>
                                            <tr>
                            <td>HTTP_USER_AGENT</td>
                            <td>Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0</td>
                        </tr>
                                            <tr>
                            <td>HTTP_ACCEPT</td>
                            <td>*/*</td>
                        </tr>
                                            <tr>
                            <td>HTTP_ACCEPT_LANGUAGE</td>
                            <td>en-US,en;q=0.5</td>
                        </tr>
                                            <tr>
                            <td>HTTP_ACCEPT_ENCODING</td>
                            <td>gzip, deflate</td>
                        </tr>
                                            <tr>
                            <td>HTTP_X_REQUESTED_WITH</td>
                            <td>XMLHttpRequest</td>
                        </tr>
                                            <tr>
                            <td>HTTP_REFERER</td>
                            <td>https://service-video.myoppo.com/admin/login</td>
                        </tr>
                                            <tr>
                            <td>HTTP_SEC_FETCH_DEST</td>
                            <td>empty</td>
                        </tr>
                                            <tr>
                            <td>HTTP_SEC_FETCH_MODE</td>
                            <td>cors</td>
                        </tr>
                                            <tr>
                            <td>HTTP_SEC_FETCH_SITE</td>
                            <td>same-origin</td>
                        </tr>
                                            <tr>
                            <td>HTTP_REQUEST_RECEIVE_TIME</td>
                            <td>1654255798413</td>
                        </tr>
                                            <tr>
                            <td>HTTP_X_FORWARDED_FOR</td>
                            <td>103.167.176.187</td>
                        </tr>
                                            <tr>
                            <td>HTTP_X_REAL_IP</td>
                            <td>103.167.176.187</td>
                        </tr>
                                            <tr>
                            <td>HTTP_X_USER_IP</td>
                            <td>103.167.176.187</td>
                        </tr>
                                            <tr>
                            <td>HTTP_T_REQ_TTL</td>
                            <td>300000</td>
                        </tr>
                                            <tr>
                            <td>HTTP_CONNECTION</td>
                            <td>keep-alive</td>
                        </tr>
                                            <tr>
                            <td>REQUEST_TIME_FLOAT</td>
                            <td>1654255798.4143</td>
                        </tr>
                                            <tr>
                            <td>REQUEST_TIME</td>
                            <td>1654255798</td>
                        </tr>
                                            <tr>
                            <td>argv</td>
                            <td>[
    &quot;raman=&lt;lol&gt;&quot;
]</td>
                        </tr>
                                            <tr>
                            <td>argc</td>
                            <td>1</td>
                        </tr>
                                        </tbody>
                            </table>
            </div>

    <script>
        function $(selector, node) {
            var elements;

            node = node || document;
            if (document.querySelectorAll) {
                elements = node.querySelectorAll(selector);
            } else {
                switch (selector.substr(0, 1)) {
                    case '#':
                        elements = [node.getElementById(selector.substr(1))];
                        break;
                    case '.':
                        if (document.getElementsByClassName) {
                            elements = node.getElementsByClassName(selector.substr(1));
                        } else {
                            elements = get_elements_by_class(selector.substr(1), node);
                        }
                        break;
                    default:
                        elements = node.getElementsByTagName();
                }
            }
            return elements;

            function get_elements_by_class(search_class, node, tag) {
                var elements = [], eles,
                    pattern = new RegExp('(^|\\s)' + search_class + '(\\s|$)');

                node = node || document;
                tag = tag || '*';

                eles = node.getElementsByTagName(tag);
                for (var i = 0; i < eles.length; i++) {
                    if (pattern.test(eles[i].className)) {
                        elements.push(eles[i])
                    }
                }

                return elements;
            }
        }

        $.getScript = function (src, func) {
            var script = document.createElement('script');

            script.async = 'async';
            script.src = src;
            script.onload = func || function () {
            };

            $('head')[0].appendChild(script);
        }

        ;(function () {
            var files = $('.toggle');
            var ol = $('ol', $('.prettyprint')[0]);
            var li = $('li', ol[0]);

            // 短路径和长路径变换
            for (var i = 0; i < files.length; i++) {
                files[i].ondblclick = function () {
                    var title = this.title;

                    this.title = this.innerHTML;
                    this.innerHTML = title;
                }
            }

            (function () {
                var expand = function (dom, expand) {
                    var ol = $('ol', dom.parentNode)[0];
                    expand = undefined === expand ? dom.attributes['data-expand'].value === '0' : undefined;
                    if (expand) {
                        dom.attributes['data-expand'].value = '1';
                        ol.style.display = 'none';
                        dom.innerText = 'Call Stack (展开)';
                    } else {
                        dom.attributes['data-expand'].value = '0';
                        ol.style.display = 'block';
                        dom.innerText = 'Call Stack (折叠)';
                    }
                };
                var traces = $('.trace');
                for (var i = 0; i < traces.length; i++) {
                    var h2 = $('h2', traces[i])[0];
                    expand(h2);
                    h2.onclick = function () {
                        expand(this);
                    };
                }
            })();

            $.getScript('//cdn.bootcss.com/prettify/r298/prettify.min.js', function () {
                prettyPrint();
            });
        })();
    </script>
</body>
</html>

