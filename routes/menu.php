<?php

use Spatie\Menu\Link;

Menu::macro('main', function () {
    $posts = collect(File::files(base_path('resources/views/posts')))->sortBy(function ($file) {
        return $file->getFilename();
    });
    // dd($posts);
    $menu = Menu::new();
    $menu->add(
        Link::to(
            '/',
            '<span class="icon fa-home">
            Home
            </span>'
        )->addClass('home')
    );
    foreach ($posts as $post) {
        $postName = $post->getBasename('.blade.php');
        $menu->add(
            Link::to(
                '/'.$postName,
                '<span class="icon fa-video-camera">
                '.$postName.'
                </span>'
            )->addClass($postName)
        );
    }
    return $menu->setActiveFromRequest()
        ->addClass('nav');
});
