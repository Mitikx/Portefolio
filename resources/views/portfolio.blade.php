<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="min-h-screen bg-background text-foreground">
<div x-data="{ isMenuOpen: false, typedText: '' }" x-init="
        fullText = 'Développeur Web Créatif';
        function typeText() {
            if (typedText.length < fullText.length) {
                typedText += fullText[typedText.length];
                setTimeout(typeText, 100);
            }
        }
        typeText();
    ">
    @include('components.navigation')

    <main>
        @include('components.hero')
        @include('components.about')
        @include('components.skills', ['skills' => $skills])
        @include('components.projects')
    </main>

    @include('components.footer')
</div>
</body>
</html>
