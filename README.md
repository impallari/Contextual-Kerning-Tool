# Contexual-Kerning-Tool

The "Contextual Kerning Tool" aids your kerning process.

It reads your font's kerning pairs and split the dictionary in 2 word lists (customized for each font):
* Spacing Words: Words that are solved by using only spacing and no kerning pairs at all
* Heavily Kerned Words: Words that have 5 or more kerning pairs each

Once you have those custom list of words, its very easy to test your font and spot spacing amd kerning problems.

By looking at the list of words that are resolved using spacing only, if there is any problem it will become self evident.

And by looking at the list of heavily kerned words you can spot inconsistency cases (where you have set some individual pair overly tight or overly loose). Since they are displayed one after another, minor differecnes add up, and any incosistency will quickly pop up.