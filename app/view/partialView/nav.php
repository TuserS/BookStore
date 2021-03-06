

    <td bgcolor="WhiteSmoke" width="20%">
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="4" face="Consolas" color="SLATEBLUE"><b>Account</b></font>
        <hr width="80%">
        <ul>
            <li><a href="../mainView/dashboard.php"><font color="LightSlateGray">Dashboard</font></a></li>
            <li><a href="../mainView/viewProfile.php"><font color="LightSlateGray">View Profile</font></a></li>
            <li><a href="../mainView/editProfile.php"><font color="LightSlateGray">Edit Profile</font></a></li>
            <li><a href="../mainView/changeProfilePicture.php"><font color="LightSlateGray">Change Profile Picture</font></a></li>
            <li><a href="../mainView/changePassword.php"><font color="LightSlateGray">Change Password</font></a></li>
        </ul>


        <?php if (isset($_SESSION['useraccount']['role']) && !empty($_SESSION['useraccount']['role'] == "Admin")): ?>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="4" face="Consolas" color="SLATEBLUE"><b>Administration</b></font>
            <hr width="80%">
            <ul>
                <li><a href="../mainView/createAdmin.php"><font color="LightSlateGray">Create Admin</font></a></li>
                <li><a href="../mainView/createBook.php"><font color="LightSlateGray">Create Book</font></a></li>
                <li><a href="../mainView/acceptUsedBook.php"><font color="LightSlateGray">Accept Used Book</font></a></li>
                <li><a href="../mainView/acceptDonation.php"><font color="LightSlateGray">Accept Donation</font></a></li>
                <li><a href="../mainView/createCategory.php"><font color="LightSlateGray">Create Category</font></a></li>
                <li><a href="../mainView/createAuthor.php"><font color="LightSlateGray">Create Author</font></a></li>
                <li><a href="../mainView/createPublication.php"><font color="LightSlateGray">Create Publication</font></a></li>
                <li><a href="../mainView/blockUser.php"><font color="LightSlateGray">block User</font></a></li>
            </ul>
        <?php endif; ?>

        <?php if (isset($_SESSION['useraccount']['role']) && !empty($_SESSION['useraccount']['role'] == "User")): ?>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="4" face="Consolas" color="SLATEBLUE"><b>Opportunity</b></font>
            <hr width="80%">
            <ul>
                <li><a href="../mainView/sellUsedBook.php"><font color="LightSlateGray">Sell Used Book</font></a></li>
            </ul>
        <?php endif; ?>

        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="4" face="Consolas" color="SLATEBLUE"><b>Report</b></font>
        <hr width="80%">
        <ul>
            <?php if (isset($_SESSION['useraccount']['role']) && !empty($_SESSION['useraccount']['role'] == "Admin")): ?>
                <li><a href="../mainView/statistics.php"><font color="LightSlateGray">Statistics</font></a></li>
                <li><a href="../mainView/topSoldPlace.php"><font color="LightSlateGray">Top Sold Place</font></a></li>
                <li><a href="../mainView/topBuyer.php"><font color="LightSlateGray">Top Buyer</font></a></li>
            <?php endif; ?>
            <?php if (isset($_SESSION['now']['role']) && !empty($_SESSION['now']['role'] == "User")): ?>
                <li><a href="../mainView/last5orders.php"><font color="LightSlateGray">Last 5 Orders</font></a></li>
                <li><a href="../mainView/userDonateBooks.php"><font color="LightSlateGray">Donated Books</font></a></li>
            <?php endif; ?>

            <li><a href="../mainView/topDonor.php"><font color="LightSlateGray">Top Donor</font></a></li>
        </ul>

        <br>
    </td>
    <td></td>
