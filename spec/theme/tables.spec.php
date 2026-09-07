<?php

describe(\Dxw\GovukTheme\Theme\Tables::class, function () {
	beforeEach(function () {
		$this->tables = new \Dxw\GovukTheme\Theme\Tables();
	});

	it('is registerable', function () {
		expect($this->tables)->toBeAnInstanceOf(\Dxw\Iguana\Registerable::class);
	});

	describe('->register()', function () {
		it('registers the filter', function () {
			allow('add_filter')->toBeCalled();
			expect('add_filter')->toBeCalled()->once()->with('render_block', [$this->tables, 'useGovukMarkup'], 10, 2);
			$this->tables->register();
		});
	});

	describe('->useGovukMarkup()', function () {
		context('this is not a core table block', function () {
			it('returns the block content unchanged', function () {
				$block['blockName'] = 'core/paragraph';
				$blockContent = '<p><table>This will not be changed</table></p>';
				$result = $this->tables->useGovukMarkup($blockContent, $block);
				expect($result)->toEqual($blockContent);
			});
		});
		context('this is a core table block', function () {
			it('updates the markup to add the govuk classes', function () {
				$block['blockName'] = 'core/table';
				allow('apply_filters')->toBeCalled()->andRun(function ($a, $b) {
					return '_' . $b . '_';
				});
				$blockContent = '<table>';
				$blockContent .= '<caption>A caption</caption>';
				$blockContent .= '<thead><tr><th>Column 1</th></tr></thead>';
				$blockContent .= '<tbody><tr><td>Data 1</td></tr></tbody>';
				$blockContent .= '</table>';
				$result = $this->tables->useGovukMarkup($blockContent, $block);
				expect($result)->toEqual(
					'<table class="_govuk-table_"><caption class="_govuk-table__caption_">A caption</caption><thead class="_govuk-table__head_"><tr class="_govuk-table__row_"><th class="_govuk-table__header_">Column 1</th></tr></thead><tbody class="_govuk-table__body_"><tr class="_govuk-table__row_"><td class="_govuk-table__cell_">Data 1</td></tr></tbody></table>'
				);
			});
		});
	});
});
