function verifForm2(f)
{
   var nom2Ok = verifempty2(f.nom);
   var prenom2Ok = verifempty2(f.prenom);	
   var dobOk = verifbirth(f.dob)
   var adresse1Ok = verifempty2(f.adresse1);
   var passOk = verifempty2(f.pass);
   var pass1Ok = verifempty2(f.pass1);
   var mailOk = verifmail2(f.email);
   
    if((passOk && mailOk) && (f.pass.value == f.pass1.value))
       return true;
   else
   {
       if (f.pass.value != f.pass1.value)
       {
	   surligne(f.pass, true);
	   surligne(f.pass1, true);
	   alert("Les deux mots de passe ne correspondent pas");
       }
       else
       {
	   surligne(f.pass1, false);
       }
       return false;
   }
}

function verifbirth (champ)
{
var regex = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
if(!regex.test(champ.value))
   {
   	  p = document.createElement('p');
   	  p.id = 'pid4';
   	  p.appendChild(document.createTextNode('Vous devez indiquer votre date de naissance au format jj/mm/aaaa !'));
      surligne(champ, true);
      div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid4');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      div3p.appendChild(p);
      return false;
   }
   else
   {
   	  div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid4');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      surligne(champ, false);
      return true;
   }
}

function verifmail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
   	  p = document.createElement('p');
   	  p.id = 'pid';
   	  p.appendChild(document.createTextNode('Adresse email non valide.'));
      surligne(champ, true);
      div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      div3p.appendChild(p);
      return false;
   }
   else
   {
   	  div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      surligne(champ, false);
      return true;
   }
}

function verifmail2(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
   	  p = document.createElement('p');
   	  p.id = 'pid5';
   	  p.appendChild(document.createTextNode('Adresse email non valide.'));
      surligne(champ, true);
      div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid5');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      div3p.appendChild(p);
      return false;
   }
   else
   {
   	  div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      surligne(champ, false);
      return true;
   }
}

function verifempty(champ)
{
	console.log(champ.value);
	if (champ.value == "")
	{
	  p = document.createElement('p');
   	  p.id = 'pid2';
   	  p.appendChild(document.createTextNode('des champs obligatoire ne sont pas renseignÃ©s,veuillez remplir tous les champs obligatoire'));
      surligne(champ, true);
      div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid2');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      div3p.appendChild(p);
      return false;
    }
    else
   {
   		console.log('c bon')
   	  surligne(champ, false);
   	  div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid2');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      return true;
   }
}

function verifempty2(champ)
{
	console.log(champ.value);
	if (champ.value == "")
	{
	  p = document.createElement('p');
   	  p.id = 'pid3';
   	  p.appendChild(document.createTextNode('des champs obligatoire ne sont pas renseignÃ©s,veuillez remplir tous les champs obligatoire'));
      surligne(champ, true);
      div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid3');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      div3p.appendChild(p);
      return false;
    }
    else
   {
   		console.log('c bon')
   	  surligne(champ, false);
   	  div3p = document.getElementsByClassName('div0p')[0];
      pid = document.getElementById('pid2');
      if(pid !== null)
      {
      	div3p.removeChild(pid);
      }
      return true;
   }
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
