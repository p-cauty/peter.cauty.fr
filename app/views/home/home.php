<?php

use PitouFW\Entity\Project;

?>
<header class="page-header page-header-light bg-white">
    <div class="page-header-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 text-center">
                    <img class="mb-4 rounded-pill" src="<?= IMG ?>avatar.jpg" style="width: 10rem;" />
                    <h1 class="page-header-title">Peter Cauty</h1>
                    <p class="page-header-text">
                        Autodidacte de <?= floor((time() - 784558200) / 31557600) ?> ans, je
                        cumule <?= date('Y') - (1994 + 13) ?> ans d'expérience dans le
                        développement Web et Mobile. Je travaille en Freelance depuis Janvier 2019.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<section class="bg-light py-10">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="icon-stack icon-stack-xl bg-red text-white mb-4"><i data-feather="code"></i></div>
                <h3>Backends & API</h3>
                <p class="mb-0">Grâce à mon expertise de PHP, MySQL et du système de cache Redis</p>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="icon-stack icon-stack-xl bg-yellow text-white mb-4"><i data-feather="layout"></i></div>
                <h3>Intégration de maquettes</h3>
                <p class="mb-0">En "pixel perfect" grâce à ma maîtrise de HTML5, CSS3 et JavaScript</p>
            </div>
            <div class="col-lg-4">
                <div class="icon-stack icon-stack-xl bg-blue text-white mb-4"><i data-feather="smartphone"></i></div>
                <h3>Apps iOS & Android</h3>
                <p class="mb-0">Avec une seule code base grâce au Framework "React Native"</p>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<section class="bg-white py-10">
    <div class="container">
        <div class="card-columns card-columns-portfolio">
            <?php $i = 1; foreach ($projects as $project): ?>
                <?php /** @var Project $project */ ?>
                <a class="card card-portfolio" href="<?= $project->getUrl() ?>" target="_blank" rel="noopener">
                    <img class="card-img-top border" src="<?= $project->getImage() ?>" alt="" />
                    <div class="card-body flex-column d-none d-lg-flex">
                        <div class="card-title"><?= $project->getName() ?></div>
                        <div class="card-text text-gray-700"><?= nl2br($project->getDescr()) ?></div>
                    </div>
                </a>
                <?php if ($i % 3 === 0): ?>
        </div>
        <div class="card-columns card-columns-portfolio">
                <?php endif ?>
            <?php $i++; endforeach; ?>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
<section class="bg-light py-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Contactez-moi !</h2>
                <p class="lead mb-4">
                    Vous avez un projet que vous souhaitez réaliser ? Par exemple un site vitrine, une plateforme de
                    gestion ou encore une application mobile pour votre entreprise ? Alors envoyez-moi vite un message
                    via les canaux suivants :
                </p>
                <div class="row mb-5">
                    <div class="col">
                        <a href="https://twitter.com/p_cauty" target="_blank" rel="noopener">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-stack icon-stack-lg bg-twitter text-white mb-3">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="small">
                                        @p_cauty
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://www.linkedin.com/in/peter-cauty-1661ab59/" target="_blank" rel="noopener">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-stack icon-stack-lg bg-linkedin text-white mb-3">
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                    <div class="small">
                                        LinkedIn
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <p class="lead mb-4">
                    Ou contactez-moi en direct sur mon téléphone :
                </p>
                <form action="<?= WEBROOT ?>contact" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6"><input name="name" class="form-control py-4" type="text" placeholder="Votre nom complet" /></div>
                        <div class="form-group col-md-6"><input name="email" class="form-control py-4" type="email" placeholder="votre@adresse.email" /></div>
                    </div>
                    <div class="form-group company">
                        <input name="company" class="form-control" type="text" placeholder="Le nom de votre entreprise" />
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control py-3" type="text" placeholder="Écrivez votre message ici..." rows="4"></textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-marketing mt-4 rounded-pill" type="submit">Envoyer ma demande</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
