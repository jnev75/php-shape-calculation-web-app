# PHP Shape Calculation Web Application

**Version 1.0**

This is a sample readme file for my GitHub repo. I'm using Markdown

* I'm developing an Object Oriented Web Application
* Using PHP version 7.4.9

Authorship documentation for the newly created project

## Any known bugs

---

## Update log

---

## Contributors

- James L Neville 

---

## License & copyright

© James L Neville, PHP Shape Calculation Web Application

---

## Terms of use

By using this web application, you acknowledge that the content developed is subject to copyright enforcement. This intellectual property right grants that the application may be used solely for personal use, as a reference, or for intended research purposes.

This policy also implies that the application cannot be modified, duplicated, re-distributed to a third party, or exploited for commercial use.

Any illegitimate use of the application will be considered a breach of the terms of use agreement. This may further violate copyright and trademark laws which are bound by the Copyright, Designs and Patents Act 1988

## Operations
The shape calculation web application will use 2 form fields (shape name and length), to calculate the area and boundary length of a shape. 

To begin testing this web app, the user must firstly open their project folder 'php_shapecalculationapp', using a text editor such as Visual Studio Code. Next, the user must run their web server (in my case valet), using the correct command from their terminal. Once the web server has started, they can then open the file index.html using a web browser like Google Chrome.
The file is purposefully given the name index, as it is essentially the default page of the website. This is the first web page that is displayed, once the user visits the website. The home page is really an index to all of the main pages that feature on the website. This web page has a shape form which the user must complete, before they can calculate the area and boundary length of a shape.

Once the home page loads, the user can begin a calculation, by firstly selecting a shape name option from the drop-down menu. The menu options are: square, triangle (equilateral) and circle. In addition, the user must enter an integer (whole number) into the subsequent number field. This will be the length metric used for both calculations. The user's web browser may also provide stepper arrows for this field. This feature lets the user maximise or minimize the length value. The length metric must be within the pre-defined interval of 1 - 100 cm and cannot be a decimal. Once the user is satisfied with their form data entries, they can then proceed with the calculation by selecting the submit button.

Once the form data entries are submitted, the calculations are then processed. Finally, the browser will load the view from the file index.view.php and render the results returned from both calculations to the new form.

Both text input fields are set to read only, so the results cannot be modified.

Below the shape measurement results form, there is also a link named 'Return', which takes the user back to the shape form.