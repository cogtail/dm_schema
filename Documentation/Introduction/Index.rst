.. include:: ../Includes.txt

.. _introduction:

============
Introduction
============

.. _what-it-does:

What does it do?
================

In times of digitization, not only are websites becoming more and more important for our customers, but also their visibility in search engines, the so-called SEM.
SEM is the abbreviation for Search Engine Marketing and translates as search engine marketing. As part of the online marketing mix, SEM includes all (advertising) measures for attracting website visitors. These measures can be divided into SEO (search engine optimization) and SEA (search engine advertising).
SEO is therefore a sub-area in online marketing with the aim of improving visibility in search engines. The abbreviation SEO comes from the English term Search Engine Optimization and is now the global term for the optimization of websites for search engines.
Mostly structured data are used that are defined by Schema.org.

The labeling system helps to label and structure content on websites so that search engines can process this content more easily. Markups are used by search engines, for example, to display rich snippets in the SERPs (Search Engine Result Pages).

`Schema <https://extensions.typo3.org/extension/schema/>`__ provides developers with interfaces in PHP and Fluid for the simple and uniform generation of structured data according to Schema.org and is available for TYPO3 9 and 10.
It forms the basis for dm_schema.
Dm_schema provides you with the most frequently used 4-5 item types as content elements. The ViewHelper from schema are used in a fluid template. These do not generate any front-end output, but dynamically generate a Json-ld script block in the header.Target group are users e.g. without web agency or programming skills. The implementation options are very extensive and can be adapted for you and your project. Contact us.

.. _what-it-not-does:

What does it not do?
================

.. warning::
    It does not offer you the full implementation of schema as a content element.
    It also doesn't produce any front-end output out-of-the-box.
