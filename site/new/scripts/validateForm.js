// Declaring required variables
var digits = "0123456789";
// non-digit characters which are allowed in phone numbers
var phoneNumberDelimiters = "()- ";
// characters which are allowed in international phone numbers
// (a leading + is OK)
var validWorldPhoneChars = phoneNumberDelimiters + "+";
// Minimum no of digits in an international phone no.
var minDigitsInIPhoneNumber = 10;
function ValidateEmail(mail)  
{  
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if(mail.value.match(mailformat))  
		{  
			return true;  
		}  
		else  
		{   
			return false;  
		}  
}  
function isInteger(s)
{   var i;
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}
function isAlphabet(elem)
{
		var alphaExp = /^[a-zA-Z\s\.,-: ]+$/;
		if(elem.value.match(alphaExp))
		{
			return true;
		}
		else
		{
			return false;
		}
}
function isAlphaNum(elem)
{
		var alphanumExp = /^[a-zA-Z0-9\s\.,-: ]+$/;
		if(elem.value.match(alphanumExp))
		{
			return true;
		}
		else
		{
			return false;
		}
}
function isAlphaNumonly(elem)
{
		var alphanumExp = /^[0-9a-zA-Z\s\.,]+$/;
		if(elem.value.match(alphanumExp))
		{
			return true;
		}
		else
		{
			return false;
		}
}
function trim(s)
{   var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not a whitespace, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (c != " ") returnString += c;
    }
    return returnString;
}
function stripCharsInBag(s, bag)
{   var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function isNumeric(elem) {
		var NUM = /^[0-9.]+$/;		
		if(elem.value.match(NUM))
		{
			return true;
		}
		else
		{
			return false;
		}
}

/*function isAlphabet(elem)
{
		var alphaExp = /^[a-zA-Z]+$/;
		if(elem.value.match(alphaExp))
		{
			return true;
		}
		else
		{
			return false;
		}
}*/

function checkme() // Define function checkme
{
//	alert("Entred into check me function ");
			/* checking Rittername */
			if(document.forms[0].RitterName.value == "")
			{
				alert("Enter the Ritter Name ");
				document.forms[0].RitterName.focus();
				return (false);
			}

			else
			{
				var RitterName=document.forms[0].RitterName;

				if (isAlphabet(RitterName)==false){
				alert("Please Enter a Valid Ritter Name");
				RitterName.value="";
				RitterName.focus();
				return false
				}
			}

			/* checking Profaner Name */
			if(document.forms[0].ProfanerName.value == "")
			{
				alert("Enter the Profaner Name");
				document.forms[0].ProfanerName.focus();
				return (false);
			}

			else
			{
				var ProfanerName=document.forms[0].ProfanerName

				if (isAlphabet(ProfanerName)==false){
				alert("Please Enter a Valid Profaner Name");
				ProfanerName.value="";
				ProfanerName.focus();
				return false
				}
			}

			/* checking Reychs Nummer */

			if(document.forms[0].ReychsNummer.value == "0" || document.forms[0].ReychsNummer.value == "")
			{
				alert("Enter the Reychs Nummer");
				document.forms[0].ReychsNummer.focus();
				return (false);
			}

			else
			{
				var ReychsNummer=document.forms[0].ReychsNummer

				if (isNumeric(ReychsNummer)==false){
				alert("Please Enter a Reychs Nummer");
				ReychsNummer.value="";
				ReychsNummer.focus();
				return false
				}
			}

		/* checking Personen1 */
			if(document.forms[0].Personen1.value == "0" || document.forms[0].Personen1.value == "")
			{
				alert("Enter the Personen");
				document.forms[0].Personen1.focus();
				return (false);
			}
			else
			{
				var Personen1=document.forms[0].Personen1;

				if (isNumeric(Personen1)==false){
				alert("Please Enter a Valid Personen");
				Personen1.value="";
				Personen1.focus();
				return false
				}
			}
		/* Profane Adresse */

		/* Strasse */
		if(document.forms[0].Strasse.value == "")
			{
				alert("Enter the Profane Adresse : Strasse");
				document.forms[0].Strasse.focus();
				return (false);
			}

			else
			{
				var Strasse=document.forms[0].Strasse

				if (isAlphaNum(Strasse)==false){
				alert("Please Enter a Valid Profane Adresse : Strasse");
				Strasse.value="";
				Strasse.focus();
				return false
				}
			}

					
/* checking ZIP */
			if(document.forms[0].zip.value == "")
			{
				alert("Enter the zip");
				document.forms[0].zip.focus();
				return (false);
			}
			else
			{
				var zip=document.forms[0].zip;

				if (isNumeric(zip)==false){
				alert("Please Enter a Valid zip");
				zip.value="";
				zip.focus();
				return false
				}
			}

/* checking Stadt */
			if(document.forms[0].Stadt.value == "")
			{
				alert("Enter the Stadt");
				document.forms[0].Stadt.focus();
				return (false);
			}
			else
			{
				var Stadt=document.forms[0].Stadt;

				if (isAlphaNum(Stadt)==false){
				alert("Please Enter a Valid Stadt");
				Stadt.value="";
				Stadt.focus();
				return false
				}
			}

/* checking eMehl */

			if(document.forms[0].eMehl.value == "")
			{
				alert("Enter the eMehl");
				document.forms[0].eMehl.focus();
				return (false);
			}
			else
			{
				var eMehl=document.forms[0].eMehl;

				if (ValidateEmail(eMehl)==false){
				alert("Please Enter a Valid eMehl");
				eMehl.value="";
				eMehl.focus();
				return false
				}
			}

		/* checking Fexung */
			if(document.forms[0].Fexung.value != "")
/*			{
				alert("Enter the Fexung");
				document.forms[0].Fexung.focus();
				return (false);
			}
			else*/
			{
				var Fexung=document.forms[0].Fexung;

				if (isNumeric(Fexung)==false){
				alert("Please Enter a Valid Fexung");
				Fexung.value="";
				Fexung.focus();
				return false
				}
			}

/* checking Personen2 */
			if(document.forms[0].Personen2.value != "")
/*			{
				alert("Enter the Personen");
				document.forms[0].Personen2.focus();
				return (false);
			}
			else*/
			{
				var Personen2=document.forms[0].Personen2;

				if (isNumeric(Personen2)==false){
				alert("Please Enter a Valid Personen");
				Personen2.value="";
				Personen2.focus();
				return false
				}
			}

/* checking Personen3 */
			if(document.forms[0].Personen3.value != "")
//			{
//				alert("Enter the Personen");
//				document.forms[0].Personen3.focus();
//				return (false);
//			}
//			else
			{
				var Personen3=document.forms[0].Personen3;

				if (isNumeric(Personen3)==false){
				alert("Please Enter a Valid Personen");
				Personen3.value="";
				Personen3.focus();
				return false
				}
			}

/* checking Personen4 */
			if(document.forms[0].Personen4.value != "")
//			{
//				alert("Enter the Personen");
//				document.forms[0].Personen4.focus();
//				return (false);
//			}
//			else
			{
				var Personen4=document.forms[0].Personen4;

				if (isNumeric(Personen4)==false){
				alert("Please Enter a Valid Personen");
				Personen4.value="";
				Personen4.focus();
				return false
				}
			}

/* checking Personen5 */
			if(document.forms[0].Personen5.value != "")
//			{
//				alert("Enter the Personen");
//				document.forms[0].Personen5.focus();
//				return (false);
//			}
//			else
			{
				var Personen5=document.forms[0].Personen5;

				if (isNumeric(Personen5)==false){
				alert("Please Enter a Valid Personen");
				Personen5.value="";
				Personen5.focus();
				return false
				}
			}

/* checking Personen6 */
			if(document.forms[0].Personen6.value != "")
//			{
//				alert("Enter the Personen");
//				document.forms[0].Personen6.focus();
//				return (false);
//			}
//			else
			{
				var Personen6=document.forms[0].Personen6;

				if (isNumeric(Personen6)==false){
				alert("Please Enter a Valid Personen");
				Personen6.value="";
				Personen6.focus();
				return false
				}
			}

/* checking Personen7 */
			if(document.forms[0].Personen7.value != "")
//			{
//				alert("Enter the Personen");
//				document.forms[0].Personen7.focus();
//				return (false);
//			}
//			else
			{
				var Personen7=document.forms[0].Personen7;

				if (isNumeric(Personen7)==false){
				alert("Please Enter a Valid Personen");
				Personen7.value="";
				Personen7.focus();
				return false
				}
			}

/* checking Burgbaustein */
			if(document.forms[0].Personen8.value != "")
//			{
//				alert("Enter the Personen");
//				document.forms[0].Personen8.focus();
//				return (false);
//			}
//			else
			{
				var Personen8=document.forms[0].Personen8;

				if (isNumeric(Personen8)==false){
				alert("Please Enter a Valid Personen");
				Personen8.value="";
				Personen8.focus();
				return false
				}
			}
			
			/* checking Burgbaustein */
			if(document.forms[0].Burgbaustein.value != "")
//			{
//				alert("Enter the Burgbaustein");
//				document.forms[0].Burgbaustein.focus();
//				return (false);
//			}
//			else
			{
				var Burgbaustein=document.forms[0].Burgbaustein;

				if (isNumeric(Burgbaustein)==false){
				alert("Please Enter a Valid Burgbaustein");
				Burgbaustein.value="";
				Burgbaustein.focus();
				return false
				}
			}

/* checking Burgbaustein */
			if(document.forms[0].Personen9.value != "")
//			{
//				alert("Enter the Personen");
//				document.forms[0].Personen9.focus();
//				return (false);
//			}
//			else
			{
				var Personen9=document.forms[0].Personen9;

				if (isNumeric(Personen8)==false){
				alert("Please Enter a Valid Personen");
				Personen9.value="";
				Personen9.focus();
				return false
				}
			}
} /* End of Checkme */
