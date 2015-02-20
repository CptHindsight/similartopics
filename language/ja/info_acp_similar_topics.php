<?php
/**
*
* Precise Similar Topics [Japanese]
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'PST_TITLE_ACP'		=> '正確な類似トピック',
	'PST_SETTINGS'		=> '類似トピック設定',
	'PST_LOG_FULLTEXT'	=> '<strong>類似トピックの互換性のためにデータベースを変更しました</strong><br />» Changed “%s” テーブルを MyISAM ストレージエンジンに変更し、“topic_title”へFULLTEXTインデックスを追加しました',
	'PST_LOG_MSG'		=> '<strong>類似トピック設定が変更されました</strong>',
));
