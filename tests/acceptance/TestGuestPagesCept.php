<?php
	$I = new AcceptanceTester($scenario);

	$I->wantTo('Открываем главную страницу site/index');
	$I->amOnPage('/');

	$I->see('Welcome!!!', 'h1');

	$I->seeLink('Join', '/site/join');
	$I->seeLink('Login', '/site/login');
	$I->seeLink('About', '/site/about');

	$I->amOnPage('/site/join');
	$I->see('Join us', 'h1');

	$I->amOnPage('/site/login');
	$I->see('Log in', 'h1');
