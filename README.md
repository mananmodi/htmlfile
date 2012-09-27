- No inline javascript or css code!

- All js files should be placed on one page. They are loaded only one time anyway and then cached so not a lot of performance gain in splitting it to many different pages.

- Same rule for css. All files in one place. Keep stuff in one file as well unless it's a third party.. no style.css, style01.css.. etc

- IMPORTANT! No changes to the layout apart from the content. Once you get the main containers done, don't change anything apart from central part. If you have \<div class="container"\> it can't be \<div class="container noBg"\> on different page. Design css in a way you can overwrite the rules.
Exception is having \<div class="container pageName"\> for every page altho avoid if possible. Example: class="container index", class="container contact", class="container register"

- input names. Always have them, do not simply copy/paste the input. Make sure individuals have different names. Name them as you want but it has to have a name. I don't care about the id. It's very important when having custom styled fields as I might not know the library which was used to create the field.

- Forms should have submit buttons. It won't so anything with this data obviously but make sure it's submitting it and make sure data is correct. I would like to avoid situation where i have 10 elements which are called 'name'. (Firebug in firefox, Inspector in Chrome and all major browser will tell you what data you are submitting)

- Links on the website should point to different html unless there is no html designed yet.

- Form validation. I'm doing it on php side for security reasons.. with all modern browsers having validation on js side is a requirement.

- Other Javascript functionality. If's something is there it will have to be done sooner or later. If you see 'show/hide' button/link or in general it looks like js functionality please implement it on an example. If it's a player, use an example mp3 (you could use even dropbox to link it to the player) and make sure it's working. If it will require changing please provide a filename and a short description what needs changing. Description can be provided either in github while submitting the change or on a separate document like this one (example:  changes-11-09-12.md)

- Code formatting - Indentation

- Comments in code. Don't leave alerts, console.logs commented. Use comments for information purposes only. Don't name functions "test"!

- GitHub - Each ticket/element should be submitted separately. You will find that submitting a change is not the same thing as syncing with repo. Submit individual items.
