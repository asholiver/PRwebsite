        <footer>
            <div class="c-section">

                <div class="l-container">
                    <ul class="l-grid l-grid--align-middle l-grid--align-center">
                        <li class="l-grid__item l-grid__item--4-col l-grid__item--12-col-phone">
                            <a class="c-social" href="http://www.facebook.com/farewelltransmissionPR">
                                <svg class="c-social__icon">
                                <use xlink:href="#facebook"></use>
                                </svg>
                            </a>
                        </li>

                        <li class="l-grid__item l-grid__item--4-col l-grid__item--12-col-phone">

                            <div class="c-twitter-feed">
                                <a class="twitter-timeline" data-width="300" data-height="300" data-theme="light" href="https://twitter.com/FRWLLTRNSMSSNPR">Tweets by FRWLLTRNSMSSNPR</a>

                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>

                        </li>

                        <li class="l-grid__item l-grid__item--4-col l-grid__item--12-col-phone">
                            <a class="c-social" href="mailto:info@farewelltransmissionpr.co.uk">
                                <svg class="c-social__icon">
                                    <use xlink:href="#email"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="c-copyright">
                <address class="c-address">
                    Studio 7, Acklam Workspace,
                    10 Acklam Rd,
                    London,
                    W10 5QZ.
                </address>

                <p>&copy; <?php
                  $fromYear = 2016;
                  $thisYear = (int)date('Y');
                  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> - Farewell Transmission PR.</p>

            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
