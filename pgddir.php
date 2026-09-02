<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UoK - Post Graduate Directory</title>
<style type="text/css">
<!--
.style3 {
	font-size: 36px;
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<?php  


if (isset($_POST['posted']))
  {

$to = "qec_ku@yahoo.com";

  $txtDept=$_POST['txtDept'];
  $txtYear=$_POST['txtYear'];
  $txtName=$_POST['txtName'];
  $txtFname=$_POST['txtFname'];
  $txtNic=$_POST['txtNic'];
  $txtQual=$_POST['txtQual'];
  $txtAddr=$_POST['txtAddr'];
  $txtPhone=$_POST['txtPhone'];
  $txtMob=$_POST['txtMob'];
  $txtEmail=$_POST['txtEmail'];
  $txtOrg=$_POST['txtOrg'];
  $txtDes=$_POST['txtDes'];
  $txtDate=$_POST['txtDate'];
  $txtOffAddr=$_POST['txtOffAddr'];
  $txtOffPhone=$_POST['txtOffPhone'];
  $txtFax=$_POST['txtFax'];
  $txtOffWeb=$_POST['txtOffWeb'];
  $subject = "Information :" . $txtNic;
  $body = "Department: " . $txtDept ."\r\nYear: " . $txtYear ."\nName: " . $txtName ."\nFather's Name: ".  $txtFname . "\nNIC No: " . $txtNic . "\nQualification: " . $txtQual ."\nAddress: " .  $txtAddr . "\nPhone: " . $txtPhone ."\nMobile: " .  $txtMob . "\nEmail: " . $txtEmail . "\nOrganization: ". $txtOrg . "\nDestinaton: " . $txtDes ."\nDate of Employement: " .  $txtDate . "\nOffice Address: " . $txtOffAddr . "\nOffice Phone: " . $txtOffPhone ."\nFax: ". $txtFax . "\nOffice Email: " . $txtOffEmail . "\nWebsite: " . $txtOffWeb ;
 if(mail($to,$subject,$body) == "true")
{
 echo "Your information has been submitted. ";
} 
}
?>


 

<form action="pgddir.php" method="post">
<input type="hidden" name="posted" value="true"/>
  <table width="98%"  border="0">
    <tr>
      <td colspan="2" align="right" class="text"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style3">University 
          of Karachi</span></font><font color="#339933" size="+4" face="Verdana, Arial, Helvetica, sans-serif"><br />
          Post Graduate Directory </font> </div>
        <p></p>      </td>
    </tr>
    <tr> 
      <td colspan="2" align="right" class="text"><div align="justify">
          <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif">To enhance 
            the liaison between Employers/Industries and Professional with the 
            University of Karachi, the Quality Enhancement Cell is compiling a 
            department wise Post Graduate Directory of the Alumni of the University 
            of Karachi. All the former students of the University of Karachi are 
            requested to fill in the following form and post it or email the same 
            on the address given at the end of the form</font></p>
        </div></td>
    </tr>
    <tr> 
      <td width="304" align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Department:</font></td>
      <td width="623"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtDept" size="33" maxlength="100"/>
        , University of Karachi</font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Year 
        Of Passing:</font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtYear" size="33" maxlength="100"/>
        (Masters Program from UoK)</font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Name: 
        </font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input  type="text" class="input" name="txtName" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Father's 
        Name: </font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtFname" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">N.I.C 
        No: </font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtNic" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Academic 
        Qualifications:</font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <textarea cols="30" rows="3" class="input" name="txtQual"></textarea>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Residential 
        Address:</font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <textarea cols="30" rows="3" class="input" name="txtAddr"></textarea>
        </font></td>
    </tr>
    <tr> 
      <td align="right"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Contact 
        Details&nbsp; </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Phone 
        No:</font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtPhone" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Mobile 
        No:</font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtMob" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td height="24" align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Email:</font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtEmail" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Organization You are Currently Employed:</font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
        <input type="text" class="input" name="txtOrg" size="33" maxlength="100"/>
      </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Designation: 
        </font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtDes" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Date 
        of Employment: </font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtDate" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td colspan="2" align="right" class="text"><div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp; 
          &nbsp;<strong>Contact Details of the 
          Current Employer</strong></font></div></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
        <textarea cols="30" rows="3" class="input" name="txtOffAddr"></textarea>
      </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Phone 
        No: </font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtOffPhone" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Fax 
        No: </font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtFax" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Email: 
        </font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtOffEmail" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr> 
      <td align="right" class="text"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Web site:</font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" class="input" name="txtOffWeb" size="33" maxlength="100"/>
        </font></td>
    </tr>
    <tr>
      <td align="right"><input name="hidSubmit" type="hidden" id="hidSubmit" value="true" /></td>
      <td><input name="Submit" type="submit" class="input" value="Send" /> <input name="Submit2" type="reset" class="input" value="Reset" /></td>
    </tr>
    <tr> 
      <td colspan="2" align="right"><div align="left">
<p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>For 
            Contact and/or Inquiry:<br />
            </strong></font><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Office 
            of the Quality Enhancement Cell Room No 1, Ground Floor, Administration 
            Building, University of Karachi P.O. Box No 75270,<br />
            Phone No <strong>9261323</strong> <br />
            E-mail <strong>qec_ku@yahoo.com</strong><br />
            Web site:<strong> www.uok.edu.pk</strong></font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><br />
            </font></p>
          </div></td>
    </tr>
  </table>
</form>
</body>
</html>
