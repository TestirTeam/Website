<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="stylesheetMVC/formulaireTest.css">
    <meta charset="UTF-8">
    <title>Test de personnalité</title>
    <link rel="icon" type="image/png" href="Logo%20Testir.png" />

</head>
<body>


<div class="profil-header">
    <div class="profil-img">
        <img src="../Images/photoProfil.png" alt="Photo de profil" width="150" height="150" />
    </div>
    <div class="profil-nom">
        <h2>Marie Lemercier</h2>
        </br>
        <a class="bouton" href="photo_profil.png">Mon Profil</a>
    </div>
</div>


<div class="test">
    <div class="rectangle1"> </div>
    <h1 align="center">Bienvenue sur notre test de personnalité, c'est parti! </h1>
    <br />
    <table width="80%" border="0" cellspacing="3" cellpadding="0">
        <tr>
            <td  valign="middle">
                <table width="90%" border="0" cellspacing="10" cellpadding="10">
                    <tr>
                        <td width="60%"><font face="Arial,sans-serif"></font></td>
                        <td width="10%">
                            <div align="center"><font face="Arial,sans-serif">OUI</font></div>
                        </td>
                        <td width="10%">
                            <div align="center"><font face="Arial, sans-serif">NON</font></div>
                        </td>
                        <td width="10%">
                            <div align="center"><font face="Arial, sans-serif">Saisissez votre réponse </font></div>
                        </td>
                        <br/>

                    </tr>





                    <tr>
                        <td><font face="Arial,sans-serif">Possédez-vous déjà une arme?
                            </font></td>

                        <td width="10%" align="center">
                            <input type="radio" name="radiobutton0">
                        </td>
                        <td width="20%" align="center">
                            <input type="radio" name="radiobutton0">
                        </td>
                        <td align="center">
                            <input type="text" name="textfield">
                        </td>
                    </tr>




                    <tr>
                        <td width="60%"><font face="Arial,sans-serif"> Si oui, combien en avez-vous?
                            </font></td>
                        <td width="10%" align="center">
                            <input type="radio" name="radiobutton1" value="v0">
                        </td>
                        <td width="10%" align="center">
                            <input type="radio" name="radiobutton1" value="v1">
                        </td>
                        <td align="center">
                            <input type="text" name="textfield">
                        </td>
                    </tr>



                    <tr>
                        <td width="60%"><font face="Arial, Helvetica, sans-serif">Avez-vous des antécédents médicaux?
                            </font></td>
                        <td width="10%" align="center">
                            <input type="radio" name="radiobutton2" value="v0">
                        </td>
                        <td width="10%" align="center">
                            <input type="radio" name="radiobutton2" value="v1">
                        </td>
                        <td align="center">
                            <input type="text" name="textfield">
                        </td>
                    </tr>



                    <tr>
                        <td width="60%"><font face="Arial, Helvetica, sans-serif">Etes-vous régulièrement stressé ou angoissé?
                            </font></td>
                        <td width="10%" align="center">
                            <input type="radio" name="radiobutton3" value="v0">
                        </td>
                        <td width="10%" align="center">
                            <input type="radio" name="radiobutton3" value="v1">
                        </td>
                        <td align="center">
                            <input type="text" name="textfield">
                        </td>
                    </tr>





                    <tr>
                        <td width="60%"><font face="Arial, Helvetica, sans-serif">rfnirocenobkozprjv,ir ?
                            </font></td>
                        <td width="10%" align="center">
                            <input type="radio" name="radiobutton3" value="v0">
                        </td>
                        <td width="10%" align="center">
                            <input type="radio" name="radiobutton3" value="v1">
                        </td>
                        <td align="center">
                            <input type="text" name="textfield">
                        </td>
                    </tr>






                </table>
            </td>
        </tr>
        <tr>
            <td align="center" height="74" valign="middle">
                <input type="button" class="bouton" name="Submit2" value="Voir mon resultat" onClick="valideReponse(this.form,[1,0,1,0])">
                <input type="reset" class="bouton" name="Submit2" value="Recommencer" onClick="reset();clearScreen(this.form);">
            </td>
        </tr>
    </table>
    </form>


</div>






</body>
</html>
