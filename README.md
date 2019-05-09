# FSWD60-CodeReview11-FlorianRechberger
A CRUD application with register and login (user, admin)

# TravelFox(codreview) is hungry
-for admin-login choose the following account:
E-mail: travelfox@world.com
Password: travelfox

-for normal user-login, please register or choose the following account:
E-mail: felix@world.com
Password felixfelix

-'cr11_florian_rechberger_travelmatic.sql' is to be found in the folder 'db'

# Bugs, M'Lady!
1)Lady Sisi is not allowed to live in a Schloßstraße, but must rather reside in the Schlossstrasse at best ...in other words: Spelling didnt't matter so much in the past. (meaning when updating you must escape \' ...German 'Umlaute' and ß are fine)
2)active nav-link not working
3)why do I have to escape "''" and "!" on the update pages ...every singele time  ...otherwise a fatal error is thrown

# Yet to be implemented
1)register input verification
2)login input verification
3)advanced create/update input varification for all events
4)add favicons to footer-part of cards
5)wider viewpoint; more cards in a row at wider viewpoint
6)add 'go back' button on each update page (things_to_do, concerts, restaurants)
7)refactor the create pages so that php and html is neatly seperated like in the update pages. move variables to actions
8)heading and sub-headings are not on the same line if heading takes up more than one line. when the sub-heading is being pushed to further down, the sub-headings of other cards in the same row are not lining up with the sub-heading that had been pushed further down.