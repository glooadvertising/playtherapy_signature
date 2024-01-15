<?php 

$staff = [
	[
		"name"				=> "kylie",
		"surname"			=> "cripps",
		"role"				=> "account management",
		"mobile"			=> "0408332823",
		"email_handler"		=> "accounts",
	],
	[
		"name"				=> "tess",
		"surname"			=> "jakupec",
		"role"				=> "business administration",
		"mobile"			=> "0408332823",
		"email_handler"		=> "administration",
	],
	
]

?>


<table width="500">
      <tbody>
        <tr>
          <td width="150">
            <a href="https://www.playtherapytas.com.au/" target="_blank"
              ><img src="https://glooadvertising.com.au/staging/signatures/playtherapy/pt-logo.png" width="150" height="83"
            /></a>
          </td>

          <td width="350">
            <p
              style="
                font-size: 13px;
                line-height: 20px;
                margin-bottom: 0px;
                margin-left: 20px;
              "
            >
              <span style="font-family: &#39;Trebuchet MS&#39;, sans-serif; color: #e9755c; font-size: 15px; padding-bottom:10px;"><b><?php echo ucwords($staff[0]['name'] . ' ' . $staff[0]['surname']); ?></b></span><br />
              <span
                style="font-family: &#39;Trebuchet MS&#39;, sans-serif; color: #e9755c; font-size: 13px; padding-bottom:13px; font-weight:300;"
                ><?php echo ucwords($staff[0]['role']); ?></span
              ><br />
              <span
                style="font-family: &#39;Trebuchet MS&#39;, sans-serif; color: #04a4ad; font-size: 13px; text-decoration: none; font-weight:300;"
                ><a
                  href="tel:<?php echo $staff[0]['mobile']; ?>"
                  style="color: #04a4ad; text-decoration: none"
                  ><?php echo '+ 61 (0) ' . wordwrap(str_replace('0', '', $staff[0]['mobile']), 3, ' ', true); ?></a
                ></span
              ><br />
              <span
                style="font-family: &#39;Trebuchet MS&#39;, sans-serif; color: #04a4ad; font-size: 13px; text-decoration: none; font-weight:300;"
                >9 St John Avenue, New Town</span
              ><br />
              <span
                style="font-family: &#39;Trebuchet MS&#39;, sans-serif; color: #04a4ad; font-size: 13px; text-decoration: none; font-weight:300;"
                >Tasmania, Australia 7015</span
              ><br />
            </p>
            <p
              style="
                font-size: 13px;
                line-height: 20px;
                margin-bottom: 0px;
                margin-left: 20px;
              "
            >
              <span
                style="font-family: &#39;Trebuchet MS&#39;, sans-serif; color: #04a4ad; font-size: 13px; text-decoration: none; font-weight:300;"
                ><a
                  href="mailto:<?php echo $staff[0]['email_handler']; ?>@playtherapytas.com.au"
                  style="color: #04a4ad; text-decoration: none"
                  ><?php echo $staff[0]['email_handler']; ?>@playtherapytas.com.au</a
                ></span
              ><br />
              <span
                style="font-family: &#39;Trebuchet MS&#39;, sans-serif; color: #04a4ad; font-size: 13px; font-weight:500;"
                ><a href="https://playtherapytas.com.au/" target="_blank" style="color: #04a4ad; text-decoration: none" >www.playtherapytas.com.au</a
                ></span
              >
            </p>
          </td>
        </tr>
      </tbody>
    </table>

    <p style="font-size: 12px; line-height: 10px">
      <span
        style="font-family: &#39;Trebuchet MS&#39;, sans-serif; color: #000; font-size: 12px; text-decoration: none; font-weight:300;"
        ><i
          >Please consider the environment before you print this email</i
        ></span
      >
    </p>
