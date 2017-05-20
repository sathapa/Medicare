




<html>
<head>
</head>
<body style="background-color:#94D6E7">
<?php /*?><table>
<tr>
	<td style="float:right; text-align:right;">
    	<a href="insertlab.php" >Insert New Lab Charge</a>
    </td>
</tr>
</table><?php */?>
<div class="dr_container" >

    <form action="#" method="post">
        <table align="center" width="100%">
            <tr>
                <td colspan="5">
                    <?php echo $info ; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Select Category:
                </td>
                <td>
                    <select id="sel" name="sel">
                        <option>Patient ID</option>
                        <option>First Name</option>
                        <option>Last Name</option>
                        <option>OPd ID</option>
                    </select>
                </td>
                <td>
                    Data:
                </td>
                <td>
                    <input type="text" id="data" name="data" />
                </td>
                <td>
                    <input type="submit" id="selectt" name="selectt" value="Search" />
                </td>
            </tr>
        </table>
    </form>
    <table border="1" align="center" width="100%">
        <tr>
            <th> Patient ID</th>
            <th> First Name</th>
            <th>Last Name </th>
            <th>Date Of Birth </th>
            <th>OPd ID </th>


        </tr>
        <?php

        while ($da = sqlFetchArray($res)) {
            ?>
            <form action="viewbill.php" method="post">
                <tr>
                    <td><?php echo $da['id']  ?><input type="hidden" id="pid" name="pid" value="<?php echo $da['id']  ?>"/> </td>
                    <td>  <?php echo $da['fname']  ?>  <input type="hidden" id="fname" name="fname" value="<?php echo $da['fname']  ?>"/></td>
                    <td>  <?php echo $da['lname']  ?>  <input type="hidden" id="lname" name="lname" value="<?php echo $da['lname']  ?>"/></td>
                    <td>  <?php echo $da['DOB']  ?>  <input type="hidden" id="DOB" name="DOB" value="<?php echo $da['DOB']  ?>"/></td>
                    <td>  <?php echo $da['pubpid']  ?>  <input type="hidden" id="pubpid" name="pubpid" value="<?php echo $da['pubpid']  ?>"/></td>


                    <td colspan=""><input type="submit" id="upload" name='upload' value="Pay Bill" /> </td>
                </tr>
            </form>
        <?php

        }

        ?>
    </table>
</div>
</body>
</html>
<?php

?>
  