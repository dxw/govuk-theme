<?php

namespace Dxw\GovukTheme\Blocks;

describe(BlockEditor::class, function () {
    beforeEach(function () {
        $this->blockEditor = new BlockEditor();
    });

    describe('->register()', function () {
        it('adds and removes support for editor options', function () {
            allow('remove_theme_support')->toBeCalled();
            expect('remove_theme_support')->toBeCalled()->once();
            expect('remove_theme_support')->toBeCalled()->once()->with('core-block-patterns');

            $this->blockEditor->register();
        });
    });
});
