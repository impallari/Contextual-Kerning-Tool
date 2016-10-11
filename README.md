# Contextual Kerning Tool

The "Contextual Kerning Tool" is a proof of concept for a new tool to aid the kerning process

## Spliting the Dictionary in two:

It reads your font's kerning pairs and split the dictionary in two:
* Spacing Words: Words that are solved by using only spacing and no kerning pairs at all
* Heavily Kerned Words: Words that have 5 or more kerning pairs each

This list are customized for each font, and once you have those custom list of words its very easy to test spacing and kerning separately and spot any problem.

By looking at the list of words that are resolved using spacing only, if there is any problem it will become self evident.

And by looking at the list of heavily kerned words you can spot inconsistency cases (where you have set some individual pair overly tight or overly loose). Since they are displayed one after another, minor differecnes add up, and any incosistency will quickly pop up.

## Bird-eye view of your kerning pairs:

Reading your list of kerning pairs in the traditional list view is far from ideal.

This tools gives you an easy to scan "birds eye" view of your kerning pairs. 

It also shows you the list of pairs that you have not kerned. It sounds silly, but its actually quite usefull to quickly detect pairs that should be kerned and for some reason you forgot. It also enables you to kern as you go, instead of kerning at the end of the design process.

## Compare kerning in two fonts:

You can also easily compare the kerning in two different fonts (for example: Source Sans vs. Roboto), or in two different versions of the same font (for example: LibreFranklin v1.000 vs. LibreFranklin v2.000).

## How it works:
Since this is only an initial prototype, operation ir rather tedious and involves a lot of manual steps that hopefully will be automated in future iterations (Ideally I will love to see this idea implemented as a Glyphs script or plugin).

* First, upload all the files inside a new folder in your php hosting
* Next, you need to make a copy of your font and manually expand the kerning table
* Next, you need to run [this Fontlab Macro](https://github.com/impallari/Impallari-Fontlab-Macros/blob/master/IMP%20ContextualKern/Export%20All%20pairs.py) to export the kerning pair list into .txt files
* Next, you need to generate a .php pair list file for the font you want to use (similar to the ones inside the "pairs" folder) and copy the data from the txt files into the proper php variables
* Next, you need to upload your new pairs php file into the pair folder
* and finally, edit the "configure.php" file to include your php pair file
* if you want to compare two fonts, also edit the "config-compare.php" file to include both pair files.

## Sample Images:

Lowercase Pairs and Word list:
![Lowercase Pairs.](/images/sample01-lowercase.png "Lowercase Pairs and Word list")

Uppercase Pairs and Word list:
![Lowercase Pairs.](/images/sample02-uppercase.png "Uppercase Pairs and Word list")

Capitalized Pairs and Word list:
![Lowercase Pairs.](/images/sample03-capitalized.png "Capitalized Pairs and Word list")

Comparing Fonts:
![Lowercase Pairs.](/images/sample04-compare.png "Comparing Fonts")

