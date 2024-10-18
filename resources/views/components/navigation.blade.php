<nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-sm">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" class="text-2xl font-bold">Mon Portfolio</a>
        <div class="hidden md:flex space-x-4">
            <a href="#about" class="hover:text-primary transition-colors">À propos</a>
            <a href="#skills" class="hover:text-primary transition-colors">Compétences</a>
            <a href="#projects" class="hover:text-primary transition-colors">Projets</a>
            <a href="#contact" class="hover:text-primary transition-colors">Contact</a>
        </div>
        <button @click="isMenuOpen = !isMenuOpen" class="md:hidden">
            <svg x-show="!isMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            <svg x-show="isMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>
    <div x-show="isMenuOpen" class="md:hidden bg-background/95 backdrop-blur-sm">
        <a href="#about" class="block px-4 py-2 hover:bg-accent">À propos</a>
        <a href="#skills" class="block px-4 py-2 hover:bg-accent">Compétences</a>
        <a href="#projects" class="block px-4 py-2 hover:bg-accent">Projets</a>
        <a href="#contact" class="block px-4 py-2 hover:bg-accent">Contact</a>
    </div>
</nav>
