<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico">

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/scss" href="../scss/login.scss">

    <meta name="robots" content="noindex, follow">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"
        nonce="ed7126c2-ed9a-4187-b50a-798f0d1af5cd"></script>
    <script defer="" referrerpolicy="origin"
        src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyTG9naW4lMjBWMyUyMiUyQyUyMnglMjIlM0EwLjMzMzc5MDc2MjUxOTkzMzIlMkMlMjJ3JTIyJTNBMTUzNiUyQyUyMmglMjIlM0E4NjQlMkMlMjJqJTIyJTNBNzQ3JTJDJTIyZSUyMiUzQTE1MzYlMkMlMjJsJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZjb2xvcmxpYi5jb20lMkZldGMlMkZsZiUyRkxvZ2luX3YzJTJGaW5kZXguaHRtbCUyMiUyQyUyMnIlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmNvbG9ybGliLmNvbSUyRiUyMiUyQyUyMmslMjIlM0EyNCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EtMTgwJTJDJTIycSUyMiUzQSU1QiU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMCUyMiUyQyUyMmNvbmZpZyUyMiUyQyU3QiUyMnNjb3BlJTIyJTNBJTIycGFnZSUyMiU3RCU1RCU3RCUyQyU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMSUyMiUyQyUyMlVBLTIzNTgxNTY4LTEzJTIyJTJDJTdCJTIyc2NvcGUlMjIlM0ElMjJwYWdlJTIyJTdEJTVEJTdEJTVEJTdE"></script>
    <script
        nonce="ed7126c2-ed9a-4187-b50a-798f0d1af5cd">(function (w, d) { !function (U, V, W, X) { U[W] = U[W] || {}; U[W].executed = []; U.zaraz = { deferred: [], listeners: [] }; U.zaraz.q = []; U.zaraz._f = function (Y) { return async function () { var Z = Array.prototype.slice.call(arguments); U.zaraz.q.push({ m: Y, a: Z }) } }; for (const $ of ["track", "set", "debug"]) U.zaraz[$] = U.zaraz._f($); U.zaraz.init = () => { var ba = V.getElementsByTagName(X)[0], bb = V.createElement(X), bc = V.getElementsByTagName("title")[0]; bc && (U[W].t = V.getElementsByTagName("title")[0].text); U[W].x = Math.random(); U[W].w = U.screen.width; U[W].h = U.screen.height; U[W].j = U.innerHeight; U[W].e = U.innerWidth; U[W].l = U.location.href; U[W].r = V.referrer; U[W].k = U.screen.colorDepth; U[W].n = V.characterSet; U[W].o = (new Date).getTimezoneOffset(); if (U.dataLayer) for (const bg of Object.entries(Object.entries(dataLayer).reduce(((bh, bi) => ({ ...bh[1], ...bi[1] })), {}))) zaraz.set(bg[0], bg[1], { scope: "page" }); U[W].q = []; for (; U.zaraz.q.length;) { const bj = U.zaraz.q.shift(); U[W].q.push(bj) } bb.defer = !0; for (const bk of [localStorage, sessionStorage]) Object.keys(bk || {}).filter((bm => bm.startsWith("_zaraz_"))).forEach((bl => { try { U[W]["z_" + bl.slice(7)] = JSON.parse(bk.getItem(bl)) } catch { U[W]["z_" + bl.slice(7)] = bk.getItem(bl) } })); bb.referrerPolicy = "origin"; bb.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(U[W]))); ba.parentNode.insertBefore(bb, ba) };["complete", "interactive"].includes(V.readyState) ? zaraz.init() : U.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
           
            <div class="wrap-login100"> 
                <form class="login100-form validate-form">
                    <span class="login100-form-logo">
                        <h2>NajarK</h2>
                    </span>
                    
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username"
                            fdprocessedid="y7c15o">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="email" placeholder="Email Address"
                            fdprocessedid="y7c15o">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" placeholder="Password"
                            fdprocessedid="qmkjsm">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" placeholder="Conferm Password"
                            fdprocessedid="qmkjsm">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" fdprocessedid="uqpzrk">
                            Register Now
                        </button>
                    </div>
                    <div class="text-center p-t-90">
                     <p>You already have an account ? <a class="txt1" href="#" id="forgot">Login Now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/animsition/js/animsition.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>

    <script src="vendor/countdowntime/countdowntime.js"></script>

    <script src="js/main.js"></script>

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer=""
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;7fdc517f0bd43a9d&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.8.0&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script>


</body>

</html>