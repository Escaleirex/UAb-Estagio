<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(123,152,178, .2);
            color: rgba(123,152,178, 1);
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(123,152,178, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }
        .further h2:first-of-type {
            padding-top: 0;
        }
        .svg-stroke {
            fill: none;
            stroke: #000;
            stroke-width: 32px;
        }
        footer {
            background-color: rgba(123,152,178, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <a href="https://uab.pt/" target="_blank">
                    <img src="https://portal.uab.pt/wp-content/uploads/2020/09/logo_UAb_preto-300x85.png" width="300" height="80">
                </a>
            </li>
            <li class="menu-toggle">
                <button id="menuToggle">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="#">Home</a></li>
            <li class="menu-item hidden"><a href="https://codeigniter.com/user_guide/" target="_blank">Documentação</a>
            </li>
            <li class="menu-item hidden"><a href="https://forum.codeigniter.com/" target="_blank">Comunidade</a></li>
            <li class="menu-item hidden"><a
                    href="https://codeigniter.com/contribute" target="_blank">Contribuir</a>
            </li>
        </ul>
    </div>

    <div class="heroe">

        <h1>Bem Vindo ao CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>

        <h2>Uma framework pequena com funcionalidades poderosas</h2>

    </div>

</header>

<!-- CONTENT -->

<section>

    <h1>Lorem Ipsum</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod in lacus id tincidunt. Proin diam neque, dapibus vitae justo eget, maximus porttitor turpis. Maecenas vulputate cursus egestas. Aliquam aliquet urna a ante scelerisque scelerisque. Mauris sapien metus, consequat at posuere ac, vulputate sed metus. Pellentesque sit amet lorem finibus, ultrices quam at, commodo massa. Suspendisse consectetur nisi urna, et pharetra purus viverra quis. Nullam velit neque, feugiat et interdum quis, bibendum at eros. Ut blandit arcu varius, condimentum nulla at, aliquam quam. Ut euismod, est ac eleifend porttitor, nibh dolor tempus lectus, nec porttitor ligula massa nec tortor. Nulla et dapibus velit, a pellentesque elit. Suspendisse eu mi mollis, semper mauris a, pellentesque felis. Maecenas lacinia, nunc a feugiat rhoncus, enim eros congue odio, eget malesuada risus lacus in erat. Donec sodales scelerisque nibh.</p>
    <p>Ut nec lacus cursus, consectetur purus vitae, mattis sem. Sed mollis interdum nisi, at blandit sem tempor in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque eget libero ex. Suspendisse a velit dapibus, porta tellus quis, sollicitudin orci. Nunc quis malesuada urna. Aenean tincidunt mi eu fringilla aliquet. Curabitur tristique ac libero quis blandit. Nulla eu rhoncus arcu. In eu dignissim diam, aliquam condimentum turpis. Nulla at tempor nisl. Nullam at odio eget augue rhoncus ullamcorper. Curabitur pretium tincidunt velit nec posuere. Nulla facilisi. Sed eu enim id diam finibus posuere. Phasellus sit amet mauris pellentesque lacus bibendum volutpat non iaculis mauris.</p>
    <p>Vestibulum eget metus ac magna laoreet laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium scelerisque leo, et mollis mi tincidunt hendrerit. Cras ante justo, ornare sit amet justo vitae, viverra ornare nisi. Donec congue venenatis faucibus. Nunc lorem nisi, tempor at ipsum in, imperdiet iaculis lorem. Cras scelerisque massa magna, et fringilla ligula luctus eget. Etiam et pretium mi. Quisque molestie est eget mattis mattis. Nam egestas, erat quis tincidunt dictum, nisi velit pretium massa, nec vulputate tellus sem a erat. Vestibulum ut nisl sit amet nunc euismod sodales at blandit odio.</p>
    <p>Morbi a eleifend purus, ut egestas orci. Vestibulum rutrum dictum arcu, eget finibus nibh bibendum eget. Cras gravida est et eros lobortis, eu feugiat nisi porta. Phasellus vitae dolor pharetra, tincidunt ipsum at, sagittis risus. Vestibulum porttitor placerat diam sed finibus. Nullam ultricies vestibulum lacus at bibendum. Integer ultricies nulla in mauris posuere commodo. Cras sit amet pulvinar ante, maximus finibus tortor. Integer odio risus, hendrerit at quam a, mollis commodo arcu. Morbi et neque tempor, vestibulum odio ac, aliquet mauris. Donec iaculis odio vel arcu ornare dapibus.</p>
    <p>Donec placerat est vel mi scelerisque, vitae lobortis turpis interdum. Fusce sed ligula suscipit, rhoncus elit vitae, egestas nibh. Proin semper, est interdum rutrum feugiat, justo elit imperdiet dui, sed semper libero ex vel nibh. Phasellus eget elementum orci. Etiam hendrerit lacinia sem, quis sagittis tellus tincidunt sed. Cras nec libero nibh. Sed ullamcorper augue bibendum urna cursus eleifend.</p>

</section>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="environment">

        <p>Página Renderizada em {elapsed_time} segundos e usou {memory_usage} MB de memória.</p>
        
    </div>

    <div class="copyrights">

        <p>&copy; <?= date('Y') ?> Universidade Aberta</p>

    </div>

</footer>

<!-- SCRIPTS -->

<script {csp-script-nonce}>
    document.getElementById("menuToggle").addEventListener('click', toggleMenu);
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
