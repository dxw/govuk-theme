<?php

describe(\Dxw\GovukTheme\Theme\Analytics::class, function () {
    beforeEach(function () {
        \WP_Mock::setUp();
        $this->analytics = new \Dxw\GovukTheme\Theme\Analytics();
    });

    afterEach(function () {
        \WP_Mock::tearDown();
    });

    it('is registrable', function () {
        expect($this->analytics)->to->be->an->instanceof(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        it('registers actions', function () {
            WP_Mock::expectActionAdded('wp_footer', [$this->analytics, 'wpFooter']);
            $this->analytics->register();
        });
    });

    describe('->wpFooter()', function () {
        it('adds a script tag to the footer', function () {
            ob_start();
            $this->analytics->wpFooter();
            $result = ob_get_contents();
            ob_end_clean();
            $result = str_replace(["\r", "\n"], '', $result);
            expect(preg_match('/^\s*<script>.*<\\/script>\s*$/', $result))->to->equal(1);
        });
    });
});
