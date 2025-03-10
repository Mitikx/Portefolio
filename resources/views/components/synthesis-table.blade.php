<section id="synthesis-table" class="py-16 container mx-auto px-4">
    <div class="mb-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-center">Tableau de Synthèse</h2>
        <p class="text-lg text-muted-foreground max-w-2xl text-center">
            Téléchargez mon tableau de synthèse pour avoir une vue d'ensemble de mes compétences,
            projets et expériences professionnelles.
        </p>
    </div>

    <div class="bg-card rounded-lg shadow-md p-6 md:p-8 w-full">
        <div class="flex flex-col md:flex-row items-start justify-between gap-6">
            <div>
                <h3 class="text-xl font-semibold mb-2">Synthèse de Compétences</h3>
                <p class="text-muted-foreground">
                    Ce document résume mon parcours, mes compétences techniques et mes réalisations principales.
                </p>
            </div>

            <a href="{{ asset('tableau/Tableau.xlsx') }}"
               download="Tableau_Synthese.xlsx"
               class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-primary-foreground px-6 py-3 rounded-md transition-colors duration-200 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Télécharger
            </a>
        </div>
    </div>
</section>
