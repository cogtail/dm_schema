.. include:: ../Includes.txt

.. _templating:

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
            202 = EXT:your_ext/Resources/Private/Templates
        }
        partialRootPaths {
            200 = EXT:dm_schema/Resources/Private/Partials
            201 = {$plugin.tx_dmschema.view.partialRootPath}
            202 = EXT:your_ext/Resources/Private/Partials
        }
        layoutRootPaths {
            200 = EXT:dm_schema/Resources/Private/Layouts
            201 = {$plugin.tx_dmschema.view.layoutRootPath}
            202 = EXT:your_ext/Resources/Private/Layouts
        }
    }


If you want to add a front-end version to the FAQ, for example, take a look at this example
For example Step 1) Add HTML:

.. code-block:: html

    <html data-namespace-typo3-fluid="true"
          lang="en"
          xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
          xmlns:schema="http://typo3.org/ns/Brotkrueml/Schema/ViewHelpers"
          schema:schemaLocation="https://brot.krue.ml/schemas/schema-1.7.0.xsd"
    >
    <f:layout name="Default" />
    <f:section name="Main">
        <schema:type.Question
            -isMainEntityOfWebPage="1"
            -as="mainEntity"
            name="{data.tx_dmschema_question}">
            <schema:type.Answer
                -as="acceptedAnswer"
                text="{data.tx_dmschema_answer}"
            />
        </schema:type.Question>
        <f:comment>
            Paste your Frontend stuff here!

            <button class="accordion">{data.tx_dmschema_question}</button>
            <div class="panel">
              {data.tx_dmschema_answer}
            </div>

        </f:comment>
    </f:section>
    </html>


Step 2) Add CSS:

.. code-block:: css

    /* Style the buttons that are used to open and close the accordion panel */
    .accordion {
      background-color: #eee;
      color: #444;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      text-align: left;
      border: none;
      outline: none;
      transition: 0.4s;
    }

    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .active, .accordion:hover {
      background-color: #ccc;
    }

    /* Style the accordion panel. Note: hidden by default */
    .panel {
      padding: 0 18px;
      background-color: white;
      display: none;
      overflow: hidden;
    }


Step 3) Add Javascript:

.. code-block:: js

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
