<!-- events -->
<section id="eventsSection" class="customSection">
    <div class="container-fluid p-0">
        <!-- 
			Please note, that you can apply .m--global-blending-active to .fnc-slider 
			to enable blend-mode for all background-images or apply .m--blend-bg-active
			to some specific slides (.fnc-slide). It's disabled by default in this demo,
			because it requires specific images, where more than 50% of bg is transparent or monotone
			-->
        <div class="demo-cont">
            <!-- slider start -->
            <div class="fnc-slider example-slider">
                <div class="fnc-slider__slides">
                    <!-- slide start -->
                    <div class="fnc-slide m--blend-green m--active-slide">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner"></div>
                            </div>
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                    <div class="fnc-slide__heading-line">
                                        <span></span>
                                    </div>
                                    <div class="fnc-slide__heading-line">
                                        <span></span>
                                    </div>
                                </h2>
                                <button type="button" class="fnc-slide__action-btn">
                                    Credits
                                    <span data-text="Credits">Credits</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                    <!-- slide start -->
                    <div class="fnc-slide m--blend-dark">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner"></div>
                            </div>
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                    <div class="fnc-slide__heading-line">
                                        <span>Captain</span>
                                    </div>
                                    <div class="fnc-slide__heading-line">
                                        <span>America</span>
                                    </div>
                                </h2>
                                <button type="button" class="fnc-slide__action-btn">
                                    Credits
                                    <span data-text="Credits">Credits</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                    <!-- slide start -->
                    <div class="fnc-slide m--blend-red">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner"></div>
                            </div>
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                    <div class="fnc-slide__heading-line">
                                        <span>Iron</span>
                                    </div>
                                    <div class="fnc-slide__heading-line">
                                        <span>Man</span>
                                    </div>
                                </h2>
                                <button type="button" class="fnc-slide__action-btn">
                                    Credits
                                    <span data-text="Credits">Credits</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                    <!-- slide start -->
                    <div class="fnc-slide m--blend-blue">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner"></div>
                            </div>
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                    <div class="fnc-slide__heading-line">
                                        <span>Thor</span>
                                    </div>
                                    <div class="fnc-slide__heading-line">
                                        <span>Just Thor</span>
                                    </div>
                                </h2>
                                <button type="button" class="fnc-slide__action-btn">
                                    Credits
                                    <span data-text="Credits">Credits</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                </div>
                <nav class="fnc-nav">
                    <div class="fnc-nav__bgs">
                        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                        <div class="fnc-nav__bg m--navbg-dark"></div>
                        <div class="fnc-nav__bg m--navbg-red"></div>
                        <div class="fnc-nav__bg m--navbg-blue"></div>
                    </div>
                    <div class="fnc-nav__controls">
                        <button class="fnc-nav__control">
                            Black Widow
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            Captain America
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            Iron Man
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            Thor
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                    </div>
                </nav>
            </div>
            <!-- slider end -->
            <div class="demo-cont__credits">
                <div class="demo-cont__credits-close"></div>
                <h2 class="demo-cont__credits-heading">Made by</h2>
                <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="demo-cont__credits-img" />
                <h3 class="demo-cont__credits-name">Nikolay Talanov</h3>
                <a href="https://codepen.io/suez/" target="_blank" class="demo-cont__credits-link">My codepen</a>
                <a href="https://twitter.com/NikolayTalanov" target="_blank" class="demo-cont__credits-link">My twitter</a>
                <h2 class="demo-cont__credits-heading">Based on</h2>
                <a href="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" target="_blank" class="demo-cont__credits-link">Concept by Kreativa Studio</a>
                <h4 class="demo-cont__credits-blend">Global Blend Mode</h4>
                <div class="colorful-switch">
                    <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
                    <label class="colorful-switch__label" for="colorful-switch-cb">
                        <span class="colorful-switch__bg"></span>
                        <span class="colorful-switch__dot"></span>
                        <span class="colorful-switch__on">
                            <span class="colorful-switch__on__inner"></span>
                        </span>
                        <span class="colorful-switch__off"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</section>