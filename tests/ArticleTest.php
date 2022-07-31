<?php

use App\Models\Article;

test("Article", function () {
    $news = new Article("Ziņas", "teksts", "https://delfi.lv");

    expect($news->getTitle())->toBe("Ziņas");
    expect($news->getDescription())->toBe("teksts");
    expect($news->getUrl())->toBe("https://delfi.lv");
});