# Editing the Theme

Below I explain how certain portions of the WhiteGrey theme for AnchorCMS can be edited easily.

### Editing the Colors

Editing the color of the theme is very easy. When you've downloaded it, open `assets/css/style.scss` in any text editor. Copy the whole document and go to [Sassmeister](http://sassmeister.com/). Paste the full code on the left, where it says SCSS.

![Using Sassmeister](http://www.frisovandijk.com/public/git/whitegrey/sassmeister.png)

Go to line 21 and edit the hexvalue there. Now open `assets/css/style.css` and replace that with the code on the right, where it says CSS. You now have the theme with your own custom color!

![Editing the color](http://www.frisovandijk.com/public/git/whitegrey/coloredit.png)

![New color screenshot](http://www.frisovandijk.com/public/git/whitegrey/newcolorscreenshot.png)

### Editing the Created By

I like being credited for my work, but I get it if people don't want that floating around. Thus I'm going to save you the hassle of finding where it is hidden.

Open `partials/header.php`. Scroll all the way to the bottom. There's a `<div>` element with the footer class. This contains the element. Feel free to remove or edit the div.