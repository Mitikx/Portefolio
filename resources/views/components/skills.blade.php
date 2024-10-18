<section id="skills" class="py-12 md:py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">Mes compétences</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach ($skills as $skill)
                <div class="bg-white p-4 rounded-lg shadow text-center hover:shadow-lg transition-shadow">
                    <h3 class="font-semibold">{{ $skill }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>
