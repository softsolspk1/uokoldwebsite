<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<script language="JavaScript" src="/include/gen_validatorv31.js" type="text/javascript"></script>

<style type="text/css">
<!--
.inputc {font-size: 8pt;}
.style12 {font-size: 12px}
.style14 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style16 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14pt;
	color: #339933;
	font-weight: bold;
}
.style23 {
	font-size: 40px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style24 {color: #000000}
.style28 {font-size: 24px}
.style29 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
.style31 {font-size: 9px; text-align:left}
.style33 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
.style35 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
.style40 {font-size: 12pt}
.style95 {color: #000000; font-size: medium; }
.style99 {font-size: x-small}
.style103 {font-size: 14px}
.style109 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style111 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
-->
</style>
<title>Bachelors &amp; Masters Open Merit Admissions - 2016</title>
</head>

<body>

<?php  

$con = mysql_connect("localhost","uok_test","Ahad~098");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 $db_selected = mysql_select_db("uok_admissions", $con);
if (!$db_selected) {
    die ('Can\'t use uok_admissions : ' . mysql_error());
}


mysql_query("INSERT INTO adm2016 (Test) VALUES ('abc')") or die(mysql_error());

$result = mysql_query("SELECT FormNo FROM adm2016 ORDER BY FormNo DESC LIMIT 0,1");

//$form = mysql_fetch_field($result) or die(mysql_error()); 
//$form = mysql_fetch_array($result, MYSQL_ASSOC) or die(mysql_error());
$form = mysql_fetch_array($result, MYSQL_ASSOC) or die(mysql_error());
/*while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("ID: %s  Name: %s", $row[0], $row[1]);
*/

//$form["FormNo"] = $result;

mysql_close($con);

  

?>


<div align="left"></div>
<form action="admbsview.php" method="post"><div align="center">
  <table width="897" height="35" border="0" align="center">
    <tr>
      <td width="609" height="20"><div align="right"><span class="style23"><span class="style28">University of Karachi</span></span></div></td>
      <td width="278" height="20"><p align="right" class="style23"><span class="style14">Bank Branch Name_________</span></p>
        </td>
    </tr>
  </table>
  <div align="right"></div>
   <div align="left">
    <table width="900" border="0">
        <tr>
          <td width="237"><span class="style33">Form # <?php echo $form["FormNo"]; ?></span></td>
          <td width="489" align="center" valign="middle"><div align="left"><span class="style4 style24 style40"><span class="style24">Bachelors &amp; Masters Open Merit Admissions - 2016</span></span></div></td>
          <td width="160" class="style14"><div align="right"></div></td>
        </tr>
        <tr>
          <td height="21" valign="top">&nbsp;</td>
          <td height="21" align="center" valign="top">&nbsp;</td>
          <td height="21" valign="top"><div align="center"><span class="style109">PROGRAM:</span><span class="style111">
              <label> </label>
              <br />
          BACHELORS / MASTERS </span></div></td>
        </tr>
    </table>
  </div>
  <div align="right">
    <table width="900" height="24" border="0">
        <tr>
          <td width="312" height="30" valign="top"><span class="style16"><strong class="style14">APPLICANT&rsquo;S  CATEGORY&nbsp; </strong>&nbsp;
              
          <label></label>
              
      K / S / P</span></td>
          <td width="413" height="30" valign="top"><div align="left"><span class="style16"><strong class="style14">Change of category:    </strong>
                 
          </span><span class="style16">
              <label></label>
          Yes / No</span></div></td>
          <td width="161" height="30" valign="top"><div align="center"><span class="style29"> Hafiz-e-Quran:</span><span class="style16">
              <label> </label>
              <span class="style12">Yes / No</span></span></div></td>
        </tr>
    </table>
  </div>
  <table width="900" border="0">
    <tr height="10">
      <td width="558" height="30" align="left" class="style14">Name of Applicant <font size="1">(as per S.S.C.)</font>: __________________________________________</td>
      <td width="332" height="30" align="left" class="style14">Father's Name: ___________________________</td>
      </tr>
  </table>
  <table width="900" border="0">
    <tr>
      <td height="30" align="left" class="style14">Address: _______________________________________________________________________________________________________</td>
      </tr>
  </table>
  <table width="900" height="24" border="0">
    <tr>
      <td width="295" height="30" align="left" class="style14">Gender: Male / Female </td>
      <td width="259" height="30" align="left" class="style14">Contact: ______________________</td>
      <td width="332" height="30" align="left" class="style14">Email: ___________________________________</td>
    </tr>
  </table>
  <table width="900" height="24" border="0">
      <tr>
        <td width="305" height="30" align="left" class="style14">NIC: _______________________________</td>
        <td width="585" height="30" align="left"  class="style14">Parent's NIC <font size="1">(incase applicant is below 18 years)</font>: ______________________________________</td>
      </tr>
  </table>
  <table width="900" height="24" border="0">
    <tr>
      <td height="30" class="style29">ACADEMIC RECORD (Pre-requisite Examinations)</td>
      </tr>
  </table>
  <table width="900" height="24" border="0">
    <tr>
      <td width="341" height="30" align="left" class="style14">Name of Exam Passed :_______________________</td>
      <td width="214" height="30" align="left" class="style14">Year of passing : ____________</td>
      <td width="331" height="30" align="left" class="style14">Roll # : __________________________________</td>
    </tr>
  </table>
  <table width="900" height="24" border="0">
    <tr>
      <td width="341" height="30" align="left" class="style14">Total Marks Obtained: ________________________</td>
      <td width="215" height="30" align="left" class="style14">Out of  : ___________________</td>
      <td width="330" height="30" align="left" class="style14">Percentage : _____________________________</td>
    </tr>
  </table>
  <table width="900" height="24" border="0">
    <tr>
      <td height="20" align="left" class="style14">Name and address of institution last attended: _________________________________________________________________________</td>
      </tr>
  </table>
  <table width="820" height="352" border="0" cellspacing="4" bgcolor="#F2F2F2">
    
    <tr>
      <td height="107" colspan="5" align="right" class="style12"><table width="826" height="105" border="1">
        <tr>
          <td><p align="center" class="style16"><strong>Degree / Certificate</strong></p></td>
          <td width="91"><p align="center" class="style16"><strong>Board</strong></p></td>
          <td width="87"><p align="center" class="style16"><strong>City</strong></p></td>
          <td width="214"><p align="center" class="style16"><strong>Optional Subjects</strong></p></td>
          <td width="114"><p align="center" class="style16"><strong>Marks Obtained</strong></p></td>
          <td width="111"><p align="center" class="style16"><strong>Out of</strong></p></td>
        </tr>
        <tr>
          <td width="169" height="21" align="left"><p class="style16">Matric (S.S.C.)</p></td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
        </tr>
        <tr>
          <td width="169" height="21" align="left"><p class="style16">Intermediate (H.S.C.) or equivalent</p></td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
        </tr>
        <tr>
          <td width="169" height="21" align="left"><p class="style16">Graduation or equivalent</p></td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
        </tr>
        <tr>
          <td width="169" height="21" align="left"><p class="style16">Other</p></td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
          <td align="left">&nbsp;</td>
        </tr>
      </table></td>
      </tr>
    <tr>
      <td height="20" colspan="5" align="right" class="style12"><div align="left" class="style14">
        <p><strong>Please mention the Department(s) as per your  preference<br />
        </strong><strong>(To be filled in by the candidate )</strong></p>
        </div></td>
      </tr>
    <tr>
      <td width="76"><div align="left" class="style95">1st Choice</div></td>
      <td width="1" class="style35">&nbsp;</td>
      <td width="314" bgcolor="#FFFFFF"><span class="style99">___________________________________________________</span></td>
      <td width="209" align="right" class="style35">&nbsp;</td>
      <td width="201" class="style35">&nbsp;</td>
    </tr>
    <tr>
      <td width="76" height="35"><div align="left" class="style95">2nd Choice</div></td>
      <td class="style35">&nbsp;</td>
      <td bgcolor="#FFFFFF"><span class="style99">___________________________________________________</span></td>
      <td align="right" class="style35">&nbsp;</td>
      <td class="style35">&nbsp;</td>
    </tr>
    <tr>
     <td width="76"><div align="left" class="style95">3rd Choice</div></td>
      <td class="style35">&nbsp;</td>
      <td bgcolor="#FFFFFF"><span class="style99">___________________________________________________</span></td>
      <td align="right" class="style35">&nbsp;</td>
      <td class="style35"><div align="center">_________________________________</div></td>
    </tr>
    <tr>
      <td width="76"><div align="left" class="style95">4th Choice</div></td>
      <td class="style35">&nbsp;</td>
      <td bgcolor="#FFFFFF"><span class="style99">___________________________________________________</span></td>
      <td align="right" class="style35">&nbsp;</td>
      <td class="style35"> <div align="center">Rs. 700/= Cash Receiving Stamp and Signature of Bank Official </div></td>
    </tr>
    <tr>
      <td width="76"><div align="left" class="style95">5th Choice</div></td>
      <td class="style35">&nbsp;</td>
      <td bgcolor="#FFFFFF"><span class="style99">___________________________________________________</span></td>
      <td align="right" class="style35">&nbsp;</td>
      <td class="style35"><div align="center"></div></td>
    </tr>
  </table>
  <table width="900" border="0">
    <tr>
      <td align="left" class="style14"><ul>
        <li>I have duly read the Admission Prospectus 2016 &amp; instructions given on the instructions page.</li>
        <li>I, the undersigned do hereby solemnly affirm that whatever has been stated above is true and correct to the best of my knowledge and  I understand that any wrong information may lead to rejection of my Admission Form. </li>
      </ul></td>
    </tr>
    <tr>
      <td height="33" valign="bottom" class="style14">Dated: _______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Applicant's Signature ______________________</td>
    </tr>
  </table>
  <table width="900" border="0">
    <tr>
      <td height="28"><div align="center">-----------------------------------------------------------------------------------------------------------------------------------------------------</div></td>
    </tr>
  </table>
  <table width="900" height="24" border="0">
    <tr>
      <td width="295" height="20" class="style14">&nbsp;</td>
      <td width="259" align="center" valign="middle" class="style33">University of Karachi<br /></td>
      <td width="332" class="style14">&nbsp;</td>
    </tr>
  </table>
  <table width="900" height="24" border="0">
    <tr>
      <td width="295" height="20" valign="top" class="style14">Form#<span class="style33"> <?php echo $form["FormNo"]; ?></span></td>
      <td width="259" align="center" valign="top" class="style14"><strong>Bachelors &amp; Masters Open Merit  Admissions-2016</strong><br /></td>
      <td width="332" valign="top" class="style14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form# <span class="style33"><?php echo $form["FormNo"]; ?></span></td>
    </tr>
  </table>
  <table width="900" height="28" border="0">
    <tr>
      <td width="445" height="24" align="center" valign="middle" class="style12"><div align="left">(To be filled in by the candidate)</div></td>
      <td width="445" align="left" valign="top" class="style16"><strong>CHECKLIST</strong><span class="style103">(<strong class="style29">Attach  powder copies of the following documents)</strong></span></td>
    </tr>
</table>
  <table width="900" border="0">
    <tr>
      <td width="445" height="98" align="left" valign="top" class="style35"><div align="center">
        <p><br />
          Name ___________________________________________________________________<br />
              <br />
              <br />
              <br />
              <br />
&nbsp; &nbsp;____________________________________<br />
&nbsp;&nbsp; Bank official's seal and signature </p>
        </div></td>
      <td width="445" align="left" class="style14"><ul>
          <li class="style31">Original  along with one copy of filled-in form</li>
          <li class="style31">Two  copies of Mark sheets of 1st and 2nd year of Pre-requisite examination</li>
          <li class="style31">One  copy of the Admit Card of 1st and 2nd year of Pre-requisite examination</li>
          <li class="style31">One  copy of Matric Mark sheet or Matric Certificate</li>
          <li class="style31">One copy of Intermediate Marksheet or Intermediate Certificate (In-case of applying for Masters Program) </li>
          <li class="style31">One  copy of Hafiz-e-Quran Certificate (Only for Bachelor's Program) </li>
          <li class="style31">Equivalence certificate (if required)</li>
          <li class="style31">&nbsp;Others (specify ____________________________ )</li>
        </ul></td>
    </tr>
  </table>
  <table width="100%" border="0" >
    <tbody>
    </tbody>
    <input name="form" value="pharmd" type="hidden" />
    <input name="step" value="2" type="hidden" />
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="89%"><input name="Button" type="button" value="Print"  onclick="window.print()"/>
        <span class="style103">      Note: This downloaded form alongwith Cash Rs. 700/= can be submitted at the designated branches of UBL</span> </td>
    </tr>
  </table>
  </div>
</form>
</body>
</html>