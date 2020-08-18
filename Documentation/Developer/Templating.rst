.. include:: ../Includes.txt

.. _developer:

================
Templating
================

If you want to change something in the template, for example to add a front-end output, you can overwrite the template via your site package.
Feel free to do your own templating / frontend stuff.

.. code-block:: typoscript

    lib.dmContentElement < lib.contentElement
    lib.dmContentElement {
        templateName = Default
        templateRootPaths {
            200 = EXT:dm_schema/Resources/Private/Templates
            201 = {$plugin.tx_dmschema.view.templateRootPath}
        }
        partialRootPaths {
            200 = EXT:dm_schema/Resources/Private/Partials
            201 = {$plugin.tx_dmschema.view.partialRootPath}
        }
        layoutRootPaths {
            200 = EXT:dm_schema/Resources/Private/Layouts
            201 = {$plugin.tx_dmschema.view.layoutRootPath}
        }
    }
