<?php

use App\Models\Article;
use App\Models\ArticlesCollection;

test("Article collection", function () {
    $collection = new ArticlesCollection([
        new Article("Ziņas", "teksts", "https://delfi.lv"),
        new Article("Raksts", "raksta teksts", "https://apollo.lv"),
        new Article("Laiks", "laikapstākļi", "https://tvnet.lv"),
    ]);


    expect(count($collection->getAll()))->toBe(3);
    expect($collection->getAll()[1]->getTitle())->toBe("Raksts");
    expect($collection->getAll()[2]->getDescription())->toBe("laikapstākļi");
    expect($collection->getAll()[0]->getUrl())->toBe("https://delfi.lv");
});