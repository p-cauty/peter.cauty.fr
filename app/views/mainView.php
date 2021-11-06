<?php

use PitouFW\Core\Alert;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Peter Cauty - Développeur Web & Mobile Freelance</title>
        <link href="<?= CSS ?>styles.css" rel="stylesheet" />
        <link href="<?= CSS ?>custom.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="<?= IMG ?>/p2.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                <?= Alert::handle() ?>
                <?php require_once @$appView; ?>
                </main>
            </div>
            <div id="layoutDefault_footer">
                <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="footer-brand">Peter Cauty</div>
                                <div class="mb-3">Développeur Web & Mobile</div>
                                <div class="icon-list-social mb-5">
                                    <a class="icon-list-social-link" href="https://www.linkedin.com/in/peter-cauty-1661ab59/">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a class="icon-list-social-link" href="https://github.com/phpitou">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <a class="icon-list-social-link" href="https://twitter.com/p_cauty">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="icon-list-social-link" href="https://www.instagram.com/pitou.skip">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5" />
                        <div class="row align-items-center">
                            <div class="col-md-6 small">Copyright &copy; Peter Cauty 2020<?= date('Y') > 2020 ? ' - ' . date('Y') : '' ?></div>
                            <div class="col-md-6 text-md-right small">
                                MONSIEUR PETER CAUTY - SIREN 845 088 236
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= ASSETS ?>js/scripts.js"></script>
    </body>
</html>
