
Installing the form____
1. Edit the file popup-contactform.php and update your email address.

2. Upload the entire folder to your web site. 

3. See the page a-page.php for an example of how to add a button/link to open 
the popup contact form.

   3.1 Include the file popup-contactform.php at the beginning of the php file
   
   3.2 link to the style file contact.css in the <head> section of your page
   
   3.3 PHP include contactform-code.php at the end of the php file (it should come in between <body> and </body>)

4. To Open the Popup form on clicking a link, use the code below:
<a href='javascript:fg_popup_form("fg_formContainer","fg_backgroundpopup");'
>Contact us</a>


You can customize almost every aspect of this form.

Visit html-form-guide.com for more info.


License____
This program is free software published under the terms of the GNU Lesser General Public License.
You can freely use it on commercial or non-commercial websites. 
