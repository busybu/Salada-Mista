<html lang="en">

<head>
  <title>Login V1</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../img/icon_pagina.png">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico">

  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <meta name="robots" content="noindex, follow">
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js" nonce="e5bbdc82-18c7-4553-a407-9c451df90dd1"></script>
  <script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyTG9naW4lMjBWMSUyMiUyQyUyMnglMjIlM0EwLjU2NzcxMTMyNzkwNzM5MDklMkMlMjJ3JTIyJTNBMTQ0MCUyQyUyMmglMjIlM0E5MDAlMkMlMjJqJTIyJTNBNzAwJTJDJTIyZSUyMiUzQTE0NDAlMkMlMjJsJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZjb2xvcmxpYi5jb20lMkZldGMlMkZsZiUyRkxvZ2luX3YxJTJGaW5kZXguaHRtbCUyMiUyQyUyMnIlMjIlM0ElMjIlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBMTgwJTJDJTIycSUyMiUzQSU1QiU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMCUyMiUyQyUyMmNvbmZpZyUyMiUyQyU3QiUyMnNjb3BlJTIyJTNBJTIycGFnZSUyMiU3RCU1RCU3RCUyQyU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMSUyMiUyQyUyMlVBLTIzNTgxNTY4LTEzJTIyJTJDJTdCJTIyc2NvcGUlMjIlM0ElMjJwYWdlJTIyJTdEJTVEJTdEJTVEJTdE"></script>
  <script nonce="e5bbdc82-18c7-4553-a407-9c451df90dd1">
    (function(w, d) {
      ! function(cM, cN, cO, cP) {
        cM.zarazData = cM.zarazData || {};
        cM.zarazData.executed = [];
        cM.zaraz = {
          deferred: [],
          listeners: []
        };
        cM.zaraz.q = [];
        cM.zaraz._f = function(cQ) {
          return function() {
            var cR = Array.prototype.slice.call(arguments);
            cM.zaraz.q.push({
              m: cQ,
              a: cR
            })
          }
        };
        for (const cS of ["track", "set", "debug"]) cM.zaraz[cS] = cM.zaraz._f(cS);
        cM.zaraz.init = () => {
          var cT = cN.getElementsByTagName(cP)[0],
            cU = cN.createElement(cP),
            cV = cN.getElementsByTagName("title")[0];
          cV && (cM.zarazData.t = cN.getElementsByTagName("title")[0].text);
          cM.zarazData.x = Math.random();
          cM.zarazData.w = cM.screen.width;
          cM.zarazData.h = cM.screen.height;
          cM.zarazData.j = cM.innerHeight;
          cM.zarazData.e = cM.innerWidth;
          cM.zarazData.l = cM.location.href;
          cM.zarazData.r = cN.referrer;
          cM.zarazData.k = cM.screen.colorDepth;
          cM.zarazData.n = cN.characterSet;
          cM.zarazData.o = (new Date).getTimezoneOffset();
          if (cM.dataLayer)
            for (const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_, da) => ({
                ...c_[1],
                ...da[1]
              }))))) zaraz.set(cZ[0], cZ[1], {
              scope: "page"
            });
          cM.zarazData.q = [];
          for (; cM.zaraz.q.length;) {
            const db = cM.zaraz.q.shift();
            cM.zarazData.q.push(db)
          }
          cU.defer = !0;
          for (const dc of [localStorage, sessionStorage]) Object.keys(dc || {}).filter((de => de.startsWith("_zaraz_"))).forEach((dd => {
            try {
              cM.zarazData["z_" + dd.slice(7)] = JSON.parse(dc.getItem(dd))
            } catch {
              cM.zarazData["z_" + dd.slice(7)] = dc.getItem(dd)
            }
          }));
          cU.referrerPolicy = "origin";
          cU.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));
          cT.parentNode.insertBefore(cU, cT)
        };
        ["complete", "interactive"].includes(cN.readyState) ? zaraz.init() : cM.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, 0, "script");
    })(window, document);
  </script>
</head>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100" style="background-color: #111!important;">
        <div class="login100-pic js-tilt" data-tilt="">
          <img src="../img/logo.png" alt="IMG">
        </div>
        <form action="form.php" class="login100-form validate-form" method="POST">
          <span class="login100-form-title" style="font-family: 'Poppins', sans-serif; color: white">
            Login
          </span>
          <div class="wrap-input100 validate-input" data-validate="Valid email
              is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email" style="font-family: 'Poppins', sans-serif;">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <img src="https://www.bwimg.com.br/atacadaodoscopos/template/1623156937_profile.png" width="25px" alt="user">
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Password is
              required">
            <input class="input100" type="password" name="senha" placeholder="Password" style="font-family: 'Poppins', sans-serif;">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Semi-protection-shackle-no-text.svg/2048px-Semi-protection-shackle-no-text.svg.png" alt="pass" width="24px">
            </span>
          </div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" style="font-family: 'Poppins', sans-serif;" name="Login">
              Login
            </button>
          </div>
          <div class="text-center p-t-136">
            <p class="txt2" href="#">
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>

    <script async=""
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>

</script>
    <script src="js/main.js"></script>
    <script defer=""
      src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
      integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
      data-cf-beacon="{&quot;rayId&quot;:&quot;76fc668c58cdd082&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.11.3&quot;,&quot;si&quot;:100}"
      crossorigin="anonymous"></script>


</body>

</html>