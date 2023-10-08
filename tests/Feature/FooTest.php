<?php

use Asciito\LearningGithubActions\Foo;

test('is Foo class', function () {
    expect(Foo::className())
        ->toBe('Asciito\\LearningGithubActions\\Foo');
});
