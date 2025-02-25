<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ $title ?? 'Page Title' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('imagens/blackWink.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet"/>
    @vite('resources/css/app.css')
    @fluxStyles
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
<flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>

    <flux:brand href="/" logo="{{ asset('imagens/blackWink.png') }}" name="Devprod" class="max-lg:hidden dark:hidden"/>
    <flux:brand href="/" logo="{{ asset('imagens/whiteWink.png') }}" name="Devprod" class="max-lg:!hidden hidden dark:flex"/>

    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item href="#" current>Início</flux:navbar.item>
        <flux:navbar.item href="#">Produtos</flux:navbar.item>
        <flux:navbar.item href="#">Contato</flux:navbar.item>

        <flux:separator vertical variant="subtle" class="my-2"/>

        <flux:dropdown class="max-lg:hidden">
            <flux:navbar.item icon-trailing="chevron-down">Suporte</flux:navbar.item>

            <flux:navmenu>
                <flux:navmenu.item href="#">FAQ</flux:navmenu.item>
                <flux:navmenu.item href="#">Quem Somos?</flux:navmenu.item>
            </flux:navmenu>
        </flux:dropdown>
    </flux:navbar>

    <flux:spacer/>

    <flux:navbar class="mr-4">
        <flux:navbar.item icon="magnifying-glass" href="#" label="Search"/>
        <flux:dropdown x-data align="end">
            <flux:button variant="subtle" square class="group" aria-label="Preferred color scheme">
                <flux:icon.sun x-show="$flux.appearance === 'light'" variant="mini" class="text-zinc-500 dark:text-white"/>
                <flux:icon.moon x-show="$flux.appearance === 'dark'" variant="mini" class="text-zinc-500 dark:text-white"/>
                <flux:icon.moon x-show="$flux.appearance === 'system' && $flux.dark" variant="mini"/>
                <flux:icon.sun x-show="$flux.appearance === 'system' && ! $flux.dark" variant="mini"/>
            </flux:button>

            <flux:menu>
                <flux:menu.item icon="sun" x-on:click="$flux.appearance = 'light'">Claro</flux:menu.item>
                <flux:menu.item icon="moon" x-on:click="$flux.appearance = 'dark'">Escuro</flux:menu.item>
                <flux:menu.item icon="computer-desktop" x-on:click="$flux.appearance = 'system'">Automático</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:navbar>

</flux:header>

<flux:sidebar stashable sticky class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>

    <flux:brand href="#" logo="{{ asset('imagens/blackWink.png') }}" name="Devprod" class="px-2 dark:hidden"/>
    <flux:brand href="#" logo="{{ asset('imagens/whiteWink.png') }}" name="Devprod" class="px-2 hidden dark:flex"/>

    <flux:navlist variant="outline">
        <flux:navbar.item href="#" current>Início</flux:navbar.item>
        <flux:navbar.item href="#">Produtos</flux:navbar.item>
        <flux:navbar.item href="#">Contato</flux:navbar.item>

        <flux:navlist.group expandable heading="Favorites" class="max-lg:hidden">
            <flux:navmenu.item href="#">FAQ</flux:navmenu.item>
            <flux:navmenu.item href="#">Quem Somos?</flux:navmenu.item>
        </flux:navlist.group>
    </flux:navlist>

    <flux:spacer/>

    <flux:navlist variant="outline">
        <flux:dropdown x-data align="end">
            <flux:button variant="subtle" square class="group" aria-label="Preferred color scheme">
                <flux:icon.sun x-show="$flux.appearance === 'light'" variant="mini" class="text-zinc-500 dark:text-white"/>
                <flux:icon.moon x-show="$flux.appearance === 'dark'" variant="mini" class="text-zinc-500 dark:text-white"/>
                <flux:icon.moon x-show="$flux.appearance === 'system' && $flux.dark" variant="mini"/>
                <flux:icon.sun x-show="$flux.appearance === 'system' && ! $flux.dark" variant="mini"/>
            </flux:button>

            <flux:menu>
                <flux:menu.item icon="sun" x-on:click="$flux.appearance = 'light'">Claro</flux:menu.item>
                <flux:menu.item icon="moon" x-on:click="$flux.appearance = 'dark'">Escuro</flux:menu.item>
                <flux:menu.item icon="computer-desktop" x-on:click="$flux.appearance = 'system'">Automático</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:navlist>
</flux:sidebar>

<flux:main container>
    {{ $slot }}
</flux:main>

@fluxScripts
</body>
</html>