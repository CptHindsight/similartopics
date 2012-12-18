Precise Similar Topics II
==========================

A Similar Topics MOD for phpBB3

This is a MOD for phpBB3 that will display a list of similar/related topics at the bottom of the current topic being viewed. It does this by matching keywords in the current topic's title with other topic titles in your board's forums and determining the most relevant and closely matched results.

This MOD is written to provide the most precise similar topics it can find with minimal impact to your board's performance. It uses a MySQL FULLTEXT search that scans topic titles only, not posts, to quickly find matches. There are admin control panel settings available to fine tune the display and performance of the similar topics to best meet the needs of your phpBB board.

Current valid release available from phpBB: 
Version 1.2.0 ([Download it here](https://www.phpbb.com/customise/db/mod/precise_similar_topics_ii/)) 

Features
--------

* Displays a list of the most similar/relevant topics at the bottom of the current topic page.
* Uses a precise and light MySQL query to search topic titles for matches.
* Similar topics are sorted in order of decreasing relevance.
* Adjust how many Similar Topics to display per page.
* Adjust the age-span of topics to display (ie: display similar topics from the past year only).
* Individually enable/disable the display of similar topics in each forum.
* You can exempt certain forums from being searched for similar topics.
* You can define which forums can share similar topics with other forums.
* A query caching option reduces SQL overhead on large boards.
* Permission settings for users and groups determine who can view similar topics.
* Multi-lingual support for stop-words (common words that are ignored).
* Attractive Prosilver and Subsilver2 integration.
* Very fast and easy to install.
* AutoMOD compatible.

Awards
------

* Overall winner of the 2010 "Summer of MODs" competition at phpBB.com.
* Featured MOD of the Week in the phpBB Weekly Podcast, episode #161.

Support
-------

* Report any bugs or problems you encounter to the issue tracker: http://github.com/VSEphpbb/precise-similar-topics-II/issues
* Support is also available at phpBB: https://www.phpbb.com/customise/db/mod/precise_similar_topics_ii/support

Requirements
------------

* MySQL 4.0.1 or later using MyISAM tables.
* phpBB 3.0.7 or newer recommended.

License
-------

GNU General Public License v2