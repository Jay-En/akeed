<?php

$settings = require(__DIR__.'/Config/settings.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Swagger UI</title>
  <link rel="icon" type="image/png" href="public/images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="public/images/favicon-16x16.png" sizes="16x16" />
  <link href='public/css/typography.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='public/css/reset.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='public/css/screen.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='public/css/reset.css' media='print' rel='stylesheet' type='text/css'/>
  <link href='public/css/print.css' media='print' rel='stylesheet' type='text/css'/>

  <link rel="stylesheet" href="public/css/themes/theme-muted.css" />

  <script src='public/lib/jquery-1.8.0.min.js' type='text/javascript'></script>
  <script src='public/lib/jquery.slideto.min.js' type='text/javascript'></script>
  <script src='public/lib/jquery.wiggle.min.js' type='text/javascript'></script>
  <script src='public/lib/jquery.ba-bbq.min.js' type='text/javascript'></script>
  <script src='public/lib/handlebars-2.0.0.js' type='text/javascript'></script>
  <script src='public/lib/js-yaml.min.js' type='text/javascript'></script>
  <script src='public/lib/lodash.min.js' type='text/javascript'></script>
  <script src='public/lib/backbone-min.js' type='text/javascript'></script>
  <script src='public/swagger-ui.js' type='text/javascript'></script>
  <script src='public/lib/highlight.9.1.0.pack.js' type='text/javascript'></script>
  <script src='public/lib/highlight.9.1.0.pack_extended.js' type='text/javascript'></script>
  <script src='public/lib/jsoneditor.min.js' type='text/javascript'></script>
  <script src='public/lib/marked.js' type='text/javascript'></script>
  <script src='public/lib/swagger-oauth.js' type='text/javascript'></script>

  <!-- Some basic translations -->
  <!-- <script src='lang/translator.js' type='text/javascript'></script> -->
  <!-- <script src='lang/ru.js' type='text/javascript'></script> -->
  <!-- <script src='lang/en.js' type='text/javascript'></script> -->

  <script type="text/javascript">

      $(function () {
      var url = window.location.search.match(/url=([^&]+)/);
      if (url && url.length > 1) {
        url = decodeURIComponent(url[1]);
      } else {
        url = "<?php echo $settings['base_url']?>/swagger_json.php";
      }
      hljs.configure({
        highlightSizeThreshold: 5000
      });

      // Pre load translate...
      if(window.SwaggerTranslator) {
        window.SwaggerTranslator.translate();
      }
      window.swaggerUi = new SwaggerUi({
        url: url,
        dom_id: "swagger-ui-container",
        supportedSubmitMethods: ['get', 'post', 'put', 'delete', 'patch'],
        onComplete: function(swaggerApi, swaggerUi){
          if(typeof initOAuth == "function") {
            initOAuth({
              clientId: "your-client-id",
              clientSecret: "your-client-secret-if-required",
              realm: "your-realms",
              appName: "your-app-name",
              scopeSeparator: ",",
              additionalQueryStringParams: {}
            });
          }

          if(window.SwaggerTranslator) {
            window.SwaggerTranslator.translate();
          }
        },
        onFailure: function(data) {
          log("Unable to Load SwaggerUI");
        },
        docExpansion: "none",
        jsonEditor: false,
        defaultModelRendering: 'schema',
        showRequestHeaders: false
      });

      window.swaggerUi.load();

      function log() {
        if ('console' in window) {
          console.log.apply(console, arguments);
        }
      }
  });
  </script>
</head>

<body class="swagger-section">
<div id='header'>
  <div class="swagger-ui-wrap">
    <a id="logo" href="http://swagger.io"><img class="logo__img" alt="swagger" height="30" width="30" src="public/images/logo_small.png" /><span class="logo__title">swagger</span></a>
    <form id='api_selector'>
      <div class='input'><input placeholder="http://example.com/api" id="input_baseUrl" name="baseUrl" type="text"/></div>
      <div id='auth_container'></div>
      <div class='input'><a id="explore" class="header__btn" href="#" data-sw-translate>Explore</a></div>
    </form>
  </div>
</div>

<div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
<div id="swagger-ui-container" class="swagger-ui-wrap"></div>
</body>
</html>
