<html>
<head>
<Title>Say Hello</Title>

<style type="text/css">
body { background-color: #fff; border-top: solid 10px #000;
    color: #333; font-size: .85em; margin: 20; padding: 20;
    font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
}
h1, h2, h3,{ color: #000; margin-bottom: 0; padding-bottom: 0; }
h1 { font-size: 2em; }
h2 { font-size: 1.75em; }
h3 { font-size: 1.2em; }
table { margin-top: 0.75em; }
th { font-size: 1.2em; text-align: left; border: none 0px; padding-left: 0; }
td { padding: 0.25em 2em 0.25em 0em; border: 0 none; }
</style>

</head>
<!-- Copy this script into your html file to enable Application Insights -->
<script type="text/javascript">
    window.appInsights={queue:[],applicationInsightsId:null,accountId:null,appUserId:null,configUrl:null,start:function(n){function u(n,t){n[t]=function(){var i=arguments;n.queue.push(function(){n[t].apply(n,i)})}}function f(n){var t=document.createElement("script");return t.type="text/javascript",t.src=n,t.async=!0,t}function r(){i.appendChild(f("//az416426.vo.msecnd.net/scripts/ai.0.js"))}var i,t;this.applicationInsightsId=n;u(this,"logEvent");u(this,"logPageView");i=document.getElementsByTagName("script")[0].parentNode;this.configUrl===null?r():(t=f(this.configUrl),t.onload=r,t.onerror=r,i.appendChild(t));this.start=function(){}}};

    appInsights.start("37c3db8e-1251-4db0-8ee0-67dd959b4ac7");
    appInsights.logPageView();
</script>
<body>
<h1>Say Hello!</h1>
<p>Fill in your name, then click <strong>Submit</strong> to Say Hello.</p>
<form method="post" action="index.php" enctype="multipart/form-data" >
      Name:  <input type="text" name="name" id="name"/></br></br>
      <input type="submit" name="submit" value="Submit" />
</form>
 
<?php

if(!empty($_POST)) {
    $name = $_POST['name'];
    echo "<h2>".$name." says, Hello there;
  }
?>
</body>
</html>
