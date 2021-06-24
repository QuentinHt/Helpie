<?php $this->setLayout('layout.php'); ?>

<section class='sectionFiche'>
    <header>
        <h1>Mes filtres</h1>
        <img src="public/assets/Filter.svg" alt="">
        <img src="public/assets/arrow_back_ios.svg" alt="">
    </header>
    <main>
        <div>
            <h2>Pour vous</h2>
            <h2>Toutes les fiches</h2>
        </div>
        <article>
        <p>Séléctions correspondant à votre diagnostic</p>
        <div x-data="searchInstance()" 
            x-init="fetch('http://localhost:8888/Helpy/fiche')
                .then(response => response.json())
                .then(response => fiches = response.fiche_id)">
            <template x-for="fiche in fiches" :key="fiche.id">
                <div>
                    <div></div>
                    <h1 x-text="fiche.titre"></h1>
                    <p x-text="fiche.soustitre"></p>
                    <div>
                        <span>Consommation</span>
                        <span>Vie terrestre</span>
                        <span>Faune & Flore</span>
                    </div>
                    <div>
                        <span x-text='fiche.price'></span>
                        <span x-text='fiche.superficie'></span>
                        <span>3 semaines</span>
                    </div>
                </div>
            </template>
        </div>
</article>
    </main>
</section>

