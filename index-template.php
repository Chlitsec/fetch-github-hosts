<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Github Hosts</title>
    <style>:root{--sans-font:-apple-system,BlinkMacSystemFont,"Avenir Next",Avenir,"Nimbus Sans L",Roboto,Noto,"Segoe UI",Arial,Helvetica,"Helvetica Neue",sans-serif;--mono-font:Consolas,Menlo,Monaco,"Andale Mono","Ubuntu Mono",monospace;--bg:#fff;--accent-bg:#f5f7ff;--text:#212121;--text-light:#585858;--border:#d8dae1;--accent:#0d47a1;--code:#d81b60;--preformatted:#444;--marked:#ffdd33;--disabled:#efefef}@media (prefers-color-scheme:dark){:root{--bg:#212121;--accent-bg:#2b2b2b;--text:#dcdcdc;--text-light:#ababab;--border:#666;--accent:#ffb300;--code:#f06292;--preformatted:#ccc;--disabled:#111}img,video{opacity:.8}}html{font-family:var(--sans-font);scroll-behavior:smooth}body{color:var(--text);background:var(--bg);font-size:1.15rem;line-height:1.5;display:grid;grid-template-columns:1fr min(45rem,90%) 1fr;margin:0}body>*{grid-column:2}body>header{background:var(--accent-bg);border-bottom:1px solid var(--border);text-align:center;padding:0 .5rem 2rem .5rem;grid-column:1/-1;box-sizing:border-box}body>header h1{max-width:1200px;margin:1rem auto}body>header p{max-width:40rem;margin:1rem auto}main{padding-top:1.5rem}body>footer{margin-top:4rem;padding:2rem 1rem 1.5rem 1rem;color:var(--text-light);font-size:.9rem;text-align:center;border-top:1px solid var(--border)}h1{font-size:3rem}h2{font-size:2.6rem;margin-top:3rem}h3{font-size:2rem;margin-top:3rem}h4{font-size:1.44rem}h5{font-size:1.15rem}h6{font-size:.96rem}h1,h2,h3{line-height:1.1}@media only screen and (max-width:720px){h1{font-size:2.5rem}h2{font-size:2.1rem}h3{font-size:1.75rem}h4{font-size:1.25rem}}a,a:visited{color:var(--accent)}a:hover{text-decoration:none}[role=button],button,input[type=button],input[type=reset],input[type=submit]{border:none;border-radius:5px;background:var(--accent);font-size:1rem;color:var(--bg);padding:.7rem .9rem;margin:.5rem 0}[role=button][aria-disabled=true],button[disabled],input[type=button][disabled],input[type=checkbox][disabled],input[type=radio][disabled],input[type=reset][disabled],input[type=submit][disabled],select[disabled]{opacity:.5;cursor:not-allowed}input:disabled,select:disabled,textarea:disabled{cursor:not-allowed;background-color:var(--disabled)}input[type=range]{padding:0}abbr{cursor:help}[role=button]:focus,[role=button]:not([aria-disabled=true]):hover,button:enabled:hover,button:focus,input[type=button]:enabled:hover,input[type=button]:focus,input[type=reset]:enabled:hover,input[type=reset]:focus,input[type=submit]:enabled:hover,input[type=submit]:focus{filter:brightness(1.4);cursor:pointer}header>nav{font-size:1rem;line-height:2;padding:1rem 0 0 0}header>nav ol,header>nav ul{align-content:space-around;align-items:center;display:flex;flex-direction:row;justify-content:center;list-style-type:none;margin:0;padding:0}header>nav ol li,header>nav ul li{display:inline-block}header>nav a,header>nav a:visited{margin:0 1rem 1rem 0;border:1px solid var(--border);border-radius:5px;color:var(--text);display:inline-block;padding:.1rem 1rem;text-decoration:none}header>nav a:hover{color:var(--accent);border-color:var(--accent)}header>nav a:last-child{margin-right:0}@media only screen and (max-width:720px){header>nav a{border:none;padding:0;color:var(--accent);text-decoration:underline;line-height:1}}aside{width:30%;padding:0 15px;margin-left:15px;float:right;background:var(--accent-bg);border:1px solid var(--border);border-radius:5px}article{border:1px solid var(--border);padding:1rem;border-radius:5px}article h2:first-child,section h2:first-child{margin-top:1rem}section{border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:2rem 1rem;margin:3rem 0}details{background:var(--accent-bg);border:1px solid var(--border);border-radius:5px;margin-bottom:1rem}summary{cursor:pointer;font-weight:700;padding:.6rem 1rem}details[open]{padding:.6rem 1rem .75rem 1rem}details[open] summary+*{margin-top:0}details[open] summary{margin-bottom:.5rem;padding:0}details[open]>:last-child{margin-bottom:0}table{border-collapse:collapse;display:block;margin:1.5rem 0;overflow:auto;width:100%}td,th{border:1px solid var(--border);text-align:left;padding:.5rem}th{background:var(--accent-bg);font-weight:700}tr:nth-child(even){background:var(--accent-bg)}table caption{font-weight:700;margin-bottom:.5rem}input,select,textarea{font-size:inherit;font-family:inherit;padding:.5rem;margin-bottom:.5rem;color:var(--text);background:var(--bg);border:1px solid var(--border);border-radius:5px;box-shadow:none;box-sizing:border-box;width:60%;-moz-appearance:none;-webkit-appearance:none;appearance:none}select{background-image:linear-gradient(45deg,transparent 49%,var(--text) 51%),linear-gradient(135deg,var(--text) 51%,transparent 49%);background-position:calc(100% - 20px),calc(100% - 15px);background-size:5px 5px,5px 5px;background-repeat:no-repeat}select[multiple]{background-image:none!important}input[type=checkbox],input[type=radio]{vertical-align:bottom;position:relative}input[type=radio]{border-radius:100%}input[type=checkbox]:checked,input[type=radio]:checked{background:var(--accent)}input[type=checkbox]:checked::after{content:" ";width:.1em;height:.25em;border-radius:0;position:absolute;top:.05em;left:.18em;background:0 0;border-right:solid var(--bg) .08em;border-bottom:solid var(--bg) .08em;font-size:1.8em;transform:rotate(45deg)}input[type=radio]:checked::after{content:" ";width:.25em;height:.25em;border-radius:100%;position:absolute;top:.125em;background:var(--bg);left:.125em;font-size:32px}textarea{width:80%}@media only screen and (max-width:720px){input,select,textarea{width:100%}}input[type=checkbox],input[type=radio]{width:auto}input[type=file]{border:0}hr{color:var(--border);border-top:1px;margin:1rem auto}mark{padding:2px 5px;border-radius:4px;background:var(--marked)}main img,main video{max-width:100%;height:auto;border-radius:5px}figure{margin:0;text-align:center}figcaption{font-size:.9rem;color:var(--text-light);margin-bottom:1rem}blockquote{margin:2rem 0 2rem 2rem;padding:.4rem .8rem;border-left:.35rem solid var(--accent);color:var(--text-light);font-style:italic}cite{font-size:.9rem;color:var(--text-light);font-style:normal}code,kbd,pre,pre span,samp{font-family:var(--mono-font);color:var(--code)}kbd{color:var(--preformatted);border:1px solid var(--preformatted);border-bottom:3px solid var(--preformatted);border-radius:5px;padding:.1rem .4rem}pre{padding:1rem 1.4rem;max-width:100%;overflow:auto;color:var(--preformatted);background:var(--accent-bg);border:1px solid var(--border);border-radius:5px}pre code{color:var(--preformatted);background:0 0;margin:0;padding:0}</style>
</head>
<body>
    <h2 id="">介绍</h2>
    <p><code>fetch-github-hosts</code>是主要为解决研究及学习人员访问<code>Github</code>过慢或其他问题而提供的免费的<code>Github hosts</code>同步服务。</p>
    <p>本项目部分参考于 <a target="_blank" href="https://github.com/521xueweihan/GitHub520">Github520</a> ，
        但与之不同的是前者是通过<code>ipaddress.com</code>获取<code>github.com</code>的<code>hosts</code>，
        而此项目是通过部署本身的服务器来获取<code>github.com</code>的<code>hosts</code>，所以在IP节点上会存在一定的差异。</p>
    <p>最近获取时间：
        <span style="color:green">
            <!--time-->
        </span>
        <span>&nbsp;</span>
        [<a href="/hosts.txt" target="_blank">hosts.txt</a>]
        [<a href="/hosts.json" target="_blank">hosts.json</a>]
    </p>
    <h2 id="-1">使用方法</h2>
    <h3 id="-2">手动</h3>
    <h4 id="hosts">添加hosts</h4>
    <p>访问 <a href="https://hosts.gitcdn.top/hosts.txt">https://hosts.gitcdn.top/hosts.txt</a> ，
        将其全部内容粘贴到你的hosts文件中，即可。</p>
    <ul>
        <li><code>Linux / MacOS</code> hosts路径：<code>/etc/hosts</code></li>
        <li><code>Windows</code> hosts路径：<code>C:\Windows\System32\drivers\etc\hosts</code></li>
    </ul>
    <h4 id="-3">刷新生效</h4>
    <ul>
        <li><code>Linux</code>: <code>/etc/init.d/network restart</code></li>
        <li><code>Windows</code>: <code>ipconfig /flushdns</code></li>
        <li><code>Macos</code>: <code>sudo killall -HUP mDNSResponder</code></li>
    </ul>
    <h3 id="unixlinux">Unix/Linux 一键使用</h3>
    <pre><code class="shell language-shell">sed -i "/# fetch-github-hosts begin/Q" /etc/hosts &amp;&amp; curl https://hosts.gitcdn.top/hosts.txt &gt;&gt; /etc/hosts
</code></pre>
    <blockquote>
        <p>提示：可以设置crontab定时任务定时获取更新即可，解放双手！</p>
    </blockquote>
    <h3 id="chrome">Chrome</h3>
    <p>使用 <a href="https://github.com/gauseen/faster-hosts" target="_blank">FasterHosts</a> 插件，若访问速度过慢可以直接使用
        <a href="https://gitcdn.top/https://github.com/gauseen/faster-hosts/archive/refs/heads/master.zip">点击此处</a> 来进行下载。</p>
    <p>下载完成之后解压压缩包，Chrome地址栏输入<code>chrome://extensions/</code>回车进入，勾选<code>开发者模式</code>，选择<code>加载已解压的扩展程序</code>，
        选择刚才的解压目录即可。</p>
    <h3 id="windowsmacos">Windows /MacOS 及其他桌面端</h3>
    <p>使用 <a href="https://swh.app/" target="_blank">SwitchHosts</a> 桌面端应用，安装添加新规则：</p>
    <ul>
        <li><code>Title</code>: 任意</li>
        <li><code>Type</code>: <code>Remote</code></li>
        <li><code>Url</code>: <code>https://hosts.gitcdn.top/hosts.txt</code></li>
        <li><code>Auto refresh</code>: <code>1 hour</code></li>
    </ul>
    <h2 id="-4">私有部署</h2>
    <p>下载本仓库的代码：<a href="https://gitcdn.top/https://github.com/Licoy/fetch-github-hosts/archive/refs/heads/main.zip">fetch-github-hosts.zip</a> ，
        部署到任意一个含有PHP环境的服务器即可，部署完成之后可以计划任务脚本定时更新hosts：</p>
    <pre><code class="shell language-shell">cd /wwwroot/fetch-github-hosts #此处更换为你部署的项目路径
php fetch_hosts.php
</code></pre>
    <blockquote>
        <p>注意：必须部署到非大陆的服务器节点！</p>
    </blockquote>
    <h3 id="-5">开源协议</h3>
    <p><a href="https://github.com/Licoy/fetch-github-hosts/blob/main/LICENSE">GPL 3.0</a></p>
</body>
</html>
