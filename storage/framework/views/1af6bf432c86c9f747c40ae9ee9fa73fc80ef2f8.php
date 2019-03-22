<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">
                Finisa<span>2Z</span>
            </a>
            <p>Pokličite nas <b>+386 (01) 546 84 00</b></p>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/about">O nas</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Zavarovanja <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/insurance_car">Avtomobilsko zavarovanje</a></li>
                        <li><a href="/insurance_private">Osebna zavarovanja</a></li>
                        <li><a href="/insurance_company">Podjetniška zavarovanja</a></li>
                        <li><a href="/insurance_state">Premoženjska zavarovanja</a></li>
                        <li><a href="/leasing">Leasing</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Za stranke <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/paper">Obrazci in dokumenti</a></li>
                        <li><a href="/reporting_damage">Prijava škode</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/advice">Nasveti</a>
                </li>
                <li>
                    <a href="/sendemail">Kontakt</a>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </li>
                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>